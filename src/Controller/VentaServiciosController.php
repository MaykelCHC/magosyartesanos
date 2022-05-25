<?php

namespace App\Controller;

use App\Entity\VentaServicios;
use App\Form\VentaServiciosType;
use App\Repository\UserRepository;
use App\Repository\VentaServiciosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/venta_servicios")
 */
class VentaServiciosController extends AbstractController
{
    /**
     * @Route("/", name="app_venta_servicios_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, VentaServiciosRepository $ventaServiciosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('venta_servicios/index.html.twig', [
            'venta_servicios' => $ventaServiciosRepository->findAll(),
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
            'vp' => 0,
            'royaltiesp' => 0,
            'vs' => 1,
        ]);
    }


    /**
     * @Route("/new", name="app_venta_servicios_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, VentaServiciosRepository $ventaServiciosRepository, SluggerInterface $slugger): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $ventaServicio = new VentaServicios();
        $form = $this->createForm(VentaServiciosType::class, $ventaServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $brochureFile */
            $brochureDoc = $form->get('documento')->getData();

            if ($brochureDoc) {
                $originalDocname = pathinfo($brochureDoc->getClientOriginalName(), PATHINFO_FILENAME);
                $safeDocname = $slugger->slug($originalDocname);
                $newDocname = $safeDocname . '-' . uniqid() . '.' . $brochureDoc->guessExtension();

                try {
                    $brochureDoc->move(
                        $this->getParameter('brochures_directory'),
                        $newDocname);
                } catch (FileException $e) {
                    echo 'Error en la subida de la pdf';
                }
                $ventaServicio->setDocumento($newDocname);
            }
            $ventaServicio->setFecha(new \DateTime('@' . strtotime('now')));
            $ventaServiciosRepository->add($ventaServicio);
            return $this->redirectToRoute('app_venta_servicios_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_servicios/new.html.twig', [
            'venta_servicio' => $ventaServicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_servicios_show", methods={"GET"})
     */
    public function show(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, VentaServicios $ventaServicio): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('venta_servicios/show.html.twig', [
            'venta_servicio' => $ventaServicio,
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
            'vp' => 0,
            'royaltiesp' => 0,
            'vs' => 1,
        ]);

    }


    /**
     * @Route("/{id}/edit", name="app_venta_servicios_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, VentaServicios $ventaServicio, SluggerInterface $slugger, VentaServiciosRepository $ventaServiciosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(VentaServiciosType::class, $ventaServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureDoc = $form->get('documento')->getData();

            if ($brochureDoc) {
                $originalDocname = pathinfo($brochureDoc->getClientOriginalName(), PATHINFO_FILENAME);
                $safeDocname = $slugger->slug($originalDocname);
                $newDocname = $safeDocname . '-' . uniqid() . '.' . $brochureDoc->guessExtension();

                try {
                    $brochureDoc->move(
                        $this->getParameter('brochures_directory'),
                        $newDocname);
                } catch (FileException $e) {
                    echo 'Error en la subida de la pdf';
                }
                $ventaServicio->setDocumento($newDocname);
            }
            $ventaServicio->setFecha(new \DateTime('@' . strtotime('now')));
            $ventaServiciosRepository->add($ventaServicio);

            return $this->redirectToRoute('app_venta_servicios_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('venta_servicios/edit.html.twig', [
            'venta_servicio' => $ventaServicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_venta_servicios_delete", methods={"POST"})
     */
    public function delete(Request $request, VentaServicios $ventaServicio, VentaServiciosRepository $ventaServiciosRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $ventaServicio->getId(), $request->request->get('_token'))) {
            $ventaServiciosRepository->remove($ventaServicio);
        }

        return $this->redirectToRoute('app_venta_servicios_index', [], Response::HTTP_SEE_OTHER);
    }
}
