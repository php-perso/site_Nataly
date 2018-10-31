<?php

namespace Site\NatalyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@SiteNataly/Default/index.html.twig');
    }
}
