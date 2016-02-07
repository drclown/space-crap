<?php

namespace Homesoft\PlatformFilesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() {
        return $this->render('HomesoftPlatformFilesBundle:Default:index.html.twig');
    }

}
