/**
 * Navigation: manage sub-menu button functionality.
 * 
 * @todo. Load if navigation-submenu block is present.
 */
( () => {
	const submenus = document.querySelectorAll('.wp-block-navigation-submenu');
	const submenuToggles = document.querySelectorAll('.wp-block-navigation-submenu__toggle');

	function toggleVisibility(e) {
		e.preventDefault;

		const isActive = e.target;
		const isState = 'true' === isActive.getAttribute('aria-expanded') || false;

		// Close other active toggles.
		submenuToggles.forEach((toggle) => {
			if (isActive !== toggle) {
				closeToggle(toggle);
			}
		});

		// Set the active toggle visibility.
		isActive.setAttribute('aria-expanded', ! isState);

		// Close all if click is outside container.
		document.addEventListener('click', e => {
			if (! e.target.closest('.wp-block-navigation-submenu')) {
				submenuToggles.forEach((toggle) => {
					closeToggle(toggle);
				});
			}
		});

		// Close all if focus is outside container.
		submenus.forEach((menu) => {
			menu.addEventListener('focusout', e => {
				if (! menu.contains(e.relatedTarget)) {
					submenuToggles.forEach((toggle) => {
						closeToggle(toggle);
					});
				}
			});
		});
	}

	function closeToggle(toggle) {
		toggle.setAttribute('aria-expanded', false);
	}

	submenuToggles.forEach((toggle) => {
		toggle.addEventListener( 'click', toggleVisibility );
	});
} )();

/**
 * Prevent submenu overflowing viewport.
 * 
 * Flips opening direction of submenu when overflow detected.
 * 
 * Resize & debounce via https://www.joshwcomeau.com/snippets/javascript/debounce/
 */
 ( () => {
	const debounce = (callback, wait) => {
		let timeoutId = null;
		return (...args) => {
		  window.clearTimeout(timeoutId);
		  timeoutId = window.setTimeout(() => {
			callback.apply(null, args);
		  }, wait);
		};
	  }

	const handleResize = debounce((ev) => {
		setSubmenuOrientation();
	}, 250);

	function setSubmenuOrientation() {
		const viewport = document.body.clientWidth;
		const submenus = document.querySelectorAll('.wp-block-navigation__submenu-container');	
	
		submenus.forEach((menu) => {
			menuBoundary = menu.getBoundingClientRect().right;
			
			if (menuBoundary > viewport) {
				menu.classList.add('has-reverse-direction');
			}
		});	
	}

	window.addEventListener('load', setSubmenuOrientation);
	window.addEventListener('resize', handleResize);
} )();

/**
 * Sidebar template: left sidebar.
 * 
 * Manage element order when sidebar is stacked.
 */
( () => {
	const isSidebarLeft = document.querySelector('.has-sidebar--left') !== null;

	if (isSidebarLeft) {
		const isContent = document.querySelector('.post-content');

		const ro = new ResizeObserver(changes => {
			for (let change of changes) {
				const contentWidth = change.contentRect.width;
				const templateWidth = document.querySelector('.has-sidebar--left').clientWidth;

				let ratio = contentWidth / templateWidth * 100;

				if (ratio > 99) {
					change.target.style.order = '0';
				} else {
					change.target.style.order = '1';
				}
			}
		});

		ro.observe(document.querySelector('.post-content'));
	}
} )();