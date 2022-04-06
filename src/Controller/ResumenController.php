<?php

namespace App\Controller;

use App\Repository\ProductoRepository;
use App\Repository\ServiciosRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductoRepository;
use App\Repository\VentaServicioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ResumenController extends AbstractController
{
    /**
     * @Route("/", name="app_resumen")
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ProductoRepository $productoRepository, ServiciosRepository $serviciosRepository, VentaServicioRepository $ventaServicioRepository, VentaProductoRepository $ventaProductoRepository)
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

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
        }
    }

}
