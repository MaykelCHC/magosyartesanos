<?php

namespace App\Controller;

use App\Entity\TransferenciaBancaria;
use App\Form\TransferenciaBancariaType;
use App\Repository\TransferenciaBancariaRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/transferencia_bancaria")
 */
class TransferenciaBancariaController extends AbstractController
{
    /**
     * @Route("/", name="app_transferencia_bancaria_index", methods={"GET"})
     */
    public function index(TransferenciaBancariaRepository $transferenciaBancariaRepository, AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('transferencia_bancaria/index.html.twig', [
                'nombrecliente' => $nombre,
                'transferencia_bancarias' => $transferenciaBancariaRepository->findAll(),
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
            return $this->render('transferencia_bancaria/index.html.twig', [
                'users' => $userRepository->findAll(),
                'transferencia_bancarias' => $transferenciaBancariaRepository->findAll(),
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
     * @Route("/new", name="app_transferencia_bancaria_new", methods={"GET", "POST"})
     */
    public function new(Request $request, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        $transferenciaBancarium = new TransferenciaBancaria();
        $form = $this->createForm(TransferenciaBancariaType::class, $transferenciaBancarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transferenciaBancariaRepository->add($transferenciaBancarium);
            return $this->redirectToRoute('app_transferencia_bancaria_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('transferencia_bancaria/new.html.twig', [
            'transferencia_bancarium' => $transferenciaBancarium,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_transferencia_bancaria_show", methods={"GET"})
     */
    public function show(TransferenciaBancaria $transferenciaBancarium, AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('transferencia_bancaria/show.html.twig', [
                'transferencia_bancarium' => $transferenciaBancarium,
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
            return $this->render('transferencia_bancaria/show.html.twig', [
                'transferencia_bancarium' => $transferenciaBancarium,
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
     * @Route("/{id}/edit", name="app_transferencia_bancaria_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, TransferenciaBancaria $transferenciaBancarium, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(TransferenciaBancariaType::class, $transferenciaBancarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transferenciaBancariaRepository->add($transferenciaBancarium);
            return $this->redirectToRoute('app_transferencia_bancaria_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('transferencia_bancaria/edit.html.twig', [
            'transferencia_bancarium' => $transferenciaBancarium,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_transferencia_bancaria_delete", methods={"POST"})
     */
    public function delete(Request $request, TransferenciaBancaria $transferenciaBancarium, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $transferenciaBancarium->getId(), $request->request->get('_token'))) {
            $transferenciaBancariaRepository->remove($transferenciaBancarium);
        }

        return $this->redirectToRoute('app_transferencia_bancaria_index', [], Response::HTTP_SEE_OTHER);
    }
}
