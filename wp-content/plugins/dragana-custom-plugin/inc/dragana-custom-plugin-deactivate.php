<?php
/*
Plugin Name: Dragana Custom Plugin
*/

class DraganaCustomPluginDectivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
}