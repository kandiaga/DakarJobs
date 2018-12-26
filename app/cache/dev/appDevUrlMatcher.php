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

        // home_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::indexAction',  '_route' => 'home_homepage',);
        }

        // home_contactpage
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\ContactController::indexAction',  '_route' => 'home_contactpage',);
        }

        // home_registrationpage
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::indexAction',  '_route' => 'home_registrationpage',);
        }

        // home_loginpage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\LoginController::indexAction',  '_route' => 'home_loginpage',);
        }

        // customer_view
        if (0 === strpos($pathinfo, '/register') && preg_match('#^/register/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_view')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::viewAction',));
        }

        // customer_add
        if ($pathinfo === '/add') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_customer_add;
            }

            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::addAction',  '_route' => 'customer_add',);
        }
        not_customer_add:

        // customer_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_edit')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::editAction',));
        }

        // customer_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_delete')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::deleteAction',));
        }

        // job_myaccount
        if ($pathinfo === '/myaccount') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\MyAccountController::indexAction',  '_route' => 'job_myaccount',);
        }

        if (0 === strpos($pathinfo, '/job')) {
            // home_jobspage
            if (0 === strpos($pathinfo, '/jobs') && preg_match('#^/jobs/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_jobspage')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::indexAction',));
            }

            // job_view
            if (preg_match('#^/job/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_view')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::viewAction',));
            }

            // job_add
            if ($pathinfo === '/job/add') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_job_add;
                }

                return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::addAction',  '_route' => 'job_add',);
            }
            not_job_add:

            // job_edit
            if (0 === strpos($pathinfo, '/job/edit') && preg_match('#^/job/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_edit')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::editAction',));
            }

        }

        // job_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_delete')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::deleteAction',));
        }

        // category_view
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_view')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\CategoryController::categoryJobsAction',));
        }

        // region_view
        if (0 === strpos($pathinfo, '/region') && preg_match('#^/region/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_view')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegionController::regionJobsAction',));
        }

        if (0 === strpos($pathinfo, '/adminJBoard')) {
            // job_admin
            if ($pathinfo === '/adminJBoard') {
                return array (  '_controller' => 'NS\\HomeBundle\\Controller\\admin\\AdminDashboardController::indexAction',  '_route' => 'job_admin',);
            }

            if (0 === strpos($pathinfo, '/adminJBoard/AdminBlogPost')) {
                // job_admin_blogpost_category
                if ($pathinfo === '/adminJBoard/AdminBlogPostCategory') {
                    return array (  '_controller' => 'NS\\HomeBundle\\Controller\\admin\\AdminBlogPostCategoryController::indexAction',  '_route' => 'job_admin_blogpost_category',);
                }

                // job_admin_blogpost
                if ($pathinfo === '/adminJBoard/AdminBlogPost') {
                    return array (  '_controller' => 'NS\\HomeBundle\\Controller\\admin\\AdminBlogPostController::indexAction',  '_route' => 'job_admin_blogpost',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // job_blogpost
            if (preg_match('#^/blog/(?P<idpost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_blogpost')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\BlogPostController::viewAction',));
            }

            // job_blogpost_all
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\BlogPostController::indexAction',  '_route' => 'job_blogpost_all',);
            }

        }

        // job_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::aboutAction',  '_route' => 'job_about',);
        }

        // job_terms
        if ($pathinfo === '/conditions-legales') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::termsAction',  '_route' => 'job_terms',);
        }

        // job_features
        if ($pathinfo === '/features') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::featuresAction',  '_route' => 'job_features',);
        }

        if (0 === strpos($pathinfo, '/resume')) {
            // job_resume
            if ($pathinfo === '/resume') {
                return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::indexAction',  '_route' => 'job_resume',);
            }

            // job_resume_add
            if ($pathinfo === '/resume/create') {
                return array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::addAction',  '_route' => 'job_resume_add',);
            }

            // job_resume_view
            if (0 === strpos($pathinfo, '/resume/view') && preg_match('#^/resume/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_resume_view')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::viewAction',));
            }

            // job_resume_delete
            if (0 === strpos($pathinfo, '/resume/delete') && preg_match('#^/resume/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_resume_delete')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::deleteAction',));
            }

            // job_resume_edit
            if (0 === strpos($pathinfo, '/resume/edit') && preg_match('#^/resume/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_resume_edit')), array (  '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::editAction',));
            }

        }

        // job_search_all
        if ($pathinfo === '/search_all') {
            return array (  '_controller' => 'NS\\HomeBundle\\Controller\\JobsearchController::indexAction',  '_route' => 'job_search_all',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
