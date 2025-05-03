<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TodosRepository;

final class TodosController extends AbstractController
{
    #[Route('/todos', name: 'todos_index')]
    public function index(TodosRepository $repository): Response
    {

        return $this->render('todos/todos.html.twig', [
            'todos' => $repository->findAll(),
        ]);
    }
}
