<?php

namespace Cmsot\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CmsotCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
