<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
<<<<<<< Updated upstream
=======
use App\Repository\ProductoRepository;
>>>>>>> Stashed changes
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="app_user_index", methods={"GET"})
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('user/index.html.twig', [
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
                'usuar' => 1,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('user/index.html.twig', [
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
                'usuar' => 1,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
<<<<<<< Updated upstream
=======
                'royaltiesp' => 0,
>>>>>>> Stashed changes
                'vp' => 0,
                'vs' => 0,
            ]);
        }

    }

    /**
     * @Route("/new", name="app_user_new", methods={"GET", "POST"})
     */
<<<<<<< Updated upstream
    public function new(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder): Response
=======
    public function new(AuthenticationUtils $authenticationUtils, Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder): Response
>>>>>>> Stashed changes
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

<<<<<<< Updated upstream
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($passwordEncoder->encodePassword($user, $form['password']->getData()));
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
=======
        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->obtenerRoldadoEmail($lastUsername);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form['email']->getData();
            $email2 = $userRepository->cantidadUserporEmail($email);

            if ($email2 >= 1) {
                return $this->renderForm('user/new.html.twig', [
                    'user' => $user,
                    'form' => $form,
                    'mensaje' => 1,
                ]);
            } else {
                $user->setRoles(['ROLE_USER']);
                $user->setPassword($passwordEncoder->encodePassword($user, $form['password']->getData()));
                $userRepository->add($user);

                if ($nombre[0]['roles'][0] == 'ROLE_ADMIN') {
                    return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
                } else {
                    return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
                }
            }
>>>>>>> Stashed changes
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
<<<<<<< Updated upstream
=======
            'mensaje' => 0,
>>>>>>> Stashed changes
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     */
<<<<<<< Updated upstream
    public function show(AuthenticationUtils $authenticationUtils, User $user, UserRepository $userRepository): Response
=======
    public function show(User $user, ProductoRepository $productoRepository): Response
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
            return $this->render('user/show.html.twig', [
                'nombrecliente' => $nombre,
                'user' => $user,
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 0,
                'asignar' => 0,
                'recogida' => 0,
                'usuar' => 1,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('user/show.html.twig', [
                'user' => $user,
                'nombrecliente' => $nombre[0]['nombre'],
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 0,
                'asignar' => 0,
                'recogida' => 0,
                'usuar' => 1,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        }
    }

=======
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'productos' => $productoRepository->productosasignados($user->getId()),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 1,
            'product' => 0,
            'service' => 0,
            'royaltiesp' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
        ]);
    }


>>>>>>> Stashed changes
    /**
     * @Route("/{id}/edit", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 1,
            'product' => 0,
            'service' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
<<<<<<< Updated upstream
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
=======
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

>>>>>>> Stashed changes
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
