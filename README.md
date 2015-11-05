# French Language Pack for [Flarum](http://flarum.org/)

French language pack to localize the Flarum forum software and some of its extensions.

- [Informations](https://github.com/maelsoucaze/flarum#informations)
- [Installation](https://github.com/maelsoucaze/flarum#installation)
  - [Using Composer](https://github.com/maelsoucaze/flarum#using-composer)
  - [Manual Installation](https://github.com/maelsoucaze/flarum#manual-installation)
- [Updating](https://github.com/maelsoucaze/flarum#updating)
- [Contributing](https://github.com/maelsoucaze/flarum#contributing)

## Informations

This repository contains French locales compatible with:

- [Flarum](https://github.com/flarum/core)'s Core [0.1.0 Beta 4](https://github.com/flarum/core/releases/tag/v0.1.0-beta.4)
  - Bundled extensions:
    - [Flags](https://github.com/flarum/flags) [0.1.0 Beta 4](https://github.com/flarum/flags/releases/tag/v0.1.0-beta.4)
    - [Likes](https://github.com/flarum/likes) [0.1.0 Beta 3](https://github.com/flarum/likes/releases/tag/v0.1.0-beta.3)
    - [Lock](https://github.com/flarum/lock) [0.1.0 Beta 3](https://github.com/flarum/lock/releases/tag/v0.1.0-beta.3)
    - [Mentions](https://github.com/flarum/mentions) [0.1.0 Beta 4](https://github.com/flarum/mentions/releases/tag/v0.1.0-beta.4)
    - [Pusher](https://github.com/flarum/pusher) [0.1.0 Beta 3](https://github.com/flarum/pusher/releases/tag/v0.1.0-beta.3)
    - [Sticky](https://github.com/flarum/sticky) [0.1.0 Beta 3](https://github.com/flarum/sticky/releases/tag/v0.1.0-beta.3)
    - [Subscriptions](https://github.com/flarum/subscriptions) [0.1.0 Beta 4](https://github.com/flarum/subscriptions/releases/tag/v0.1.0-beta.4)
    - [Tags](https://github.com/flarum/tags) [0.1.0 Beta 4](https://github.com/flarum/tags/releases/tag/v0.1.0-beta.4)
  - Bundled libraries:
    - [Laravel](https://github.com/laravel/laravel)'s Validation [5.1.11](https://github.com/laravel/laravel/releases/tag/v5.1.11)
    - [Moment.js](https://github.com/moment/moment) [2.10.6](https://github.com/moment/moment/releases/tag/2.10.6)

The French language pack is released under the MIT license. Please see the [license terms](https://github.com/maelsoucaze/flarum/blob/master/LICENSE).

## Installation

### Using Composer

Flarum use Composer to manage its dependencies and extensions. The French language pack, available [on Packagist](https://packagist.org/packages/maelsoucaze/french), is also manageable with Composer. Make sure that [Composer](https://getcomposer.org/) is installed on your machine, then run the following command in the location where Flarum is installed:

```
composer require maelsoucaze/french
```

Note that the French language pack will be added as a Flarum's dependency, and will be automatically updated when you will update Flarum's dependencies by using Composer. The above command can also be used to update independently the French language pack on your Flarum installation.

### Manual Installation

1. Download [the latest stable release](https://github.com/maelsoucaze/flarum/releases) or [the latest development version](https://github.com/maelsoucaze/flarum/archive/master.zip).
2. Unpack the downloaded archive with [a file archiver](https://en.wikipedia.org/wiki/Comparison_of_file_archivers).
3. Log in to your server via [FTP](https://en.wikipedia.org/wiki/File_Transfer_Protocol), [SSH](https://en.wikipedia.org/wiki/Secure_Shell) or your provider's control panel.
4. Navigate to the *extensions/* directory of your Flarum installation.
5. Create a *maelsoucaze-french/* subdirectory into it.
6. Upload all the content in the unpacked folder to this subdirectory.

It's optional, but you can also add manually the French language pack as Flarum's dependency. It allows to automatically update the French language pack when you will update Flarum's dependencies by using Composer. Open with [a text editor](https://en.wikipedia.org/wiki/Comparison_of_text_editors) the *composer.json* file located at the root of your Flarum installation (not the language pack one!), then add to the list of Flarum's dependencies (which are listed below the `"require"` property) the following line in a new line:

```
        "maelsoucaze/french": "^1.0"
```

Note that you must add a colon at the end of this line if it is not added as the last item of the dependency list, or it will stop the execution due to a parsing error.

## Contributing

Thank you a lot to wish to contribute. I sincerely appreciate your commitment. Using the language pack is already a huge support, but best other ways to contribute are:

- Star on GitHub. Because if you use it and like it, you can at least be a stargazer!
- Follow on GitHub. You will be notified in real time of all changes. No more misses!
- Report [issues](https://github.com/maelsoucaze/flarum/issues) on GitHub. Any feedback is welcome.
- Open pull requests on GitHub to submit fixes and improvements. Be listed as a [contributor](https://github.com/maelsoucaze/flarum/graphs/contributors)!
- Join [the language pack's discussion](http://discuss.flarum.org/d/615-french-language-pack) on the Flarum community.
- Follow me [on Twitter](https://twitter.com/maelsoucaze). Promise, I don't spam pictures of kittens and puppies (too much).
- Let's have a drink if you are near Paris!
