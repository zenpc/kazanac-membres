<?php

namespace Kazanac\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MembreController extends Controller
{
    /**
     * @Route("/listMembre",name="listMembre")
     */
    public function indexAction()
    {


        $em = $this->getDoctrine()->getManager();
        //$person = $em->getRepository('KazanacMembre:Membre')->findAll();
        $person="je suis ";
        return $this->render('KazanacMembreBundle:Membre:list_membre.html.twig',array("Membre"=>$person));
    }
}
