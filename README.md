# PSPDFKit for Web Example – Laravel

This example shows how to integrate [PSPDFKit for Web](https://pspdfkit.com/web/) into a [Laravel](https://laravel.com/) app.

## Prerequisites

-   PHP
-   [Composer](https://getcomposer.org/download/)
-   [Laravel Installer](https://laravel.com/docs/8.x#the-laravel-installer)

You can install PHP via [XAMPP](https://www.mamp.info/en/mac/), [MAMP](https://www.apachefriends.org/index.html) or [Homebrew](https://formulae.brew.sh/formula/php).

## Support, Issues and License Questions

PSPDFKit offers support for customers with an active SDK license via https://pspdfkit.com/support/request/

Are you [evaluating our SDK](https://pspdfkit.com/try/)? That's great, we're happy to help out! To make sure this is fast, please use a work email and have someone from your company fill out our sales form: https://pspdfkit.com/sales/

## Getting Started

1. Clone the repo:

```bash
git clone https://github.com/PSPDFKit/pspdfkit-web-example-laravel.git

cd pspdfkit-web-example-laravel
```

2. Run `composer install` on your terminal.

3. Copy `.env.example` file to `.env` on the root folder.

-   For Windows, type `copy .env.example .env`
-   For Ubuntu, type `cp .env.example .env`

4. Generate your application encryption key using `php artisan key:generate`.

5. Install PSPDFKit as a dependency:

```bash
npm install
```

6. Run `npm run dev` to copy the PSPDFKit artifacts to your `public/assets/pspdfkit/` folder.

Make sure your `/public/assets/pspdfkit/` folder contains the file `pspdfkit.js` and a `pspdfkit-lib` directory with library assets.

## Running the Example

We are ready to launch the app! 🎉

```bash
php artisan serve
```

You can now open http://localhost:8000/ in your browser and enjoy!

## License

This software is licensed under a [modified BSD license](LICENSE).

## Contributing

Please ensure
[you have signed our CLA](https://pspdfkit.com/guides/web/current/miscellaneous/contributing/) so that we can accept your contributions.
