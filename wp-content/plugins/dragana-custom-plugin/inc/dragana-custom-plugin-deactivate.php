<?php
/*
Plugin Name: Dragana Custom Plugin
*/

class DraganaCustomPluginDectivate {
    public function deactivate() {
        flush_rewrite_rules();
    }
}