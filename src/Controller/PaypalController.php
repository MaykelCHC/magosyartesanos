<?php

namespace App\Controller;

use App\Entity\Paypal;
use App\Form\PaypalType;
use App\Repository\PaypalRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/paypal")
 */
class PaypalController extends AbstractController
{
    /**
     * @Route("/", name="app_paypal_index", methods={"GET"})
     */
    public function index(PaypalRepository $paypalRepository,AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('paypal/index.html.twig', [
                'nombrecliente' => $nombre,
                'paypals' => $paypalRepository->findAll(),
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
            return $this->render('paypal/index.html.twig', [
                'users' => $userRepository->findAll(),
                'paypals' => $paypalRepository->findAll(),
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
        }
    }


    /**
     * @Route("/new", name="app_paypal_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PaypalRepository $paypalRepository): Response
    {
        $paypal = new Paypal();
        $form = $this->createForm(PaypalType::class, $paypal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paypalRepository->add($paypal);
            return $this->redirectToRoute('app_paypal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paypal/new.html.twig', [
            'paypal' => $paypal,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_paypal_show", methods={"GET"})
     */
    public function show(Paypal $paypal): Response
    {
        return $this->render('paypal/show.html.twig', [
            'paypal' => $paypal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_paypal_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Paypal $paypal, PaypalRepository $paypalRepository): Response
    {
        $form = $this->createForm(PaypalType::class, $paypal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paypalRepository->add($paypal);
            return $this->redirectToRoute('app_paypal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paypal/edit.html.twig', [
            'paypal' => $paypal,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_paypal_delete", methods={"POST"})
     */
    public function delete(Request $request, Paypal $paypal, PaypalRepository $paypalRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$paypal->getId(), $request->request->get('_token'))) {
            $paypalRepository->remove($paypal);
        }

        return $this->redirectToRoute('app_paypal_index', [], Response::HTTP_SEE_OTHER);
    }
}
