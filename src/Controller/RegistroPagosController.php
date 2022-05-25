<?php

namespace App\Controller;

use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroPagosController extends AbstractController
{
    /**
     * @Route("/registro_pagos", name="app_registro_pagos")
     */
    public function index(VentaProductosRepository $ventaProductosRepository, UserRepository $userRepository, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $total = $ventaProductosRepository->dadofechayuserobtenertotalacum($id[0]['id']);

        //$cantidadpagada = $ventaProductosRepository->;

        return $this->render('registro_pagos/index.html.twig', [
            'solicitar_pago_royal_acumulados' => $solicitarPagoRoyalAcumuladoRepository->findAll(),
            'royalacum' => $total[0][1] /*- $cantidadpagada*/,
            'royaltiesacum' => 0,
            'totalacumulado' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'royaltiesp' => 1,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 0,
            'service' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
        ]);
    }
}
