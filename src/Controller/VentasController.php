<?php

namespace App\Controller;

<<<<<<< Updated upstream
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
=======
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductosRepository;
use App\Repository\VentaServiciosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
>>>>>>> Stashed changes

class VentasController extends AbstractController
{
    /**
     * @Route("/ventas", name="app_ventas")
     */
<<<<<<< Updated upstream
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
=======
    public function index(ProductoRepository $productoRepository, VentaProductosRepository $ventaProductosRepository, VentaServiciosRepository $ventaServiciosRepository, UserRepository $userRepository): Response
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
            return $this->render('ventas/index.html.twig', [
                'nombrecliente' => $nombre,
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 1,
                'asignar' => 0,
                'recogida' => 0,
                'usuar' => 0,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
        } else {
            return $this->render('ventas/index.html.twig', [
                'nombrecliente' => $nombre[0]['nombre'],
                'users' => $userRepository->findAll(),
                'resumen' => 0,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'ventas' => 1,
                'asignar' => 0,
                'recogida' => 0,
                'usuar' => 0,
                'product' => 0,
                'service' => 0,
                'buy' => 0,
                'vp' => 0,
                'vs' => 0,
            ]);
=======
        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $resultados = $ventaProductosRepository->dadoIDusuarioobtenertodo($id[0]['id']);

        return $this->render('ventas/index.html.twig', [
            'users' => $userRepository->findAll(),
            'infoproductos' => $resultados,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 1,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 0,
            'service' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'royaltiesp' => 0,
            'ventasdiarias' => $ventaProductosRepository->ventasdiarias($id[0]['id']),
            'ventasmensual' => $ventaProductosRepository->ventasmensuales($id[0]['id']),
            'ventassemanales' => $ventaProductosRepository->ventassemanales($id[0]['id']),
        ]);
    }

    /**
     * @Route("/ventas_filtrado", options={"expose"=true}, name="ventas_filtrado", methods={"POST"})
     */
    public function filtrardatos(Request $request, UserRepository $userRepository, VentaProductosRepository $ventaProductosRepository): Response
    {
        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);

        if ($request->isXmlHttpRequest()) {
            $parametros = $request->request->all();
            $orden = $parametros['orden'];
            $tamano = $parametros['tamano'];
            $fechaini = $parametros['fechaini'];
            $fechafin = $parametros['fechafin'];

            $resultado = $ventaProductosRepository->filtrardatos($id[0]['id'], $fechaini, $fechafin, $tamano, $orden);
            var_dump($resultado);
            die();
            return $this->render('ventas/index.html.twig');
        } else {
            throw new Exception('Error recibiendo los datos');
        }
    }

    /**
     * @Route("/obtener_datos", options={"expose"=true}, name="obtener_datos", methods={"POST"})
     */
    public function datoslistos(Request $request, VentaProductosRepository $ventaProductosRepository): Response
    {
        if ($request->isXmlHttpRequest()) {
            $parametros = $request->request->all();
            $resultados = $ventaProductosRepository->dadoproductoobteneruserroyal($parametros['producto']);
            return new JsonResponse($resultados);
        } else {
            throw new Exception('Esta intentando entrar por JS');
>>>>>>> Stashed changes
        }
    }
}
