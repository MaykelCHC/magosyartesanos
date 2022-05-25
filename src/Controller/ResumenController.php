<?php

namespace App\Controller;

use App\Repository\ProductoRepository;
<<<<<<< Updated upstream
use App\Repository\ServiciosRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductoRepository;
use App\Repository\VentaServicioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
=======
use App\Repository\ServicioRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductosRepository;
use App\Repository\VentaServiciosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
>>>>>>> Stashed changes
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ResumenController extends AbstractController
{
    /**
<<<<<<< Updated upstream
     * @Route("/", name="app_resumen")
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ProductoRepository $productoRepository, ServiciosRepository $serviciosRepository, VentaServicioRepository $ventaServicioRepository, VentaProductoRepository $ventaProductoRepository)
=======
     *
     * @Route("/", name="app_resumen")
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ProductoRepository $productoRepository, ServicioRepository $serviciosRepository, VentaServiciosRepository $ventaServicioRepository, VentaProductosRepository $ventaProductoRepository): Response
>>>>>>> Stashed changes
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

<<<<<<< Updated upstream
        setlocale(LC_ALL, "es_ES");
        $datofecha = date("l jS \of F Y ");

        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->nombreUsuarioporEmail($lastUsername);

        if ($nombre == null) {
            $nombre = 'Sin Nombre';
            return $this->render('resumen/index.html.twig', [
                'nombrecliente' => $nombre,
                'totalu' => $userRepository->totalusers(),
                'totalp' => $productoRepository->totalproductos(),
                'users' => $userRepository->findAll(),
                'fecha' => $datofecha,
                'resumen' => 1,
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
                'vs' => 0,
                'ventastotal' => $ventaServicioRepository->ultimos5registros(),
                'ventasptotal' => $ventaProductoRepository->ultimos5registros(),
                'ultimosproductos' => $productoRepository->ultimos5registros(),
                'totals' => $serviciosRepository->totalservicios(),
                'totalv' => $ventaServicioRepository->totalventav() + $ventaProductoRepository->totalventap(),
            ]);
        } else {
            return $this->render('resumen/index.html.twig', [
                'nombrecliente' => $nombre[0]['nombre'],
=======
        $lastUsername = $authenticationUtils->getLastUsername();
        $nombre = $userRepository->obtenerRoldadoEmail($lastUsername);

        if ($nombre[0]['roles'][0] == 'ROLE_USER') {
            return $this->redirectToRoute('app_bienvenido');
        } else {
            setlocale(LC_ALL, "es_ES");
            $datofecha = date("l jS \of F Y ");

            return $this->render('resumen/index.html.twig', [
>>>>>>> Stashed changes
                'totalu' => $userRepository->totalusers(),
                'totalp' => $productoRepository->totalproductos(),
                'users' => $userRepository->findAll(),
                'fecha' => $datofecha,
                'resumen' => 1,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
<<<<<<< Updated upstream
=======
                'royaltiesp' => 0,
>>>>>>> Stashed changes
                'ventas' => 0,
                'asignar' => 0,
                'recogida' => 0,
                'usuar' => 0,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
                'ventastotal' => $ventaServicioRepository->ultimos5registros(),
                'ventasptotal' => $ventaProductoRepository->ultimos5registros(),
                'ultimosproductos' => $productoRepository->ultimos5registros(),
                'totals' => $serviciosRepository->totalservicios(),
                'totalv' => $ventaServicioRepository->totalventav() + $ventaProductoRepository->totalventap(),
            ]);
        }
<<<<<<< Updated upstream
    }

}
=======

    }

    /**
     * @Route("/productos_obtusuarios", name="productos_obtusuarios", options={"expose"=true}, methods={"GET", "POST"})
     */
    public function obtusuarios(Request $request, UserRepository $userRepository): JsonResponse
    {
        if ($request->isXmlHttpRequest()) {
            $parametros = $request->request->all();
            $nombresemp = $userRepository->usuariosasignadosproduct($parametros['apto']);

            echo json_encode($nombresemp);
            die();
        } else {
            throw  new \Exception('Estas intentando acceder en vano');
        }
    }
}


>>>>>>> Stashed changes
