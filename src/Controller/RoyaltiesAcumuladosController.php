<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class RoyaltiesAcumuladosController extends AbstractController
{
    /**
     * @Route("/royalties_acumulados", name="app_royalties_acumulados")
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');


        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('royalties_acumulados/index.html.twig', [
                'nombrecliente' => $nombre,
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 1,
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
                'royaltiesp'=>0
            ]);
        } else {
            return $this->render('royalties_acumulados/index.html.twig', [
                'nombrecliente' => $nombre[0]['nombre'],
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 1,
                'royaltiesp'=>0,
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
                'ventasdiarias' => 0,
                'ventasmensual' => 0,
                'ventassemanales' => 0,
            ]);
        }
    }
    
}
