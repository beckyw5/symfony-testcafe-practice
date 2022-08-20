<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;

class MainController extends AbstractController
{
    public function index(): Response
    {
//        return $this->json([
//            'message' => 'Welcome to my Symfony App',
//        ]);
//        return new Response ('<h1>Welcome to my Symfony App</h1>');
        return $this->render('index/index.html.twig');
    }

    public function custom(Request $request): Response
    {
      $name = $request->get('name');
      return $this->render('index/custom.html.twig', [
        'name' => $name
      ]);
    }
}
