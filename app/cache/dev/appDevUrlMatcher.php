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

        // prestataire_de_servicesprestataire_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestataire_de_servicesprestataire_homepage')), array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DefaultController::indexAction',));
        }

        // prestataire_de_servicesprestataire_affichage
        if ($pathinfo === '/affichage') {
            return array (  '_controller' => 'PrestataireDeServicesprestataireBundle:PS:affichage',  '_route' => 'prestataire_de_servicesprestataire_affichage',);
        }

        // prestataire_de_servicesprestataire_test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'PrestataireDeServicesprestataireBundle:PS:PSaffiche',  '_route' => 'prestataire_de_servicesprestataire_test',);
        }

        // deal_mesDeal
        if (0 === strpos($pathinfo, '/mesDeal') && preg_match('#^/mesDeal/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_mesDeal')), array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::mesDealAction',));
        }

        if (0 === strpos($pathinfo, '/rel')) {
            // rel
            if ($pathinfo === '/rel') {
                return array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DefaultController::relAction',  '_route' => 'rel',);
            }

            // rel2
            if ($pathinfo === '/rel2') {
                return array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DefaultController::rel2Action',  '_route' => 'rel2',);
            }

        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DefaultController::ProfilAction',  '_route' => 'profil',);
        }

        if (0 === strpos($pathinfo, '/Admin')) {
            // admin_admin_homepage
            if ($pathinfo === '/Admin/index') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_admin_homepage',);
            }

            // admin_admin_stat
            if ($pathinfo === '/Admin/stat') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::statAction',  '_route' => 'admin_admin_stat',);
            }

            // admin_admin_notif
            if ($pathinfo === '/Admin/index') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_admin_notif',);
            }

            // admin_admin_client
            if ($pathinfo === '/Admin/client') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::clientAction',  '_route' => 'admin_admin_client',);
            }

            if (0 === strpos($pathinfo, '/Admin/prest')) {
                // admin_admin_prest
                if ($pathinfo === '/Admin/prestataire') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::prestataireAction',  '_route' => 'admin_admin_prest',);
                }

                // admin_admin_prest_a_Valider
                if ($pathinfo === '/Admin/prest_a_Valider') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::prest_a_ValiderAction',  '_route' => 'admin_admin_prest_a_Valider',);
                }

            }

            // admin_admin_ValiderP
            if (0 === strpos($pathinfo, '/Admin/ValiderP') && preg_match('#^/Admin/ValiderP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_ValiderP')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::ValiderPAction',));
            }

            if (0 === strpos($pathinfo, '/Admin/deal')) {
                // admin_admin_deal
                if ($pathinfo === '/Admin/deal') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::dealAction',  '_route' => 'admin_admin_deal',);
                }

                // admin_admin_deal_a_Valider
                if ($pathinfo === '/Admin/deal_a_Valider') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::deal_a_ValiderAction',  '_route' => 'admin_admin_deal_a_Valider',);
                }

            }

            // admin_admin_ValiderD
            if (0 === strpos($pathinfo, '/Admin/ValiderD') && preg_match('#^/Admin/ValiderD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_ValiderD')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::ValiderDAction',));
            }

            if (0 === strpos($pathinfo, '/Admin/supprimer')) {
                // client_supprimer
                if (0 === strpos($pathinfo, '/Admin/supprimerC') && preg_match('#^/Admin/supprimerC/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_supprimer')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::supprimerCAction',));
                }

                // prest_supprimer
                if (0 === strpos($pathinfo, '/Admin/supprimerP') && preg_match('#^/Admin/supprimerP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prest_supprimer')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::supprimerPAction',));
                }

                // deal_supprimer
                if (0 === strpos($pathinfo, '/Admin/supprimerD') && preg_match('#^/Admin/supprimerD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_supprimer')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::supprimerDAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Admin/rechercher')) {
                // user_rechercher
                if ($pathinfo === '/Admin/rechercher') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherAction',  '_route' => 'user_rechercher',);
                }

                // user_rechercherP
                if ($pathinfo === '/Admin/rechercherP') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherPAction',  '_route' => 'user_rechercherP',);
                }

                // deal_rechercher
                if ($pathinfo === '/Admin/rechercherD') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherDAction',  '_route' => 'deal_rechercher',);
                }

                // user_rechercher_prenom
                if ($pathinfo === '/Admin/rechercher_prenom') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercher_prenomAction',  '_route' => 'user_rechercher_prenom',);
                }

                // deal_rechercher_cat
                if ($pathinfo === '/Admin/rechercherD_cat') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherD_catAction',  '_route' => 'deal_rechercher_cat',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // user_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // user_test
        if ($pathinfo === '/te') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::testAction',  '_route' => 'user_test',);
        }

        // user_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::contactAction',  '_route' => 'user_contact',);
        }

        // user_recherche
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::rechercheAction',  '_route' => 'user_recherche',);
        }

        // user_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'user_about',);
        }

        // user_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'user_connexion',);
        }

        // blog_accueil
        if (preg_match('#^/(?P<page>\\d*)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_accueil')), array (  '_controller' => 'UserBundle:Blog:index',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // blog_voir
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_voir')), array (  '_controller' => 'UserBundle:Blog:voir',));
            }

            // blog_ajouter
            if ($pathinfo === '/ajouter') {
                return array (  '_controller' => 'UserBundle:Blog:ajouter',  '_route' => 'blog_ajouter',);
            }

        }

        // blog_modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_modifier')), array (  '_controller' => 'UserBundle:Blog:modifier',));
        }

        // blog_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_supprimer')), array (  '_controller' => 'UserBundle:Blog:supprimer',));
        }

        // deal_areserver
        if (0 === strpos($pathinfo, '/dareserver') && preg_match('#^/dareserver/(?P<iddeal>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_areserver')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::dareserverAction',));
        }

        // deal_reserver
        if (0 === strpos($pathinfo, '/reserver') && preg_match('#^/reserver/(?P<iddeal>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_reserver')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::reserverAction',));
        }

        // deal_evaluer
        if (0 === strpos($pathinfo, '/evaluer') && preg_match('#^/evaluer/(?P<iddeal>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_evaluer')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::evaluerAction',));
        }

        // user_internaute
        if ($pathinfo === '/internaute') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::internauteAction',  '_route' => 'user_internaute',);
        }

        // notification
        if ($pathinfo === '/notification') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\NotificationsController::listAction',  '_route' => 'notification',);
        }

        if (0 === strpos($pathinfo, '/registerPres')) {
            // fos_user_registration_registerPres
            if (rtrim($pathinfo, '/') === '/registerPres') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_registerPres');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationPresController::registerAction',  '_route' => 'fos_user_registration_registerPres',);
            }

            if (0 === strpos($pathinfo, '/registerPres/c')) {
                // fos_user_registrationPres_check_email
                if ($pathinfo === '/registerPres/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registrationPres_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationPresController::checkEmailAction',  '_route' => 'fos_user_registrationPres_check_email',);
                }
                not_fos_user_registrationPres_check_email:

                if (0 === strpos($pathinfo, '/registerPres/confirm')) {
                    // fos_user_registrationPres_confirm
                    if (preg_match('#^/registerPres/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registrationPres_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registrationPres_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationPresController::confirmAction',));
                    }
                    not_fos_user_registrationPres_confirm:

                    // fos_user_registrationPres_confirmed
                    if ($pathinfo === '/registerPres/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registrationPres_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationPresController::confirmedAction',  '_route' => 'fos_user_registrationPres_confirmed',);
                    }
                    not_fos_user_registrationPres_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/deal')) {
            // deal
            if (rtrim($pathinfo, '/') === '/deal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'deal');
                }

                return array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::indexAction',  '_route' => 'deal',);
            }

            // deal_show
            if (preg_match('#^/deal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_show')), array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::showAction',));
            }

            // deal_new
            if ($pathinfo === '/deal/new') {
                return array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::newAction',  '_route' => 'deal_new',);
            }

            // deal_create
            if ($pathinfo === '/deal/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deal_create;
                }

                return array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::createAction',  '_route' => 'deal_create',);
            }
            not_deal_create:

            // deal_edit
            if (preg_match('#^/deal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_edit')), array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::editAction',));
            }

            // deal_update
            if (preg_match('#^/deal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_deal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_update')), array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::updateAction',));
            }
            not_deal_update:

            // deal_delete
            if (preg_match('#^/deal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_deal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_delete')), array (  '_controller' => 'PrestataireDeServices\\prestataireBundle\\Controller\\DealController::deleteAction',));
            }
            not_deal_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
