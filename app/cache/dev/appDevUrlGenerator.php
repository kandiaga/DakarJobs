<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'home_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'home_contactpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'home_registrationpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),),
        'home_loginpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'customer_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),),
        'customer_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::addAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),),
        'customer_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit',    ),  ),  4 =>   array (  ),),
        'customer_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegistrationController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),),
        'job_myaccount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\MyAccountController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/myaccount',    ),  ),  4 =>   array (  ),),
        'home_jobspage' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/jobs',    ),  ),  4 =>   array (  ),),
        'job_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'job_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::addAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/add',    ),  ),  4 =>   array (  ),),
        'job_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/job/edit',    ),  ),  4 =>   array (  ),),
        'job_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\JobController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),),
        'category_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\CategoryController::categoryJobsAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),),
        'region_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\RegionController::regionJobsAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/region',    ),  ),  4 =>   array (  ),),
        'job_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\admin\\AdminDashboardController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminJBoard',    ),  ),  4 =>   array (  ),),
        'job_admin_blogpost_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\admin\\AdminBlogPostCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminJBoard/AdminBlogPostCategory',    ),  ),  4 =>   array (  ),),
        'job_admin_blogpost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\admin\\AdminBlogPostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminJBoard/AdminBlogPost',    ),  ),  4 =>   array (  ),),
        'job_blogpost' => array (  0 =>   array (    0 => 'idpost',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\BlogPostController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpost',    ),    1 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),),
        'job_blogpost_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\BlogPostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),),
        'job_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),),
        'job_terms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::termsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conditions-legales',    ),  ),  4 =>   array (  ),),
        'job_features' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\HomePageController::featuresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/features',    ),  ),  4 =>   array (  ),),
        'job_resume' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resume',    ),  ),  4 =>   array (  ),),
        'job_resume_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resume/create',    ),  ),  4 =>   array (  ),),
        'job_resume_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resume/view',    ),  ),  4 =>   array (  ),),
        'job_resume_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resume/delete',    ),  ),  4 =>   array (  ),),
        'job_resume_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\front\\ResumeController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resume/edit',    ),  ),  4 =>   array (  ),),
        'job_search_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NS\\HomeBundle\\Controller\\JobsearchController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_all',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
