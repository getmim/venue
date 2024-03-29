<?php

return [
    'Venue\\Model\\Venue' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'publisher' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 2500
            ],
            'title' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 3000
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE,
                    'unique' => TRUE
                ],
                'index' => 4000
            ],
            'content' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 5000
            ],
            'logo' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 6000
            ],
            'cover' => [
                'comment' => 'ex: {"url":"","label":""}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 7000
            ],
            'open_hours' => [
                'comment' => 'ex: {"open":"","close":""}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 8000
            ],
            'open_days' => [
                'comment' => 'ex: 1,2,3,4',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 9000
            ],
            'prices' => [
                'comment' => 'ex: {"currency":"","min":n, "max":n}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 10000
            ],
            'contact' => [
                'comment' => 'ex: {"phone":"","email":"","map":"","address":""}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 11000
            ],
            'socials' => [
                'comment' => 'ex: {"facebook":"","twitter":"","website":""}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 12000
            ],
            'meta' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 13000
            ],
            'status' => [
                'type' => 'TINYINT',
                'attrs' => [
                    'null' => false,
                    'unsigned' => true,
                    'default' => 1
                ],
                'index' => 14000
            ],
            'published' => [
                'type' => 'DATETIME',
                'attrs' => [
                    'null' => true
                ],
                'index' => 14500
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 15000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 16000
            ]
        ]
    ]
];
