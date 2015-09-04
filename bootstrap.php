<?php
/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Require the extension's composer autoload file. This will enable all of our
// classes in the src directory to be autoloaded.
require __DIR__.'/vendor/autoload.php';

// Return the name of our Extension class. Flarum will register it as a service
// provider, allowing it to register bindings and execute code when the
// application boots.
return 'Qia\Extension';
