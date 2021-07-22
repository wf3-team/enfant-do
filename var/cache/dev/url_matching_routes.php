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
        '/' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/sommeil/ajouter' => [[['_route' => 'evenement_sommeil', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hygiene/ajouter' => [[['_route' => 'hygiene_new', '_controller' => 'App\\Controller\\HygieneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/repas/ajouter' => [[['_route' => 'repas_new', '_controller' => 'App\\Controller\\RepasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/([^/]++)(?'
                    .'|(*:146)'
                    .'|/edit(*:159)'
                    .'|(*:167)'
                .')'
                .'|/hygiene(?'
                    .'|(*:187)'
                    .'|/([^/]++)(?'
                        .'|(*:207)'
                        .'|/edit(*:220)'
                        .'|(*:228)'
                    .')'
                .')'
                .'|/repas(?'
                    .'|(*:247)'
                    .'|/([^/]++)(?'
                        .'|(*:267)'
                        .'|/edit(*:280)'
                        .'|(*:288)'
                    .')'
                .')'
                .'|/log(?'
                    .'|in(*:307)'
                    .'|out(*:318)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:355)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        146 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        159 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        167 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        187 => [[['_route' => 'hygiene_index', '_controller' => 'App\\Controller\\HygieneController::index'], [], ['GET' => 0], null, true, false, null]],
        207 => [[['_route' => 'hygiene_show', '_controller' => 'App\\Controller\\HygieneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'hygiene_edit', '_controller' => 'App\\Controller\\HygieneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'hygiene_delete', '_controller' => 'App\\Controller\\HygieneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'repas_index', '_controller' => 'App\\Controller\\RepasController::index'], [], ['GET' => 0], null, true, false, null]],
        267 => [[['_route' => 'repas_show', '_controller' => 'App\\Controller\\RepasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'repas_edit', '_controller' => 'App\\Controller\\RepasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'repas_delete', '_controller' => 'App\\Controller\\RepasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        307 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        318 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        355 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
