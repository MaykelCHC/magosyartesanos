<?php

namespace App\Controller;

use App\Entity\SolicitarPagoRoyalAcumuladoServicio;
use App\Form\SolicitarPagoRoyalAcumuladoServicioType;
use App\Repository\SolicitarPagoRoyalAcumuladoServicioRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/solicitar_pagoroyalacumu_servicio")
 */
class SolicitarPagoRoyalAcumuladoServicioController extends AbstractController
{
    /**
     * @Route("/", name="app_solicitar_pago_royal_acumulado_servicio_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, SolicitarPagoRoyalAcumuladoServicioRepository $solicitarPagoRoyalAcumuladoServicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('solicitar_pago_royal_acumulado_servicio/index.html.twig', [
            'solicitar_pago_royal_acumulado_servicios' => $solicitarPagoRoyalAcumuladoServicioRepository->findAll(),

            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 1,
            'ventasmensual' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 0,
            'royaltiesp' => 0,
            'service' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
        ]);

    }

    /**
     * @Route("/new", name="app_solicitar_pago_royal_acumulado_servicio_new", methods={"GET", "POST"})
     */
    public
    function new(Request $request, SolicitarPagoRoyalAcumuladoServicioRepository $solicitarPagoRoyalAcumuladoServicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $solicitarPagoRoyalAcumuladoServicio = new SolicitarPagoRoyalAcumuladoServicio();
        $form = $this->createForm(SolicitarPagoRoyalAcumuladoServicioType::class, $solicitarPagoRoyalAcumuladoServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $solicitarPagoRoyalAcumuladoServicioRepository->add($solicitarPagoRoyalAcumuladoServicio);
            return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_servicio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_pago_royal_acumulado_servicio/new.html.twig', [
            'solicitar_pago_royal_acumulado_servicio' => $solicitarPagoRoyalAcumuladoServicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_pago_royal_acumulado_servicio_show", methods={"GET"})
     */
    public function show(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, SolicitarPagoRoyalAcumuladoServicio $solicitarPagoRoyalAcumuladoServicio): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('solicitar_pago_royal_acumulado_servicio/show.html.twig', [
                'solicitar_pago_royal_acumulado_servicio' => $solicitarPagoRoyalAcumuladoServicio,
                'nombrecliente' => $nombre,
                'users' => $userRepository->findAll(),
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
            return $this->render('solicitar_pago_royal_acumulado_servicio/show.html.twig', [
                'solicitar_pago_royal_acumulado_servicio' => $solicitarPagoRoyalAcumuladoServicio,
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 1,
                'ventasmensual' => 0,
                'ventas' => 0,
                'asignar' => 0,
                'recogida' => 0,
                'usuar' => 0,
                'product' => 0,
                'royaltiesp' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }


    /**
     * @Route("/{id}/edit", name="app_solicitar_pago_royal_acumulado_servicio_edit", methods={"GET", "POST"})
     */
    public
    function edit(Request $request, SolicitarPagoRoyalAcumuladoServicio $solicitarPagoRoyalAcumuladoServicio, SolicitarPagoRoyalAcumuladoServicioRepository $solicitarPagoRoyalAcumuladoServicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(SolicitarPagoRoyalAcumuladoServicioType::class, $solicitarPagoRoyalAcumuladoServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $solicitarPagoRoyalAcumuladoServicioRepository->add($solicitarPagoRoyalAcumuladoServicio);
            return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_servicio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_pago_royal_acumulado_servicio/edit.html.twig', [
            'solicitar_pago_royal_acumulado_servicio' => $solicitarPagoRoyalAcumuladoServicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_pago_royal_acumulado_servicio_delete", methods={"POST"})
     */
    public
    function delete(Request $request, SolicitarPagoRoyalAcumuladoServicio $solicitarPagoRoyalAcumuladoServicio, SolicitarPagoRoyalAcumuladoServicioRepository $solicitarPagoRoyalAcumuladoServicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $solicitarPagoRoyalAcumuladoServicio->getId(), $request->request->get('_token'))) {
            $solicitarPagoRoyalAcumuladoServicioRepository->remove($solicitarPagoRoyalAcumuladoServicio);
        }

        return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_servicio_index', [], Response::HTTP_SEE_OTHER);
    }
}
