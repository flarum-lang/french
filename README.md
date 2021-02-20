# French Language Pack for [Flarum](https://flarum.org/)

[![StyleCI](https://styleci.io/repos/70081209/shield?style=flat&branch=master)](https://styleci.io/repos/70081209)

French language pack to localize the Flarum forum software, its bundled extensions and libraries.

## Informations

Includes the following French locales compatible with:

- [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/core/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/core/fr/)
[Flarum 0.1.0 Beta 15](https://github.com/flarum/core)
  - Bundled extensions:
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-akismet/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-akismet/fr/)
    [Akismet](https://github.com/flarum/akismet)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-approval/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-approval/fr/)
    [Approval](https://github.com/flarum/approval)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-emoji/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-emoji/fr/)
    [Emoji](https://github.com/flarum/emoji)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-flags/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-flags/fr/)
    [Flags](https://github.com/flarum/flags)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-likes/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-likes/fr/)
    [Likes](https://github.com/flarum/likes)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-lock/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-lock/fr/)
    [Lock](https://github.com/flarum/lock)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-markdown/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-markdown/fr/)
    [Markdown](https://github.com/flarum/markdown)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-mentions/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-mentions/fr/)
    [Mentions](https://github.com/flarum/mentions)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-nicknames/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-nicknames/fr/)
    [Nicknames](https://github.com/flarum/nicknames)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-pusher/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-pusher/fr/)
    [Pusher](https://github.com/flarum/pusher)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-statistics/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-statistics/fr/)
    [Statistics](https://github.com/flarum/statistics)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-sticky/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-sticky/fr/)
    [Sticky](https://github.com/flarum/sticky)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-subscriptions/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-subscriptions/fr/)
    [Subscriptions](https://github.com/flarum/subscriptions)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-suspend/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-suspend/fr/)
    [Suspend](https://github.com/flarum/suspend)
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/flarum-tags/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/flarum-tags/fr/)
    [Tags](https://github.com/flarum/tags)
  - Bundled libraries:
    - [![Weblate](https://weblate.rob006.net/widgets/flarum/fr/validation/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/validation/fr/)
    [Laravel's Validation Rules](https://github.com/laravel/laravel)
    - [Day.js](https://github.com/iamkun/dayjs)

Released under the MIT license. Please see [the license terms](https://github.com/qiaeru/lang-french/blob/master/LICENSE).

## Installation

Flarum use Composer to manage its dependencies and extensions. The French language pack is available [on Packagist](https://packagist.org/packages/qiaeru/lang-french) and can be managed that way. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```shell
composer require qiaeru/lang-french
```

## Updating

Just like the installation procedure, make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following commands in the location where Flarum is installed:

```shell
composer update qiaeru/lang-french
php flarum cache:clear
```

## Contribution and status page

This project uses a [Weblate](https://weblate.org/) instance hosted and managed by [Robert Korulczyk](https://github.com/rob006).

You can contribute to the language pack [on this page](https://weblate.rob006.net/languages/fr/flarum/) and see the detailed translation status [on this page](https://github.com/rob006-software/flarum-translations/blob/master/status/fr.md).  
