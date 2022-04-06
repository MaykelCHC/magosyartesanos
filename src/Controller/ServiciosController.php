<?php

namespace App\Controller;

use App\Entity\Servicios;
use App\Form\ServiciosType;
use App\Repository\ServiciosRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/servicios")
 */
class ServiciosController extends AbstractController
{
    /**
     * @Route("/", name="app_servicios_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ServiciosRepository $serviciosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('servicios/index.html.twig', [
                'servicios' => $serviciosRepository->findAll(),
                'nombrecliente' => $nombre,
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
                'service' => 1,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('servicios/index.html.twig', [
                'servicios' => $serviciosRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre[0]['nombre'],
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
                'service' => 1,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }

    /**
     * @Route("/new", name="app_servicios_new", methods={"GET", "POST"})
     */
    public
    function new(Request $request, ServiciosRepository $serviciosRepository): Response
    {
        $servicio = new Servicios();
        $form = $this->createForm(ServiciosType::class, $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviciosRepository->add($servicio);
            return $this->redirectToRoute('app_servicios_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('servicios/new.html.twig', [
            'servicio' => $servicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_servicios_show", methods={"GET"})
     */
    public function show(Servicios $servicio): Response
    {
        return $this->render('servicios/show.html.twig', [
            'servicio' => $servicio,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_servicios_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Servicios $servicio, ServiciosRepository $serviciosRepository): Response
    {
        $form = $this->createForm(ServiciosType::class, $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviciosRepository->add($servicio);
            return $this->redirectToRoute('app_servicios_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('servicios/edit.html.twig', [
            'servicio' => $servicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_servicios_delete", methods={"POST"})
     */
    public function delete(Request $request, Servicios $servicio, ServiciosRepository $serviciosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $servicio->getId(), $request->request->get('_token'))) {
            $serviciosRepository->remove($servicio);
        }

        return $this->redirectToRoute('app_servicios_index', [], Response::HTTP_SEE_OTHER);
    }
}
