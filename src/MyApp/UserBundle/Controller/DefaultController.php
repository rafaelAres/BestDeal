<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\Reservation;
use MyApp\UserBundle\Entity\Evaluation;
use MyApp\UserBundle\Entity\Deal;
use MyApp\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em= $this->getDoctrine()->getManager();
        $deals= $em->getRepository('UserBundle:Deal')->findBy(array("statut"=>'1'));
        return $this->render('UserBundle:BestDeal:index.html.twig', array('deals'=>$deals));
    }
    
     public function internauteAction()
    {
        $em= $this->getDoctrine()->getManager();
        $deals= $em->getRepository('UserBundle:Deal')->findBy(array("statut"=>'1'));
        return $this->render('UserBundle:BestDeal:internaute.html.twig', array('deals'=>$deals));
    }
    
    public function contactAction()
    {
        return $this->render('UserBundle:BestDeal:contact.html.twig');
    }
    
     public function rechercheAction()
    {
         $em= $this->getDoctrine()->getManager();
        
        $request= $this->container->get('request');
        
        $nom=$request->get('nom');
        $type=$request->get('type');
        $cat=$request->get('cat');
        $ndeals=$em->getRepository('UserBundle:Deal')->findBy(array("libelle"=>$nom,"statut"=>'1'));
        $tdeals=$em->getRepository('UserBundle:Deal')->findBy(array("typedeal"=>$type,"statut"=>'1'));
        $cdeals=$em->getRepository('UserBundle:Deal')->findBy(array("categorie"=>$cat,"statut"=>'1'));
        $deals= array_merge($ndeals, $tdeals, $cdeals);
        $evaluations=$em->getRepository('UserBundle:Evaluation')->findAll();
        
       

        return $this->render('UserBundle:BestDeal:rechercheliste.html.twig', array('deals'=>$deals,'evaluations'=>$evaluations));
    }
    
     public function connexionAction()
    {
        return $this->render('UserBundle:BestDeal:connexion.html.twig');
    }
    
     public function aboutAction()
    {
        return $this->render('UserBundle:BestDeal:about.html.twig');
    }
    
    public function dareserverAction($iddeal)
    {
        $em= $this->getDoctrine()->getManager();
        $user =$this->getUser();
        $deal= $em->getRepository('UserBundle:Deal')->findBy(array("iddeal"=>$iddeal));
        $reservation= $em->getRepository('UserBundle:Reservation')->findBy(array("iduser"=>$user->getid()));
        $evaluations=$em->getRepository('UserBundle:Evaluation')->findBy(array("iddeal"=>$iddeal));
        
        return $this->render('UserBundle:BestDeal:dareserver.html.twig',array('deals'=>$deal,'evaluations'=>$evaluations));
    }
    
    
     public function reserverAction($iddeal)
    {
        $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $iddeal));
         $user = $this->getUser();
        $request= $this->container->get('request');
        $deals= $em->getRepository('UserBundle:Deal')->findBy(array("iddeal"=>$iddeal));
        
        $reservationdeal= $em->getRepository('UserBundle:Reservation')->findBy(array("iddeal"=>$iddeal,"iduser"=>$user->getid()));
        $qte=$request->get('qte');
        
        if(($deal->getQuantite()-$qte)<0)
        {
            $reservationsuser= $em->getRepository('UserBundle:Reservation')->findBy(array("iduser"=>$iduser));
            return $this->render('UserBundle:BestDeal:echecreservation.html.twig',array('deals'=>$deals,'reservationsuser'=>$reservationsuser));
        }
        else 
            {
                $reservation = new Reservation();
                $reservation->setIduser($user);
                $reservation->setIddeal($deal);
                $reservation->setDatereservation(date('l \t\h\e jS'));
                $reservation->setQuantite($qte);
                $deal->setQuantite($deal->getQuantite()-$qte);
                $em->persist($reservation);
                $em->flush();
                $reservationsuser= $em->getRepository('UserBundle:Reservation')->findBy(array("iduser"=>$user->getid()));
                //return new RedirectResponse($this->get('router')->generate('etudiant_liste'));
                return $this->render('UserBundle:BestDeal:succesreservation.html.twig',array('deals'=>$deals,'reservationsuser'=>$reservationsuser));
            }
        
      
    }
    
    
     public function evaluerAction($iddeal)
    {
        $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $iddeal));
       // $user=$em->getRepository("UserBundle:User")->findOneBy(array('iduser' => '2'));
                 $user = $this->getUser();

        $request= $this->container->get('request');
        $deals= $em->getRepository('UserBundle:Deal')->findBy(array("iddeal"=>$iddeal));
        
        
        $rating=$request->get('rating');
        $commentaire=$request->get('commentaire');
        
        
                $evaluation = new Evaluation();
                $evaluation->setIduser($user);
                $evaluation->setIddeal($deal);
                $evaluation->setNote($rating);
                $evaluation->setCommentaire($commentaire);
                $em->persist($evaluation);
                $em->flush();
                $reservationsuser= $em->getRepository('UserBundle:Reservation')->findBy(array("iduser"=>$user->getid()));
              return new RedirectResponse($this->get('router')->generate('user_homepage'));
               // return $this->render('UserBundle:BestDeal:succesreservation.html.twig',array('deals'=>$deals,'reservationsuser'=>$reservationsuser));
           //  return new Response('Hello world!');
    }
    
    
}
