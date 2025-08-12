# Digital Software Labs Tailwind Theme

Custom WordPress theme cloning `digitalsoftwarelabs.com` using TailwindCSS.

## Requirements
- WordPress >= 6.3
- PHP >= 8.0
- Node.js >= 18 (for building Tailwind)

## Install
1. Zip the theme folder or copy `wp-dsl-theme` into `wp-content/themes/dsl-tailwind`.
2. Activate the theme in WordPress.
3. Set a static front page if required and assign menus to `Primary` and `Footer` locations.

## Build CSS
```bash
npm install
npm run build:css
# or watch during development
npm run dev:css
```

## Contact Form
Use Contact Form 7 (recommended). Add your form shortcode to the Contact page.

## Demo Content
A `demo.xml` (WXR) file will be provided to import via Tools → Import → WordPress.

## Notes
- Tailwind is configured to scan PHP templates.
- Main stylesheet output: `assets/css/main.css`.
- Main script: `assets/js/main.js`.