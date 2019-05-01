<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use AppBundle\Entity\Usuarios;
use AppBundle\Entity\Productos;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('frontal/inicio.html.twig');
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
    
        $entityManager = $this->get('doctrine.orm.app_entity_manager');
    
        $selectProductos = $entityManager->createQuery(
            'SELECT i FROM AppBundle:Productos i'
        );

        $productos = $selectProductos->getResult();

        
        return $this->render('frontal/productos.html.twig', ["producto"=>$productos]);
    }
}
