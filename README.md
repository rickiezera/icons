# Icons 🎨

<a href="https://github.com/rickiezera/icons/actions?query=workflow%3ATests">
    <img src="https://github.com/rickiezera/icons/actions/workflows/tests.yml/badge.svg?branch=main" alt="Tests">
</a>
<a href="https://packagist.org/packages/rickiezera/icons">
    <img src="https://img.shields.io/packagist/v/rickiezera/icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/rickiezera/icons">
    <img src="https://img.shields.io/packagist/dt/rickiezera/icons" alt="Total Downloads">
</a>

A simple package to easily use **custom Blade Icons** in your Laravel views.  
All icons are preconfigured and ready to use.

For a full list of available icons, check the [SVG directory](resources/svg).

---

## Requirements

- PHP 8.0 or higher  
- Laravel 8.0 or higher  

---

## Installation

```bash
composer require rickiezera/icons
```

## Blade Icons

Blade LucideIcons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

If you want to customize the SVGs, publish them to your project:

```bash
php artisan vendor:publish --tag=icons
```

They will be available in:

```bash
resources/vendor/icons/svg
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-icons-user />
```

You can also pass classes to your icon components:

```blade
<x-icons-album class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-icons-anchor style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-icons-user />
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-lucide-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-lucide-icons/cloud-moon.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.