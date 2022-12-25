[![Latest Stable Version](http://poser.pugx.org/dd4you/pwa/v)](https://packagist.org/packages/dd4you/pwa)
[![Daily Downloads](http://poser.pugx.org/dd4you/pwa/d/daily)](https://packagist.org/packages/dd4you/pwa)
[![Monthly Downloads](http://poser.pugx.org/dd4you/pwa/d/monthly)](https://packagist.org/packages/dd4you/pwa)
[![Total Downloads](http://poser.pugx.org/dd4you/pwa/downloads)](https://packagist.org/packages/dd4you/pwa)
[![License](http://poser.pugx.org/dd4you/pwa/license)](https://packagist.org/packages/dd4you/pwa)
[![PHP Version Require](http://poser.pugx.org/dd4you/pwa/require/php)](https://packagist.org/packages/dd4you/pwa)

# Laravel PWA

## Installation

Install the package by the following command,

     composer require dd4you/pwa

## Publish the Assets

Run the following command to publish config file,

    php artisan dd4you:install-pwa

## Configure PWA

Add following code in root blade file in header section.

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

Add following code in root blade file in before close the body.

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

### License

The MIT License (MIT). Please see [License](LICENSE.md) File for more information
