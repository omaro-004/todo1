<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/authorName/{name?}', name: 'Show_author')]
    public function showAuthor($name): Response
    {
        return $this->render('/author/show.html.twig',[
            'author_name'=>$name
        ]);

    }
        
    #[Route('/afficher', name: 'afficher')]
    public function Afficher (): Response{
        return new Response ("hello !!");

    }
       
    
    #[Route('/authors', name: 'authors_list')]
public function list(): Response
{
    $authors = [
        ['id' => 1, 'picture' => 'assets/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
        ['id' => 2, 'picture' => 'assets/images/william-shakespeare.jpg','username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
        ['id' => 3, 'picture' => 'assets/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
    ];

    return $this->render('author/list.html.twig', [
        'authors' => $authors,
    ]);
}



}
