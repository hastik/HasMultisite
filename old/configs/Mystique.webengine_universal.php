<?php

namespace ProcessWire;

/**
 * Resource : Example dive deeper
 */
return [
    'title' => 'Nastavení komponenty',
    'fields' => [
        'title' => [
            'label' => __('Title'),
            'type' => Mystique::TEXT,
            'useLanguages' => true
        ],
        'checkbox' => [
            'label' => __('Checkbox test'),
            'type' => Mystique::CHECKBOX,
            'value' => false
        ],
        'summary' => [
            'label' => __('Summary'),
            'type' => Mystique::TEXTAREA,
            'useLanguages' => true
        ],
        'fieldset' => [
            'label' => 'Grid',
            'type' => Mystique::FIELDSET,
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
                        'grid-islayout' => "='yes'"
                    ]
                ],        
                'grid-title' => [
                    'label' => 'Grid Title',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'grid-layout' => "=lg"
                    ]
                ],        
                'grid-placement' => [
                    'label' => 'Placement',
                    'type' => Mystique::TEXT,
                    'showIf' => [
                        'grid-islayout' => '=0'
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
        ],
        'content' => [
            'label' => __('Content'),
            'type' => Mystique::TEXTAREA,
            'useLanguages' => true
        ]
    ]
];
