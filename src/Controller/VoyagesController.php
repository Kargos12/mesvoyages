<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        return $this->render("pages/voyages.html.twig");
    }
}
