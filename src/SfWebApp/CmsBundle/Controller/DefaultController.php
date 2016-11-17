<?php

namespace SfWebApp\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SfWebAppCmsBundle:Default:index.html.twig');
    }

    public function ficheAction()
    {
        return $this->render('SfWebAppCmsBundle:Default:fiche.html.twig');
    }

    public function ficheDiagnAction()
    {
        return $this->render('SfWebAppCmsBundle:Default:fichediagn.html.twig');
    }
}
