<?php

namespace App\Controller;

use App\Services\FooService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    public function __construct(private readonly FooService $fooService)
    {
    }

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/foo', name: 'foo')]
    public function foo(): Response
    {
        $a = $this->fooService->getFoo();
    }
}
