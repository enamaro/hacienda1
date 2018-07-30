<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/sobre_nosotros.html", name="sobre_nosotros")
     */
    public function sobreNosotrosAction(Request $request)
    {
        return $this->render('default/sobre_nosotros.html.twig');
    }

    /**
     * @Route("/contacto.html", name="contacto")
     */
    public function contactoAction(Request $request)
    {
        return $this->render('default/contacto.html.twig');
    }

    /**
     * @Route("/donde_estamos.html", name="donde_estamos")
     */
    public function dondeEstamosAction(Request $request)
    {
        return $this->render('default/donde_estamos.html.twig');
    }
}