<?php
/*
Plugin Name: Dragana Custom Plugin
*/

class CreateCustomPostType {

    public function __construct(string $name, string $singularName, string $menuName, string $slug) {
        $this->name = $name; 
        $this->singularName = $singularName;
        $this->menuName = $menuName;
        $this->slug = $slug;
        $this->init();
    }

    public function init() {
        register_post_type($this->name, 
            [
                'labels' => [
                    'name' => $this->menuName,
                    'singular_name' => $this->singularName,
                    'add_new' =>('Add New '. $this->singularName ),
                    'add_new_item' =>('Add New ' . $this->singularName ),
                    'edit_item' => ('Edit ' . $this->singularName ),
                    'new_item' => ('New ' . $this->singularName ),
                    'all_items' => ('All ' . $this->menuName ),
                    'view_item' => ('View ' . $this->singularName ),
                    'search_items' => ('Search ' . $this->singularName ),
                    'not_found' => ('No '. $this->menuName . ' found' ),
                    'not_found_in_trash' => ( 'No ' . $this->menuName . ' found in the Trash' ),
                    'parent_item_colon' => '',
                    'menu_name' => $this->menuName,
                ],
                'description' => 'Displays city ' . $this->menuName . ' and their ratings',
                'public' => true,
                'menu_position' => 4,
                'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments'],
                'has_archive' => true,
                'rewrite' => ['slug' => $this->$slug ]
            ]
        );


    }

}