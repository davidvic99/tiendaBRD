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
        
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction(Request $request)
    {
        
        $numero  = rand(1,2);
        return $this->render('frontal/inicio.html.twig', ["numero"=>$numero]);
    }

    /**
     * @Route("/productos", name="productos")
     */
    public function productosAction(Request $request)
    {
       



        return $this->render('frontal/productos.html.twig', []);
    }
}
