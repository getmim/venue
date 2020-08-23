<?php

return [
    '__name' => 'venue',
    '__version' => '0.1.0',
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
            ],
            'content-pricing.type' => ['venue' => 'Venue']
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
                    'separator' => 'json',
                    'enum' => 'venue.open_days',
                    'vtype' => 'int'
                ],
                'prices' => [
                    'type' => 'json',
                    'format' => 'venue-prices'
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
            ],
            'venue-prices' => [
                'currency' => [
                    'type' => 'text'
                ],
                'min' => [
                    'type' => 'number'
                ],
                'max' => [
                    'type' => 'number'
                ]
            ],
            'content-pricing' => [
                'object' => [
                    'cases' => [
                        'venue' => [
                            'model' => [
                                'name' => 'Venue\\Model\\Venue',
                                'field' => 'id'
                            ],
                            'format' => 'venue'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'contentPricing' => [
        'active' => [
            'venue' => true
        ],
        'objects' => [
            'venue' => [
                'model' => 'Venue\\Model\\Venue',
                'format' => 'venue',
                'fields' => [
                    'id'        => 'id',
                    'user'      => 'user',
                    'title'     => 'title',
                    'created'   => 'created',
                    'published' => 'created',
                    'status'    => '$Published'
                ]
            ]
        ]
    ]
];
