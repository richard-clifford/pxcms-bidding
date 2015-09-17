<?php

return [

    'backend_sidebar' => [
        'Bidding System' => [
            'children' => [
                [
                    'route' => 'admin.bidding.overview',
                    'text' => 'Overview/Stats',
                    'icon' => 'fa-bar-chart',
                    'order' => 1,
                    'permission' => 'manage@auth_user',
                    // 'activePattern' => '\/{backend}\/overview\/*',
                ],
            ],
        ],
    ],

    'backend_config_menu' => [
        [
            'route' => 'admin.config.api',
            'text' => 'Bidding Settings',
            'icon' => 'fa-key',
            'order' => 6,
            'permission' => 'api@auth_config',
        ],
    ],
];
