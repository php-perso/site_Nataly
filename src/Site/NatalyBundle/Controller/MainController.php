<?php

namespace Site\NatalyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('@SiteNataly/Main/index.html.twig');
    }
}


?>