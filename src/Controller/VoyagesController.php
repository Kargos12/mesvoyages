<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\VisiteRepository;
/**
 * Description of VoyagesController
 *
 * @author Kargo
 */
class VoyagesController extends AbstractController{
    
    /**
     * @Route("voyages", name="voyages")
     * @return Response
     */
    public function index(): Response{
        $visites = $this->repository->findAll();
        return $this->render("pages/voyages.html.twig",[
            'visites' => $visites
        ]);
    }
/**
 * 
 * @var VisiteRepository
 */
private $repository;

/**
 * 
 * @param VisiteRepository $repository
 */
public function _construct(VisiteRepository $repository){
    $this->repository = $repository;
}
}
