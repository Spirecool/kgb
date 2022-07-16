<?php

namespace App\Controller;



use App\Entity\Mission;
use App\Form\MissionType;
use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(MissionRepository $missionRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'missions' => $missionRepository->findAll(),
        ]);
    }

}

