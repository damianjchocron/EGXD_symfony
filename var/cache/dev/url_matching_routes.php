<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/usuario' => [[['_route' => 'usuario', '_controller' => 'App\\Controller\\UsuarioController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template', '_controller' => 'App\\Controller\\HomeController::template'], null, null, null, false, false, null]],
        '/product/insertform' => [[['_route' => 'insertformProduct', '_controller' => 'App\\Controller\\ProductController::insertform'], null, null, null, false, false, null]],
        '/product/modify' => [[['_route' => 'modifyProduct', '_controller' => 'App\\Controller\\ProductController::modify'], null, null, null, false, false, null]],
        '/product/borrar' => [[['_route' => 'ajaxDeleteProduct', '_controller' => 'App\\Controller\\ProductController::borrar'], null, null, null, false, false, null]],
        '/multimedia/ajaxFind' => [[['_route' => 'ajaxFindMultimedia', '_controller' => 'App\\Controller\\MultimediaController::ajaxFind'], null, null, null, false, false, null]],
        '/multimedia/borrar' => [[['_route' => 'ajaxDeleteMultimedia', '_controller' => 'App\\Controller\\MultimediaController::Borrar'], null, null, null, false, false, null]],
        '/multimedia/guardar' => [[['_route' => 'ajaxGuardarMultimedia', '_controller' => 'App\\Controller\\MultimediaController::Guardar'], null, null, null, false, false, null]],
        '/categoria/guardar' => [[['_route' => 'categoriaguardarpost', '_controller' => 'App\\Controller\\CategoriaController::insertupdatepost'], null, ['POST' => 0], null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto', '_controller' => 'App\\Controller\\ContactoController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|all(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?)?(*:240)'
                    .'|detail(?:/([^/]++))?(*:268)'
                .')'
                .'|/categoria(?'
                    .'|/(?'
                        .'|nuevo(?:/([^/]++))?(*:313)'
                        .'|editar/([^/]++)(*:336)'
                        .'|borrar/([^/]++)(*:359)'
                    .')'
                    .'|(?:/([^/]++))?(*:382)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => 'allProduct', 'idcategoria' => null, 'sort' => null, 'page' => null, 'search' => null, '_controller' => 'App\\Controller\\ProductController::all'], ['idcategoria', 'sort', 'page', 'search'], null, null, false, true, null]],
        268 => [[['_route' => 'detailProduct', 'idproduct' => null, '_controller' => 'App\\Controller\\ProductController::detail'], ['idproduct'], null, null, false, true, null]],
        313 => [[['_route' => 'categorianuevopost', 'id' => null, '_controller' => 'App\\Controller\\CategoriaController::insertupdate'], ['id'], null, null, false, true, null]],
        336 => [[['_route' => 'categoriaeditarpost', '_controller' => 'App\\Controller\\CategoriaController::insertupdate'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'categoriaDelete', '_controller' => 'App\\Controller\\CategoriaController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [
            [['_route' => 'Categoria', 'page' => null, '_controller' => 'App\\Controller\\CategoriaController::index'], ['page'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
