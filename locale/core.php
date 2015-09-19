<?php

/*
 * This file is part of the French Extension for Flarum.
 *
 * (c) Maël Soucaze <maelsoucaze@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'plural' => function ($count) {
        if ($count >= 0 AND $count < 2) {
            return 'one';
        }
        else {
            return 'other';
        }
    }
];
