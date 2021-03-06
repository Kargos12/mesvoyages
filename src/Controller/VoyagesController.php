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
 * @author Kargos
 */
class VoyagesController extends AbstractController{
    
    /**
     * @Route("voyages", name="voyages")
     * @return Response
     */
    public function index(): Response{
        $visites = $this->repository->findAllOrderBy('datecreation', 'DESC');
        return $this->render("pages/voyages.html.twig",[
            'visites' => $visites
        ]);
    }
        /**
     * @Route("/voyages/tri/{champ}/{ordre}", name="voyages.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort($champ,$ordre): Response{
        $visites = $this->repository->findAllOrderBy($champ, $ordre);
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
