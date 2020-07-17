<?php
/*
Plugin Name: Dragana Custom Plugin
*/


class CreateCustomFields {
    public function __construct() {
        add_action('acf/init', $this->header_custom_fields());
        add_action('acf/init', $this->footer_custom_fields());
    }

    public function header_custom_fields() {
        acf_add_local_field_group(
            [
                'key' => 'header_custom_fields',
                'title' => 'Header Custom Fields',
                'fields' => [
                    [
                        'key' => 'header_logo',
                        'label' => 'Header Logo',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'url' //da bismo mogli da prikazemo sliku
                    ]
                ],
                'location' => [
                    [
                        [
                            'param' => 'options_page', // Show this field group if options_page is equal to..options-page
                            'operator' => '==',
                            'value' => 'acf-options-header' //slug for header page in options-page
                        ]
                    ]
                ]
            ]
        );
    }

    public function footer_custom_fields() {
        $this->footer_custom_fields_logo();
        $this->footer_custom_fields_nav();
        $this->footer_custom_fields_social();
    }

    public function footer_custom_fields_logo() {
        acf_add_local_field_group(
            [
                'key' => 'footer_custom_fields_logo',
                'title' => 'Footer Custom Fields Logo',
                'fields' => [
                    [
                        'key' => 'footer_logo',
                        'label' => 'Logo',
                        'name' => 'footer_logo',
                        'type' => 'image',
                        'return_format' => 'url'
                    ]
                ],
                'location' => [
                    [
                        [
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-footer'
                        ]
                    ]
                ]
            ]
        );
    }

    
    public function footer_custom_fields_nav() {
        acf_add_local_field_group(
            [
                'key' => 'footer_custom_fields_nav',
                'title' => 'Navigation',
                'fields' => [
                    [
                        'key' => 'footer_link_1',
                        'label' => 'Nav Link 1',
                        'name' => 'footer_link_1',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'footer_link_2',
                        'label' => 'Nav Link 2',
                        'name' => 'footer_link_2',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'footer_link_3',
                        'label' => 'Nav Link 3',
                        'name' => 'footer_link_3',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'footer_link_4',
                        'label' => 'Nav Link 4',
                        'name' => 'footer_link_4',
                        'type' => 'text'
                    ]
                ],
                'location' => [
                    [
                        [
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-footer'
                        ]
                    ]
                ]
            ]
        );
    }

    public function footer_custom_fields_social() {
        acf_add_local_field_group(
            [
                'key' => 'footer_custom_fields_social',
                'title' => 'Social Media',
                'fields' => [
                    [
                        'key' => 'footer_social_1_icon',
                        'label' => 'Twitter Icon',
                        'name' => 'footer_social_1_icon',
                        'type' => 'image',
                        'return_format' => 'url'
                    ],
                    [
                        'key' => 'footer_social_1_url',
                        'label' => 'Twitter Url',
                        'name' => 'footer_social_1_url',
                        'type' => 'text'
                    ],

                    [
                        'key' => 'footer_social_2_icon',
                        'label' => 'Instagram Icon',
                        'name' => 'footer_social_2_icon',
                        'type' => 'image',
                        'return_format' => 'url'
                    ],
                    [
                        'key' => 'footer_social_2_url',
                        'label' => 'Instagram Url',
                        'name' => 'footer_social_2_url',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'footer_social_3_icon',
                        'label' => 'Facebook Icon',
                        'name' => 'footer_social_3_icon',
                        'type' => 'image',
                        'return_format' => 'url'
                    ],
                    [
                        'key' => 'footer_social_3_url',
                        'label' => 'Facebook Url',
                        'name' => 'footer_social_3_url',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'footer_social_4_icon',
                        'label' => 'Linkedin Icon',
                        'name' => 'footer_social_4_icon',
                        'type' => 'image',
                        'return_format' => 'url'
                    ],
                    [
                        'key' => 'footer_social_4_url',
                        'label' => 'Linkedin Url',
                        'name' => 'footer_social_4_url',
                        'type' => 'text'
                    ],
                ],
                'location' => [
                    [
                        [
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-footer', 
                        ]
                    ]
                ]
            ]
        );
    }


}


