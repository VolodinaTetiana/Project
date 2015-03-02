<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GrupaProjektBundle:Default:index.html.twig');
    }
}
