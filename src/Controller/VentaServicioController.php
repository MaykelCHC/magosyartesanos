<?php

namespace App\Controller;

use App\Entity\VentaServicio;
use App\Form\VentaServicioType;
use App\Repository\UserRepository;
use App\Repository\VentaServicioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/venta/servicio")
 */
class VentaServicioController extends AbstractController
{
    /**
     * @Route("/", name="app_venta_servicio_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, VentaServicioRepository $ventaServicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('venta_servicio/index.html.twig', [
                'venta_servicios' => $ventaServicioRepository->findAll(),
                'users' => $userRepository->findAll(),
                'nombrecliente' => $nombre,
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
                'buy' => 0,
                'vp' => 0,
                'vs' => 1,
            ]);
        } else {
            return $this->render('venta_servicio/index.html.twig', [
                'venta_servicios' => $ventaServicioRepository->findAll(),
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
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 1,
            ]);
        }
    }

    /**
     * @Route("/new", name="app_venta_servicio_new", methods={"GET", "POST"})
     */
    public
    function new(Request $request, VentaServicioRepository $ventaServicioRepository): Response
    {
        $ventaServicio = new VentaServicio();
        $form = $this->createForm(VentaServicioType::class, $ventaServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ventaServicioRepository->add($ventaServicio);
            return $this->redirectToRoute('app_venta_servicio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_servicio/new.html.twig', [
            'venta_servicio' => $ventaServicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_servicio_show", methods={"GET"})
     */
    public function show(VentaServicio $ventaServicio): Response
    {
        return $this->render('venta_servicio/show.html.twig', [
            'venta_servicio' => $ventaServicio,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_venta_servicio_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, VentaServicio $ventaServicio, VentaServicioRepository $ventaServicioRepository): Response
    {
        $form = $this->createForm(VentaServicioType::class, $ventaServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ventaServicioRepository->add($ventaServicio);
            return $this->redirectToRoute('app_venta_servicio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_servicio/edit.html.twig', [
            'venta_servicio' => $ventaServicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_servicio_delete", methods={"POST"})
     */
    public function delete(Request $request, VentaServicio $ventaServicio, VentaServicioRepository $ventaServicioRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $ventaServicio->getId(), $request->request->get('_token'))) {
            $ventaServicioRepository->remove($ventaServicio);
        }

        return $this->redirectToRoute('app_venta_servicio_index', [], Response::HTTP_SEE_OTHER);
    }
}
