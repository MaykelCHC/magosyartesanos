<?php

namespace App\Controller;

use App\Entity\Producto;
<<<<<<< Updated upstream
use App\Form\ProductoType;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
=======
use App\Entity\User;
use App\Form\ProductoType;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
>>>>>>> Stashed changes

/**
 * @Route("/producto")
 */
class ProductoController extends AbstractController
{
    /**
     * @Route("/", name="app_producto_index", methods={"GET"})
     */
<<<<<<< Updated upstream
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ProductoRepository $productoRepository): Response
=======
    public function index(UserRepository $userRepository, ProductoRepository $productoRepository): Response
>>>>>>> Stashed changes
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

<<<<<<< Updated upstream
        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';

            return $this->render('producto/index.html.twig', [
                'productos' => $productoRepository->findAll(),
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
                'product' => 1,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('producto/index.html.twig', [
                'productos' => $productoRepository->findAll(),
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
                'product' => 1,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }

    /**
     * @Route("/new", name="app_producto_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ProductoRepository $productoRepository): Response
    {
        $producto = new Producto();
=======
        return $this->render('producto/index.html.twig', [
            'productos' => $productoRepository->findAll(),
            'users' => $userRepository->findAll(),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'royaltiesp' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 1,
            'service' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
        ]);
    }


    /**
     * @Route("/new", name="app_producto_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $producto = new Producto();

>>>>>>> Stashed changes
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< Updated upstream
            $productoRepository->add($producto);
            return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
=======


                $user = $entityManager->getRepository(User::class)->find($request->request->get('producto')['usuarioid']);
                $producto->addUsuarioid($user);

            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('imagen')->getData();


            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    echo 'Error en la subida de la imagen';
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $producto->setImagen($newFilename);
            }

            if ($request->request->all()['producto']['iv'] == 'otro') {
                $producto->setIv($request->request->all()['nuevo']);
                $entityManager->persist($producto);
                $entityManager->flush();

                return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $entityManager->persist($producto);
                $entityManager->flush();

                return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);

            }
>>>>>>> Stashed changes
        }

        return $this->renderForm('producto/new.html.twig', [
            'producto' => $producto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_producto_show", methods={"GET"})
     */
<<<<<<< Updated upstream
    public function show(Producto $producto): Response
    {
        return $this->render('producto/show.html.twig', [
            'producto' => $producto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_producto_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Producto $producto, ProductoRepository $productoRepository): Response
=======
    public function show(UserRepository $userRepository, ProductoRepository $productoRepository, Producto $producto): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('producto/show.html.twig', [
            'productos' => $productoRepository->findAll(),
            'users' => $userRepository->findAll(),
            'royaltiesp' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'producto' => $producto,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 1,
            'service' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="app_producto_edit", methods={"GET", "POST"})
     */
    public
    function edit(Request $request, Producto $producto, EntityManagerInterface $entityManager,SluggerInterface $slugger): Response
>>>>>>> Stashed changes
    {
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< Updated upstream
            $productoRepository->add($producto);
            return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
=======

            foreach ($request->request->get('producto')['usuarioid'] as $Userid) {
                $user = $entityManager->getRepository(User::class)->find($Userid);
                $producto->addUsuarioid($user);
            }
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('imagen')->getData();

            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    echo 'Error en la subida de la imagen';
                }

                $producto->setImagen($newFilename);
            }

            if ($request->request->all()['producto']['iv'] == 'otro') {
                $producto->setIv($request->request->all()['nuevo']);
                $entityManager->persist($producto);
                $entityManager->flush();

                return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $entityManager->persist($producto);
                $entityManager->flush();

                return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
            }
>>>>>>> Stashed changes
        }

        return $this->renderForm('producto/edit.html.twig', [
            'producto' => $producto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_producto_delete", methods={"POST"})
     */
<<<<<<< Updated upstream
    public function delete(Request $request, Producto $producto, ProductoRepository $productoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $producto->getId(), $request->request->get('_token'))) {
            $productoRepository->remove($producto);
=======
    public
    function delete(Request $request, Producto $producto, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $producto->getId(), $request->request->get('_token'))) {
            $entityManager->remove($producto);
            $entityManager->flush();
>>>>>>> Stashed changes
        }

        return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
    }
}
