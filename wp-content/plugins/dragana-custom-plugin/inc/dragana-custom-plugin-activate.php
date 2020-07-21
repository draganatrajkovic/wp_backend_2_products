<?php
/*
Plugin Name: Dragana Custom Plugin
*/

class DraganaCustomPluginActivate {
    public static function activate() {
        flush_rewrite_rules();
    }
}