<?php

namespace App\Controller;

use App\Entity\AsignarProductoaUser;
use App\Form\AsignarProductoaUserType;
use App\Repository\AsignarProductoaUserRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/asignar/productoa/user")
 */
class AsignarProductoaUserController extends AbstractController
{
    /**
     * @Route("/", name="app_asignar_producto", methods={"GET"})
     */
    public function index(UserRepository $userRepository, AuthenticationUtils $authenticationUtils, AsignarProductoaUserRepository $asignarProductoaUserRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);
        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('asignar_productoa_user/index.html.twig', [
                'asignar_productoa_users' => $asignarProductoaUserRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre,
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 0,
                'asignar' => 1,
                'recogida' => 0,
                'usuar' => 0,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('asignar_productoa_user/index.html.twig', [
                'asignar_productoa_users' => $asignarProductoaUserRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre[0]['nombre'],
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 0,
                'asignar' => 1,
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
     * @Route("/new", name="app_asignar_productoa_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserRepository $userRepository, AsignarProductoaUserRepository $asignarProductoaUserRepository): Response
    {
        $asignarProductoaUser = new AsignarProductoaUser();
        $filters = $this->getParametrosAUP($request);
        $form = $this->createForm(AsignarProductoaUserType::class, $asignarProductoaUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $asignarProductoaUserRepository->add($asignarProductoaUser);
            return $this->redirectToRoute('app_asignar_productoa_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('asignar_productoa_user/new.html.twig', [
            'asignar_productoa_user' => $asignarProductoaUser,
            'users' => $userRepository->findAll(),
            'filters' => $filters,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_asignar_productoa_user_show", methods={"GET"})
     */
    public function show(AsignarProductoaUser $asignarProductoaUser): Response
    {
        return $this->render('asignar_productoa_user/show.html.twig', [
            'asignar_productoa_user' => $asignarProductoaUser,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_asignar_productoa_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AsignarProductoaUser $asignarProductoaUser, AsignarProductoaUserRepository $asignarProductoaUserRepository): Response
    {
        $form = $this->createForm(AsignarProductoaUserType::class, $asignarProductoaUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $asignarProductoaUserRepository->add($asignarProductoaUser);
            return $this->redirectToRoute('app_asignar_productoa_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('asignar_productoa_user/edit.html.twig', [
            'asignar_productoa_user' => $asignarProductoaUser,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_asignar_productoa_user_delete", methods={"POST"})
     */
    public function delete(Request $request, AsignarProductoaUser $asignarProductoaUser, AsignarProductoaUserRepository $asignarProductoaUserRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $asignarProductoaUser->getId(), $request->request->get('_token'))) {
            $asignarProductoaUserRepository->remove($asignarProductoaUser);
        }

        return $this->redirectToRoute('app_asignar_productoa_user_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getParametrosAUP(Request $request): array
    {
        $filters = array('usuario' => '');

        if (!is_null($request->query->get('usuario_search')) && !empty($request->query->get('usuario_search'))) {
            $filters['usuario'] = $request->query->get('usuario_search');
        }

        return $filters;
    }
}
