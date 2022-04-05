<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/asignar/productoa/user' => [[['_route' => 'app_asignar_producto', '_controller' => 'App\\Controller\\AsignarProductoaUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/asignar/productoa/user/new' => [[['_route' => 'app_asignar_productoa_user_new', '_controller' => 'App\\Controller\\AsignarProductoaUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formade/pago' => [[['_route' => 'app_formade_pago_index', '_controller' => 'App\\Controller\\FormadePagoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formade/pago/new' => [[['_route' => 'app_formade_pago_new', '_controller' => 'App\\Controller\\FormadePagoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/historial/pagos' => [[['_route' => 'app_historial_pagos', '_controller' => 'App\\Controller\\HistorialPagosController::index'], null, null, null, false, false, null]],
        '/producto' => [[['_route' => 'app_producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/new' => [[['_route' => 'app_producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/royalties/acumulados' => [[['_route' => 'app_r_oyalties_acumulados', '_controller' => 'App\\Controller\\ROyaltiesAcumuladosController::index'], null, null, null, false, false, null]],
        '/ranking/usuarios' => [[['_route' => 'app_ranking_usuarios', '_controller' => 'App\\Controller\\RankingUsuariosController::index'], null, null, null, false, false, null]],
        '/ranking_buscar' => [[['_route' => 'app_ranking_busqueda', '_controller' => 'App\\Controller\\RankingUsuariosController::buscarusuarios'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_resumen', '_controller' => 'App\\Controller\\ResumenController::index'], null, null, null, false, false, null]],
        '/royalties/acum/servicio' => [[['_route' => 'app_royalties_acum_servicio', '_controller' => 'App\\Controller\\RoyaltiesAcumServicioController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/servicios' => [[['_route' => 'app_servicios_index', '_controller' => 'App\\Controller\\ServiciosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/servicios/new' => [[['_route' => 'app_servicios_new', '_controller' => 'App\\Controller\\ServiciosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitar/recogida' => [[['_route' => 'app_solicitar_recogida_index', '_controller' => 'App\\Controller\\SolicitarRecogidaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/solicitar/recogida/new' => [[['_route' => 'app_solicitar_recogida_new', '_controller' => 'App\\Controller\\SolicitarRecogidaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/solicitud/pago' => [[['_route' => 'app_solicitud_pago_index', '_controller' => 'App\\Controller\\SolicitudPagoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/solicitud/pago/new' => [[['_route' => 'app_solicitud_pago_new', '_controller' => 'App\\Controller\\SolicitudPagoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/venta/producto' => [[['_route' => 'app_venta_producto_index', '_controller' => 'App\\Controller\\VentaProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/venta/producto/new' => [[['_route' => 'app_venta_producto_new', '_controller' => 'App\\Controller\\VentaProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/venta/servicio' => [[['_route' => 'app_venta_servicio_index', '_controller' => 'App\\Controller\\VentaServicioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/venta/servicio/new' => [[['_route' => 'app_venta_servicio_new', '_controller' => 'App\\Controller\\VentaServicioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ventas' => [[['_route' => 'app_ventas', '_controller' => 'App\\Controller\\VentasController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/asignar/productoa/user/([^/]++)(?'
                    .'|(*:42)'
                    .'|/edit(*:54)'
                    .'|(*:61)'
                .')'
                .'|/formade/pago/([^/]++)(?'
                    .'|(*:94)'
                    .'|/edit(*:106)'
                    .'|(*:114)'
                .')'
                .'|/producto/([^/]++)(?'
                    .'|(*:144)'
                    .'|/edit(*:157)'
                    .'|(*:165)'
                .')'
                .'|/s(?'
                    .'|ervicios/([^/]++)(?'
                        .'|(*:199)'
                        .'|/edit(*:212)'
                        .'|(*:220)'
                    .')'
                    .'|olicit(?'
                        .'|ar/recogida/([^/]++)(?'
                            .'|(*:261)'
                            .'|/edit(*:274)'
                            .'|(*:282)'
                        .')'
                        .'|ud/pago/([^/]++)(?'
                            .'|(*:310)'
                            .'|/edit(*:323)'
                            .'|(*:331)'
                        .')'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:359)'
                    .'|/edit(*:372)'
                    .'|(*:380)'
                .')'
                .'|/venta/(?'
                    .'|producto/([^/]++)(?'
                        .'|(*:419)'
                        .'|/edit(*:432)'
                        .'|(*:440)'
                    .')'
                    .'|servicio/([^/]++)(?'
                        .'|(*:469)'
                        .'|/edit(*:482)'
                        .'|(*:490)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:531)'
                    .'|wdt/([^/]++)(*:551)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:597)'
                            .'|router(*:611)'
                            .'|exception(?'
                                .'|(*:631)'
                                .'|\\.css(*:644)'
                            .')'
                        .')'
                        .'|(*:654)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'app_asignar_productoa_user_show', '_controller' => 'App\\Controller\\AsignarProductoaUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        54 => [[['_route' => 'app_asignar_productoa_user_edit', '_controller' => 'App\\Controller\\AsignarProductoaUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        61 => [[['_route' => 'app_asignar_productoa_user_delete', '_controller' => 'App\\Controller\\AsignarProductoaUserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        94 => [[['_route' => 'app_formade_pago_show', '_controller' => 'App\\Controller\\FormadePagoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_formade_pago_edit', '_controller' => 'App\\Controller\\FormadePagoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        114 => [[['_route' => 'app_formade_pago_delete', '_controller' => 'App\\Controller\\FormadePagoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        144 => [[['_route' => 'app_producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        157 => [[['_route' => 'app_producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        165 => [[['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        199 => [[['_route' => 'app_servicios_show', '_controller' => 'App\\Controller\\ServiciosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        212 => [[['_route' => 'app_servicios_edit', '_controller' => 'App\\Controller\\ServiciosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        220 => [[['_route' => 'app_servicios_delete', '_controller' => 'App\\Controller\\ServiciosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        261 => [[['_route' => 'app_solicitar_recogida_show', '_controller' => 'App\\Controller\\SolicitarRecogidaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_solicitar_recogida_edit', '_controller' => 'App\\Controller\\SolicitarRecogidaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'app_solicitar_recogida_delete', '_controller' => 'App\\Controller\\SolicitarRecogidaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_solicitud_pago_show', '_controller' => 'App\\Controller\\SolicitudPagoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_solicitud_pago_edit', '_controller' => 'App\\Controller\\SolicitudPagoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_solicitud_pago_delete', '_controller' => 'App\\Controller\\SolicitudPagoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        359 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_venta_producto_show', '_controller' => 'App\\Controller\\VentaProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'app_venta_producto_edit', '_controller' => 'App\\Controller\\VentaProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'app_venta_producto_delete', '_controller' => 'App\\Controller\\VentaProductoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_venta_servicio_show', '_controller' => 'App\\Controller\\VentaServicioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'app_venta_servicio_edit', '_controller' => 'App\\Controller\\VentaServicioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        490 => [[['_route' => 'app_venta_servicio_delete', '_controller' => 'App\\Controller\\VentaServicioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        531 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        551 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        597 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        611 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        631 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        644 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        654 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
