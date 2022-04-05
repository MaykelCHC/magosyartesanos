<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_asignar_producto' => [[], ['_controller' => 'App\\Controller\\AsignarProductoaUserController::index'], [], [['text', '/asignar/productoa/user/']], [], [], []],
    'app_asignar_productoa_user_new' => [[], ['_controller' => 'App\\Controller\\AsignarProductoaUserController::new'], [], [['text', '/asignar/productoa/user/new']], [], [], []],
    'app_asignar_productoa_user_show' => [['id'], ['_controller' => 'App\\Controller\\AsignarProductoaUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/asignar/productoa/user']], [], [], []],
    'app_asignar_productoa_user_edit' => [['id'], ['_controller' => 'App\\Controller\\AsignarProductoaUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/asignar/productoa/user']], [], [], []],
    'app_asignar_productoa_user_delete' => [['id'], ['_controller' => 'App\\Controller\\AsignarProductoaUserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/asignar/productoa/user']], [], [], []],
    'app_formade_pago_index' => [[], ['_controller' => 'App\\Controller\\FormadePagoController::index'], [], [['text', '/formade/pago/']], [], [], []],
    'app_formade_pago_new' => [[], ['_controller' => 'App\\Controller\\FormadePagoController::new'], [], [['text', '/formade/pago/new']], [], [], []],
    'app_formade_pago_show' => [['id'], ['_controller' => 'App\\Controller\\FormadePagoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formade/pago']], [], [], []],
    'app_formade_pago_edit' => [['id'], ['_controller' => 'App\\Controller\\FormadePagoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/formade/pago']], [], [], []],
    'app_formade_pago_delete' => [['id'], ['_controller' => 'App\\Controller\\FormadePagoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formade/pago']], [], [], []],
    'app_historial_pagos' => [[], ['_controller' => 'App\\Controller\\HistorialPagosController::index'], [], [['text', '/historial/pagos']], [], [], []],
    'app_producto_index' => [[], ['_controller' => 'App\\Controller\\ProductoController::index'], [], [['text', '/producto/']], [], [], []],
    'app_producto_new' => [[], ['_controller' => 'App\\Controller\\ProductoController::new'], [], [['text', '/producto/new']], [], [], []],
    'app_producto_show' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_producto_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_producto_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_r_oyalties_acumulados' => [[], ['_controller' => 'App\\Controller\\ROyaltiesAcumuladosController::index'], [], [['text', '/royalties/acumulados']], [], [], []],
    'app_ranking_usuarios' => [[], ['_controller' => 'App\\Controller\\RankingUsuariosController::index'], [], [['text', '/ranking/usuarios']], [], [], []],
    'app_ranking_busqueda' => [[], ['_controller' => 'App\\Controller\\RankingUsuariosController::buscarusuarios'], [], [['text', '/ranking_buscar']], [], [], []],
    'app_resumen' => [[], ['_controller' => 'App\\Controller\\ResumenController::index'], [], [['text', '/']], [], [], []],
    'app_royalties_acum_servicio' => [[], ['_controller' => 'App\\Controller\\RoyaltiesAcumServicioController::index'], [], [['text', '/royalties/acum/servicio']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_servicios_index' => [[], ['_controller' => 'App\\Controller\\ServiciosController::index'], [], [['text', '/servicios/']], [], [], []],
    'app_servicios_new' => [[], ['_controller' => 'App\\Controller\\ServiciosController::new'], [], [['text', '/servicios/new']], [], [], []],
    'app_servicios_show' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], [], []],
    'app_servicios_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], [], []],
    'app_servicios_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], [], []],
    'app_solicitar_recogida_index' => [[], ['_controller' => 'App\\Controller\\SolicitarRecogidaController::index'], [], [['text', '/solicitar/recogida/']], [], [], []],
    'app_solicitar_recogida_new' => [[], ['_controller' => 'App\\Controller\\SolicitarRecogidaController::new'], [], [['text', '/solicitar/recogida/new']], [], [], []],
    'app_solicitar_recogida_show' => [['id'], ['_controller' => 'App\\Controller\\SolicitarRecogidaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/solicitar/recogida']], [], [], []],
    'app_solicitar_recogida_edit' => [['id'], ['_controller' => 'App\\Controller\\SolicitarRecogidaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/solicitar/recogida']], [], [], []],
    'app_solicitar_recogida_delete' => [['id'], ['_controller' => 'App\\Controller\\SolicitarRecogidaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/solicitar/recogida']], [], [], []],
    'app_solicitud_pago_index' => [[], ['_controller' => 'App\\Controller\\SolicitudPagoController::index'], [], [['text', '/solicitud/pago/']], [], [], []],
    'app_solicitud_pago_new' => [[], ['_controller' => 'App\\Controller\\SolicitudPagoController::new'], [], [['text', '/solicitud/pago/new']], [], [], []],
    'app_solicitud_pago_show' => [['id'], ['_controller' => 'App\\Controller\\SolicitudPagoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/solicitud/pago']], [], [], []],
    'app_solicitud_pago_edit' => [['id'], ['_controller' => 'App\\Controller\\SolicitudPagoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/solicitud/pago']], [], [], []],
    'app_solicitud_pago_delete' => [['id'], ['_controller' => 'App\\Controller\\SolicitudPagoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/solicitud/pago']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_venta_producto_index' => [[], ['_controller' => 'App\\Controller\\VentaProductoController::index'], [], [['text', '/venta/producto/']], [], [], []],
    'app_venta_producto_new' => [[], ['_controller' => 'App\\Controller\\VentaProductoController::new'], [], [['text', '/venta/producto/new']], [], [], []],
    'app_venta_producto_show' => [['id'], ['_controller' => 'App\\Controller\\VentaProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/venta/producto']], [], [], []],
    'app_venta_producto_edit' => [['id'], ['_controller' => 'App\\Controller\\VentaProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/venta/producto']], [], [], []],
    'app_venta_producto_delete' => [['id'], ['_controller' => 'App\\Controller\\VentaProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/venta/producto']], [], [], []],
    'app_venta_servicio_index' => [[], ['_controller' => 'App\\Controller\\VentaServicioController::index'], [], [['text', '/venta/servicio/']], [], [], []],
    'app_venta_servicio_new' => [[], ['_controller' => 'App\\Controller\\VentaServicioController::new'], [], [['text', '/venta/servicio/new']], [], [], []],
    'app_venta_servicio_show' => [['id'], ['_controller' => 'App\\Controller\\VentaServicioController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/venta/servicio']], [], [], []],
    'app_venta_servicio_edit' => [['id'], ['_controller' => 'App\\Controller\\VentaServicioController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/venta/servicio']], [], [], []],
    'app_venta_servicio_delete' => [['id'], ['_controller' => 'App\\Controller\\VentaServicioController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/venta/servicio']], [], [], []],
    'app_ventas' => [[], ['_controller' => 'App\\Controller\\VentasController::index'], [], [['text', '/ventas']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
