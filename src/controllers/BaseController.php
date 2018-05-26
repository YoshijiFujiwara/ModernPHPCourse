<?php
/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/25
 * Time: 17:21
 */

namespace Acme\controllers;

use duncan3dc\Laravel\BladeInstance;

class BaseController
{
//    protected $loader;
//    protected $twig;
//
//    public function __construct()
//    {
//        $this->loader = new \Twig_Loader_Filesystem(__DIR__ . "/../../views");
//        $this->twig = new \Twig_Environment($this->loader, [
//            'cache' => false,
//            'debug' => true
//        ]);
//    }

    //bladeテンプレートに変更
    protected $blade;

    public function __construct()
    {
        $this->blade = new BladeInstance("/vagrant/views", "/vagrant/cache/views");

    }
}