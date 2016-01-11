<?php
/**
 * This file is part of the French Language Pack for Flarum.
 *
 * @author Maël Soucaze <https://www.maelsoucaze.com>
 * @license https://opensource.org/licenses/MIT MIT License
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
use Flarum\Event\ConfigureLocales;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->listen(ConfigureLocales::class, function (ConfigureLocales $event) {
        $event->loadLanguagePackFrom(__DIR__);
    });
};
