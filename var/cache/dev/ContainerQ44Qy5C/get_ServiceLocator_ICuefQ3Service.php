<?php

namespace ContainerQ44Qy5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ICuefQ3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iCuefQ3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iCuefQ3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AsignarProductoaUserController::delete' => ['privates', '.service_locator.ZGGSTFo', 'get_ServiceLocator_ZGGSTFoService', true],
            'App\\Controller\\AsignarProductoaUserController::edit' => ['privates', '.service_locator.ZGGSTFo', 'get_ServiceLocator_ZGGSTFoService', true],
            'App\\Controller\\AsignarProductoaUserController::index' => ['privates', '.service_locator.UXXv45b', 'get_ServiceLocator_UXXv45bService', true],
            'App\\Controller\\AsignarProductoaUserController::new' => ['privates', '.service_locator.7zS4ZIu', 'get_ServiceLocator_7zS4ZIuService', true],
            'App\\Controller\\AsignarProductoaUserController::show' => ['privates', '.service_locator.BCmDUCX', 'get_ServiceLocator_BCmDUCXService', true],
            'App\\Controller\\FormadePagoController::delete' => ['privates', '.service_locator.YK0afhl', 'get_ServiceLocator_YK0afhlService', true],
            'App\\Controller\\FormadePagoController::edit' => ['privates', '.service_locator.YK0afhl', 'get_ServiceLocator_YK0afhlService', true],
            'App\\Controller\\FormadePagoController::index' => ['privates', '.service_locator.zcpJe4m', 'get_ServiceLocator_ZcpJe4mService', true],
            'App\\Controller\\FormadePagoController::new' => ['privates', '.service_locator.3HMCmHn', 'get_ServiceLocator_3HMCmHnService', true],
            'App\\Controller\\FormadePagoController::show' => ['privates', '.service_locator.ALnOESz', 'get_ServiceLocator_ALnOESzService', true],
            'App\\Controller\\HistorialPagosController::index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\ProductoController::delete' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController::edit' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController::index' => ['privates', '.service_locator.fa77Lxs', 'get_ServiceLocator_Fa77LxsService', true],
            'App\\Controller\\ProductoController::new' => ['privates', '.service_locator.Y935jyL', 'get_ServiceLocator_Y935jyLService', true],
            'App\\Controller\\ProductoController::show' => ['privates', '.service_locator.1jRuMKL', 'get_ServiceLocator_1jRuMKLService', true],
            'App\\Controller\\ROyaltiesAcumuladosController::index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\RankingUsuariosController::buscarusuarios' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\RankingUsuariosController::index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\ResumenController::index' => ['privates', '.service_locator.xJSaomh', 'get_ServiceLocator_XJSaomhService', true],
            'App\\Controller\\RoyaltiesAcumServicioController::index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\ServiciosController::delete' => ['privates', '.service_locator.oLnHsf6', 'get_ServiceLocator_OLnHsf6Service', true],
            'App\\Controller\\ServiciosController::edit' => ['privates', '.service_locator.oLnHsf6', 'get_ServiceLocator_OLnHsf6Service', true],
            'App\\Controller\\ServiciosController::index' => ['privates', '.service_locator.rmaCdUd', 'get_ServiceLocator_RmaCdUdService', true],
            'App\\Controller\\ServiciosController::new' => ['privates', '.service_locator.Hti_9eI', 'get_ServiceLocator_Hti9eIService', true],
            'App\\Controller\\ServiciosController::show' => ['privates', '.service_locator.7Kf.uLc', 'get_ServiceLocator_7Kf_ULcService', true],
            'App\\Controller\\SolicitarRecogidaController::delete' => ['privates', '.service_locator.ZjusBOM', 'get_ServiceLocator_ZjusBOMService', true],
            'App\\Controller\\SolicitarRecogidaController::edit' => ['privates', '.service_locator.ZjusBOM', 'get_ServiceLocator_ZjusBOMService', true],
            'App\\Controller\\SolicitarRecogidaController::index' => ['privates', '.service_locator.04dMpwT', 'get_ServiceLocator_04dMpwTService', true],
            'App\\Controller\\SolicitarRecogidaController::new' => ['privates', '.service_locator.HyGZNpu', 'get_ServiceLocator_HyGZNpuService', true],
            'App\\Controller\\SolicitarRecogidaController::show' => ['privates', '.service_locator.cDTSNpE', 'get_ServiceLocator_CDTSNpEService', true],
            'App\\Controller\\SolicitudPagoController::delete' => ['privates', '.service_locator.xqiDzwT', 'get_ServiceLocator_XqiDzwTService', true],
            'App\\Controller\\SolicitudPagoController::edit' => ['privates', '.service_locator.xqiDzwT', 'get_ServiceLocator_XqiDzwTService', true],
            'App\\Controller\\SolicitudPagoController::index' => ['privates', '.service_locator.t3nyaao', 'get_ServiceLocator_T3nyaaoService', true],
            'App\\Controller\\SolicitudPagoController::new' => ['privates', '.service_locator.vWCT_7H', 'get_ServiceLocator_VWCT7HService', true],
            'App\\Controller\\SolicitudPagoController::show' => ['privates', '.service_locator.zoS76.G', 'get_ServiceLocator_ZoS76_GService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.JsYZ8zV', 'get_ServiceLocator_JsYZ8zVService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VentaProductoController::delete' => ['privates', '.service_locator.PLzFt.0', 'get_ServiceLocator_PLzFt_0Service', true],
            'App\\Controller\\VentaProductoController::edit' => ['privates', '.service_locator.PLzFt.0', 'get_ServiceLocator_PLzFt_0Service', true],
            'App\\Controller\\VentaProductoController::index' => ['privates', '.service_locator.ARJl4VJ', 'get_ServiceLocator_ARJl4VJService', true],
            'App\\Controller\\VentaProductoController::new' => ['privates', '.service_locator.Mwdeki4', 'get_ServiceLocator_Mwdeki4Service', true],
            'App\\Controller\\VentaProductoController::show' => ['privates', '.service_locator.X7Qpcon', 'get_ServiceLocator_X7QpconService', true],
            'App\\Controller\\VentaServicioController::delete' => ['privates', '.service_locator.Ky8bYL4', 'get_ServiceLocator_Ky8bYL4Service', true],
            'App\\Controller\\VentaServicioController::edit' => ['privates', '.service_locator.Ky8bYL4', 'get_ServiceLocator_Ky8bYL4Service', true],
            'App\\Controller\\VentaServicioController::index' => ['privates', '.service_locator.dBWWLc3', 'get_ServiceLocator_DBWWLc3Service', true],
            'App\\Controller\\VentaServicioController::new' => ['privates', '.service_locator.DGIMHoR', 'get_ServiceLocator_DGIMHoRService', true],
            'App\\Controller\\VentaServicioController::show' => ['privates', '.service_locator.yCPTt6H', 'get_ServiceLocator_YCPTt6HService', true],
            'App\\Controller\\VentasController::index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AsignarProductoaUserController:delete' => ['privates', '.service_locator.ZGGSTFo', 'get_ServiceLocator_ZGGSTFoService', true],
            'App\\Controller\\AsignarProductoaUserController:edit' => ['privates', '.service_locator.ZGGSTFo', 'get_ServiceLocator_ZGGSTFoService', true],
            'App\\Controller\\AsignarProductoaUserController:index' => ['privates', '.service_locator.UXXv45b', 'get_ServiceLocator_UXXv45bService', true],
            'App\\Controller\\AsignarProductoaUserController:new' => ['privates', '.service_locator.7zS4ZIu', 'get_ServiceLocator_7zS4ZIuService', true],
            'App\\Controller\\AsignarProductoaUserController:show' => ['privates', '.service_locator.BCmDUCX', 'get_ServiceLocator_BCmDUCXService', true],
            'App\\Controller\\FormadePagoController:delete' => ['privates', '.service_locator.YK0afhl', 'get_ServiceLocator_YK0afhlService', true],
            'App\\Controller\\FormadePagoController:edit' => ['privates', '.service_locator.YK0afhl', 'get_ServiceLocator_YK0afhlService', true],
            'App\\Controller\\FormadePagoController:index' => ['privates', '.service_locator.zcpJe4m', 'get_ServiceLocator_ZcpJe4mService', true],
            'App\\Controller\\FormadePagoController:new' => ['privates', '.service_locator.3HMCmHn', 'get_ServiceLocator_3HMCmHnService', true],
            'App\\Controller\\FormadePagoController:show' => ['privates', '.service_locator.ALnOESz', 'get_ServiceLocator_ALnOESzService', true],
            'App\\Controller\\HistorialPagosController:index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\ProductoController:delete' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController:edit' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController:index' => ['privates', '.service_locator.fa77Lxs', 'get_ServiceLocator_Fa77LxsService', true],
            'App\\Controller\\ProductoController:new' => ['privates', '.service_locator.Y935jyL', 'get_ServiceLocator_Y935jyLService', true],
            'App\\Controller\\ProductoController:show' => ['privates', '.service_locator.1jRuMKL', 'get_ServiceLocator_1jRuMKLService', true],
            'App\\Controller\\ROyaltiesAcumuladosController:index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\RankingUsuariosController:buscarusuarios' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\RankingUsuariosController:index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\ResumenController:index' => ['privates', '.service_locator.xJSaomh', 'get_ServiceLocator_XJSaomhService', true],
            'App\\Controller\\RoyaltiesAcumServicioController:index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\ServiciosController:delete' => ['privates', '.service_locator.oLnHsf6', 'get_ServiceLocator_OLnHsf6Service', true],
            'App\\Controller\\ServiciosController:edit' => ['privates', '.service_locator.oLnHsf6', 'get_ServiceLocator_OLnHsf6Service', true],
            'App\\Controller\\ServiciosController:index' => ['privates', '.service_locator.rmaCdUd', 'get_ServiceLocator_RmaCdUdService', true],
            'App\\Controller\\ServiciosController:new' => ['privates', '.service_locator.Hti_9eI', 'get_ServiceLocator_Hti9eIService', true],
            'App\\Controller\\ServiciosController:show' => ['privates', '.service_locator.7Kf.uLc', 'get_ServiceLocator_7Kf_ULcService', true],
            'App\\Controller\\SolicitarRecogidaController:delete' => ['privates', '.service_locator.ZjusBOM', 'get_ServiceLocator_ZjusBOMService', true],
            'App\\Controller\\SolicitarRecogidaController:edit' => ['privates', '.service_locator.ZjusBOM', 'get_ServiceLocator_ZjusBOMService', true],
            'App\\Controller\\SolicitarRecogidaController:index' => ['privates', '.service_locator.04dMpwT', 'get_ServiceLocator_04dMpwTService', true],
            'App\\Controller\\SolicitarRecogidaController:new' => ['privates', '.service_locator.HyGZNpu', 'get_ServiceLocator_HyGZNpuService', true],
            'App\\Controller\\SolicitarRecogidaController:show' => ['privates', '.service_locator.cDTSNpE', 'get_ServiceLocator_CDTSNpEService', true],
            'App\\Controller\\SolicitudPagoController:delete' => ['privates', '.service_locator.xqiDzwT', 'get_ServiceLocator_XqiDzwTService', true],
            'App\\Controller\\SolicitudPagoController:edit' => ['privates', '.service_locator.xqiDzwT', 'get_ServiceLocator_XqiDzwTService', true],
            'App\\Controller\\SolicitudPagoController:index' => ['privates', '.service_locator.t3nyaao', 'get_ServiceLocator_T3nyaaoService', true],
            'App\\Controller\\SolicitudPagoController:new' => ['privates', '.service_locator.vWCT_7H', 'get_ServiceLocator_VWCT7HService', true],
            'App\\Controller\\SolicitudPagoController:show' => ['privates', '.service_locator.zoS76.G', 'get_ServiceLocator_ZoS76_GService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.JsYZ8zV', 'get_ServiceLocator_JsYZ8zVService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VentaProductoController:delete' => ['privates', '.service_locator.PLzFt.0', 'get_ServiceLocator_PLzFt_0Service', true],
            'App\\Controller\\VentaProductoController:edit' => ['privates', '.service_locator.PLzFt.0', 'get_ServiceLocator_PLzFt_0Service', true],
            'App\\Controller\\VentaProductoController:index' => ['privates', '.service_locator.ARJl4VJ', 'get_ServiceLocator_ARJl4VJService', true],
            'App\\Controller\\VentaProductoController:new' => ['privates', '.service_locator.Mwdeki4', 'get_ServiceLocator_Mwdeki4Service', true],
            'App\\Controller\\VentaProductoController:show' => ['privates', '.service_locator.X7Qpcon', 'get_ServiceLocator_X7QpconService', true],
            'App\\Controller\\VentaServicioController:delete' => ['privates', '.service_locator.Ky8bYL4', 'get_ServiceLocator_Ky8bYL4Service', true],
            'App\\Controller\\VentaServicioController:edit' => ['privates', '.service_locator.Ky8bYL4', 'get_ServiceLocator_Ky8bYL4Service', true],
            'App\\Controller\\VentaServicioController:index' => ['privates', '.service_locator.dBWWLc3', 'get_ServiceLocator_DBWWLc3Service', true],
            'App\\Controller\\VentaServicioController:new' => ['privates', '.service_locator.DGIMHoR', 'get_ServiceLocator_DGIMHoRService', true],
            'App\\Controller\\VentaServicioController:show' => ['privates', '.service_locator.yCPTt6H', 'get_ServiceLocator_YCPTt6HService', true],
            'App\\Controller\\VentasController:index' => ['privates', '.service_locator.w7M74OE', 'get_ServiceLocator_W7M74OEService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AsignarProductoaUserController::delete' => '?',
            'App\\Controller\\AsignarProductoaUserController::edit' => '?',
            'App\\Controller\\AsignarProductoaUserController::index' => '?',
            'App\\Controller\\AsignarProductoaUserController::new' => '?',
            'App\\Controller\\AsignarProductoaUserController::show' => '?',
            'App\\Controller\\FormadePagoController::delete' => '?',
            'App\\Controller\\FormadePagoController::edit' => '?',
            'App\\Controller\\FormadePagoController::index' => '?',
            'App\\Controller\\FormadePagoController::new' => '?',
            'App\\Controller\\FormadePagoController::show' => '?',
            'App\\Controller\\HistorialPagosController::index' => '?',
            'App\\Controller\\ProductoController::delete' => '?',
            'App\\Controller\\ProductoController::edit' => '?',
            'App\\Controller\\ProductoController::index' => '?',
            'App\\Controller\\ProductoController::new' => '?',
            'App\\Controller\\ProductoController::show' => '?',
            'App\\Controller\\ROyaltiesAcumuladosController::index' => '?',
            'App\\Controller\\RankingUsuariosController::buscarusuarios' => '?',
            'App\\Controller\\RankingUsuariosController::index' => '?',
            'App\\Controller\\ResumenController::index' => '?',
            'App\\Controller\\RoyaltiesAcumServicioController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\ServiciosController::delete' => '?',
            'App\\Controller\\ServiciosController::edit' => '?',
            'App\\Controller\\ServiciosController::index' => '?',
            'App\\Controller\\ServiciosController::new' => '?',
            'App\\Controller\\ServiciosController::show' => '?',
            'App\\Controller\\SolicitarRecogidaController::delete' => '?',
            'App\\Controller\\SolicitarRecogidaController::edit' => '?',
            'App\\Controller\\SolicitarRecogidaController::index' => '?',
            'App\\Controller\\SolicitarRecogidaController::new' => '?',
            'App\\Controller\\SolicitarRecogidaController::show' => '?',
            'App\\Controller\\SolicitudPagoController::delete' => '?',
            'App\\Controller\\SolicitudPagoController::edit' => '?',
            'App\\Controller\\SolicitudPagoController::index' => '?',
            'App\\Controller\\SolicitudPagoController::new' => '?',
            'App\\Controller\\SolicitudPagoController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\VentaProductoController::delete' => '?',
            'App\\Controller\\VentaProductoController::edit' => '?',
            'App\\Controller\\VentaProductoController::index' => '?',
            'App\\Controller\\VentaProductoController::new' => '?',
            'App\\Controller\\VentaProductoController::show' => '?',
            'App\\Controller\\VentaServicioController::delete' => '?',
            'App\\Controller\\VentaServicioController::edit' => '?',
            'App\\Controller\\VentaServicioController::index' => '?',
            'App\\Controller\\VentaServicioController::new' => '?',
            'App\\Controller\\VentaServicioController::show' => '?',
            'App\\Controller\\VentasController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AsignarProductoaUserController:delete' => '?',
            'App\\Controller\\AsignarProductoaUserController:edit' => '?',
            'App\\Controller\\AsignarProductoaUserController:index' => '?',
            'App\\Controller\\AsignarProductoaUserController:new' => '?',
            'App\\Controller\\AsignarProductoaUserController:show' => '?',
            'App\\Controller\\FormadePagoController:delete' => '?',
            'App\\Controller\\FormadePagoController:edit' => '?',
            'App\\Controller\\FormadePagoController:index' => '?',
            'App\\Controller\\FormadePagoController:new' => '?',
            'App\\Controller\\FormadePagoController:show' => '?',
            'App\\Controller\\HistorialPagosController:index' => '?',
            'App\\Controller\\ProductoController:delete' => '?',
            'App\\Controller\\ProductoController:edit' => '?',
            'App\\Controller\\ProductoController:index' => '?',
            'App\\Controller\\ProductoController:new' => '?',
            'App\\Controller\\ProductoController:show' => '?',
            'App\\Controller\\ROyaltiesAcumuladosController:index' => '?',
            'App\\Controller\\RankingUsuariosController:buscarusuarios' => '?',
            'App\\Controller\\RankingUsuariosController:index' => '?',
            'App\\Controller\\ResumenController:index' => '?',
            'App\\Controller\\RoyaltiesAcumServicioController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\ServiciosController:delete' => '?',
            'App\\Controller\\ServiciosController:edit' => '?',
            'App\\Controller\\ServiciosController:index' => '?',
            'App\\Controller\\ServiciosController:new' => '?',
            'App\\Controller\\ServiciosController:show' => '?',
            'App\\Controller\\SolicitarRecogidaController:delete' => '?',
            'App\\Controller\\SolicitarRecogidaController:edit' => '?',
            'App\\Controller\\SolicitarRecogidaController:index' => '?',
            'App\\Controller\\SolicitarRecogidaController:new' => '?',
            'App\\Controller\\SolicitarRecogidaController:show' => '?',
            'App\\Controller\\SolicitudPagoController:delete' => '?',
            'App\\Controller\\SolicitudPagoController:edit' => '?',
            'App\\Controller\\SolicitudPagoController:index' => '?',
            'App\\Controller\\SolicitudPagoController:new' => '?',
            'App\\Controller\\SolicitudPagoController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\VentaProductoController:delete' => '?',
            'App\\Controller\\VentaProductoController:edit' => '?',
            'App\\Controller\\VentaProductoController:index' => '?',
            'App\\Controller\\VentaProductoController:new' => '?',
            'App\\Controller\\VentaProductoController:show' => '?',
            'App\\Controller\\VentaServicioController:delete' => '?',
            'App\\Controller\\VentaServicioController:edit' => '?',
            'App\\Controller\\VentaServicioController:index' => '?',
            'App\\Controller\\VentaServicioController:new' => '?',
            'App\\Controller\\VentaServicioController:show' => '?',
            'App\\Controller\\VentasController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}