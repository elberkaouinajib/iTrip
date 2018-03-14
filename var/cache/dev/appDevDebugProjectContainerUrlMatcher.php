<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // api_entrypoint
        if (preg_match('#^/(?P<index>index)?(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
        }

        // api_doc
        if (0 === strpos($pathinfo, '/docs') && preg_match('#^/docs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
        }

        // api_jsonld_context
        if (0 === strpos($pathinfo, '/contexts') && preg_match('#^/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
        }

        if (0 === strpos($pathinfo, '/commentaires')) {
            // api_commentaires_get_collection
            if (preg_match('#^/commentaires(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_commentaires_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_commentaires_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Commentaire',  '_api_collection_operation_name' => 'get',));
            }
            not_api_commentaires_get_collection:

            // api_commentaires_post_collection
            if (preg_match('#^/commentaires(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_commentaires_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_commentaires_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Commentaire',  '_api_collection_operation_name' => 'post',));
            }
            not_api_commentaires_post_collection:

            // api_commentaires_get_item
            if (preg_match('#^/commentaires/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_commentaires_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_commentaires_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Commentaire',  '_api_item_operation_name' => 'get',));
            }
            not_api_commentaires_get_item:

            // api_commentaires_put_item
            if (preg_match('#^/commentaires/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_commentaires_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_commentaires_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Commentaire',  '_api_item_operation_name' => 'put',));
            }
            not_api_commentaires_put_item:

            // api_commentaires_delete_item
            if (preg_match('#^/commentaires/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_commentaires_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_commentaires_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Commentaire',  '_api_item_operation_name' => 'delete',));
            }
            not_api_commentaires_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/activite')) {
            if (0 === strpos($pathinfo, '/activites')) {
                // api_activites_get_collection
                if (preg_match('#^/activites(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_activites_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activites_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Activite',  '_api_collection_operation_name' => 'get',));
                }
                not_api_activites_get_collection:

                // api_activites_post_collection
                if (preg_match('#^/activites(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_activites_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activites_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Activite',  '_api_collection_operation_name' => 'post',));
                }
                not_api_activites_post_collection:

                // api_activites_get_item
                if (preg_match('#^/activites/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_activites_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activites_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Activite',  '_api_item_operation_name' => 'get',));
                }
                not_api_activites_get_item:

                // api_activites_put_item
                if (preg_match('#^/activites/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_activites_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activites_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Activite',  '_api_item_operation_name' => 'put',));
                }
                not_api_activites_put_item:

                // api_activites_delete_item
                if (preg_match('#^/activites/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_activites_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activites_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Activite',  '_api_item_operation_name' => 'delete',));
                }
                not_api_activites_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/activite_agendas')) {
                // api_activite_agendas_get_collection
                if (preg_match('#^/activite_agendas(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_activite_agendas_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_agendas_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActiviteAgenda',  '_api_collection_operation_name' => 'get',));
                }
                not_api_activite_agendas_get_collection:

                // api_activite_agendas_post_collection
                if (preg_match('#^/activite_agendas(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_activite_agendas_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_agendas_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActiviteAgenda',  '_api_collection_operation_name' => 'post',));
                }
                not_api_activite_agendas_post_collection:

                // api_activite_agendas_get_item
                if (preg_match('#^/activite_agendas/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_activite_agendas_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_agendas_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActiviteAgenda',  '_api_item_operation_name' => 'get',));
                }
                not_api_activite_agendas_get_item:

                // api_activite_agendas_put_item
                if (preg_match('#^/activite_agendas/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_activite_agendas_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_agendas_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActiviteAgenda',  '_api_item_operation_name' => 'put',));
                }
                not_api_activite_agendas_put_item:

                // api_activite_agendas_delete_item
                if (preg_match('#^/activite_agendas/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_activite_agendas_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_agendas_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActiviteAgenda',  '_api_item_operation_name' => 'delete',));
                }
                not_api_activite_agendas_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/activite_packs')) {
                // api_activite_packs_get_collection
                if (preg_match('#^/activite_packs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_activite_packs_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_packs_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActivitePack',  '_api_collection_operation_name' => 'get',));
                }
                not_api_activite_packs_get_collection:

                // api_activite_packs_post_collection
                if (preg_match('#^/activite_packs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_activite_packs_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_packs_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActivitePack',  '_api_collection_operation_name' => 'post',));
                }
                not_api_activite_packs_post_collection:

                // api_activite_packs_get_item
                if (preg_match('#^/activite_packs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_activite_packs_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_packs_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActivitePack',  '_api_item_operation_name' => 'get',));
                }
                not_api_activite_packs_get_item:

                // api_activite_packs_put_item
                if (preg_match('#^/activite_packs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_activite_packs_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_packs_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActivitePack',  '_api_item_operation_name' => 'put',));
                }
                not_api_activite_packs_put_item:

                // api_activite_packs_delete_item
                if (preg_match('#^/activite_packs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_activite_packs_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_activite_packs_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\ActivitePack',  '_api_item_operation_name' => 'delete',));
                }
                not_api_activite_packs_delete_item:

            }

        }

        elseif (0 === strpos($pathinfo, '/agendas')) {
            // api_agendas_get_collection
            if (preg_match('#^/agendas(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_agendas_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_agendas_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Agenda',  '_api_collection_operation_name' => 'get',));
            }
            not_api_agendas_get_collection:

            // api_agendas_post_collection
            if (preg_match('#^/agendas(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_agendas_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_agendas_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Agenda',  '_api_collection_operation_name' => 'post',));
            }
            not_api_agendas_post_collection:

            // api_agendas_get_item
            if (preg_match('#^/agendas/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_agendas_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_agendas_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Agenda',  '_api_item_operation_name' => 'get',));
            }
            not_api_agendas_get_item:

            // api_agendas_put_item
            if (preg_match('#^/agendas/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_agendas_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_agendas_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Agenda',  '_api_item_operation_name' => 'put',));
            }
            not_api_agendas_put_item:

            // api_agendas_delete_item
            if (preg_match('#^/agendas/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_agendas_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_agendas_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Agenda',  '_api_item_operation_name' => 'delete',));
            }
            not_api_agendas_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/locations')) {
            // api_locations_get_collection
            if (preg_match('#^/locations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_locations_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_locations_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Location',  '_api_collection_operation_name' => 'get',));
            }
            not_api_locations_get_collection:

            // api_locations_post_collection
            if (preg_match('#^/locations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_locations_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_locations_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Location',  '_api_collection_operation_name' => 'post',));
            }
            not_api_locations_post_collection:

            // api_locations_get_item
            if (preg_match('#^/locations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_locations_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_locations_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Location',  '_api_item_operation_name' => 'get',));
            }
            not_api_locations_get_item:

            // api_locations_put_item
            if (preg_match('#^/locations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_locations_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_locations_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Location',  '_api_item_operation_name' => 'put',));
            }
            not_api_locations_put_item:

            // api_locations_delete_item
            if (preg_match('#^/locations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_locations_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_locations_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Location',  '_api_item_operation_name' => 'delete',));
            }
            not_api_locations_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/moneypots')) {
            // api_moneypots_get_collection
            if (preg_match('#^/moneypots(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_moneypots_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_moneypots_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Moneypot',  '_api_collection_operation_name' => 'get',));
            }
            not_api_moneypots_get_collection:

            // api_moneypots_post_collection
            if (preg_match('#^/moneypots(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_moneypots_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_moneypots_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Moneypot',  '_api_collection_operation_name' => 'post',));
            }
            not_api_moneypots_post_collection:

            // api_moneypots_get_item
            if (preg_match('#^/moneypots/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_moneypots_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_moneypots_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Moneypot',  '_api_item_operation_name' => 'get',));
            }
            not_api_moneypots_get_item:

            // api_moneypots_put_item
            if (preg_match('#^/moneypots/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_moneypots_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_moneypots_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Moneypot',  '_api_item_operation_name' => 'put',));
            }
            not_api_moneypots_put_item:

            // api_moneypots_delete_item
            if (preg_match('#^/moneypots/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_moneypots_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_moneypots_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Moneypot',  '_api_item_operation_name' => 'delete',));
            }
            not_api_moneypots_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/notations')) {
            // api_notations_get_collection
            if (preg_match('#^/notations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_notations_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_notations_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Notation',  '_api_collection_operation_name' => 'get',));
            }
            not_api_notations_get_collection:

            // api_notations_post_collection
            if (preg_match('#^/notations(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_notations_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_notations_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Notation',  '_api_collection_operation_name' => 'post',));
            }
            not_api_notations_post_collection:

            // api_notations_get_item
            if (preg_match('#^/notations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_notations_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_notations_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Notation',  '_api_item_operation_name' => 'get',));
            }
            not_api_notations_get_item:

            // api_notations_put_item
            if (preg_match('#^/notations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_notations_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_notations_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Notation',  '_api_item_operation_name' => 'put',));
            }
            not_api_notations_put_item:

            // api_notations_delete_item
            if (preg_match('#^/notations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_notations_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_notations_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Notation',  '_api_item_operation_name' => 'delete',));
            }
            not_api_notations_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/packs')) {
            // api_packs_get_collection
            if (preg_match('#^/packs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_packs_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_packs_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Pack',  '_api_collection_operation_name' => 'get',));
            }
            not_api_packs_get_collection:

            // api_packs_post_collection
            if (preg_match('#^/packs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_packs_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_packs_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Pack',  '_api_collection_operation_name' => 'post',));
            }
            not_api_packs_post_collection:

            // api_packs_get_item
            if (preg_match('#^/packs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_packs_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_packs_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Pack',  '_api_item_operation_name' => 'get',));
            }
            not_api_packs_get_item:

            // api_packs_put_item
            if (preg_match('#^/packs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_packs_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_packs_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Pack',  '_api_item_operation_name' => 'put',));
            }
            not_api_packs_put_item:

            // api_packs_delete_item
            if (preg_match('#^/packs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_packs_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_packs_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Pack',  '_api_item_operation_name' => 'delete',));
            }
            not_api_packs_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/partenaires')) {
            // api_partenaires_get_collection
            if (preg_match('#^/partenaires(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_partenaires_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_partenaires_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Partenaire',  '_api_collection_operation_name' => 'get',));
            }
            not_api_partenaires_get_collection:

            // api_partenaires_post_collection
            if (preg_match('#^/partenaires(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_partenaires_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_partenaires_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Partenaire',  '_api_collection_operation_name' => 'post',));
            }
            not_api_partenaires_post_collection:

            // api_partenaires_get_item
            if (preg_match('#^/partenaires/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_partenaires_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_partenaires_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Partenaire',  '_api_item_operation_name' => 'get',));
            }
            not_api_partenaires_get_item:

            // api_partenaires_put_item
            if (preg_match('#^/partenaires/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_partenaires_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_partenaires_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Partenaire',  '_api_item_operation_name' => 'put',));
            }
            not_api_partenaires_put_item:

            // api_partenaires_delete_item
            if (preg_match('#^/partenaires/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_partenaires_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_partenaires_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Partenaire',  '_api_item_operation_name' => 'delete',));
            }
            not_api_partenaires_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/transactions')) {
            // api_transactions_get_collection
            if (preg_match('#^/transactions(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_transactions_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_transactions_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Transaction',  '_api_collection_operation_name' => 'get',));
            }
            not_api_transactions_get_collection:

            // api_transactions_post_collection
            if (preg_match('#^/transactions(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_transactions_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_transactions_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Transaction',  '_api_collection_operation_name' => 'post',));
            }
            not_api_transactions_post_collection:

            // api_transactions_get_item
            if (preg_match('#^/transactions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_transactions_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_transactions_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Transaction',  '_api_item_operation_name' => 'get',));
            }
            not_api_transactions_get_item:

            // api_transactions_put_item
            if (preg_match('#^/transactions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_transactions_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_transactions_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Transaction',  '_api_item_operation_name' => 'put',));
            }
            not_api_transactions_put_item:

            // api_transactions_delete_item
            if (preg_match('#^/transactions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_transactions_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_transactions_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Transaction',  '_api_item_operation_name' => 'delete',));
            }
            not_api_transactions_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/utilisateurs')) {
            // api_utilisateurs_get_collection
            if (preg_match('#^/utilisateurs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_utilisateurs_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateurs_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Utilisateur',  '_api_collection_operation_name' => 'get',));
            }
            not_api_utilisateurs_get_collection:

            // api_utilisateurs_post_collection
            if (preg_match('#^/utilisateurs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_utilisateurs_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateurs_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Utilisateur',  '_api_collection_operation_name' => 'post',));
            }
            not_api_utilisateurs_post_collection:

            // api_utilisateurs_get_item
            if (preg_match('#^/utilisateurs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_utilisateurs_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateurs_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Utilisateur',  '_api_item_operation_name' => 'get',));
            }
            not_api_utilisateurs_get_item:

            // api_utilisateurs_put_item
            if (preg_match('#^/utilisateurs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_utilisateurs_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateurs_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Utilisateur',  '_api_item_operation_name' => 'put',));
            }
            not_api_utilisateurs_put_item:

            // api_utilisateurs_delete_item
            if (preg_match('#^/utilisateurs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_utilisateurs_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateurs_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Utilisateur',  '_api_item_operation_name' => 'delete',));
            }
            not_api_utilisateurs_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/utilisateur_voyages')) {
            // api_utilisateur_voyages_get_collection
            if (preg_match('#^/utilisateur_voyages(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_utilisateur_voyages_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateur_voyages_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\UtilisateurVoyage',  '_api_collection_operation_name' => 'get',));
            }
            not_api_utilisateur_voyages_get_collection:

            // api_utilisateur_voyages_post_collection
            if (preg_match('#^/utilisateur_voyages(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_utilisateur_voyages_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateur_voyages_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\UtilisateurVoyage',  '_api_collection_operation_name' => 'post',));
            }
            not_api_utilisateur_voyages_post_collection:

            // api_utilisateur_voyages_get_item
            if (preg_match('#^/utilisateur_voyages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_utilisateur_voyages_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateur_voyages_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\UtilisateurVoyage',  '_api_item_operation_name' => 'get',));
            }
            not_api_utilisateur_voyages_get_item:

            // api_utilisateur_voyages_put_item
            if (preg_match('#^/utilisateur_voyages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_utilisateur_voyages_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateur_voyages_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\UtilisateurVoyage',  '_api_item_operation_name' => 'put',));
            }
            not_api_utilisateur_voyages_put_item:

            // api_utilisateur_voyages_delete_item
            if (preg_match('#^/utilisateur_voyages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_utilisateur_voyages_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_utilisateur_voyages_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\UtilisateurVoyage',  '_api_item_operation_name' => 'delete',));
            }
            not_api_utilisateur_voyages_delete_item:

        }

        elseif (0 === strpos($pathinfo, '/voyages')) {
            // api_voyages_get_collection
            if (preg_match('#^/voyages(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_voyages_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_voyages_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Voyage',  '_api_collection_operation_name' => 'get',));
            }
            not_api_voyages_get_collection:

            // api_voyages_post_collection
            if (preg_match('#^/voyages(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_voyages_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_voyages_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Voyage',  '_api_collection_operation_name' => 'post',));
            }
            not_api_voyages_post_collection:

            // api_voyages_get_item
            if (preg_match('#^/voyages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_voyages_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_voyages_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Voyage',  '_api_item_operation_name' => 'get',));
            }
            not_api_voyages_get_item:

            // api_voyages_put_item
            if (preg_match('#^/voyages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_voyages_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_voyages_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Voyage',  '_api_item_operation_name' => 'put',));
            }
            not_api_voyages_put_item:

            // api_voyages_delete_item
            if (preg_match('#^/voyages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_voyages_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_voyages_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Voyage',  '_api_item_operation_name' => 'delete',));
            }
            not_api_voyages_delete_item:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
