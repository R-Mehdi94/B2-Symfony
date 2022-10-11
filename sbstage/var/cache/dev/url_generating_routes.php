<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_animateur_index' => [[], ['_controller' => 'App\\Controller\\AnimateurController::index'], [], [['text', '/animateur/']], [], [], []],
    'app_animateur_new' => [[], ['_controller' => 'App\\Controller\\AnimateurController::new'], [], [['text', '/animateur/new']], [], [], []],
    'app_animateur_show' => [['id'], ['_controller' => 'App\\Controller\\AnimateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/animateur']], [], [], []],
    'app_animateur_edit' => [['id'], ['_controller' => 'App\\Controller\\AnimateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/animateur']], [], [], []],
    'app_animateur_delete' => [['id'], ['_controller' => 'App\\Controller\\AnimateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/animateur']], [], [], []],
    'app_stage' => [[], ['_controller' => 'App\\Controller\\StageController::index'], [], [['text', '/stage']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];