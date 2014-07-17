<?php

class Conf
{
    static $databases = array(
        'default' => array(
            'host'        => '',
            'login'        => '',
            'password'    => '',
            'database'    => ''
        )
    );

    static $cache = array(
        'path'               => 'cache',
        'default_expires' => 0
    );

    static $security = array(
        'rc4' => "MODIFY_KEY_HERE"
    );

    static $debug = 0;

    static $title = "Website title";
}

Router::connect('','home/index');

/*
Router::connect('page/:slug-:id','pages/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('blog/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('blog/category/:slug','posts/category/slug:([a-z0-9\-]+)');
Router::connect('blog/*','posts/*');
*/