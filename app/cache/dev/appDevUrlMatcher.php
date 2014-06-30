<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }

            return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\DefaultController::baseAction',  '_route' => 'default',);
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\HomeController::homeAction',  '_route' => 'home',);
        }

        // item
        if (0 === strpos($pathinfo, '/item') && preg_match('#^/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'item')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontItemController::frontitemAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // category
            if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontCategoryController::frontcategoryAction',));
            }

            if (0 === strpos($pathinfo, '/client')) {
                // client
                if (rtrim($pathinfo, '/') === '/client') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::indexAction',  '_route' => 'client',);
                }
                not_client:

                // client_create
                if ($pathinfo === '/client/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_new
                if ($pathinfo === '/client/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::newAction',  '_route' => 'client_new',);
                }
                not_client_new:

                // mesinfos
                if (0 === strpos($pathinfo, '/client/mesinfos') && preg_match('#^/client/mesinfos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mesinfos;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mesinfos')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::showAction',));
                }
                not_mesinfos:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::editAction',));
                }
                not_client_edit:

                // client_update
                if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_client_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::updateAction',));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontUserController::deleteAction',));
                }
                not_client_delete:

            }

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // inscription
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inscription');
                }

                return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\InscriptionController::indexAction',  '_route' => 'inscription',);
            }

            // confirmation
            if ($pathinfo === '/inscription/confirmation') {
                return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\InscriptionController::ConfirmationAction',  '_route' => 'confirmation',);
            }

        }

        // login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/client/mesadresses')) {
            // mesadresses
            if (rtrim($pathinfo, '/') === '/client/mesadresses') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mesadresses;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mesadresses');
                }

                return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontAddressController::indexAction',  '_route' => 'mesadresses',);
            }
            not_mesadresses:

            // crea_adresse
            if ($pathinfo === '/client/mesadresses/crea_adresse') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_crea_adresse;
                }

                return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontAddressController::createAction',  '_route' => 'crea_adresse',);
            }
            not_crea_adresse:

            // nouvelleadresse
            if ($pathinfo === '/client/mesadresses/nouvelleadresse') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nouvelleadresse;
                }

                return array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontAddressController::newAction',  '_route' => 'nouvelleadresse',);
            }
            not_nouvelleadresse:

            // monadresse
            if (0 === strpos($pathinfo, '/client/mesadresses/monadresse') && preg_match('#^/client/mesadresses/monadresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_monadresse;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'monadresse')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontAddressController::showAction',));
            }
            not_monadresse:

            // modifieradresse
            if (preg_match('#^/client/mesadresses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_modifieradresse;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifieradresse')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontAddressController::editAction',));
            }
            not_modifieradresse:

            // supprimer_adresse
            if (0 === strpos($pathinfo, '/client/mesadresses/supprimer_adresse') && preg_match('#^/client/mesadresses/supprimer_adresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_supprimer_adresse;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_adresse')), array (  '_controller' => 'LEM_projet2\\FrontBundle\\Controller\\FrontAddressController::deleteAction',));
            }
            not_supprimer_adresse:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'index');
                }

                return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }
                not_admin_user:

                // admin_user_create
                if ($pathinfo === '/admin/user/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                }
                not_admin_user_create:

                // admin_user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                }
                not_admin_user_new:

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::showAction',));
                }
                not_admin_user_show:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::editAction',));
                }
                not_admin_user_edit:

                // admin_user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::updateAction',));
                }
                not_admin_user_update:

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\UserController::deleteAction',));
                }
                not_admin_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/address')) {
                // address
                if (rtrim($pathinfo, '/') === '/admin/address') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_address;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'address');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::indexAction',  '_route' => 'address',);
                }
                not_address:

                // address_create
                if ($pathinfo === '/admin/address/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_address_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::createAction',  '_route' => 'address_create',);
                }
                not_address_create:

                // address_new
                if ($pathinfo === '/admin/address/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_address_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::newAction',  '_route' => 'address_new',);
                }
                not_address_new:

                // address_show
                if (preg_match('#^/admin/address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_address_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::showAction',));
                }
                not_address_show:

                // address_edit
                if (preg_match('#^/admin/address/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_address_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::editAction',));
                }
                not_address_edit:

                // address_update
                if (preg_match('#^/admin/address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_address_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::updateAction',));
                }
                not_address_update:

                // address_delete
                if (preg_match('#^/admin/address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_address_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'address_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\AddressController::deleteAction',));
                }
                not_address_delete:

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // admin_category
                if (rtrim($pathinfo, '/') === '/admin/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_category;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_category');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category',);
                }
                not_admin_category:

                // admin_category_create
                if ($pathinfo === '/admin/category/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                }
                not_admin_category_create:

                // admin_category_new
                if ($pathinfo === '/admin/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_category_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::newAction',  '_route' => 'admin_category_new',);
                }
                not_admin_category_new:

                // admin_category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::showAction',));
                }
                not_admin_category_show:

                // admin_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::editAction',));
                }
                not_admin_category_edit:

                // admin_category_update
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::updateAction',));
                }
                not_admin_category_update:

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_admin_category_delete:

            }

            if (0 === strpos($pathinfo, '/admin/item')) {
                // admin_item
                if (rtrim($pathinfo, '/') === '/admin/item') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_item;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_item');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::indexAction',  '_route' => 'admin_item',);
                }
                not_admin_item:

                // admin_item_create
                if ($pathinfo === '/admin/item/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_item_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::createAction',  '_route' => 'admin_item_create',);
                }
                not_admin_item_create:

                // admin_item_new
                if ($pathinfo === '/admin/item/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_item_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::newAction',  '_route' => 'admin_item_new',);
                }
                not_admin_item_new:

                // admin_item_show
                if (preg_match('#^/admin/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_item_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_item_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::showAction',));
                }
                not_admin_item_show:

                // admin_item_edit
                if (preg_match('#^/admin/item/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_item_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_item_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::editAction',));
                }
                not_admin_item_edit:

                // admin_item_update
                if (preg_match('#^/admin/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_item_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_item_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::updateAction',));
                }
                not_admin_item_update:

                // admin_item_delete
                if (preg_match('#^/admin/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_item_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_item_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\ItemController::deleteAction',));
                }
                not_admin_item_delete:

            }

            if (0 === strpos($pathinfo, '/admin/orders')) {
                // admin_orders
                if (rtrim($pathinfo, '/') === '/admin/orders') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_orders;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_orders');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::indexAction',  '_route' => 'admin_orders',);
                }
                not_admin_orders:

                // admin_orders_create
                if ($pathinfo === '/admin/orders/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_orders_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::createAction',  '_route' => 'admin_orders_create',);
                }
                not_admin_orders_create:

                // admin_orders_new
                if ($pathinfo === '/admin/orders/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_orders_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::newAction',  '_route' => 'admin_orders_new',);
                }
                not_admin_orders_new:

                // admin_orders_show
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_orders_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::showAction',));
                }
                not_admin_orders_show:

                // admin_orders_edit
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_orders_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::editAction',));
                }
                not_admin_orders_edit:

                // admin_orders_update
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_orders_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::updateAction',));
                }
                not_admin_orders_update:

                // admin_orders_delete
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_orders_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\OrdersController::deleteAction',));
                }
                not_admin_orders_delete:

            }

            if (0 === strpos($pathinfo, '/admin/payment')) {
                // admin_payment
                if (rtrim($pathinfo, '/') === '/admin/payment') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_payment;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_payment');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::indexAction',  '_route' => 'admin_payment',);
                }
                not_admin_payment:

                // admin_payment_create
                if ($pathinfo === '/admin/payment/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_payment_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::createAction',  '_route' => 'admin_payment_create',);
                }
                not_admin_payment_create:

                // admin_payment_new
                if ($pathinfo === '/admin/payment/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_payment_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::newAction',  '_route' => 'admin_payment_new',);
                }
                not_admin_payment_new:

                // admin_payment_show
                if (preg_match('#^/admin/payment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_payment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::showAction',));
                }
                not_admin_payment_show:

                // admin_payment_edit
                if (preg_match('#^/admin/payment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_payment_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::editAction',));
                }
                not_admin_payment_edit:

                // admin_payment_update
                if (preg_match('#^/admin/payment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_payment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::updateAction',));
                }
                not_admin_payment_update:

                // admin_payment_delete
                if (preg_match('#^/admin/payment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_payment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\PaymentController::deleteAction',));
                }
                not_admin_payment_delete:

            }

            if (0 === strpos($pathinfo, '/admin/stateorder')) {
                // admin_stateorder
                if (rtrim($pathinfo, '/') === '/admin/stateorder') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_stateorder;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_stateorder');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::indexAction',  '_route' => 'admin_stateorder',);
                }
                not_admin_stateorder:

                // admin_stateorder_create
                if ($pathinfo === '/admin/stateorder/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_stateorder_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::createAction',  '_route' => 'admin_stateorder_create',);
                }
                not_admin_stateorder_create:

                // admin_stateorder_new
                if ($pathinfo === '/admin/stateorder/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_stateorder_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::newAction',  '_route' => 'admin_stateorder_new',);
                }
                not_admin_stateorder_new:

                // admin_stateorder_show
                if (preg_match('#^/admin/stateorder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_stateorder_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stateorder_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::showAction',));
                }
                not_admin_stateorder_show:

                // admin_stateorder_edit
                if (preg_match('#^/admin/stateorder/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_stateorder_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stateorder_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::editAction',));
                }
                not_admin_stateorder_edit:

                // admin_stateorder_update
                if (preg_match('#^/admin/stateorder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_stateorder_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stateorder_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::updateAction',));
                }
                not_admin_stateorder_update:

                // admin_stateorder_delete
                if (preg_match('#^/admin/stateorder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_stateorder_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stateorder_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\StateOrderController::deleteAction',));
                }
                not_admin_stateorder_delete:

            }

            if (0 === strpos($pathinfo, '/admin/civility')) {
                // admin_civility
                if (rtrim($pathinfo, '/') === '/admin/civility') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_civility;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_civility');
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::indexAction',  '_route' => 'admin_civility',);
                }
                not_admin_civility:

                // admin_civility_create
                if ($pathinfo === '/admin/civility/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_civility_create;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::createAction',  '_route' => 'admin_civility_create',);
                }
                not_admin_civility_create:

                // admin_civility_new
                if ($pathinfo === '/admin/civility/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_civility_new;
                    }

                    return array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::newAction',  '_route' => 'admin_civility_new',);
                }
                not_admin_civility_new:

                // admin_civility_show
                if (preg_match('#^/admin/civility/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_civility_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_civility_show')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::showAction',));
                }
                not_admin_civility_show:

                // admin_civility_edit
                if (preg_match('#^/admin/civility/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_civility_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_civility_edit')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::editAction',));
                }
                not_admin_civility_edit:

                // admin_civility_update
                if (preg_match('#^/admin/civility/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_civility_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_civility_update')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::updateAction',));
                }
                not_admin_civility_update:

                // admin_civility_delete
                if (preg_match('#^/admin/civility/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_civility_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_civility_delete')), array (  '_controller' => 'LEM_projet2\\AdminBundle\\Controller\\CivilityController::deleteAction',));
                }
                not_admin_civility_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
