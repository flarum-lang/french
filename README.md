# French Language Pack for [Flarum](http://flarum.org/)

[![Code Climate](https://codeclimate.com/github/milescellar/flarum-ext-french/badges/gpa.svg)](https://codeclimate.com/github/milescellar/flarum-ext-french) [![StyleCI](https://styleci.io/repos/70081209/shield?style=flat&branch=master)](https://styleci.io/repos/70081209)

French language pack to localize the Flarum forum software, its bundled extensions and libraries.

## Informations

Includes the following French locales compatible with:

- [Flarum](https://github.com/flarum/core)'s Core [0.1.0 Beta 6](https://github.com/flarum/core/releases/tag/v0.1.0-beta.6)
  - Bundled extensions:
    - [Akismet](https://github.com/flarum/flarum-ext-akismet) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-akismet/releases/tag/v0.1.0-beta.6)
    - [Approval](https://github.com/flarum/flarum-ext-approval) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-approval/releases/tag/v0.1.0-beta.6)
    - [Facebook Login](https://github.com/flarum/flarum-ext-auth-facebook) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-auth-facebook/releases/tag/v0.1.0-beta.6)
    - [Flags](https://github.com/flarum/flarum-ext-flags) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-flags/releases/tag/v0.1.0-beta.6)
    - [GitHub Login](https://github.com/flarum/flarum-ext-auth-github) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-auth-github/releases/tag/v0.1.0-beta.6)
    - [Likes](https://github.com/flarum/flarum-ext-likes) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-likes/releases/tag/v0.1.0-beta.6)
    - [Lock](https://github.com/flarum/flarum-ext-lock) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-lock/releases/tag/v0.1.0-beta.6)
    - [Mentions](https://github.com/flarum/flarum-ext-mentions) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-mentions/releases/tag/v0.1.0-beta.6)
    - [Pusher](https://github.com/flarum/flarum-ext-pusher) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-pusher/releases/tag/v0.1.0-beta.6)
    - [Sticky](https://github.com/flarum/flarum-ext-sticky) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-sticky/releases/tag/v0.1.0-beta.6)
    - [Subscriptions](https://github.com/flarum/flarum-ext-subscriptions) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-subscriptions/releases/tag/v0.1.0-beta.6)
    - [Suspend](https://github.com/flarum/flarum-ext-suspend) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-suspend/releases/tag/v0.1.0-beta.6)
    - [Tags](https://github.com/flarum/flarum-ext-tags) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-tags/releases/tag/v0.1.0-beta.6)
    - [Twitter Login](https://github.com/flarum/flarum-ext-auth-twitter) [0.1.0 Beta 6](https://github.com/flarum/flarum-ext-auth-twitter/releases/tag/v0.1.0-beta.6)
  - Bundled libraries:
    - [Laravel](https://github.com/laravel/laravel)'s Validation Rules [5.4.23](https://github.com/laravel/laravel/releases/tag/v5.4.23)
    - [Moment.js](https://github.com/moment/moment) [2.18.1](https://github.com/moment/moment/releases/tag/2.18.1)

Released under the MIT license. Please see [the license terms](https://github.com/milescellar/flarum-ext-french/blob/master/LICENSE).

## Installation

Flarum use Composer to manage its dependencies and extensions. The French language pack is available [on Packagist](https://packagist.org/packages/milescellar/flarum-ext-french) and can be managed that way. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```shell
composer require milescellar/flarum-ext-french
```

The same command can be used to update independently the French language pack, without updating anything else. Note that because the French language pack will be added as a Flarum's dependency, it will also be automatically updated when updating Flarum and its dependencies via Composer.
