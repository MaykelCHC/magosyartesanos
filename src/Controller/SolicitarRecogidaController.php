<?php

namespace App\Controller;

use App\Entity\SolicitarRecogida;
use App\Form\SolicitarRecogidaType;
use App\Repository\SolicitarRecogidaRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/solicitar/recogida")
 */
class SolicitarRecogidaController extends AbstractController
{
    /**
     * @Route("/", name="app_solicitar_recogida_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, SolicitarRecogidaRepository $solicitarRecogidaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('solicitar_recogida/index.html.twig', [
                'solicitar_recogidas' => $solicitarRecogidaRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre,
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 0,
                'asignar' => 0,
                'recogida' => 1,
                'usuar' => 0,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('solicitar_recogida/index.html.twig', [
                'solicitar_recogidas' => $solicitarRecogidaRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre[0]['nombre'],
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 0,
                'asignar' => 0,
                'recogida' => 1,
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
     * @Route("/new", name="app_solicitar_recogida_new", methods={"GET", "POST"})
     */
    public
    function new(Request $request, SolicitarRecogidaRepository $solicitarRecogidaRepository): Response
    {
        $solicitarRecogida = new SolicitarRecogida();
        $form = $this->createForm(SolicitarRecogidaType::class, $solicitarRecogida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $solicitarRecogidaRepository->add($solicitarRecogida);
            return $this->redirectToRoute('app_solicitar_recogida_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_recogida/new.html.twig', [
            'solicitar_recogida' => $solicitarRecogida,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_recogida_show", methods={"GET"})
     */
    public function show(SolicitarRecogida $solicitarRecogida): Response
    {
        return $this->render('solicitar_recogida/show.html.twig', [
            'solicitar_recogida' => $solicitarRecogida,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_solicitar_recogida_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, SolicitarRecogida $solicitarRecogida, SolicitarRecogidaRepository $solicitarRecogidaRepository): Response
    {
        $form = $this->createForm(SolicitarRecogidaType::class, $solicitarRecogida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $solicitarRecogidaRepository->add($solicitarRecogida);
            return $this->redirectToRoute('app_solicitar_recogida_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_recogida/edit.html.twig', [
            'solicitar_recogida' => $solicitarRecogida,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_recogida_delete", methods={"POST"})
     */
    public function delete(Request $request, SolicitarRecogida $solicitarRecogida, SolicitarRecogidaRepository $solicitarRecogidaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $solicitarRecogida->getId(), $request->request->get('_token'))) {
            $solicitarRecogidaRepository->remove($solicitarRecogida);
        }

        return $this->redirectToRoute('app_solicitar_recogida_index', [], Response::HTTP_SEE_OTHER);
    }
}
