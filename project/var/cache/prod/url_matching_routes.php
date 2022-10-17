<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/tasks' => [[['_route' => 'admin_tasks', '_controller' => 'App\\Controller\\Admin\\Task\\IndexController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\Admin\\User\\IndexController::listAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/tasks/create' => [[['_route' => 'task_create', '_controller' => 'App\\Controller\\Task\\CreateController::createAction'], null, null, null, false, false, null]],
        '/tasks' => [[['_route' => 'task_list', '_controller' => 'App\\Controller\\Task\\IndexController::listAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\User\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\User\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/users/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\User\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/users/([^/]++)/edit(*:33)'
                .'|/tasks/([^/]++)/(?'
                    .'|delete(*:65)'
                    .'|edit(*:76)'
                    .'|toggle(*:89)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\User\\EditController::editUser'], ['id'], null, null, false, false, null]],
        65 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\Task\\DeleteController::deleteTaskAction'], ['id'], null, null, false, false, null]],
        76 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\Task\\EditController::editAction'], ['id'], null, null, false, false, null]],
        89 => [
            [['_route' => 'task_toggle', '_controller' => 'App\\Controller\\Task\\ToggleController::toggleTaskAction'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
