# French Language Pack for [Flarum](https://flarum.org/)

[![Build Status](https://travis-ci.org/milescellar/lang-french.svg?branch=master)](https://travis-ci.org/milescellar/lang-french) [![StyleCI](https://styleci.io/repos/70081209/shield?style=flat&branch=master)](https://styleci.io/repos/70081209)

French language pack to localize the Flarum forum software, its bundled extensions and libraries.

## Informations

Includes the following French locales compatible with:

- [Flarum 0.1.0 Beta 8.1](https://github.com/flarum/core)
  - Bundled extensions:
    - [Akismet 0.1.0 Beta 8](https://github.com/flarum/akismet)
    - [Approval 0.1.0 Beta 8](https://github.com/flarum/approval)
    - [Emoji 0.1.0 Beta 8](https://github.com/flarum/emoji)
    - [Facebook Login 0.1.0 Beta 8](https://github.com/flarum/auth-facebook)
    - [Flags 0.1.0 Beta 8.1](https://github.com/flarum/flags)
    - [GitHub Login 0.1.0 Beta 8](https://github.com/flarum/auth-github)
    - [Likes 0.1.0 Beta 8.1](https://github.com/flarum/likes)
    - [Lock 0.1.0 Beta 8](https://github.com/flarum/lock)
    - [Markdown 0.1.0 Beta 8](https://github.com/flarum/markdown)
    - [Mentions 0.1.0 Beta 8.1](https://github.com/flarum/mentions)
    - [Pusher 0.1.0 Beta 8.1](https://github.com/flarum/pusher)
    - [Statistics 0.1.0 Beta 8](https://github.com/flarum/statistics)
    - [Sticky 0.1.0 Beta 8](https://github.com/flarum/sticky)
    - [Subscriptions 0.1.0 Beta 8](https://github.com/flarum/subscriptions)
    - [Suspend 0.1.0 Beta 8](https://github.com/flarum/suspend)
    - [Tags 0.1.0 Beta 8.2](https://github.com/flarum/tags)
    - [Twitter Login 0.1.0 Beta 8](https://github.com/flarum/auth-twitter)
  - Bundled libraries:
    - [Laravel's Validation Rules 5.7.15](https://github.com/laravel/laravel)
    - [Moment.js 2.23.0](https://github.com/moment/moment)

Released under the MIT license. Please see [the license terms](https://github.com/milescellar/lang-french/blob/master/LICENSE).

## Installation

Flarum use Composer to manage its dependencies and extensions. The French language pack is available [on Packagist](https://packagist.org/packages/milescellar/lang-french) and can be managed that way. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```shell
composer require milescellar/lang-french
```

The same command can be used to update independently the French language pack, without updating anything else. Note that because the French language pack will be added as a Flarum's dependency, it will also be automatically updated when updating Flarum and its dependencies via Composer.
