<?php

namespace PrestataireDeServices\prestataireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PrestataireDeServicesprestataireBundle:Default:index.html.twig', array('name' => $name));
    }
     public function relAction()
    {
        return $this->render('PrestataireDeServicesprestataireBundle:Deal:Testrel.html.twig');
    }
     public function rel2Action()
    {
        return $this->render('PrestataireDeServicesprestataireBundle:Deal:Target.html.twig');
    }
     public function ProfilAction()
    {
        return $this->render('PrestataireDeServicesprestataireBundle:Deal:profil.html.twig');
    }
    
}
