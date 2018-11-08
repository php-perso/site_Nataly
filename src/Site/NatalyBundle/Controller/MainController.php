<?php

namespace Site\NatalyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    { 
        $menu = "accueil";
        //$rootTest = $this->get('kernel')->getRootDir();
        return $this->render('@SiteNataly/Main/index.html.twig', array('menu' => $menu ));
    }

    public function about_meAction()
    {
        $menu = "about_me";
        return $this->render('@SiteNataly/Main/about_me.html.twig', array('menu' => $menu ));
    }

    public function portfolioAction()
    {
        $menu = "portfolio";
        return $this->render('@SiteNataly/Main/portfolio.html.twig', array('menu' => $menu ));
    }

    public function shopAction()
    {
        $menu = "shop";
        return $this->render('@SiteNataly/Main/shop.html.twig', array('menu' => $menu ));
    }

    public function blogAction()
    {
        $menu = "blog";
        return $this->render('@SiteNataly/Main/blog.html.twig', array('menu' => $menu ));
    }

    public function movieAction()
    {
        $menu = "movie";
        return $this->render('@SiteNataly/Main/movie.html.twig', array('menu' => $menu ));
    }

    public function contactAction()
    {
        $menu = "contact";
        return $this->render('@SiteNataly/Main/contact.html.twig', array('menu' => $menu ));
    }
}


?>