<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorRoleController extends AbstractController
{
    #[Route('/author/role', name: 'app_author_role')]
    public function index(): Response
    {
        return $this->render('author_role/index.html.twig', [
            'controller_name' => 'AuthorRoleController',
        ]);
    }
}
