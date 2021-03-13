<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
     * @Route("/",name="home")
     */

     public function home(){
         return $this->render('blog/home.html.twig', [
             "title"=>"Ahmed",
             "age"=>"189"
         ]);
     }
    
     /**
      * @Route("/About", name="About")
      */

      public function About(){
          return $this->render('blog/About.html.twig');
      }
    
}
