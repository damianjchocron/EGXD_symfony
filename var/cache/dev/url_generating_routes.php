<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'usuario' => [[], ['_controller' => 'App\\Controller\\UsuarioController::index'], [], [['text', '/usuario']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'template' => [[], ['_controller' => 'App\\Controller\\HomeController::template'], [], [['text', '/template']], [], []],
    'allProduct' => [['idcategoria', 'sort', 'page', 'search'], ['idcategoria' => null, 'sort' => null, 'page' => null, 'search' => null, '_controller' => 'App\\Controller\\ProductController::all'], [], [['variable', '/', '[^/]++', 'search', true], ['variable', '/', '[^/]++', 'page', true], ['variable', '/', '[^/]++', 'sort', true], ['variable', '/', '[^/]++', 'idcategoria', true], ['text', '/product/all']], [], []],
    'insertformProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::insertform'], [], [['text', '/product/insertform']], [], []],
    'modifyProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::modify'], [], [['text', '/product/modify']], [], []],
    'ajaxDeleteProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::borrar'], [], [['text', '/product/borrar']], [], []],
    'detailProduct' => [['idproduct'], ['idproduct' => null, '_controller' => 'App\\Controller\\ProductController::detail'], [], [['variable', '/', '[^/]++', 'idproduct', true], ['text', '/product/detail']], [], []],
    'updateProduct' => [['id'], ['_controller' => 'App\\Controller\\ProductController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/update']], [], []],
    'updateProductPost' => [[], ['_controller' => 'App\\Controller\\ProductController::updatePost'], [], [['text', '/product/updatePost']], [], []],
    'ajaxFindMultimedia' => [[], ['_controller' => 'App\\Controller\\MultimediaController::ajaxFind'], [], [['text', '/multimedia/ajaxFind']], [], []],
    'ajaxDeleteMultimedia' => [[], ['_controller' => 'App\\Controller\\MultimediaController::Borrar'], [], [['text', '/multimedia/borrar']], [], []],
    'ajaxGuardarMultimedia' => [[], ['_controller' => 'App\\Controller\\MultimediaController::Guardar'], [], [['text', '/multimedia/guardar']], [], []],
    'categorianuevopost' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\CategoriaController::insertupdate'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categoria/nuevo']], [], []],
    'categoriaeditarpost' => [['id'], ['_controller' => 'App\\Controller\\CategoriaController::insertupdate'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categoria/editar']], [], []],
    'categoriaguardarpost' => [[], ['_controller' => 'App\\Controller\\CategoriaController::insertupdatepost'], [], [['text', '/categoria/guardar']], [], []],
    'categoriaDelete' => [['id'], ['_controller' => 'App\\Controller\\CategoriaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categoria/borrar']], [], []],
    'Categoria' => [['page'], ['page' => null, '_controller' => 'App\\Controller\\CategoriaController::index'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/categoria']], [], []],
    'contacto' => [[], ['_controller' => 'App\\Controller\\ContactoController::index'], [], [['text', '/contacto']], [], []],
];
