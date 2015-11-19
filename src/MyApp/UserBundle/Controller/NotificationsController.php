<?php
namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotificationController
 *
 * @author Abdesselem
 */
class NotificationsController extends controller
{
    public function listAction()
    {   $user = $this->container->get('security.context')->getToken()->getUser();
    $em=$this->getDoctrine()->getManager();
    
        $query = $em->createQuery('select n from UserBundle:Notification n where n.idtouser = ?1') ;
        $query->setParameter(1,$user->getid());
        $users=$query->getResult();

  
  return $this->render('UserBundle:BestDeal:notification.html.twig', array(
    'Notifications' => $users,'user' => $user ));
    }
}
