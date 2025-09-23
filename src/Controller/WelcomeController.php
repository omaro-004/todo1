<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WelcomeController extends AbstractController
{
    #[Route('/welcome', name: 'app_welcome')]
    public function index(): Response
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController','classe'=>'3A25'
        ]);
    }
    #[Route(path:'/welcome/{id}',name:'welcome')]
    public function show($id):Response 
    {
        //return new Response(content:"hello 3A25  $id");
        return $this->render('welcome/index.html.twig',[// rendertrajaaa al twig
            'identifiant'=>$id
        ]);
    }
}
