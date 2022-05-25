<?php

namespace App\Controller;

use App\Entity\Servicio;
use App\Form\ServicioType;
use App\Repository\ServicioRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/servicio")
 */
class ServicioController extends AbstractController
{
    /**
     * @Route("/", name="app_servicio_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ServicioRepository $servicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';

            return $this->render('servicio/index.html.twig', [
                'servicios' => $servicioRepository->findAll(),
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
                'service' => 1,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('servicio/index.html.twig', [
                'servicios' => $servicioRepository->findAll(),
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
                'royaltiesp' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }


    /**
     * @Route("/new", name="app_servicio_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ServicioRepository $servicioRepository, SluggerInterface $slugger): Response
    {
        $servicio = new Servicio();
        $form = $this->createForm(ServicioType::class, $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('imagen')->getData();
            $brochureDoc = $form->get('documento')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile || $brochureDoc) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $originalDocname = pathinfo($brochureDoc->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $safeDocname = $slugger->slug($originalDocname);


                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
                $newDocname = $safeDocname . '-' . uniqid() . '.' . $brochureDoc->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename);
                    $brochureDoc->move(
                        $this->getParameter('brochures_directory'),
                        $newDocname);
                } catch (FileException $e) {
                    echo 'Error en la subida de la imagen';
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $servicio->setImagen($newFilename);
                $servicio->setDocumento($newDocname);
            }
            if ($request->request->all()['servicio']['iv'] == 'otro') {
                $servicio->setIv($request->request->all()['nuevo']);
                $servicioRepository->add($servicio);
                return $this->redirectToRoute('app_servicio_index', [], Response::HTTP_SEE_OTHER);

            } else {
                $servicioRepository->add($servicio);
                return $this->redirectToRoute('app_servicio_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('servicio/new.html.twig', [
            'servicio' => $servicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_servicio_show", methods={"GET"})
     */
    public function show(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, Servicio $servicio): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';

            return $this->render('servicio/show.html.twig', [
                'servicio' => $servicio,
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
                'service' => 1,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('servicio/show.html.twig', [
                'servicio' => $servicio,
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
                'royaltiesp' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }


    /**
     * @Route("/{id}/edit", name="app_servicio_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Servicio $servicio, ServicioRepository $servicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(ServicioType::class, $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $servicioRepository->add($servicio);
            return $this->redirectToRoute('app_servicio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('servicio/edit.html.twig', [
            'servicio' => $servicio,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_servicio_delete", methods={"POST"})
     */
    public function delete(Request $request, Servicio $servicio, ServicioRepository $servicioRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $servicio->getId(), $request->request->get('_token'))) {
            $servicioRepository->remove($servicio);
        }

        return $this->redirectToRoute('app_servicio_index', [], Response::HTTP_SEE_OTHER);
    }
}
