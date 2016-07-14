<?php

namespace Kazanac\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/listMembre",name="listMembre")
     */
    public function indexAction()
    {


        $em = $this->getDoctrine()->getManager();
        //$person = $em->getRepository('KazanacMembre:Membre')->findAll();
$person="je suis ";
        return $this->render('KazanacMembreBundle:Default:list_membre.html.twig',array("membre"=>$person));
    }
}
