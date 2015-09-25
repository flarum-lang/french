<?php

// See http://flarum.org/docs/localization to learn how this file works.

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
