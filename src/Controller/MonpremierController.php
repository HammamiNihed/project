<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class MonpremierController extends AbstractController
{
    
    /**
     * @Route("/index", name="index")
     */
    public function index1()
    {
        
        return $this->render('monpremier/index.html.twig', [
            'controller_name' => 'MonpremierController',
        ]);
    }
    /**
     * @Route("/mapage", name="mapage")
     */
    public function mapage()
    {
        $nom = "Nihed";
        $prenom = "Hammami";
        $tab = [1,2,"s","m",7,9];
        return $this->render('monpremier/mapage.html.twig', ['N'=>$nom,'P'=>$prenom,'t'=>$tab]);
    }

    /**
     * @Route("/mapage1/{nom}/{prenom}", name="mapage1")
     */
    public function mapage1($nom,$prenom)
    {
        
        return $this->render('monpremier/mapage.html.twig', ['N'=>$nom,'P'=>$prenom]);
    }
    
    
    
}
