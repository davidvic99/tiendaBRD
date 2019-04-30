<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction(Request $request)
    {
        // replace this example code with whatever you need
        $numero  = rand(1,2);
        return $this->render('frontal/inicio.html.twig', ["numero"=>$numero]);
    }

    /**
     * @Route("/productos", name="productos")
     */
    public function productosAction(Request $request)
    {
        $productos= 0;
        return $this->render('frontal/inicio.html.twig', ["numero"=>$productos]);
    }
}