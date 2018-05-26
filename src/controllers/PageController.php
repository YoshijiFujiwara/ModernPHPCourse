<?php
/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/21
 * Time: 18:58
 */
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;
use Acme\models\Page;

class PageController extends BaseController
{
//    BaseControllerを継承したので要らなくなった
//    protected $loader;
//    protected $twig;
//
//     public function __construct()
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
        $browser_title = "";
        $page_content = "";

        // extract page name from the url
        $uri = explode("/", $_SERVER['REQUEST_URI']);
        $target = $uri[1];

        // find mathcing page in the db
        $page = Page::where('slug', '=', $target)->get();

        // look up page content
        foreach ($page as $item) {
            $browser_title = $item->browser_title;
            $page_content = $item->page_content;
        }

        if (strlen($browser_title) == 0) {
            header("HTTP/1.0 404 Not Found");
            header("Location: /page-not-found");
            exit();
        }

        // pass content to some blade template
        echo $this->blade->render('generic-page', [
            'browser_title' => $browser_title,
            'page_content' => $page_content,
        ]);
    }

    public function getShow404()
    {
        $this->blade->render('page-not-found');
    }
}