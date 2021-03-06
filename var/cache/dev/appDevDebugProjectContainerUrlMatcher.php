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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/clienti')) {
            // clienti
            if ('/clienti' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ClientsController::ClientsAction',  '_route' => 'clienti',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_clienti;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'clienti'));
                }

                return $ret;
            }
            not_clienti:

            // vedi_clienti
            if (0 === strpos($pathinfo, '/clienti/vedi') && preg_match('#^/clienti/vedi/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vedi_clienti')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::ClientsShowAction',));
            }

            // nuovo_cliente
            if ('/clienti/nuovo' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::ClientsNewAction',  '_route' => 'nuovo_cliente',);
            }

            // modifica_cliente
            if (0 === strpos($pathinfo, '/clienti/modifica') && preg_match('#^/clienti/modifica/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifica_cliente')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::ClientsEditAction',));
            }

            // elimina_clienti
            if (0 === strpos($pathinfo, '/clienti/elimina') && preg_match('#^/clienti/elimina/(?P<id>[^/]++)(?:/(?P<confirm>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elimina_clienti')), array (  'confirm' => false,  '_controller' => 'AppBundle\\Controller\\ClientsController::deleteClientAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/ajax')) {
            // ajax_clients_find_json
            if ('/ajax/clients/find' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ClientsController::findClientAction',  '_route' => 'ajax_clients_find_json',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ajax_clients_find_json;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ajax_clients_find_json'));
                }

                return $ret;
            }
            not_ajax_clients_find_json:

            // ajax_clients_get_json
            if (0 === strpos($pathinfo, '/ajax/clients/get') && preg_match('#^/ajax/clients/get/(?P<ids>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_clients_get_json')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::get',));
            }

            if (0 === strpos($pathinfo, '/ajax/get/expData')) {
                // ajax_get_expdata_field
                if (preg_match('#^/ajax/get/expData/(?P<exp>[^/]++)/(?P<field>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_get_expdata_field')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::AjaxGetExpDataFiledAction',));
                }

                // ajax_get_adv_expdata_field
                if (0 === strpos($pathinfo, '/ajax/get/expData/adv') && preg_match('#^/ajax/get/expData/adv/(?P<exp>[^/]++)/(?P<field>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_get_adv_expdata_field')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::AjaxAdvGetExpDataFiledAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/ajax/expertation')) {
                // ajax_get_expertations_room
                if (0 === strpos($pathinfo, '/ajax/expertations/get/outlets') && preg_match('#^/ajax/expertations/get/outlets/(?P<level>[^/]++)/(?P<room>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_get_expertations_room')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::AjaxEGO',));
                }

                // ajax_get_expertations_quadri
                if (0 === strpos($pathinfo, '/ajax/expertations/get/quadri') && preg_match('#^/ajax/expertations/get/quadri/(?P<tipo>[^/]++)/(?P<level>[^/]++)/(?P<meters>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_get_expertations_quadri')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::AjaxEGQ',));
                }

                // ajax_get_tiranti
                if (0 === strpos($pathinfo, '/ajax/expertation/get/tiranti') && preg_match('#^/ajax/expertation/get/tiranti/(?P<room>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_get_tiranti')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::AjaxEGT',));
                }

            }

            // ajax_search_expertation
            if (0 === strpos($pathinfo, '/ajax/search/expertations') && preg_match('#^/ajax/search/expertations/(?P<type>[^/]++)/(?P<terms>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_search_expertation')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::AjaxSEXP',));
            }

            if (0 === strpos($pathinfo, '/ajax/settings')) {
                // ajax_settings_users_list
                if ('/ajax/settings/users/list' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::AjaxSULAction',  '_route' => 'ajax_settings_users_list',);
                }

                // ajax_settings_users_delete
                if (0 === strpos($pathinfo, '/ajax/settings/users/delete') && preg_match('#^/ajax/settings/users/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_settings_users_delete')), array (  '_controller' => 'AppBundle\\Controller\\SettingsController::AjaxSUDAction',));
                }

                // ajax_settings_groups_list
                if ('/ajax/settings/groups/list' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::AjaxSGLAction',  '_route' => 'ajax_settings_groups_list',);
                }

            }

            // ajax_price_list
            if ('/ajax/prices/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PricesController::AJAXPl',  '_route' => 'ajax_price_list',);
            }

        }

        // action_prices_flush
        if ('/actions/prices/flush' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PricesController::pricesFlushAction',  '_route' => 'action_prices_flush',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // dashboard
        if ('/dashboard' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dashboard',);
        }

        // error_id
        if (0 === strpos($pathinfo, '/errore') && preg_match('#^/errore/(?P<error>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'error_id')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::errorAction',));
        }

        // app_default_testmail
        if ('/testmail' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testMailAction',  '_route' => 'app_default_testmail',);
        }

        if (0 === strpos($pathinfo, '/pr')) {
            if (0 === strpos($pathinfo, '/preventivi')) {
                if (0 === strpos($pathinfo, '/preventivi/lista')) {
                    // lista_preventivi
                    if ('/preventivi/lista' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationsListAction',  '_route' => 'lista_preventivi',);
                    }

                    // lista_preventivi_cerca
                    if (preg_match('#^/preventivi/lista/(?P<params>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lista_preventivi_cerca')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationsListSearchAction',));
                    }

                }

                // mostra_preventivo
                if (0 === strpos($pathinfo, '/preventivi/mostra/preventivo-') && preg_match('#^/preventivi/mostra/preventivo\\-(?P<pid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostra_preventivo')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationsShowAction',));
                }

                // modifica_preventivo
                if (0 === strpos($pathinfo, '/preventivi/modifica') && preg_match('#^/preventivi/modifica/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifica_preventivo')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationsEditAction',));
                }

                // nuovo_preventivo
                if ('/preventivi/nuovo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationsNewAction',  '_route' => 'nuovo_preventivo',);
                }

                // preventivi_dettaglio_id
                if (0 === strpos($pathinfo, '/preventivi/dettaglio') && preg_match('#^/preventivi/dettaglio/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preventivi_dettaglio_id')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::detailsAction',));
                }

                if (0 === strpos($pathinfo, '/preventivi/avanzato')) {
                    // mostra_preventivo_avanzato
                    if (0 === strpos($pathinfo, '/preventivi/avanzato/mostra/preventivo-') && preg_match('#^/preventivi/avanzato/mostra/preventivo\\-(?P<pid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostra_preventivo_avanzato')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::showExpertationAdvancedAction',));
                    }

                    // preventivi_modifica_avanzato
                    if (0 === strpos($pathinfo, '/preventivi/avanzato/modifica/preventivo-') && preg_match('#^/preventivi/avanzato/modifica/preventivo\\-(?P<pid>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preventivi_modifica_avanzato')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::editExpertationAdvancedAction',));
                    }

                    // nuovo_preventivo_avanzato
                    if (0 === strpos($pathinfo, '/preventivi/avanzato/nuovo/preventivo-') && preg_match('#^/preventivi/avanzato/nuovo/preventivo\\-(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nuovo_preventivo_avanzato')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::newExpertationAdvancedAction',));
                    }

                }

                // preventivi_dettaglio_avanzato_id
                if (0 === strpos($pathinfo, '/preventivi/computometrico/avanzato/preventivo-') && preg_match('#^/preventivi/computometrico/avanzato/preventivo\\-(?P<pid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preventivi_dettaglio_avanzato_id')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::detailsAdvancedAction',));
                }

                // preventivi_elimina
                if (0 === strpos($pathinfo, '/preventivi/elimina') && preg_match('#^/preventivi/elimina/(?P<id>[^/]++)(?:/(?P<confirm>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preventivi_elimina')), array (  'confirm' => false,  '_controller' => 'AppBundle\\Controller\\ExpertationsController::deleteExpertatationAction',));
                }

                // preventivi_imposta_accettato
                if (0 === strpos($pathinfo, '/preventivi/imposta/accettato') && preg_match('#^/preventivi/imposta/accettato/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preventivi_imposta_accettato')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationSetAcceptedAction',));
                }

                // preventivi_imposta_non_accettato
                if (0 === strpos($pathinfo, '/preventivi/imposta/non-accettato') && preg_match('#^/preventivi/imposta/non\\-accettato/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'preventivi_imposta_non_accettato')), array (  '_controller' => 'AppBundle\\Controller\\ExpertationsController::expertationSetNotAcceptedAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/prezzi')) {
                // prezzi_listino
                if ('/prezzi/listino' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PricesController::pricesListAction',  '_route' => 'prezzi_listino',);
                }

                // settings_prices
                if ('/prezzi/prezzario' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PricesController::settingsPricesAction',  '_route' => 'settings_prices',);
                }

                // prezzi_aggiorna
                if (0 === strpos($pathinfo, '/prezzi/aggiorna') && preg_match('#^/prezzi/aggiorna/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prezzi_aggiorna')), array (  '_controller' => 'AppBundle\\Controller\\PricesController::pricesUpdateAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::login',  '_route' => 'login',);
            }

            // app_security_checkusername
            if (0 === strpos($pathinfo, '/login/check/username') && preg_match('#^/login/check/username/(?P<username>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_security_checkusername')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::checkUsername',));
            }

            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        elseif (0 === strpos($pathinfo, '/logout')) {
            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        // security_change_password
        if ('/sicurezza/cambia-password' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'security_change_password',);
        }

        // statistiche
        if ('/statistiche' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\StatsController::statsAction',  '_route' => 'statistiche',);
        }

        if (0 === strpos($pathinfo, '/impostazioni')) {
            // impostazioni_generali
            if ('/impostazioni/generali' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\SettingsController::SettingsGeneralAction',  '_route' => 'impostazioni_generali',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_impostazioni_generali;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'impostazioni_generali'));
                }

                return $ret;
            }
            not_impostazioni_generali:

            if (0 === strpos($pathinfo, '/impostazioni/gruppi')) {
                // impostazioni_gruppi
                if ('/impostazioni/gruppi' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SettingsController::settingsGroupsAction',  '_route' => 'impostazioni_gruppi',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_impostazioni_gruppi;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'impostazioni_gruppi'));
                    }

                    return $ret;
                }
                not_impostazioni_gruppi:

                // impostazioni_gruppi_nuovo
                if ('/impostazioni/gruppi/nuovo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::settingsGroupAddAction',  '_route' => 'impostazioni_gruppi_nuovo',);
                }

            }

            elseif (0 === strpos($pathinfo, '/impostazioni/utenti')) {
                // impostazioni_utenti
                if ('/impostazioni/utenti' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SettingsController::SettingsUsersAction',  '_route' => 'impostazioni_utenti',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_impostazioni_utenti;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'impostazioni_utenti'));
                    }

                    return $ret;
                }
                not_impostazioni_utenti:

                // impostazioni_utenti_aggiungi
                if ('/impostazioni/utenti/nuovo' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::AjaxSUAAction',  '_route' => 'impostazioni_utenti_aggiungi',);
                }

                // impostazioni_utenti_modifica
                if (0 === strpos($pathinfo, '/impostazioni/utenti/modifica') && preg_match('#^/impostazioni/utenti/modifica/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impostazioni_utenti_modifica')), array (  '_controller' => 'AppBundle\\Controller\\SettingsController::SettingsUserEditAction',));
                }

                if (0 === strpos($pathinfo, '/impostazioni/utenti/reset-password')) {
                    // impostazioni_utenti_reset_password
                    if (preg_match('#^/impostazioni/utenti/reset\\-password/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'impostazioni_utenti_reset_password')), array (  '_controller' => 'AppBundle\\Controller\\SettingsController::settingsUserPasswordResetAction',));
                    }

                    // reset-password-link
                    if (0 === strpos($pathinfo, '/impostazioni/utenti/reset-password-link') && preg_match('#^/impostazioni/utenti/reset\\-password\\-link/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset-password-link')), array (  '_controller' => 'AppBundle\\Controller\\SettingsController::resetPassLinkTokenAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/impostazioni/utenti/resetpassword/do')) {
                    // fos_user_resetting_request
                    if ('/impostazioni/utenti/resetpassword/do/request' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_resetting_request;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/impostazioni/utenti/resetpassword/do/reset') && preg_match('#^/impostazioni/utenti/resetpassword/do/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_reset:

                    // fos_user_resetting_send_email
                    if ('/impostazioni/utenti/resetpassword/do/send-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_fos_user_resetting_send_email;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ('/impostazioni/utenti/resetpassword/do/check-email' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return $ret;
                    }
                    not_fos_user_resetting_check_email:

                }

            }

            // impostazioni_annunci
            if ('/impostazioni/annunci' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::announcementsAction',  '_route' => 'impostazioni_annunci',);
            }

            // settings_parameters
            if ('/impostazioni/parametri' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::settingsParametersAction',  '_route' => 'settings_parameters',);
            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ('/group/list' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.group.controller:listAction',  '_route' => 'fos_user_group_list',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_group_list;
                }

                return $ret;
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ('/group/new' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.group.controller:newAction',  '_route' => 'fos_user_group_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_group_new;
                }

                return $ret;
            }
            not_fos_user_group_new:

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'fos_user.group.controller:showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_group_show;
                }

                return $ret;
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'fos_user.group.controller:editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_group_edit;
                }

                return $ret;
            }
            not_fos_user_group_edit:

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'fos_user.group.controller:deleteAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_group_delete;
                }

                return $ret;
            }
            not_fos_user_group_delete:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
