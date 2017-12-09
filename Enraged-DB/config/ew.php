<?php
return [
    'gui' => [
        'url' => config('EW_GUI_URL', ''),
    ],
    'twitter' => [
        'lifetime' => intval(config('EW_TWITTER_LIFETIME', 604800)),
    ],
];