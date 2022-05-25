<?php

namespace App\Controller;

use App\Entity\Producto;
use App\Entity\VentaProductos;
use App\Form\VentaProductosType;
use App\Repository\UserRepository;
use App\Repository\VentaProductosRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/venta_productos")
 */
class VentaProductosController extends AbstractController
{
    /**
     * @Route("/", name="app_venta_productos_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository, VentaProductosRepository $ventaProductosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('venta_productos/index.html.twig', [
            'venta_productos' => $ventaProductosRepository->findAll(),
            'totalu' => $userRepository->totalusers(),
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
            'buy' => 0,
            'royaltiesp' => 0,
            'vp' => 1,
            'vs' => 0,
        ]);
    }


    /**
     * @Route("/new", name="app_venta_productos_new", methods={"GET", "POST"})
     * @throws Exception
     */
    public function new(Request $request, EntityManagerInterface $entityManager, VentaProductosRepository $ventaProductosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $ventaProducto = new VentaProductos();
        $form = $this->createForm(VentaProductosType::class, $ventaProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $user = $entityManager->getRepository(Producto::class)->find($request->request->get('venta_productos')['listadoproducto']);
            $ventaProducto->addListadoproducto($user);
            $ventaProducto->setRoyaltie($request->request->get('royaltie'));
            $datetime = new DateTime();
            $ventaProducto->setFecha($datetime);
            $ventaProductosRepository->add($ventaProducto);
            return $this->redirectToRoute('app_venta_productos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_productos/new.html.twig', [
            'venta_producto' => $ventaProducto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_productos_show", methods={"GET"})
     */
    public function show(VentaProductos $ventaProducto, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('venta_productos/show.html.twig', [
            'venta_producto' => $ventaProducto,
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
            'royaltiesp' => 0,
            'vs' => 0,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="app_venta_productos_edit", methods={"GET", "POST"})
     * @throws Exception
     */
    public
    function edit(Request $request, EntityManagerInterface $entityManager, VentaProductos $ventaProducto, VentaProductosRepository $ventaProductosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(VentaProductosType::class, $ventaProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $entityManager->getRepository(Producto::class)->find($request->request->get('venta_productos')['listadoproducto']);
            $ventaProducto->addListadoproducto($user);
            $datetime = new DateTime();
            $ventaProducto->setRoyaltie($request->request->get('royaltie'));
            $ventaProducto->setFecha($datetime);
            $ventaProductosRepository->add($ventaProducto);
            return $this->redirectToRoute('app_venta_productos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_productos/edit.html.twig', [
            'venta_producto' => $ventaProducto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_productos_delete", methods={"POST"})
     */
    public
    function delete(Request $request, VentaProductos $ventaProducto, VentaProductosRepository $ventaProductosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $ventaProducto->getId(), $request->request->get('_token'))) {
            $ventaProductosRepository->remove($ventaProducto);
        }

        return $this->redirectToRoute('app_venta_productos_index', [], Response::HTTP_SEE_OTHER);
    }


}
