<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class StudentController extends AbstractController
{
    #[Route('/students', name: 'app_student')]
    public function index(StudentRepository $repository): Response
    {
      $students = $repository->findAll();
      return $this->render('student/index.html.twig', [
        'students' => $students,
      ]);
    }
}
