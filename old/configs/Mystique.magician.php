<?php

namespace ProcessWire;

/**
 * Resource: magic of mystique field
 */
return function ($page = null, $field = null, $value = null) {

    $fields = [
        'hello' => [
            'label' => 'Are you ready for a Magic ?',
            'type' => 'select',
            'options' => [
                'no' => 'No',
                'yes' => 'Yes'
            ],
            'required' => true,
            'defaultValue' => 'no'
        ],
        'is_layout'=>[
                'label' => __('Checkbox test'),
                'type' => Mystique::CHECKBOX,
                'value' => false
            
        ],
        'fieldset' => [
            'label' => 'Grid',
            'type' => Mystique::FIELDSET,
            'showIf' => [
                'is_layout' => "=1"
            ],
            'children' => [
                'grid-islayout' => [
                    'label' =>'Výběr z předvoleb',
                    'type' => Mystique::CHECKBOX,
                    'value' => true
                ],
                'grid-layout' => [
                    'label' => 'Grid layout',
                    'type' => 'select',
                    'options' => [
                        'xs' => 'XS',
                        'sm' => 'SM',
                        'md' => 'MD',
                        'lg' => 'LG'
                    ],
                    'defaultValue' => 'md',
                    'showIf' => [
                        'is_layout' => "=1"
                    ]
                ],        
                'grid-placement' => [
                    'label' => 'Placement',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'grid-layout' => '=lg'
                    ]
                ],
                'grid-min-item-size' => [
                    'label' => 'Min Item Size',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'grid-islayout' => '=0'
                    ]
                ],
                'gutter' => [
                    'label' => 'Gutter',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'grid-islayout' => '=0'
                    ]
                ]
            ]
        ]
    ];

    if ($page instanceof Page && $page->template->name == 'basic-page') {
        $fields['current_page'] = [
            'label' => 'Current page title : ' . $page->title,
            'value' => $page->title,
            'showIf' => [
                'hello' => '=yes'
            ],
            'columnWidth' => 50
        ];
    }

    if ($field instanceof Field) {
        $fields['current_field'] = [
            'label' => 'Current field label : ' . $field->label,
            'value' => $field->label,
            'showIf' => [
                'hello' => '=yes'
            ],
            'columnWidth' => 50
        ];
    }

    $fields['note_field'] = [
        'label' => 'Poznámka : ',
        'value' => "Nějaká úvodní poznámka",
        'showIf' => [
            'hello' => '=yes'
        ],
        'columnWidth' => 50
    ];

    $fields['gutter'] = [
        'label' => 'Gutter',
        'type' => 'select',
        'options' => [
            'xs' => 'XS',
            'sm' => 'SM',
            'md' => 'MD',
            'lg' => 'LG'
        ],
        'required' => true,
        'defaultValue' => 'md'
    ];

    bd($page);
    bd($field);
    bd($value);


    return [
        'name' => 'magician',
        'title' => 'Do A Magic ?',
        'fields' => $fields
    ];

};