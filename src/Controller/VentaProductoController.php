<?php

namespace App\Controller;

use App\Entity\VentaProducto;
use App\Form\VentaProductoType;
use App\Repository\UserRepository;
use App\Repository\VentaProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/venta/producto")
 */
class VentaProductoController extends AbstractController
{
    /**
     * @Route("/", name="app_venta_producto_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, VentaProductoRepository $ventaProductoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('venta_producto/index.html.twig', [
                'venta_productos' => $ventaProductoRepository->findAll(),
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
                'vp' => 1,
                'vs' => 0,
            ]);
        } else {
            return $this->render('venta_producto/index.html.twig', [
                'venta_productos' => $ventaProductoRepository->findAll(),
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'nombrecliente' => $nombre[0]['nombre'],
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
                'vp' => 1,
                'vs' => 0,
            ]);
        }
    }

    /**
     * @Route("/new", name="app_venta_producto_new", methods={"GET", "POST"})
     */
    public function new(Request $request, VentaProductoRepository $ventaProductoRepository): Response
    {
        $ventaProducto = new VentaProducto();
        $form = $this->createForm(VentaProductoType::class, $ventaProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ventaProductoRepository->add($ventaProducto);
            return $this->redirectToRoute('app_venta_producto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_producto/new.html.twig', [
            'venta_producto' => $ventaProducto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_producto_show", methods={"GET"})
     */
    public function show(VentaProducto $ventaProducto): Response
    {
        return $this->render('venta_producto/show.html.twig', [
            'venta_producto' => $ventaProducto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_venta_producto_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, VentaProducto $ventaProducto, VentaProductoRepository $ventaProductoRepository): Response
    {
        $form = $this->createForm(VentaProductoType::class, $ventaProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ventaProductoRepository->add($ventaProducto);
            return $this->redirectToRoute('app_venta_producto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_producto/edit.html.twig', [
            'venta_producto' => $ventaProducto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_producto_delete", methods={"POST"})
     */
    public function delete(Request $request, VentaProducto $ventaProducto, VentaProductoRepository $ventaProductoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $ventaProducto->getId(), $request->request->get('_token'))) {
            $ventaProductoRepository->remove($ventaProducto);
        }

        return $this->redirectToRoute('app_venta_producto_index', [], Response::HTTP_SEE_OTHER);
    }
}
