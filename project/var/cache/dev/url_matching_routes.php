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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/users/([^/]++)/edit(*:33)'
                .'|/tasks/([^/]++)/(?'
                    .'|delete(*:65)'
                    .'|edit(*:76)'
                    .'|toggle(*:89)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:128)'
                    .'|wdt/([^/]++)(*:148)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:194)'
                            .'|router(*:208)'
                            .'|exception(?'
                                .'|(*:228)'
                                .'|\\.css(*:241)'
                            .')'
                        .')'
                        .'|(*:251)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\User\\EditController::editUser'], ['id'], null, null, false, false, null]],
        65 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\Task\\DeleteController::deleteTaskAction'], ['id'], null, null, false, false, null]],
        76 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\Task\\EditController::editAction'], ['id'], null, null, false, false, null]],
        89 => [[['_route' => 'task_toggle', '_controller' => 'App\\Controller\\Task\\ToggleController::toggleTaskAction'], ['id'], null, null, false, false, null]],
        128 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        148 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        208 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        228 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        241 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        251 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
