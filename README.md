# Maisie
Contributors: Daniel Shaw  
Requires at least: 5.9  
Tested up to: 5.9  
Requires PHP: 7.0  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

__Description__  
A theme built for the block editor launched in WordPress 5.9.

Maisie is an experiment to help understand if it is feasible to maintain a theme that has opted out of WordPress’ bundled styles.

__Requirements__

* 5.9 is the minimum WordPress release supported. This is the first release to support the "full site editing" approach.
* The [Gutenberg](https://wordpress.org/plugins/gutenberg/) plugin is not required and is not supported&mdash;development is aligned to WordPress releases.

__Features__

* an emphasis on [intrinsic responsiveness](https://every-layout.dev/rudiments/composition/#intrinsically-responsive)
* a general focus on accessibility and performance

## Setup

Clone this repository to the `themes` folder of a WordPress install.

__Install packages__

* `npm install`

__Run__

* Development: `npm run dev`
* Production: `npm run build`

__Success?__ Look for a `dist` folder in the theme root. If it isn't present, something has gone wrong.

## Linting

WordPress has some [coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/).

__PHP__

See [PHP CodeSniffer and WordPress Coding Standards with VS Code](https://github.com/tommcfarlin/phpcs-wpcs-vscode) to configure PHPCS with the WPCS ruleset in Visual Studio Code.

Note: Step 3 can be achieved by running `composer install`.

__CSS & JS__

`@wordpress/eslint-plugin` and `@wordpress/stylelint-config` packages are included in `package.json`.

More information:

* [WordPress ESLint](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-eslint-plugin/)
* [WordPress stylelint](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-stylelint-config/)

## Roadmap

__Production readiness:__ The next major release of WordPress is the constant target, however unlikely. Which release will this actually be? Impossible to say, and the approach *Maisie* takes may never be suitable for a serious website.

__Design collaboration:__ I’m not a designer and have no design process to speak of. A constant decision-making battle between coder- and visual-presentation brains tends to drain a little energy from the project. *Maisie* can benefit greatly from someone with typographical and general design expertise lending an eye.

__Reduce theme CSS:__ The long-term aim is to no longer require custom styles at all to achieve *Maisie*‘s goals. A promising sign is ~20% of the theme’s CSS has already been dropped since theme development began, made possible due to increased sensitivity around real-world layout requirements by the Gutenberg project.

__Remove custom “burger”:__ The Navigation block solution for exposing a menu on narrower screens suffered from critical bugs for the duration of *Maisie*‘s development. As a work-around to allow development to continue, an alternate approach has been implemented. This will be reviewed when development churn around the Navigation block begins to settle down.

__Remove custom layout:__ The editor does not include support for CSS Grid-based layouts—yet. *Maisie* explores a bare-bones approach for this, integrated with the editor’s layout tools.

__WooCommerce support:__ *Maisie* doesn’t currently provide native support for WooCommerce for a couple of reasons: to prevent bloating the theme for anyone who doesn’t need an e-commerce solution as part of their website, and because WooCommerce support for the modern editor is not great right now. If support for WooCommerce happens it will be via a stand-alone plugin.
