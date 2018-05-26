<?php
/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/21
 * Time: 18:58
 */
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{
//    BaseControllerを継承したので要らなくなった
//    protected $loader;
//    protected $twig;
//
//    public function __construct()
//    {
//        $this->loader = new \Twig_Loader_Filesystem(__DIR__ . "/../../views");
//        $this->twig = new \Twig_Environment($this->loader, [
//           'cache' => false,
//           'debug' => true
//        ]);
//    }

    public function getShowHomePage() {
//        include(__DIR__ . "/../../views/home.php");
//        echo $this->twig->render('home.twig');
        echo $this->blade->render("home");
    }

    public function getShowPage()
    {
        echo "foo!";
    }
}