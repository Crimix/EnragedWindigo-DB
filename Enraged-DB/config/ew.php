<?php
return [
    'gui' => [
        'url' => env('EW_GUI_URL', ''),
    ],
    'twitter' => [
        'lifetime' => intval(env('EW_TWITTER_LIFETIME', 604800)),
    ],
];