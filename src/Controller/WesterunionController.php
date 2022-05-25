<?php

namespace App\Controller;

use App\Entity\Westerunion;
use App\Form\WesterunionType;
use App\Repository\UserRepository;
use App\Repository\WesterunionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/westerunion")
 */
class WesterunionController extends AbstractController
{
    /**
     * @Route("/", name="app_westerunion_index", methods={"GET"})
     */
    public function index(WesterunionRepository $westerunionRepository, AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('westerunion/index.html.twig', [
                'nombrecliente' => $nombre,
                'westerunions' => $westerunionRepository->findAll(),
                'users' => $userRepository->findAll(),
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
                'buy' => 1,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('westerunion/index.html.twig', [
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'westerunions' => $westerunionRepository->findAll(),
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
                'buy' => 1,
                'vp' => 0,
                'royaltiesp' => 0,
                'vs' => 0,
            ]);
        }
    }


    /**
     * @Route("/new", name="app_westerunion_new", methods={"GET", "POST"})
     */
    public function new(Request $request, WesterunionRepository $westerunionRepository): Response
    {
        $westerunion = new Westerunion();
        $form = $this->createForm(WesterunionType::class, $westerunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $westerunionRepository->add($westerunion);
            return $this->redirectToRoute('app_westerunion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('westerunion/new.html.twig', [
            'westerunion' => $westerunion,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_westerunion_show", methods={"GET"})
     */
    public function show(Westerunion $westerunion, AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('westerunion/show.html.twig', [
                'nombrecliente' => $nombre,
                'westerunion' => $westerunion,
                'users' => $userRepository->findAll(),
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
                'buy' => 1,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('westerunion/show.html.twig', [
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'westerunion' => $westerunion,
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
                'buy' => 1,
                'vp' => 0,
                'royaltiesp' => 0,
                'vs' => 0,
            ]);
        }
    }

    /**
     * @Route("/{id}/edit", name="app_westerunion_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Westerunion $westerunion, WesterunionRepository $westerunionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(WesterunionType::class, $westerunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $westerunionRepository->add($westerunion);
            return $this->redirectToRoute('app_westerunion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('westerunion/edit.html.twig', [
            'westerunion' => $westerunion,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_westerunion_delete", methods={"POST"})
     */
    public function delete(Request $request, Westerunion $westerunion, WesterunionRepository $westerunionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $westerunion->getId(), $request->request->get('_token'))) {
            $westerunionRepository->remove($westerunion);
        }

        return $this->redirectToRoute('app_westerunion_index', [], Response::HTTP_SEE_OTHER);
    }
}
