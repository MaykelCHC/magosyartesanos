<?php

namespace App\Controller;

use App\Entity\SolicitudPago;
use App\Form\SolicitudPagoType;
use App\Repository\SolicitudPagoRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/solicitud/pago")
 */
class SolicitudPagoController extends AbstractController
{
    /**
     * @Route("/", name="app_solicitud_pago_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, SolicitudPagoRepository $solicitudPagoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('solicitud_pago/index.html.twig', [
                'solicitud_pagos' => $solicitudPagoRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre,
                'resumen' => 1,
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
                'buy' => 0,
                'vp' => 0,
                'vs' => 1,
            ]);
        } else {
            return $this->render('solicitud_pago/index.html.twig', [
                'solicitud_pagos' => $solicitudPagoRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre[0]['nombre'],
                'resumen' => 1,
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
                'buy' => 0,
                'vp' => 0,
                'vs' => 1,
            ]);
        }
    }

    /**
     * @Route("/new", name="app_solicitud_pago_new", methods={"GET", "POST"})
     */
    public
    function new(Request $request, SolicitudPagoRepository $solicitudPagoRepository): Response
    {
        $solicitudPago = new SolicitudPago();
        $form = $this->createForm(SolicitudPagoType::class, $solicitudPago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $solicitudPagoRepository->add($solicitudPago);
            return $this->redirectToRoute('app_solicitud_pago_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitud_pago/new.html.twig', [
            'solicitud_pago' => $solicitudPago,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitud_pago_show", methods={"GET"})
     */
    public function show(SolicitudPago $solicitudPago): Response
    {
        return $this->render('solicitud_pago/show.html.twig', [
            'solicitud_pago' => $solicitudPago,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_solicitud_pago_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, SolicitudPago $solicitudPago, SolicitudPagoRepository $solicitudPagoRepository): Response
    {
        $form = $this->createForm(SolicitudPagoType::class, $solicitudPago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $solicitudPagoRepository->add($solicitudPago);
            return $this->redirectToRoute('app_solicitud_pago_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitud_pago/edit.html.twig', [
            'solicitud_pago' => $solicitudPago,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitud_pago_delete", methods={"POST"})
     */
    public function delete(Request $request, SolicitudPago $solicitudPago, SolicitudPagoRepository $solicitudPagoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $solicitudPago->getId(), $request->request->get('_token'))) {
            $solicitudPagoRepository->remove($solicitudPago);
        }

        return $this->redirectToRoute('app_solicitud_pago_index', [], Response::HTTP_SEE_OTHER);
    }
}
