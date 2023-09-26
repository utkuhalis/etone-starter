<?php

use CodeIgniter\Events\Events;
use CodeIgniter\View\Plugins;

class eToneStarter
{
    public function __construct()
    {
        helper('core');

        Events::on('navbar_render', static function () {
            echo create_nav_title('Starter Kit', ['_ST', '_ED', '_PS', '_YN']);
            echo create_nav_item('Normal Page', 'starter', 'info', ['_ST', '_ED', '_PS', '_YN']);
            echo create_nav_item('Table Page', 'starterTable', 'layout', ['_ST', '_ED', '_PS', '_YN']);
            echo create_nav_item('Form Page', 'starterForm', 'trello', ['_ST', '_ED', '_PS', '_YN']);
            echo create_nav_item('CoreJS Page', 'starterCoreJS', 'hexagon', ['_ST', '_ED', '_PS', '_YN']);
        }, 100);

        Events::on('page_starter', static function ($varList) {
            add_custom_js_code(load_js_file(__DIR__ . '\views\js\starter.js'));
            echo view('theme/default/eTone/page', array_merge(
                $varList,
                [
                    'viewPath' => 'Plugins\\eToneStarter\\',
                    'viewName' => 'starterpage',
                    'viewArgs' => [
                        'pageTitle'  => 'Normal Page',
                    ],
                ]
            ));
        }, 100);

        Events::on('page_starterTable', static function ($varList) {
            add_custom_js_code(load_js_file(__DIR__ . '\views\js\starter.js'));
            echo view('theme/default/eTone/page', array_merge(
                $varList,
                [
                    'viewPath' => 'Plugins\\eToneStarter\\',
                    'viewName' => 'starterpage',
                    'viewArgs' => [
                        'pageTitle'  => 'Table Page',
                    ],
                ]
            ));
        }, 100);

        Events::on('ajax_postAjax', static function () {
            die(json_encode(getPost()));
        }, 100);

        Events::on('page_starterForm', static function ($varList) {
            add_custom_js_code(load_js_file(__DIR__ . '\views\js\page_form.js'));
            echo view('theme/default/eTone/page', array_merge(
                $varList,
                [
                    'viewPath' => 'Plugins\\eToneStarter\\',
                    'viewName' => 'formpage',
                    'viewArgs' => [
                        'pageTitle'  => 'Form Page',
                    ],
                ]
            ));
        }, 100);

        Events::on('page_starterCoreJS', static function ($varList) {
            add_custom_js_code(load_js_file(__DIR__ . '\views\js\starter.js'));
            echo view('theme/default/eTone/page', array_merge(
                $varList,
                [
                    'viewPath' => 'Plugins\\eToneStarter\\',
                    'viewName' => 'starterCoreJS',
                    'viewArgs' => [
                        'pageTitle'  => 'CoreJS Page',
                    ],
                ]
            ));
        }, 100);
    }
}

$init = new eToneStarter();
