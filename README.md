# French Language Pack for [Flarum](https://flarum.org/)

[![Build Status](https://travis-ci.org/milescellar/flarum-ext-french.svg?branch=master)](https://travis-ci.org/milescellar/flarum-ext-french) [![StyleCI](https://styleci.io/repos/70081209/shield?style=flat&branch=master)](https://styleci.io/repos/70081209)

French language pack to localize the Flarum forum software, its bundled extensions and libraries.

## Informations

Includes the following French locales compatible with:

- [Flarum 0.1.0 Beta 7.1](https://github.com/flarum/core)
  - Bundled extensions:
    - [Akismet 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-akismet)
    - [Approval 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-approval)
    - [Facebook Login 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-auth-facebook)
    - [Flags 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-flags)
    - [GitHub Login 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-auth-github)
    - [Likes 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-likes)
    - [Lock 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-lock)
    - [Mentions 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-mentions)
    - [Pusher 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-pusher)
    - [Statistics](https://github.com/flarum/flarum-ext-statistics)
    - [Sticky 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-sticky)
    - [Subscriptions 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-subscriptions)
    - [Suspend 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-suspend)
    - [Tags 0.1.0 Beta 7](https://github.com/flarum/flarum-ext-tags)
    - [Twitter Login 0.1.0 Beta 6](https://github.com/flarum/flarum-ext-auth-twitter)
  - Bundled libraries:
    - [Laravel's Validation Rules 5.6.12](https://github.com/laravel/laravel)
    - [Moment.js 2.22.2](https://github.com/moment/moment)

Released under the MIT license. Please see [the license terms](https://github.com/milescellar/flarum-ext-french/blob/master/LICENSE).

## Installation

Flarum use Composer to manage its dependencies and extensions. The French language pack is available [on Packagist](https://packagist.org/packages/milescellar/flarum-ext-french) and can be managed that way. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```shell
composer require milescellar/flarum-ext-french
```

The same command can be used to update independently the French language pack, without updating anything else. Note that because the French language pack will be added as a Flarum's dependency, it will also be automatically updated when updating Flarum and its dependencies via Composer.
