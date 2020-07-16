<?php
/*
Plugin Name: Dragana Custom Plugin
*/

class DraganaCustomPluginActivate {
    public function activate() {
        flush_rewrite_rules();
    }
}