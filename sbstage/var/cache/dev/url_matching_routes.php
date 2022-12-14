<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/animateur' => [[['_route' => 'app_animateur_index', '_controller' => 'App\\Controller\\AnimateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/animateur/new' => [[['_route' => 'app_animateur_new', '_controller' => 'App\\Controller\\AnimateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stages' => [[['_route' => 'voirTous', '_controller' => 'App\\Controller\\StageController::voirTous'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/animateur/([^/]++)(?'
                    .'|(*:29)'
                    .'|/edit(*:41)'
                    .'|(*:48)'
                .')'
                .'|/stages/([^/]++)(?'
                    .'|(*:75)'
                    .'|/participants(*:95)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:131)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_animateur_show', '_controller' => 'App\\Controller\\AnimateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_animateur_edit', '_controller' => 'App\\Controller\\AnimateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_animateur_delete', '_controller' => 'App\\Controller\\AnimateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'voirStagesAnimateurs', '_controller' => 'App\\Controller\\StageController::voirStagesAnimateurs'], ['idAnimateur'], null, null, false, true, null]],
        95 => [[['_route' => 'voirClientStages', '_controller' => 'App\\Controller\\StageController::voirClientStages'], ['idStage'], null, null, false, false, null]],
        131 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
