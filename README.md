# French Language Pack for [Flarum](https://flarum.org/)

[![Build Status](https://travis-ci.org/milescellar/lang-french.svg?branch=master)](https://travis-ci.org/milescellar/lang-french) [![StyleCI](https://styleci.io/repos/70081209/shield?style=flat&branch=master)](https://styleci.io/repos/70081209)

French language pack to localize the Flarum forum software, its bundled extensions and libraries.

If you're looking for French translations of third-party extensions for Flarum, please check [this repository](https://github.com/rooaaar/lang-french-extended).

## Informations

Includes the following French locales compatible with:

- [Flarum 0.1.0 Beta 13](https://github.com/flarum/core)
  - Bundled extensions:
    - [Akismet](https://github.com/flarum/akismet)
    - [Approval](https://github.com/flarum/approval)
    - [Emoji](https://github.com/flarum/emoji)
    - [Facebook Login](https://github.com/flarum/auth-facebook)
    - [Flags](https://github.com/flarum/flags)
    - [GitHub Login](https://github.com/flarum/auth-github)
    - [Likes](https://github.com/flarum/likes)
    - [Lock](https://github.com/flarum/lock)
    - [Markdown](https://github.com/flarum/markdown)
    - [Mentions](https://github.com/flarum/mentions)
    - [Pusher](https://github.com/flarum/pusher)
    - [Statistics](https://github.com/flarum/statistics)
    - [Sticky](https://github.com/flarum/sticky)
    - [Subscriptions](https://github.com/flarum/subscriptions)
    - [Suspend](https://github.com/flarum/suspend)
    - [Tags](https://github.com/flarum/tags)
    - [Twitter Login](https://github.com/flarum/auth-twitter)
  - Bundled libraries:
    - [Laravel's Validation Rules 5.8.35](https://github.com/laravel/laravel)
    - [Moment.js 2.25.1](https://github.com/moment/moment)

Released under the MIT license. Please see [the license terms](https://github.com/milescellar/lang-french/blob/master/LICENSE).

## Installation

Flarum use Composer to manage its dependencies and extensions. The French language pack is available [on Packagist](https://packagist.org/packages/milescellar/lang-french) and can be managed that way. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```shell
composer require milescellar/lang-french
```

The same command can be used to update independently the French language pack, without updating anything else. Note that because the French language pack will be added as a Flarum's dependency, it will also be automatically updated when updating Flarum and its dependencies via Composer.
