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
        $member = $em->getRepository('KazanacMembreBundle:Member')->findAll();
//\Doctrine\Common\Util\Debug::dump($member);
        return $this->render('KazanacMembreBundle:Member:list_membre.html.twig',array("members"=>$member));
    }
}
