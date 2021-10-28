# Subscribe Plugin

The plugin creates a simple subscription form and store subscribers into database

## Installation
Clone via Git and then run:
```bash
composer install
```

## Requirements

Make sure all dependencies have been installed before moving on:

- WordPress
- PHP >= 7.2
- Composer >= 2.1.9
- Node.js >= 16.13.0
- npm >= 8.1.0


## Structure

```
plugins/your-plugin-name/           # → Root of your plugin.
├── .github/                        # → GitHub additional directories.
│   └── workflows/                  # → Workflows.
│       └── ci.yml                  # → Actions for GitHub.
├── assets/                         # → Assets directory.
│   ├── build/                      # → Assets build directory.
│   └── src/                        # → Assets source directory.
├── node_modules/                   # → JS packages (never edit).
├── src/                            # → PHP directory. 
├── templates/                      # → Templates for plugin views.
├── vendor/                         # → Composer packages (never edit).
├── .eslintignore                   # → JS Coding Standards ignore file.
├── .eslintrc.js                    # → JS Coding Standards config.
├── .gitignore                      # → Git ignore file.
├── .phpcs.xml                      # → Custom PHP Coding Standards.
├── .stylelintrc                    # → Config for the style linter.
├── composer.json                   # → Composer dependencies and scripts.
├── composer.lock                   # → Composer lock file (never edit).
├── LICENSE                         # → License file.
├── package.json                    # → JS dependencies and scripts.
├── package-lock.json               # → Package lock file (never edit).
├── README.md                       # → Readme MD for GitHub repository.
├── subscribe.php                   # → Bootstrap plugin file.
├── webpack.mix.js                  # → Laravel Mix configuration file.
```

## Coding Standards

To check all coding standards:
```
npm run cs
```

### PHP Coding Standard

We use a custom coding standard based on [WordPress Coding Standard](https://github.com/WordPress/WordPress-Coding-Standards). 
Custom PHPCS your can find in the `.phpcs.xml`.

Your can check PHPCS using a CLI:
```
composer cs
```
or
```
npm run cs:php
``` 

PHP Coding Standard checked before each commit, before the push, and in GH Actions.

### JS Coding Standard

We use a default WordPress JSCS, but you can modify it in the `.eslintrc` file.

You can check it using a CLI:

```
npm run cs:js
```

### SCSS Coding Standard

We use a default standards for SCSS, but you can modify it in the `.stylelintrc` file.

You can check it using a CLI:

```
npm run cs:scss
```

## Frontend

All assets are located in `assets/src/*`.

All builds are located in `assets/build/*`.

CSS preprocessor is SCSS.

We use [Laravel Mix](https://laravel-mix.com/) for the assets build. You can modify it in `webpack.mix.js` file.

For run Laravel mix you can use the next commands depend on situation:
```
npm run build
npm run start
```

## GitHub

### GH Actions
All steps for GH Actions you can find in `.github/workflows/ci.yml` file. 
