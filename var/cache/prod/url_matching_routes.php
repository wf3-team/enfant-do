<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/bebe/([^/]++)(?'
                    .'|/edit(*:29)'
                    .'|(*:36)'
                .')'
                .'|/accueil/([^/]++)(?'
                    .'|(*:64)'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
                .'|/hygiene/([^/]++)(?'
                    .'|(*:111)'
                    .'|/edit(*:124)'
                    .'|(*:132)'
                .')'
                .'|/repas/([^/]++)(?'
                    .'|(*:159)'
                    .'|/edit(*:172)'
                    .'|(*:180)'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:206)'
                    .'|(*:214)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'bebe_edit', '_controller' => 'App\\Controller\\BebeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        36 => [[['_route' => 'bebe_delete', '_controller' => 'App\\Controller\\BebeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        64 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'hygiene_show', '_controller' => 'App\\Controller\\HygieneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'hygiene_edit', '_controller' => 'App\\Controller\\HygieneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [[['_route' => 'hygiene_delete', '_controller' => 'App\\Controller\\HygieneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        159 => [[['_route' => 'repas_show', '_controller' => 'App\\Controller\\RepasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        172 => [[['_route' => 'repas_edit', '_controller' => 'App\\Controller\\RepasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        180 => [[['_route' => 'repas_delete', '_controller' => 'App\\Controller\\RepasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        206 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
