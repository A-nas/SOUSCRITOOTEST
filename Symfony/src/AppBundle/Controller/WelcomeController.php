<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{

    public function indexAction(Request $request)
    {	$lien = "https://www.souscritoo.com/";
        return $this->render('default/souscritooRedirect.html.twig', array('url' => $lien));
    }
}