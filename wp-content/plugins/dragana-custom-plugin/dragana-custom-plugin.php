<?php
/*
Plugin Name: Dragana Custom Plugin
Description: Dragana Custom Plugin
Version: 1.0
Author: Dragana Trajkovic
*/

require_once plugin_dir_path(__FILE__) . 'inc/dragana-custom-plugin-activate.php';
require_once plugin_dir_path(__FILE__) . 'inc/dragana-custom-plugin-deactivate.php';
require_once plugin_dir_path(__FILE__) . 'inc/create-custom-post-type.php';

if (! defined('ABSPATH')) {
    die;
}

class DraganaCustomPlugin {
    public function __construct() {
        add_action('init', array($this, 'start'));
    }

    public function start() {
        $this->activate();
        $this->deactivate();
        $this->create_custom_post_type();
    }
    
    public function activate() {
        DraganaCustomPluginActivate::activate();
    }
    
    public function deactivate() {
        DraganaCustomPluginDectivate::deactivate();
    }

    public function create_custom_post_type() {
        if (class_exists('CreateCustomPostType')) {
            $team = new CreateCustomPostType('team', 'Team', 'Teams', 'team');
        }
    }
}

if (class_exists('DraganaCustomPlugin')) {
    $draganaCustomPlugin = new DraganaCustomPlugin();
}

register_activation_hook(__FILE__, array($draganaCustomPlugin, 'activate'));
register_deactivation_hook(__FILE__, array($draganaCustomPlugin, 'deactivate'));


