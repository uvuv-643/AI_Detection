<?php

return [
    'memberships' => env('API_MEMBERSHIPS_ENDPOINT', ''),
    'detection' => [
        'url' =>  env('API_DETECTION_ENDPOINT', ''),
        'token' => env('API_DETECTION_TOKEN', '')
    ],
    'webhook' => env('API_WEBHOOK_ENDPOINT', '')
];
