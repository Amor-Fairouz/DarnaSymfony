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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

        if (0 === strpos($pathinfo, '/h')) {
            // projet_user_homepage
            if (0 === strpos($pathinfo, '/helloo') && preg_match('#^/helloo/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_user_homepage')), array (  '_controller' => 'Projet\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/home_')) {
                // home_admin
                if ($pathinfo === '/home_admin') {
                    return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\adminController::listerAction',  '_route' => 'home_admin',);
                }

                // home_gerant
                if ($pathinfo === '/home_gerant') {
                    return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\gerantController::listerAction',  '_route' => 'home_gerant',);
                }

                // home_client
                if ($pathinfo === '/home_client') {
                    return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\clientController::listerAction',  '_route' => 'home_client',);
                }

                // home_back_admin
                if ($pathinfo === '/home_back_admin') {
                    return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\DefaultController::redirectAction',  '_route' => 'home_back_admin',);
                }

            }

        }

        // home_administrateur
        if ($pathinfo === '/acceuilAdmin') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\GraphicsController::StatAction',  '_route' => 'home_administrateur',);
        }

        if (0 === strpos($pathinfo, '/Accueil')) {
            // home
            if ($pathinfo === '/Accueil') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\DefaultController::AccueilAction',  '_route' => 'home',);
            }

            // homeGerant
            if ($pathinfo === '/AccueilGerant') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\DefaultController::AccueilGerantAction',  '_route' => 'homeGerant',);
            }

        }

        // projet_ajouter_admin
        if ($pathinfo === '/ajoutAdmin') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\adminController::ajoutAction',  '_route' => 'projet_ajouter_admin',);
        }

        // projet_afficher_admin
        if ($pathinfo === '/listerAdmin') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\adminController::listerAction',  '_route' => 'projet_afficher_admin',);
        }

        // Supprimer
        if (0 === strpos($pathinfo, '/supprimerAdmin') && preg_match('#^/supprimerAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\adminController::supprimerAction',));
        }

        // Modifier
        if (0 === strpos($pathinfo, '/modifierAdmin') && preg_match('#^/modifierAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\adminController::modifierAction',));
        }

        // ajouter_Entreprise
        if ($pathinfo === '/ajoutE') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::ajouterEntrepriseAction',  '_route' => 'ajouter_Entreprise',);
        }

        // afficher_Entreprise
        if ($pathinfo === '/listE') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::listerEntrepriseAction',  '_route' => 'afficher_Entreprise',);
        }

        // Supprimer_Entreprise
        if (0 === strpos($pathinfo, '/Sup') && preg_match('#^/Sup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_Entreprise')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::supprimerEntrepriseAction',));
        }

        // modifier_Entreprise
        if (0 === strpos($pathinfo, '/up') && preg_match('#^/up/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_Entreprise')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::modifierEntrepriseAction',));
        }

        // rechercher_Entreprise
        if ($pathinfo === '/rech') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::rechercherEntrepriseAction',  '_route' => 'rechercher_Entreprise',);
        }

        // ajouter_Terrain
        if ($pathinfo === '/ajoutT') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TerrainController::ajouterTerrainAction',  '_route' => 'ajouter_Terrain',);
        }

        // afficher_Terrain
        if ($pathinfo === '/listT') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TerrainController::listerTerrainAction',  '_route' => 'afficher_Terrain',);
        }

        // Supprimer_Terrain
        if (0 === strpos($pathinfo, '/SupT') && preg_match('#^/SupT/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_Terrain')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TerrainController::supprimerTerrainAction',));
        }

        // modifier_Terrain
        if (0 === strpos($pathinfo, '/upT') && preg_match('#^/upT/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_Terrain')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TerrainController::modifierTerrainAction',));
        }

        // rechercher_Terrain
        if ($pathinfo === '/rechT') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TerrainController::rechercherTerrainAction',  '_route' => 'rechercher_Terrain',);
        }

        // ajouter_Logement
        if ($pathinfo === '/ajoutL') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\LogementController::ajouterLogementAction',  '_route' => 'ajouter_Logement',);
        }

        // afficher_Logement
        if ($pathinfo === '/listL') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\LogementController::listerLogementAction',  '_route' => 'afficher_Logement',);
        }

        // Supprimer_Logement
        if (0 === strpos($pathinfo, '/SupL') && preg_match('#^/SupL/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_Logement')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\LogementController::supprimerLogementAction',));
        }

        // modifier_Logement
        if (0 === strpos($pathinfo, '/upL') && preg_match('#^/upL/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_Logement')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\LogementController::modifierLogementAction',));
        }

        // rechercher_Logement
        if ($pathinfo === '/rechL') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\LogementController::rechercherLogementAction',  '_route' => 'rechercher_Logement',);
        }

        if (0 === strpos($pathinfo, '/list')) {
            // afficher_OffreF
            if ($pathinfo === '/listOF') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\OffreController::listerOffreFAction',  '_route' => 'afficher_OffreF',);
            }

            if (0 === strpos($pathinfo, '/listE')) {
                // afficher_EntrepriseEF
                if ($pathinfo === '/listEFR') {
                    return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::listerEntreprisefrontAction',  '_route' => 'afficher_EntrepriseEF',);
                }

                // afficher_LogementLF
                if ($pathinfo === '/listEL') {
                    return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\LogementController::listerLogementfrontAction',  '_route' => 'afficher_LogementLF',);
                }

            }

            // afficher_TerrainTF
            if ($pathinfo === '/listTL') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TerrainController::listerTerrainfrontAction',  '_route' => 'afficher_TerrainTF',);
            }

        }

        if (0 === strpos($pathinfo, '/rech')) {
            // rechercher_Entreprise_By_Prix
            if ($pathinfo === '/rechEP') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\EntrepriseController::rechercherEntrepriseByPrixAction',  '_route' => 'rechercher_Entreprise_By_Prix',);
            }

            // rechercher_Tous
            if ($pathinfo === '/rechTous') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\OffreController::recherchegeneralAction',  '_route' => 'rechercher_Tous',);
            }

        }

        // projet_ajouter_client
        if ($pathinfo === '/ajoutClient') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\clientController::ajoutAction',  '_route' => 'projet_ajouter_client',);
        }

        // projet_afficher_client
        if ($pathinfo === '/listerClient') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\clientController::listerAction',  '_route' => 'projet_afficher_client',);
        }

        // Supprimer_client
        if (0 === strpos($pathinfo, '/supprimerClient') && preg_match('#^/supprimerClient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_client')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\clientController::supprimerAction',));
        }

        // Modifier_client
        if (0 === strpos($pathinfo, '/modifierClient') && preg_match('#^/modifierClient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_client')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\clientController::modifierAction',));
        }

        // espace_admin
        if ($pathinfo === '/espaceAdmin') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\GraphicsController::StatAction',  '_route' => 'espace_admin',);
        }

        // projet_ajouter_gerant
        if ($pathinfo === '/ajoutGerant') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\gerantController::ajoutAction',  '_route' => 'projet_ajouter_gerant',);
        }

        // projet_afficher_gerant
        if ($pathinfo === '/listerGerant') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\gerantController::listerAction',  '_route' => 'projet_afficher_gerant',);
        }

        // Supprimer_gerant
        if (0 === strpos($pathinfo, '/supprimerGerant') && preg_match('#^/supprimerGerant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_gerant')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\gerantController::supprimerAction',));
        }

        // Modifier_gerant
        if (0 === strpos($pathinfo, '/modifierGerant') && preg_match('#^/modifierGerant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_gerant')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\gerantController::modifierAction',));
        }

        // Modifier_gnt
        if ($pathinfo === '/session') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\adminController::indexAction',  '_route' => 'Modifier_gnt',);
        }

        if (0 === strpos($pathinfo, '/AjouterR')) {
            // AjoutRendezVous
            if (0 === strpos($pathinfo, '/AjouterRDV') && preg_match('#^/AjouterRDV/(?P<idOffre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AjoutRendezVous')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\RendezVousController::AjoutRendezVousAction',));
            }

            // AjoutReclamation
            if ($pathinfo === '/AjouterRec') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\ReclamationController::AjoutReclamationAction',  '_route' => 'AjoutReclamation',);
            }

        }

        if (0 === strpos($pathinfo, '/ListRe')) {
            // ListRendez
            if ($pathinfo === '/ListRendez') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\RendezVousController::listeRendezAction',  '_route' => 'ListRendez',);
            }

            // ListRec
            if ($pathinfo === '/ListRec') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\ReclamationController::listeRecAction',  '_route' => 'ListRec',);
            }

        }

        if (0 === strpos($pathinfo, '/RechercheRe')) {
            // RechercheRec
            if ($pathinfo === '/RechercheRec') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\ReclamationController::RechercheAction',  '_route' => 'RechercheRec',);
            }

            // RechercheRendez
            if ($pathinfo === '/RechercheRendez') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\RendezVousController::RechercheAction',  '_route' => 'RechercheRendez',);
            }

        }

        if (0 === strpos($pathinfo, '/SupprimerRe')) {
            // SupprimerRendez
            if (0 === strpos($pathinfo, '/SupprimerRendez') && preg_match('#^/SupprimerRendez/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SupprimerRendez')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\RendezVousController::supprimerRendezVousAction',));
            }

            // SupprimerRec
            if (0 === strpos($pathinfo, '/SupprimerRec') && preg_match('#^/SupprimerRec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SupprimerRec')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\ReclamationController::supprimerReclamationAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ModifierRe')) {
            // ModifierRec
            if (0 === strpos($pathinfo, '/ModifierRec') && preg_match('#^/ModifierRec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierRec')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\ReclamationController::modifierReclamationAction',));
            }

            // ModifierRendez
            if (0 === strpos($pathinfo, '/ModifierRendez') && preg_match('#^/ModifierRendez/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierRendez')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\RendezVousController::modifierRendezVousAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // Ajouter_Facture
            if ($pathinfo === '/ajoutF') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\FactureController::AjouterFactureAction',  '_route' => 'Ajouter_Facture',);
            }

            // Afficher_Facture
            if ($pathinfo === '/afficherF') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\FactureController::listerFactureAction',  '_route' => 'Afficher_Facture',);
            }

        }

        // Supprimer_Facture
        if (0 === strpos($pathinfo, '/suprimerF') && preg_match('#^/suprimerF/(?P<idfacture>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_Facture')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\FactureController::SupprimerFactureAction',));
        }

        // Modifier_Facture
        if (0 === strpos($pathinfo, '/modifF') && preg_match('#^/modifF/(?P<idfacture>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_Facture')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\FactureController::ModifierFactureAction',));
        }

        // Rechercher_Facture
        if ($pathinfo === '/rechercheF') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\FactureController::ChercherFactureAction',  '_route' => 'Rechercher_Facture',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // Ajouter_Alerte
            if ($pathinfo === '/ajouterA') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AlerteController::AjouterAlerteAction',  '_route' => 'Ajouter_Alerte',);
            }

            // Afficher_Alerte
            if ($pathinfo === '/afficherA') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AlerteController::listerAlerteAction',  '_route' => 'Afficher_Alerte',);
            }

        }

        // Supprimer_Alerte
        if (0 === strpos($pathinfo, '/suprimerA') && preg_match('#^/suprimerA/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_Alerte')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AlerteController::SupprimerAlerteAction',));
        }

        // Myapp_chartLine
        if ($pathinfo === '/chart') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\GraphicsController::chartLineAction',  '_route' => 'Myapp_chartLine',);
        }

        // Myapp_Histogramme
        if ($pathinfo === '/histog') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\GraphicsController::chartHistogrammeAction',  '_route' => 'Myapp_Histogramme',);
        }

        // Myapp_Pie
        if ($pathinfo === '/Pie') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\GraphicsController::chartPieAction',  '_route' => 'Myapp_Pie',);
        }

        // Myapp_MenuStat
        if ($pathinfo === '/stat') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\GraphicsController::StatAction',  '_route' => 'Myapp_MenuStat',);
        }

        // Myapp_PDF
        if (0 === strpos($pathinfo, '/DQL/pdf') && preg_match('#^/DQL/pdf/(?P<idfacture>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Myapp_PDF')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\PdfController::generatePDFAction',));
        }

        // Afficher_message
        if ($pathinfo === '/msg') {
            return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AlerteController::msgAction',  '_route' => 'Afficher_message',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // Ajouter_transp
            if ($pathinfo === '/ajoutTran') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TransporteurController::ajouterTransporteurAction',  '_route' => 'Ajouter_transp',);
            }

            // Afficher_transp
            if ($pathinfo === '/afficheTran') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TransporteurController::listerTransporteurAction',  '_route' => 'Afficher_transp',);
            }

        }

        // supprimer_transp
        if (0 === strpos($pathinfo, '/supTran') && preg_match('#^/supTran/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_transp')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TransporteurController::supprimerTransporteurAction',));
        }

        // modifier_transp
        if (0 === strpos($pathinfo, '/upTran') && preg_match('#^/upTran/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_transp')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\TransporteurController::modifierTransporteurAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // Ajouter_agence
            if ($pathinfo === '/ajoutAg') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AgenceController::ajouterAgenceAction',  '_route' => 'Ajouter_agence',);
            }

            // Afficher_agence
            if ($pathinfo === '/afficheAg') {
                return array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AgenceController::listerAgenceAction',  '_route' => 'Afficher_agence',);
            }

        }

        // supprimer_agence
        if (0 === strpos($pathinfo, '/supAg') && preg_match('#^/supAg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_agence')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AgenceController::supprimerAgenceAction',));
        }

        // modifier_agence
        if (0 === strpos($pathinfo, '/upAg') && preg_match('#^/upAg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_agence')), array (  '_controller' => 'Projet\\DarnaBundle\\Controller\\AgenceController::modifierAgenceAction',));
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

        // projet_mail_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_mail_homepage')), array (  '_controller' => 'Projet\\MailBundle\\Controller\\DefaultController::indexAction',));
        }

        // projet_mail_redirection
        if ($pathinfo === '/redirection') {
            return array (  '_controller' => 'Projet\\MailBundle\\Controller\\DefaultController::redirectionAction',  '_route' => 'projet_mail_redirection',);
        }

        // projet_mail_sendMail
        if (0 === strpos($pathinfo, '/sendMail') && preg_match('#^/sendMail/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_mail_sendMail')), array (  '_controller' => 'Projet\\MailBundle\\Controller\\DefaultController::sendMailAction',));
        }

        // mytest_homepage
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'Projet\\MapsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mytest_homepage',);
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

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
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
