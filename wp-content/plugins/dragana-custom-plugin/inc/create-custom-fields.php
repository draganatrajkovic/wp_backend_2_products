<?php
/*
Plugin Name: Dragana Custom Plugin
*/

class CreateCustomFields {
    public function __construct() {
        add_action('acf/init', $this->header_custom_fields());
        add_action('acf/init', $this->footer_custom_fields());

        add_action('acf/init', $this->create_flexible_content());
        
    }
    
// -----------------header custom fields-----------------
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

// -----------------footer custom fields-----------------
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

    public function create_flexible_content() {
        //1 - create custom field group for options page (in rules chose options page...)
        //2 - fields will be different sections on the page
        //3 - define its key and layouts
        //4 - separately create each field and connect with layout key and flex field key

        acf_add_local_field_group(
            [
                'key' => 'create_flexible_content',
                'title' => '***CREATE FLEXIBLE CONTENT***',
                'fields' => [
                    [
                        'key' => 'flexible_content_banner',
                        'label' => 'Banner',
                        'name' => 'flexible_content_banner',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Banner Row',
                        'layouts' => [
                            [
                                'key' => 'banner_layout',
                                'name' => 'banner_layout',
                                'label' => 'Add Banner'
                            ],
                        ],
                    ],
                    [
                        'key' => 'flexible_content_product_cats',
                        'label' => 'Product Categories',
                        'name' => 'flexible_content_product_cats',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Product Categories Row',
                        'layouts' => [
                            [
                                'key' => 'product_cats_layout',
                                'name' => 'product_cats_layout',
                                'label' => 'Add Product Category'
                            ],
                        ],
                    ],
                    [
                        'key' => 'flexible_content_product_slider',
                        'label' => 'Product Slider',
                        'name' => 'flexible_content_product_slider',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Product Slider Row',
                        'layouts' => [
                            [
                                'key' => 'product_slider_layout',
                                'name' => 'product_slider_layout',
                                'label' => 'Add Product Slider'
                            ],
                        ],
                    ],
                    [
                        'key' => 'flexible_content_slider',
                        'label' => 'Gallery',
                        'name' => 'flexible_content_slider',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Slider Row',
                        'layouts' => [
                            [
                                'key' => 'slider_layout',
                                'name' => 'slider_layout',
                                'label' => 'Add Gallery'
                            ],
                        ],
                    ],
                    [
                        'key' => 'flexible_content_story_block',
                        'label' => 'Story Block',
                        'name' => 'flexible_content_story_block',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Story Block Row',
                        'layouts' => [
                            [
                                'key' => 'story_block_layout',
                                'name' => 'story_block_layout',
                                'label' => 'Add Story Block'
                            ],
                        ],
                    ],
                    [
                        'key' => 'flexible_content_newsletter',
                        'label' => 'Newsletter',
                        'name' => 'flexible_content_newsletter',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Newsletter Row',
                        'layouts' => [
                            [
                                'key' => 'newsletter_layout',
                                'name' => 'newsletter_layout',
                                'label' => 'Add Newsletter'
                            ],
                        ],
                    ],
                    [
                        'key' => 'flexible_content_team_list',
                        'label' => 'Team List',
                        'name' => 'flexible_content_team_list',
                        'type' => 'flexible_content',
                        'button_label' => 'Add Team List Row',
                        'layouts' => [
                            [
                                'key' => 'team_list_layout',
                                'name' => 'team_list_layout',
                                'label' => 'Add Team List'
                            ],
                        ],
                    ]
                ],
                'location' => [
                    [
                        [
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'options-page',
                        ],
                    ],
                ]
            ]
        );

        $this->create_banner_fields();
        $this->create_product_cats_fields();
        $this->create_product_slider_fields();
        $this->create_slider_fields();
        $this->create_story_block_fields();
        $this->create_newsletter_fields();
        $this->create_team_list_fields();
    }
        
    public function create_banner_fields() {
        acf_add_local_field(
            [
                'key' => 'banner_title',
                'label' => 'Banner Title',
                'name' => 'banner_title',
                'type' => 'text',
                'parent' => 'flexible_content_banner', //flex field key
                'parent_layout' => 'banner_layout', // layout key
            ]
        );

        acf_add_local_field(
            [
                'key' => 'banner_subtitle',
                'label' => 'Banner Subtitle',
                'name' => 'banner_subtitle',
                'type' => 'text',
                'parent' => 'flexible_content_banner', //flex field key
                'parent_layout' => 'banner_layout', // layout key
            ]
        );

        // acf_add_local_field(
        //     [
        //         'key' => 'banner_img',
        //         'label' => 'Banner Background Image',
        //         'name' => 'banner_img',
        //         'type' => 'image',
        //             'parent' => 'flexible_content_banner', //flex field key
        //             'parent_layout' => 'banner_layout', // layout key
        //     ]
        // );

        acf_add_local_field(
            [
                'key' => 'banner_img',
                'label' => 'Banner Background Image',
                'name' => 'banner_img',
                'type' => 'flexible_content',
                    'parent' => 'flexible_content_banner', //flex field key
                    'parent_layout' => 'banner_layout', // layout key
                'layouts' => [
                    [
                        'key' => 'banner_img_layout',
                        'name' => 'banner_img_layout',
                        'label' => 'Add Banner Image'
                    ],
                ],
                'button_label' => 'Add image'
            ]
        );

        acf_add_local_field(
            [
                'key' => 'banner_img_desk',
                'label' => 'Banner Image Desktop',
                'name' => 'banner_img_desk',
                'type' => 'image',
                'parent' => 'banner_img',
            ]
        );

        acf_add_local_field(
            [
                'key' => 'banner_img_tab',
                'label' => 'Banner Image Tablet',
                'name' => 'banner_img_tab',
                'type' => 'image',
                'parent' => 'banner_img',
            ]
        );

        acf_add_local_field(
            [
                'key' => 'banner_img_mob',
                'label' => 'Banner Image Mobile',
                'name' => 'banner_img_mob',
                'type' => 'image',
                'parent' => 'banner_img',
            ]
        );
    }

    public function create_product_cats_fields() {
        acf_add_local_field(
            [
                'key' => 'product_cats_title',
                'label' => 'Product Categories Title',
                'name' => 'product_cats_title',
                'type' => 'text',
                'parent' => 'flexible_content_product_cats', //flex field key
                'parent_layout' => 'product_cats_layout', // layout key
            ]
        );

        acf_add_local_field(
            [
                'key' => 'product_cats_category',
                'label' => 'Select Product Categories',
                'name' => 'product_cats_category',
                'type' => 'taxonomy',
                'taxonomy' => 'product_cat',
                'parent' => 'flexible_content_product_cats', //flex field key
                'parent_layout' => 'product_cats_layout', // layout key
                // 'return_value' => 'term_object'
            ]
        );
    }

    public function create_product_slider_fields() {
        acf_add_local_field(
            [
                'key' => 'product_slider_title',
                'label' => 'Latest Products Title',
                'name' => 'product_slider_title',
                'type' => 'text',
                    'parent' => 'flexible_content_product_slider', //flex field key
                    'parent_layout' => 'product_slider_layout', // layout key
                'button_label' => 'Add Latest Products Title',
            ]
        );
    }

    public function create_slider_fields() {
        acf_add_local_field(
            [
                'key' => 'slider_gallery',
                'label' => 'Slider Gallery',
                'name' => 'slider_gallery',
                'type' => 'gallery',
                    'parent' => 'flexible_content_slider', //flex field key
                    'parent_layout' => 'slider_layout', // layout key
                'button_label' => 'Add Gallery',
                'size' => 'large',
                'return_format' => 'array'
            ]
        );
    }

    public function create_story_block_fields() {
        acf_add_local_field(
            [
                'key' => 'story_block_switch_but',
                'label' => 'Story Block Switch Button',
                'name' => 'story_block_switch_but',
                'type' => 'true_false',
                'ui' => true,
                'ui_on_text' => 'Regular Pozition',
                'ui_off_text' => 'Reversed Pozition',
                'default_value' => true,
                'parent' => 'flexible_content_story_block', //flex field key
                'parent_layout' => 'story_block_layout', // layout key
            ]
        );

        acf_add_local_field(
            [
                'key' => 'story_block_img',
                'label' => 'Story Block Image',
                'name' => 'story_block_img',
                'type' => 'image',
                'return_format' => 'url',//if return url format no need for $image['url'] when we showing in html
                    'parent' => 'flexible_content_story_block', //flex field key
                    'parent_layout' => 'story_block_layout', // layout key
                'wrapper' => [
                    'class' => '',
                    'id' => '',
                ]
            ]
        );

        acf_add_local_field(
            [
                'key' => 'story_block_title',
                'label' => 'Story Block Title',
                'name' => 'story_block_title',
                'type' => 'text',
                    'parent' => 'flexible_content_story_block', //flex field key
                    'parent_layout' => 'story_block_layout', // layout key
                'wrapper' => [
                    'class' => '',
                    'id' => '',
                ]
            ]
        );

        acf_add_local_field(
            [
                'key' => 'story_block_text',
                'label' => 'Story Block Text',
                'name' => 'story_block_text',
                'type' => 'wysiwyg',
                    'parent' => 'flexible_content_story_block', //flex field key
                    'parent_layout' => 'story_block_layout', // layout key
                'wrapper' => [
                    'class' => '',
                    'id' => '',
                ]
            ]
        );

        acf_add_local_field(
            [
                'key' => 'story_block_link',
                'label' => 'Story Block Link',
                'name' => 'story_block_link',
                'type' => 'link',
                    'parent' => 'flexible_content_story_block', //flex field key
                    'parent_layout' => 'story_block_layout', // layout key
                'wrapper' => [
                    'class' => '',
                    'id' => '',
                ]
            ]
        );
    }

    public function create_newsletter_fields() {
        acf_add_local_field(
            [
                'key' => 'newsletter_title',
                'label' => 'Newsletter Title',
                'name' => 'newsletter_title',
                'type' => 'text',
                'parent' => 'flexible_content_newsletter', //flex field key
                'parent_layout' => 'newsletter_layout', // layout key
            ]
        );

        acf_add_local_field(
            [
                'key' => 'newsletter_img',
                'label' => 'Newsletter Background Image',
                'name' => 'newsletter_img',
                'type' => 'image',
                'return_format' => 'url',
                'parent' => 'flexible_content_newsletter', //flex field key
                'parent_layout' => 'newsletter_layout', // layout key
            ]
        );

        acf_add_local_field(
            [
                'key' => 'newsletter_shortcode',
                'label' => 'Newsletter Shortcode',
                'name' => 'newsletter_shortcode',
                'type' => 'text',
                'parent' => 'flexible_content_newsletter', //flex field key
                'parent_layout' => 'newsletter_layout', // layout key
            ]
        );
    }

    public function create_team_list_fields() {
        //just one title
        acf_add_local_field(
            [
                'key' => 'team_list_title',
                'label' => 'Team List Title',
                'name' => 'team_list_title',
                'type' => 'text',
                'parent' => 'flexible_content_team_list', //flex field key
                'parent_layout' => 'team_list_layout', // layout key
            ]
        );

        //add unlimited rows for team
        acf_add_local_field(
            [
                'key' => 'team_list_post_obj',
                'label' => 'Select Team',
                'name' => 'team_list_post_obj',
                'type' => 'flexible_content',
                    'parent' => 'flexible_content_team_list', //flex field key
                    'parent_layout' => 'team_list_layout', // layout key
                'layouts' => [
                    [
                        'key' => 'single_team_layout',
                        'name' => 'single_team_layout',
                        'label' => 'Add Team'
                    ],
                ],
                'button_label' => 'Add Team'
            ]
        );

        acf_add_local_field(
            [
                'key' => 'team_list_single_post',
                'label' => 'Select Team',
                'name' => 'team_list_single_post',
                'type' => 'post_object',
                'post_type' => 'team',
                'parent' => 'team_list_post_obj', //flex field key
                'parent_layout' => 'single_team_layout'
            ]
        );
    }


}


