import getFocusableElements from './get-focusable-elements.js';

/**
 * Responsive navigation without media queries.
 * 
 * Props to https://piccalil.li/tutorial/build-a-fully-responsive-progressively-enhanced-burger-menu/.
 */
 class BurgerMenu extends HTMLElement {
	constructor() {
		super();

		const self = this;

		this.state = new Proxy(
			{
				status: 'open',
				enabled: false
			},
			{
				set(state, key, value) {
					const oldValue = state[key];

					state[key] = value;
					if (oldValue !== value) {
						self.processStateChange();
					}

					return state;
				}
			}
		);
	}

	get maxWidth() {
		return parseInt(this.getAttribute('max-width') || 9999, 10);
	}

	connectedCallback() {
		this.render();

		const observer = new ResizeObserver(observedItems => {
			const {contentRect} = observedItems[0];
			this.state.enabled = contentRect.width <= this.maxWidth;
		});

		observer.observe(this.parentNode.parentNode);
	}

	render() {
		this.postRender();
	}

	postRender() {
		this.trigger = document.querySelector('.wp-block-navigation__responsive-container-open');
		this.trigger.setAttribute('modal-trigger', 'burger-toggle');

		this.panel = document.querySelector('.wp-block-navigation__responsive-container');
		this.root = document.querySelector('[data-element="burger-menu"]');
		this.view = document.documentElement;
		this.focusableElements = getFocusableElements(this);

		if (this.trigger && this.panel) {
			this.toggle();

			this.trigger.addEventListener('click', evt => {
				evt.preventDefault();

				this.toggle();
			});

			document.addEventListener('focusin', () => {
				if (!this.contains(document.activeElement)) {
					this.toggle('closed');
				}
			});

			return;
		}
	}

	toggle(forcedStatus) {
		if (forcedStatus) {
			if (this.state.status === forcedStatus) {
				return;
			}

			this.state.status = forcedStatus;
		} else {
			this.state.status = this.state.status === 'closed' ? 'open' : 'closed';
		}
	}

	processStateChange() {
		this.root.setAttribute('status', this.state.status);
		this.root.setAttribute('enabled', this.state.enabled ? 'true' : 'false');

		this.manageFocus();

		switch (this.state.status) {
			case 'closed':
				this.trigger.setAttribute('aria-expanded', 'false');
				this.trigger.setAttribute('aria-label', 'Open menu');
				this.panel.setAttribute('aria-hidden', 'true');
				this.view.classList.remove('has-scroll-lock');				
				break;
			case 'open':
			case 'initial':
				this.trigger.setAttribute('aria-expanded', 'true');
				this.trigger.setAttribute('aria-label', 'Close menu')
				this.panel.setAttribute('aria-hidden', 'false');
				this.view.classList.add('has-scroll-lock');
				break;
		}
	}

	manageFocus() {
		if (!this.state.enabled) {
			this.focusableElements.forEach(element => element.removeAttribute('tabindex'));
			return;
		}

		switch (this.state.status) {
			case 'open':
				this.focusableElements.forEach(element => element.removeAttribute('tabindex'));
				break;
			case 'closed':
				[...this.focusableElements]
					.filter(
						element => element.getAttribute('modal-trigger') !== 'burger-toggle'
					)
					.forEach(element => element.setAttribute('tabindex', '-1'));
				break;
		}
	}
}

if ('customElements' in window) {
	/*
	* Add the burger markup.
	*
	* This is drawn with JS here rather than writing markup in render() due to burger
	* elements being children of the Navigation block.
	*/
	const parent = document.querySelector('.wp-block-navigation');
	const burgerMenu = document.createElement('burger-menu');

	// WP's logic: a null value means a burger toggle will display for narrow screens.
	if (null === maisieBurgerMenu.overlay) {
		// Get the breakpoint for showing the burger menu.
		const globalStyles = document.getElementById('global-styles-inline-css');
		const breakpoint = getComputedStyle(globalStyles).getPropertyValue('--wp--custom--navigation--burger--breakpoint');

		if (globalStyles && breakpoint) {
			burgerMenu.setAttribute('max-width', breakpoint);
		} else {
			burgerMenu.setAttribute('max-width', '1000');	
		}
	}
	
	const burgerToggle = document.createElement('button');
	burgerToggle.setAttribute('aria-expanded', 'false');
	burgerToggle.setAttribute('aria-haspopup', 'true');
	burgerToggle.setAttribute('aria-label', 'Open menu');
	burgerToggle.setAttribute('tab-index', '-1');
	burgerToggle.classList.add('wp-block-navigation__responsive-container-open');

	const childWrapper = document.createElement('div');
	childWrapper.setAttribute('data-element', 'burger-menu');
	
	let children = parent.childNodes;
	children = Array.from(children);

	children.forEach((child) => {
		childWrapper.appendChild(child)
	});

	childWrapper.prepend(burgerToggle);
	burgerMenu.appendChild(childWrapper);
	parent.appendChild(burgerMenu);

	customElements.define('burger-menu', BurgerMenu);
}

export default BurgerMenu;