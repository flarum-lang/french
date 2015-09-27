# French Language Pack for [Flarum](http://flarum.org/)

[![Join the chat at https://gitter.im/maelsoucaze/flarum](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/maelsoucaze/flarum?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Language pack to localize the Flarum forum software and its official extensions into French.

- [Informations](https://github.com/maelsoucaze/flarum#informations)
	- [Version](https://github.com/maelsoucaze/flarum#version)
	- [Compatibility](https://github.com/maelsoucaze/flarum#compatibility)
	- [License](https://github.com/maelsoucaze/flarum#license)
- [Downloads](https://github.com/maelsoucaze/flarum#downloads)
	- [Latest French Language Pack Release](https://github.com/maelsoucaze/flarum#latest-french-language-pack-release)
	- [Latest French Language Pack Development Version](https://github.com/maelsoucaze/flarum#latest-french-language-pack-development-version)
- [Documentation](https://github.com/maelsoucaze/flarum#documentation)
	- [How to install?](https://github.com/maelsoucaze/flarum#installation)
	- [How to update?](https://github.com/maelsoucaze/flarum#updating)
- [Contributing](https://github.com/maelsoucaze/flarum#contributing)

## Informations

### Version

- 0.1.0-dev
- Released on September 25, 2015

### Compatibility

- [Flarum](https://github.com/flarum/core) 0.1.0 Beta 3
	- [Flags](https://github.com/flarum/flags) 0.1.0 Beta 2
	- [Likes](https://github.com/flarum/likes) 0.1.0 Beta 2
	- [Lock](https://github.com/flarum/lock) 0.1.0 Beta 2
	- [Mentions](https://github.com/flarum/mentions) 0.1.0 Beta 2
	- [Pusher](https://github.com/flarum/pusher) 0.1.0 Beta 2
	- [Reports](https://github.com/flarum/reports) 0.1.0 Beta 2
	- [Sticky](https://github.com/flarum/sticky) 0.1.0 Beta 2
	- [Subscriptions](https://github.com/flarum/subscriptions) 0.1.0 Beta 2
	- [Tags](https://github.com/flarum/tags) 0.1.0 Beta 2

### License

Released under the MIT License. Please see the [LICENSE](https://github.com/maelsoucaze/flarum/blob/master/LICENSE) file.

## Downloads

### [Latest French Language Pack Release](https://github.com/maelsoucaze/flarum/releases/tag/0.1.0-dev-build.17)

This release is recommended because it is guaranteed to be compatible with the latest stable release, which is currently Flarum 0.1.0 Beta 2, and its related extensions.

### [Latest French Pack Development Version](https://github.com/maelsoucaze/flarum/archive/master.zip)

This release may be incompatible with the latest stable release because based on latest development versions of the forum software and its supported extensions. It is available for testing purposes to developers or advanced and inquisitive users. Note that no support is provided, so use it at your own risk!

## Documentation

### Installation

Once the compressed language pack downloaded, extract the archive with a [file archiver](https://en.wikipedia.org/wiki/Comparison_of_file_archivers).

Using [FTP](http://en.wikipedia.org/wiki/File_Transfer_Protocol), browse into your Flarum root (which contains the *config.php* file). You will see an *extensions/* directory. Inside this directory, create a *french/* subdirectory. Then, upload the content of the previous extracted archive inside that *french/* directory.

The language pack is now uploaded to your server and your next step is to enable it. Log-in to your forum and click on your username located at the top right of the screen. You will see a pop-up. Click on the *Administration* link. Once in the administration page, click on *Extensions*. You will see a list of all your extensions. Note that the French pack is a grey tinted one, with a black icon on a light grey background. Hover it to show a dotted vertical menu. Click on *Enable* in that vertical menu.

Your language pack is now enabled. Congratulations! You, and your users, can now select the language via a dropdown menu located in the header of the forum, at the right of the search box.

### Updating

It is very similar to the installation process. Download the updated compressed language pack and extract the archive with a [file archiver](https://en.wikipedia.org/wiki/Comparison_of_file_archivers). Using [FTP](http://en.wikipedia.org/wiki/File_Transfer_Protocol), browse into the *extensions/french/* subdirectory. Delete all the current content of this subdirectory and upload the new files from the previous extracted archive.

Your language pack files are now updated, but you have to force a recompilation of the locale [JavaScript](https://en.wikipedia.org/wiki/JavaScript). Using [FTP](http://en.wikipedia.org/wiki/File_Transfer_Protocol), enter the *assets/* directory and delete the *forum-fr-XXX.js* and *admin-fr-XXX.js* files (*XXX* are some random generated letters and numbers). You can now enjoy the latest improvements and fixes of the updated language pack!

## Contributing

Thank you a lot to wish to contribute. It means a lot. Using and enjoying the language pack is already a huge support. Best other ways to contribute are, among other things:

- Star on GitHub. Because if you use it and like it, you can at least be a stargazer!
- Follow on GitHub. You'll be notified in real time of all changes. No more misses!
- Open [issues](https://github.com/maelsoucaze/flarum/issues) on GitHub. Because the localization will be better with your feedbacks.
- Open pull requests on GitHub. Submit fixes and improvements and be listed as [contributor](https://github.com/maelsoucaze/flarum/graphs/contributors)!
- Join the discussion about the language pack on [the Flarum community](http://discuss.flarum.org/d/615-french-language-pack-to-localize-flarum-and-its-extensions/53) and [the French one](https://flarum.today/fr/d/6-traduction-fran-aise-pour-traduire-flarum-et-ses-extensions).
- [Follow me on Twitter](https://twitter.com/maelsoucaze). Promise, I don't spam pictures of kittens and puppies (too much).
- Let's have a drink if you're in Paris (France)!
