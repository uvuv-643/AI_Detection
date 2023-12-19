<?php

return [
    'memberships' => env('API_MEMBERSHIPS_ENDPOINT', ''),
    'detection' => [
        'token' => [
            'url' =>  env('API_DETECTION_ENDPOINT', ''),
            'key' =>  env('API_DETECTION_KEY', ''),
            'email' =>  env('API_DETECTION_EMAIL', ''),
        ],
        'url' =>  env('API_DETECTION_ENDPOINT', ''),
    ],
    'webhook' => env('API_WEBHOOK_ENDPOINT', '')
];
