<?php

namespace App\Controller;

use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienvenidoController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/bienvenido", name="app_bienvenido")
     */
    public function index(UserRepository $userRepository, ProductoRepository $productoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);

        return $this->render('bienvenido/index.html.twig', [
            'totalu' => $userRepository->totalusers(),
            'users' => $userRepository->findAll(),
            'bolsadolares' => $productoRepository->totalusd($id[0]['id'])[0][1],
            'bolsaeuros' => $productoRepository->totaleuros($id[0]['id'])[0][1],
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 0,
            'service' => 0,
            'royaltiesp' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'totalv' => 0
        ]);
    }


}
