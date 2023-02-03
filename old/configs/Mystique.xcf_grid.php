<?php

namespace ProcessWire;

/**
 * Resource: magic of mystique field
 */
return function ($page = null, $field = null, $value = null) {

    $fields = [
        'gridlayout' => [
            'label' => 'Grid layout',
            'type' => Mystique::SELECT,
            'options' => [
                'grid' => 'auto',
                'grid2' => '2 sloupce',
                'grid3' => '3 sloupce',
                'grid4' => '4 sloupce',
                'grid5' => '5 sloupců',
                'grid6' => '6 sloupců'
            ],
            'defaultValue' => 'grid',
            'description' => 'In file showIf working like example',
            'notes' => 'Also you can use $input->set() method'
        ],   
        'customized'=>[
                'label' => 'Detailní nastavení',
                'type' => Mystique::CHECKBOX,
                'value' => false
        ],
        'custom' => [
            'label' => 'Detailní nastavení',
            'type' => Mystique::FIELDSET,
            'showIf' => [
                'customized' => "=1"
            ],
            'children' => [      
                
                'custom_grid-placement' => [
                    'type' => 'select',
                    'options' => [
                        'auto-fill' => 'auto-fill',
                        'auto-fit' => 'auto-fit'
                    ]
                ],
                'custom_grid_min_item_size' => [
                    'label' => 'Min Item Size',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'grid-islayout' => '=0'
                    ]
                ],
                'custom_gutter' => [
                    'label' => 'Gutter',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'custom_grid-placement' => "='auto-fit'"
                    ]
                ]
            ]
        ]
    ];


    bd($page);
    bd($field);
    bd($value);


    return [
        'name' => 'm_xcf_grid',
        'title' => 'Grid settings',
        'fields' => $fields
    ];

};