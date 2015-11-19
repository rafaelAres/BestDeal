<?php

namespace Admin\AdminBundle\Controller;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\User;
use MyApp\UserBundle\Entity\Deal;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Model\UserInterface;

class DefaultController extends Controller
{
     public function indexAction()
    {  $em= $this->getDoctrine()->getManager();
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM UserBundle:User u WHERE u.roles LIKE :role
                    AND u.statut is null'
            )->setParameter(
                 'role' ,'%ROLE_PRES%'
                  );

            $prest = $query->getResult();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '0'));
        
        return $this->render('AdminAdminBundle:Default:index.html.twig',array("deals"=>$deal,"prests"=>$prest));
    }
     public function statAction() {
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.typedeal=:i ')
                ->setParameter('i', 'produit');
        $produit = $query->getResult();
        
        $query1 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.typedeal=:x ')
                ->setParameter('x', 'service');
        $service = $query1->getResult();
        
        $query2 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.categorie=:f ')
                ->setParameter('f', 'technologie');
        $technologie = $query2->getResult();
        
        $query3 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.categorie=:u ')
                ->setParameter('u', 'hygiène');
        $electromenager = $query3->getResult();
        
        $query4 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.categorie=:o ')
                ->setParameter('o', 'cure');
        $cure = $query4->getResult();
        
        $query5 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.categorie=:p ')
                ->setParameter('p', 'sanitaire');
        $massage = $query5->getResult();
        
        $query6 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.categorie=:k ')
                ->setParameter('k', 'hotel');
        $domestique = $query6->getResult();
        
        $query7 = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT s FROM UserBundle:Deal s WHERE s.categorie=:c ')
                ->setParameter('c', 'voyage');
        $voyage = $query7->getResult();
        
       $query8 = $this->getDoctrine()->getEntityManager()
              ->createQuery('SELECT s FROM UserBundle:User s WHERE s.sexe=:n ')
                ->setParameter('n', 'homme');
       $homme = $query8->getResult();
       
       $query9 = $this->getDoctrine()->getEntityManager()
               ->createQuery('SELECT s FROM UserBundle:User s WHERE s.sexe=:m ')
                ->setParameter('m', 'femme');
       $femme = $query9->getResult();
       $query10 = $this->getDoctrine()->getEntityManager()
               ->createQuery('SELECT s FROM UserBundle:User s WHERE s.roles LIKE :m ')
                ->setParameter('m', '%a:0%');
       $client = $query10->getResult();
       $query11 = $this->getDoctrine()->getEntityManager()
               ->createQuery('SELECT s FROM UserBundle:User s WHERE s.roles LIKE :m ')
                ->setParameter('m', '%ROLE_PRES%');
       $prest = $query11->getResult();
        
        return $this->render('AdminAdminBundle:Default:stat.html.twig', array("produit" => $produit, "service" => $service, "technologie" => $technologie, "cure" => $cure, "massage" => $massage, "voyage" => $voyage, "electromenager" => $electromenager, "domestique" => $domestique, "client" => $client, "prest" => $prest, "homme" => $homme, "femme" => $femme));
    }

    
     public function clientAction()
    {   
         $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM UserBundle:User u WHERE u.roles LIKE :role'
                  
            )->setParameter('role', '%a:0%');

            $client = $query->getResult();
        return $this->render("AdminAdminBundle:Default:client.html.twig",array("clients"=>$client));
    }
    
    public function prestataireAction()
    {
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM UserBundle:User u WHERE u.roles LIKE :role
                    AND u.statut = :s'
            )->setParameters(array(
                 'role' => '%ROLE_PRES%',
                  's'  => '1'));

            $prest = $query->getResult();
        return $this->render("AdminAdminBundle:Default:prestataire.html.twig",array("prests"=>$prest));
    }
    
     public function prest_a_ValiderAction()
    {
       $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM UserBundle:User u WHERE u.roles LIKE :role
                    AND u.statut is null'
            )->setParameter(
                 'role' ,'%ROLE_PRES%'
                  );

            $prest = $query->getResult();
        return $this->render("AdminAdminBundle:Default:prest_a_Valider.html.twig",array("prests"=>$prest));
    }
    
    
    public function dealAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '1'));
        return $this->render("AdminAdminBundle:Default:deal.html.twig",array("deals"=>$deal));
    }
    public function deal_a_ValiderAction()
    {
       $em= $this->getDoctrine()->getManager();
        $deal=$em->getRepository("UserBundle:Deal")->findBy(array('statut' => '0'));
        return $this->render("AdminAdminBundle:Default:deal_a_Valider.html.twig",array("deals"=>$deal));
    }
    
    
    public function supprimerCAction($id){
           $em= $this->getDoctrine()->getManager();
           $client=$em->getRepository("UserBundle:User")->findOneBy(array('id' => $id));
           $em->remove($client);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_client'));
    }
    
    public function supprimerPAction($id){
           $em= $this->getDoctrine()->getManager();
           $prest=$em->getRepository("UserBundle:User")->findOneBy(array('id' => $id));
           $em->remove($prest);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_prest'));
    }
    
    public function supprimerDAction($id){
           $em= $this->getDoctrine()->getManager();
           $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $id));
           $em->remove($deal);
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_deal'));
    }
    
    public function ValiderDAction($id){
           $em= $this->getDoctrine()->getManager();
           $deal=$em->getRepository("UserBundle:Deal")->findOneBy(array('iddeal' => $id));
           if (!$deal) {
        throw $this->createNotFoundException(
            'Aucun deal trouvé pour cet id : '.$id
        );
    }
           $deal->setStatut('1');
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_deal_a_Valider'));
    }
    
    public function ValiderPAction($id){
           $em= $this->getDoctrine()->getManager();
           $prest=$em->getRepository("UserBundle:User")->findOneBy(array('id' => $id));
           if (!$prest) {
        throw $this->createNotFoundException(
            'Aucun prestataire trouvé pour cet id : '.$id
        );
    }
           $prest->setStatut('1');
           $em->flush();
           
         return new RedirectResponse($this->get('router')->generate('admin_admin_prest_a_Valider'));
    }
    
    public function rechercherAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:User")->findBy(array('nom' => $searchQuery));
        return $this->render("AdminAdminBundle:Default:recherche.html.twig",array("recherches"=>$recherche));
        
    }
    
    public function rechercherPAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:User")->findBy(array('societe' => $searchQuery,'statut' =>'1'));
        return $this->render("AdminAdminBundle:Default:rechercheP.html.twig",array("recherches"=>$recherche));
        
    }
    
     public function rechercherDAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:Deal")->findBy(array('libelle' => $searchQuery,'statut' =>'1'));
        return $this->render("AdminAdminBundle:Default:rechercheD.html.twig",array("recherches"=>$recherche));
        
    }
    
    public function rechercher_prenomAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:User")->findBy(array('prenom' => $searchQuery));
        return $this->render("AdminAdminBundle:Default:recherche.html.twig",array("recherches"=>$recherche));
        
    }
    
     public function rechercherD_catAction(Request $request){
        $searchQuery = $this->get('request')->request->get('recherche');
        $em= $this->getDoctrine()->getManager();
        $recherche=$em->getRepository("UserBundle:Deal")->findBy(array('categorie' => $searchQuery,'statut' =>'1'));
        return $this->render("AdminAdminBundle:Default:rechercheD.html.twig",array("recherches"=>$recherche));
        
    }
}
