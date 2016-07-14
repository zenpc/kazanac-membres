<?php

namespace Kazanac\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {


        $em = $this->getDoctrine()->getManager();
        //$person = $em->getRepository('KazanacMembre:Membre')->findAll();
$person="je suis ";
        return $this->render('KazanacMembreBundle:Default:index.html.twig',array("membre"=>$person));
    }
}
