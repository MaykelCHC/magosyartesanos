<?php

namespace App\Controller;

use App\Entity\Bizum;
use App\Form\BizumType;
use App\Repository\BizumRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/bizum")
 */
class BizumController extends AbstractController
{
    /**
     * @Route("/", name="app_bizum_index", methods={"GET"})
     */
    public function index(BizumRepository $bizumRepository, AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('bizum/index.html.twig', [
                'bizums' => $bizumRepository->findAll(),
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
                'service' => 0,
                'buy' => 1,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('bizum/index.html.twig', [
                'users' => $userRepository->findAll(),
                'bizums' => $bizumRepository->findAll(),
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
                'royaltiesp' => 0,
                'buy' => 1,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }

    /**
     * @Route("/new", name="app_bizum_new", methods={"GET", "POST"})
     */
    public function new(Request $request, BizumRepository $bizumRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $bizum = new Bizum();
        $form = $this->createForm(BizumType::class, $bizum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bizumRepository->add($bizum);
            return $this->redirectToRoute('app_bizum_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bizum/new.html.twig', [
            'bizum' => $bizum,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_bizum_show", methods={"GET"})
     */
    public function show(Bizum $bizum): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('bizum/show.html.twig', [
            'bizum' => $bizum,
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
            'royaltiesp' => 0,
            'buy' => 1,
            'vp' => 0,
            'vs' => 0,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_bizum_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Bizum $bizum, BizumRepository $bizumRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(BizumType::class, $bizum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bizumRepository->add($bizum);
            return $this->redirectToRoute('app_bizum_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bizum/edit.html.twig', [
            'bizum' => $bizum,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_bizum_delete", methods={"POST"})
     */
    public function delete(Request $request, Bizum $bizum, BizumRepository $bizumRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $bizum->getId(), $request->request->get('_token'))) {
            $bizumRepository->remove($bizum);
        }

        return $this->redirectToRoute('app_bizum_index', [], Response::HTTP_SEE_OTHER);
    }
}
