<?php

namespace App\Controller;

use App\Entity\SolicitarPagoRoyalAcumulado;
use App\Form\SolicitarPagoRoyalAcumuladoType;
use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/solicitarpago_royalacumulado")
 */
class SolicitarPagoRoyalAcumuladoController extends AbstractController
{
    /**
     * @Route("/", name="app_solicitar_pago_royal_acumulado_index", methods={"GET"})
     */
    public function index(SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository): Response
    {
        return $this->render('solicitar_pago_royal_acumulado/index.html.twig', [
            'solicitar_pago_royal_acumulados' => $solicitarPagoRoyalAcumuladoRepository->findAll(),
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


    /**
     * @Route("/new", name="app_solicitar_pago_royal_acumulado_new", methods={"GET", "POST"})
     */
    public function new(Request $request, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository): Response
    {
        $solicitarPagoRoyalAcumulado = new SolicitarPagoRoyalAcumulado();
        $form = $this->createForm(SolicitarPagoRoyalAcumuladoType::class, $solicitarPagoRoyalAcumulado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datetime = new DateTime();

            $solicitarPagoRoyalAcumulado->setFecha($datetime);
            $solicitarPagoRoyalAcumuladoRepository->add($solicitarPagoRoyalAcumulado);
            return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_pago_royal_acumulado/new.html.twig', [
            'solicitar_pago_royal_acumulado' => $solicitarPagoRoyalAcumulado,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_pago_royal_acumulado_show", methods={"GET"})
     */
    public function show(SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado): Response
    {
        return $this->render('solicitar_pago_royal_acumulado/show.html.twig', [
            'solicitar_pago_royal_acumulado' => $solicitarPagoRoyalAcumulado,
            'royaltiesacum' => 0,
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

    /**
     * @Route("/{id}/edit", name="app_solicitar_pago_royal_acumulado_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository): Response
    {
        $form = $this->createForm(SolicitarPagoRoyalAcumuladoType::class, $solicitarPagoRoyalAcumulado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datetime = new DateTime();

            $solicitarPagoRoyalAcumulado->setFecha($datetime);
            $solicitarPagoRoyalAcumuladoRepository->add($solicitarPagoRoyalAcumulado);
            return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_pago_royal_acumulado/edit.html.twig', [
            'solicitar_pago_royal_acumulado' => $solicitarPagoRoyalAcumulado,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_pago_royal_acumulado_delete", methods={"POST"})
     */
    public function delete(Request $request, SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $solicitarPagoRoyalAcumulado->getId(), $request->request->get('_token'))) {
            $solicitarPagoRoyalAcumuladoRepository->remove($solicitarPagoRoyalAcumulado);
        }

        return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', [], Response::HTTP_SEE_OTHER);
    }
}
