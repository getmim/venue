<?php

return [
    '__name' => 'venue',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/venue.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/venue' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-enum' => NULL
            ],
            [
                'lib-media' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Venue\\Model' => [
                'type' => 'file',
                'base' => 'modules/venue/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'venue.open_days' => [
                1 => 'Monday',
                2 => 'Tuesday',
                3 => 'Wednesday',
                4 => 'Thursday',
                5 => 'Friday',
                6 => 'Saturday',
                7 => 'Sunday'
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'venue-cover' => [
                'url' => [
                    'type' => 'media'
                ],
                'label' => [
                    'type' => 'text'
                ]
            ],
            'venue' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'title' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'logo' => [
                    'type' => 'media'
                ],
                'cover' => [
                    'type' => 'json',
                    'format' => 'venue-cover'
                ],
                'open_hours' => [
                    'type' => 'json'
                ],
                'open_days' => [
                    'type' => 'multiple-enum',
                    'separator' => ',',
                    'enum' => 'venue.open_days',
                    'vtype' => 'int'
                ],
                'prices' => [
                    'type' => 'json'
                ],
                'contact' => [
                    'type' => 'json'
                ],
                'socials' => [
                    'type' => 'json'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];