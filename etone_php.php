<?php

/**
 * Loads a helper file into memory. Supports namespaced helpers,
 * both in and out of the 'helpers' directory of a namespaced directory.
 *
 * Will load ALL helpers of the matching name, in the following order:
 *   1. app/Helpers
 *   2. {namespace}/Helpers
 *   3. system/Helpers
 *
 * @param array|string $filenames
 *
 * @throws FileNotFoundException
 */
function helper($filenames){}

/**
 * create_nav_title
 *
 * @param  mixed $title
 * @param  mixed $perm
 * @return void
 */
function create_nav_title($title, $perm){}

/**
 * create_nav_item
 *
 * @param  mixed $content
 * @param  mixed $url
 * @param  mixed $icon
 * @param  mixed $perm
 * @return void
 */
function create_nav_item($content, $url, $icon, $perm){}

/**
 * add_custom_js_code
 *
 * @param  mixed $js
 * @param  mixed $target
 * @param  mixed $order
 * @return void
 */
function add_custom_js_code($js, $target = 'footer', $order = 10){}

/**
 * load_js_file
 *
 * @param  mixed $file
 * @return void
 */
function load_js_file($file){}