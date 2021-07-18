![Logo](https://www.qiaeru.com/files/flarum-french-language-pack.png)

# French Language Pack for [Flarum](https://flarum.org/)

[![Weblate](https://weblate.rob006.net/widgets/flarum/fr/svg-badge.svg)](https://weblate.rob006.net/languages/fr/flarum/)

French language pack to localize the Flarum forum software plus its official and third-party extensions.

## Installation

Flarum use Composer to manage its dependencies and extensions. The French language pack is available [on Packagist](https://packagist.org/packages/flarum-lang/french) and can be managed that way. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```bash
composer require flarum-lang/french
```

## Updating

Just like the installation procedure, make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following commands in the location where Flarum is installed:

```bash
composer update flarum-lang/french
php flarum cache:clear
```

## Contributing

This project uses a [Weblate](https://weblate.org/) instance hosted and managed by [rob006](https://github.com/rob006).

**You can help us very easily to improve our translation [on this page](https://weblate.rob006.net/engage/flarum/fr/) where you can contribute without any specific knowledge (no code editing, everything is visual). Thanks, we are looking for your contributions!**

## Features

Includes the following French locales compatible with:

### Flarum's core

| Component | Status |
| --- | --- |
| [Core](https://github.com/flarum/core) | [![Translation status](https://weblate.rob006.net/widgets/flarum/fr/core/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/core/fr/) |
| Validation | [![Translation status](https://weblate.rob006.net/widgets/flarum/fr/validation/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/validation/fr/) |

### Extensions

<!-- all-extensions-list-start -->
<!-- all-extensions-list-stop -->

## License

The language pack is released under the MIT license. Please see [the license terms](https://github.com/flarum-lang/french/blob/master/LICENSE).
