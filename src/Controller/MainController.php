<?php

namespace App\Controller;

use App\Models\Student;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
        $students = [
            new Student('Roman', 11, 'm', new DateTime('1999-07-25')),
            new Student('Aleksey', 8, 'a', new DateTime('2002-01-12')),
            new Student('Konstantin', 9, 'b', new DateTime('2001-06-30')),
            new Student('Sergey', 2, 'a', new DateTime('2008-12-01')),
            new Student('Makar', 9, 'a', new DateTime('2002-07-04')),
            new Student('Semen', 4, 'c', new DateTime('2006-09-18')),
            new Student('Aleksandr', 7, 'b', new DateTime('2004-01-27')),
        ];

        return $this->render('main/index.html.twig', [
            'students' => $students,
        ]);
    }

    #[Route(
        '/change/{id}',
        name: 'changeInfo', 
        requirements: ['id' => '\d+'],
    )]
    public function changeInfo(int $id) : Response
    {
        return $this->render('main/change-info.html.twig', [
            'userId' => $id,
        ]);
    }
}
