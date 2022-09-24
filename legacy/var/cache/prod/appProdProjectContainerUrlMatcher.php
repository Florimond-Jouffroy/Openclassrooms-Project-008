<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheck',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutCheck',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/tasks')) {
            // task_list
            if ($pathinfo === '/tasks') {
                return array (  '_controller' => 'AppBundle\\Controller\\TaskController::listAction',  '_route' => 'task_list',);
            }

            // task_create
            if ($pathinfo === '/tasks/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\TaskController::createAction',  '_route' => 'task_create',);
            }

            // task_edit
            if (preg_match('#^/tasks/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_edit')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::editAction',));
            }

            // task_toggle
            if (preg_match('#^/tasks/(?P<id>[^/]++)/toggle$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_toggle')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::toggleTaskAction',));
            }

            // task_delete
            if (preg_match('#^/tasks/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_delete')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::deleteTaskAction',));
            }

        }

        if (0 === strpos($pathinfo, '/users')) {
            // user_list
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_route' => 'user_list',);
            }

            // user_create
            if ($pathinfo === '/users/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }

            // user_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
