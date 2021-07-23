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
        '/bebe' => [[['_route' => 'bebe_index', '_controller' => 'App\\Controller\\BebeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bebe/inscription' => [[['_route' => 'bebe_new', '_controller' => 'App\\Controller\\BebeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conseil' => [[['_route' => 'conseil', '_controller' => 'App\\Controller\\ConseilController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/accueil/sommeil/ajouter' => [[['_route' => 'evenement_sommeil', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hygiene' => [[['_route' => 'hygiene_index', '_controller' => 'App\\Controller\\HygieneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hygiene/ajouter' => [[['_route' => 'hygiene_new', '_controller' => 'App\\Controller\\HygieneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/repas/ajouter' => [[['_route' => 'repas_new', '_controller' => 'App\\Controller\\RepasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/bebe/([^/]++)(?'
                    .'|/edit(*:156)'
                    .'|(*:164)'
                .')'
                .'|/accueil/([^/]++)(?'
                    .'|(*:193)'
                    .'|/edit(*:206)'
                    .'|(*:214)'
                .')'
                .'|/hygiene/([^/]++)(?'
                    .'|(*:243)'
                    .'|/edit(*:256)'
                    .'|(*:264)'
                .')'
                .'|/repas/([^/]++)(?'
                    .'|(*:291)'
                    .'|/edit(*:304)'
                    .'|(*:312)'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:338)'
                    .'|(*:346)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:383)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        156 => [[['_route' => 'bebe_edit', '_controller' => 'App\\Controller\\BebeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        164 => [[['_route' => 'bebe_delete', '_controller' => 'App\\Controller\\BebeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        193 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'hygiene_show', '_controller' => 'App\\Controller\\HygieneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'hygiene_edit', '_controller' => 'App\\Controller\\HygieneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'hygiene_delete', '_controller' => 'App\\Controller\\HygieneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'repas_show', '_controller' => 'App\\Controller\\RepasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'repas_edit', '_controller' => 'App\\Controller\\RepasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'repas_delete', '_controller' => 'App\\Controller\\RepasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        383 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
