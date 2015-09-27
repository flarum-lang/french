<?php

// French Plural Rule
// http://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html

return [
    'plural' => function ($count) {
        if ($count >= 0 and $count < 2) {
            return 'one';
        }
        else {
            return 'other';
        }
    }
]
