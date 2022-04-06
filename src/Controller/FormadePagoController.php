<?php

namespace App\Controller;

use App\Entity\FormadePago;
use App\Form\FormadePagoType;
use App\Repository\FormadePagoRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/formade/pago")
 */
class FormadePagoController extends AbstractController
{
    /**
     * @Route("/", name="app_formade_pago_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, FormadePagoRepository $formadePagoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('formade_pago/index.html.twig', [
                'formade_pagos' => $formadePagoRepository->findAll(),
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
                'nombrecliente' => $nombre,
            ]);
        } else {
            return $this->render('formade_pago/index.html.twig', [
                'formade_pagos' => $formadePagoRepository->findAll(),
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
                'nombrecliente' => $nombre[0]['nombre']
            ]);
        }
    }

    /**
     * @Route("/new", name="app_formade_pago_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FormadePagoRepository $formadePagoRepository): Response
    {
        $formadePago = new FormadePago();
        $form = $this->createForm(FormadePagoType::class, $formadePago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formadePagoRepository->add($formadePago);
            return $this->redirectToRoute('app_formade_pago_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('formade_pago/new.html.twig', [
            'formade_pago' => $formadePago,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_formade_pago_show", methods={"GET"})
     */
    public function show(FormadePago $formadePago): Response
    {
        return $this->render('formade_pago/show.html.twig', [
            'formade_pago' => $formadePago,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_formade_pago_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, FormadePago $formadePago, FormadePagoRepository $formadePagoRepository): Response
    {
        $form = $this->createForm(FormadePagoType::class, $formadePago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formadePagoRepository->add($formadePago);
            return $this->redirectToRoute('app_formade_pago_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('formade_pago/edit.html.twig', [
            'formade_pago' => $formadePago,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_formade_pago_delete", methods={"POST"})
     */
    public function delete(Request $request, FormadePago $formadePago, FormadePagoRepository $formadePagoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $formadePago->getId(), $request->request->get('_token'))) {
            $formadePagoRepository->remove($formadePago);
        }

        return $this->redirectToRoute('app_formade_pago_index', [], Response::HTTP_SEE_OTHER);
    }
}
