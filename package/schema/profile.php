<?php //-->
return [
    'disable' => '1',
    'singular' => 'Profile',
    'plural' => 'Profiles',
    'name' => 'profile',
    'group' => 'Users',
    'icon' => 'fas fa-user',
    'detail' => 'Generic user profiles designed to separate public data from sensitive data like passwords. Best used with auth tables.',
    'fields' => [
        [
            'disable' => '1',
            'label' => 'Name',
            'name' => 'name',
            'field' => [
                'type' => 'text',
            ],
            'validation' => [
                [
                    'method' => 'required',
                    'message' => 'Name is Required'
                ],
                [
                    'method' => 'empty',
                    'message' => 'Cannot be empty'
                ]
            ],
            'list' => [
                'format' => 'none',
            ],
            'detail' => [
                'format' => 'none',
            ],
            'default' => '',
            'searchable' => '1',
            'filterable' => '1'
        ],
        [
            'disable' => '1',
            'label' => 'Active',
            'name' => 'active',
            'field' => [
                'type' => 'active',
            ],
            'list' => [
                'format' => 'hide',
            ],
            'detail' => [
                'format' => 'hide',
            ],
            'default' => '1',
            'filterable' => '1',
            'sortable' => '1'
        ],
        [
            'disable' => '1',
            'label' => 'Created',
            'name' => 'created',
            'field' => [
                'type' => 'created',
            ],
            'list' => [
                'format' => 'none',
            ],
            'detail' => [
                'format' => 'none',
            ],
            'default' => 'NOW()',
            'sortable' => '1'
        ],
        [
            'disable' => '1',
            'label' => 'Updated',
            'name' => 'updated',
            'field' => [
                'type' => 'updated',
            ],
            'list' => [
                'format' => 'none',
            ],
            'detail' => [
                'format' => 'none',
            ],
            'default' => 'NOW()',
            'sortable' => '1'
        ]
    ],
    'relations' => [],
    'suggestion' => '{{profile_name}}',
    'fixtures' => [
        [
            'profile_name' => 'John Doe',
            'profile_created' => date('Y-m-d H:i:s'),
            'profile_updated' => date('Y-m-d H:i:s'),
        ]
    ]
];
