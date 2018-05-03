<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // commentUserOnTravel
        if (0 === strpos($pathinfo, '/comment/user') && preg_match('#^/comment/user/(?P<id_trajet>[^/]++)/(?P<id_cible>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentUserOnTravel')), array (  '_controller' => 'App\\Controller\\CommentController::commentUserOnTravel',));
        }

        if (0 === strpos($pathinfo, '/comment/admin')) {
            // commentAdminShow
            if (0 === strpos($pathinfo, '/comment/admin/show') && preg_match('#^/comment/admin/show/(?P<id_comment>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentAdminShow')), array (  '_controller' => 'App\\Controller\\CommentController::commentShow',));
            }

            // commentAdminDelete
            if ('/comment/admin/del' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CommentController::commentDelete',  '_route' => 'commentAdminDelete',);
            }

            // commentOffense
            if (0 === strpos($pathinfo, '/comment/admin/offense') && preg_match('#^/comment/admin/offense/(?P<id_comment>[^/]++)/(?P<id_offenser>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentOffense')), array (  '_controller' => 'App\\Controller\\CommentController::commentOffense',));
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // pm
        if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pm')), array (  '_controller' => 'App\\Controller\\PmController::addPm',));
        }

        // profil_user
        if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_user')), array (  '_controller' => 'App\\Controller\\UserController::profilUser',));
        }

        // question
        if (0 === strpos($pathinfo, '/question') && preg_match('#^/question/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'question')), array (  '_controller' => 'App\\Controller\\QuestionController::questionTravel',));
        }

        if (0 === strpos($pathinfo, '/travel')) {
            // travel_add
            if (0 === strpos($pathinfo, '/travel_add') && preg_match('#^/travel_add/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_add')), array (  '_controller' => 'App\\Controller\\TravelController::travelAdd',));
            }

            // travel_remove
            if (0 === strpos($pathinfo, '/travel_remove') && preg_match('#^/travel_remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_remove')), array (  '_controller' => 'App\\Controller\\TravelController::travelRemove',));
            }

            // travel-list
            if ('/travel-list' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\TravelController::travelParticipate',  '_route' => 'travel-list',);
            }

            // travel_home
            if ('/travel' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\TravelController::travelHome',  '_route' => 'travel_home',);
            }

            // travel_search
            if (0 === strpos($pathinfo, '/travelSearch') && preg_match('#^/travelSearch/(?P<villeDepart>[^/]++)/(?P<villeArrivee>[^/]++)(?:/(?P<page>[0-9]+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel_search')), array (  'page' => '1',  '_controller' => 'App\\Controller\\TravelController::travelSearch',));
            }

        }

        // tokenCheck
        if ('/tokenCheck' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::tokenCheck',  '_route' => 'tokenCheck',);
        }

        // registerUser
        if ('/registerUser' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::registerUser',  '_route' => 'registerUser',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::logout',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
