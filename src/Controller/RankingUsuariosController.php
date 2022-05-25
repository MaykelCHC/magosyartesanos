<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< Updated upstream
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
=======
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
>>>>>>> Stashed changes

class RankingUsuariosController extends AbstractController
{
    /**
<<<<<<< Updated upstream
     * @Route("/ranking/usuarios", name="app_ranking_usuarios")
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {

=======
     * @Route("/ranking_usuarios", name="app_ranking_usuarios")
     */
    public function index(UserRepository $userRepository): Response
    {
>>>>>>> Stashed changes
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

<<<<<<< Updated upstream
        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('ranking_usuarios/index.html.twig', [
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre,
                'resumen' => 0,
                'ranking' => 1,
                'historial' => 0,
                'royalties' => 0,
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
        } else {
            return $this->render('ranking_usuarios/index.html.twig', [
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre[0]['nombre'],
                'resumen' => 0,
                'ranking' => 1,
                'historial' => 0,
                'royalties' => 0,
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

    /**
     * @Route("/ranking_buscar", name="app_ranking_busqueda", methods={"POST"})
     */
    public function buscarusuarios(UserRepository $userRepository, Request $request): Response
    {
        $dato = $request->request->all();
        $info = $userRepository->findBy(array("nombre" => $dato['usuarios']));

        return $this->render('ranking_usuarios/index.html.twig', [
            'users' => $info,
=======

        return $this->render('ranking_usuarios/index.html.twig', [
            'users' => $userRepository->findAll(),
>>>>>>> Stashed changes
            'resumen' => 0,
            'ranking' => 1,
            'historial' => 0,
            'royalties' => 0,
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
<<<<<<< Updated upstream
        ]);
=======
            'royaltiesp' => 0,
        ]);

>>>>>>> Stashed changes
    }
}
