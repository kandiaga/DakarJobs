<?php

/* HomeBundle::HomePage/header_nav.html.twig */
class __TwigTemplate_4bc2e746f5c45fc2ffa15e46d1d3d8c7a5305813ef05a11cd2d2a1962d5ca19d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
\t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t        <span class=\"sr-only\">Toggle navigation</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t        </button>
\t        <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("home_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t    </div>
\t    <!--/.navbar-header-->
\t    <div class=\"navbar-collapse collapse\" id=\"bs-example-navbar-collapse-1\" style=\"height: 1px;\">
\t        <ul class=\"nav navbar-nav\">
\t\t        <li class=\"dropdown\">
\t\t            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("home_jobspage", array("page" => 1));
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Jobs<b class=\"caret\"></b></a>
\t\t            <ul class=\"dropdown-menu\">
\t\t\t\t\t    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("job_search_all");
        echo "\">Tous les offres</a></li>\t\t\t            
\t\t\t            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("job_search_all");
        echo "#region\">Offres par Regions</a></li>
\t\t\t            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("job_search_all");
        echo "#fonction\">Offres par Fonction </a></li>
\t\t\t            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("job_search_all");
        echo "#entreprise\">Offres par Industrie</a></li>
\t\t\t            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("job_search_all");
        echo "#entreprise\">Offres par Entreprise</a></li>\t\t\t\t\t\t
\t\t            </ul>
\t\t        </li>
\t\t        <li class=\"dropdown\">
\t\t        \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Services<b class=\"caret\"></b></a>
\t\t            <ul class=\"dropdown-menu multi-column columns-3\">
\t\t\t            <div class=\"row\">
\t\t\t\t            <div class=\"col-sm-4\">
\t\t\t\t\t            <ul class=\"multi-column-dropdown\">
\t\t\t\t\t\t            <li><a href=\"services.html\">Action</a></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Another action</a></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Something else here</a></li>
\t\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Separated link</a></li>
\t\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">One more separated link</a></li>
\t\t\t\t\t            </ul>
\t\t\t\t            </div>
\t\t\t\t            <div class=\"col-sm-4\">
\t\t\t\t\t            <ul class=\"multi-column-dropdown\">
\t\t\t\t\t\t            <li><a href=\"services.html\">Action</a></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Another action</a></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Something else here</a></li>
\t\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Separated link</a></li>
\t\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">One more separated link</a></li>
\t\t\t\t\t            </ul>
\t\t\t\t            </div>
\t\t\t\t            <div class=\"col-sm-4\">
\t\t\t\t\t            <ul class=\"multi-column-dropdown\">
\t\t\t\t\t\t            <li><a href=\"services.html\">Action</a></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Another action</a></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Something else here</a></li>
\t\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">Separated link</a></li>
\t\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t\t            <li><a href=\"services.html\">One more separated link</a></li>
\t\t\t\t\t            </ul>
\t\t\t\t            </div>
\t\t\t            </div>
\t\t            </ul>
\t\t        </li>
\t\t        <li class=\"dropdown\">
\t\t            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recruiters<b class=\"caret\"></b></a>
\t\t             <ul class=\"dropdown-menu\">
\t\t\t            <li><a href=\"login.html\">Recruiter Updates</a></li>
\t\t\t            <li><a href=\"recruiters.html\">Recruiters you are following</a></li>
\t\t\t            <li><a href=\"codes.html\">Shortcodes</a></li>
\t\t             </ul>
\t\t        </li>
\t\t        <li class=\"dropdown\">
\t\t            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More<b class=\"caret\"></b></a>
\t\t            <ul class=\"dropdown-menu\">
\t\t\t            <li><a href=\"jobs.html\">Walk-ins</a></li>
\t\t\t            <li><a href=\"jobs.html\">Bpo Jobs</a></li>
\t\t\t            <li><a href=\"jobs.html\">Teaching Jobs</a></li>
\t\t\t            <li><a href=\"jobs.html\">Diploma Jobs</a></li>
\t\t\t            <li><a href=\"jobs.html\">Tech Support</a></li>
\t\t\t            <li><a href=\"jobs.html\">Finance Jobs</a></li>
\t\t\t            <li><a href=\"jobs.html\">Part time Jobs</a></li>
\t\t\t            <li><a href=\"jobs.html\">Health Care</a></li>
\t\t\t            <li><a href=\"jobs.html\">Hospitality</a></li>
\t\t\t            <li><a href=\"jobs.html\">Internships</a></li>
\t\t\t            <li><a href=\"jobs.html\">Research Jobs</a></li>
\t\t\t            <li><a href=\"jobs.html\">Defence Jobs</a></li>
\t\t            </ul>
\t\t        </li>\t\t\t\t\t
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_myaccount", array("id_customer" => (isset($context["customer_id"]) ? $context["customer_id"] : $this->getContext($context, "customer_id")))), "html", null, true);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">My Account<b class=\"caret\"></b></a>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("home_registrationpage");
        echo "\" >Register</a></li>
\t\t        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("home_loginpage");
        echo "\">Login</a></li>
\t\t        <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("job_resume");
        echo "\">Upload Resume</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("home_contactpage");
        echo "\" >Contact</a></li>
\t        </ul>
\t    </div>
\t    <div class=\"clearfix\"> </div>
\t  </div>
\t    <!--/.navbar-collapse-->
\t</nav>";
    }

    public function getTemplateName()
    {
        return "HomeBundle::HomePage/header_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 98,  147 => 95,  139 => 93,  134 => 91,  62 => 22,  54 => 20,  46 => 18,  41 => 16,  30 => 10,  19 => 1,  104 => 37,  97 => 21,  90 => 17,  85 => 15,  80 => 14,  77 => 13,  64 => 37,  58 => 21,  48 => 27,  44 => 26,  38 => 13,  32 => 10,  21 => 1,  278 => 103,  267 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 96,  245 => 93,  234 => 90,  227 => 89,  223 => 88,  215 => 82,  208 => 81,  195 => 75,  184 => 67,  178 => 66,  174 => 64,  168 => 63,  164 => 62,  160 => 61,  154 => 57,  149 => 56,  143 => 94,  136 => 51,  123 => 45,  113 => 38,  107 => 37,  102 => 34,  96 => 33,  92 => 32,  88 => 31,  79 => 27,  75 => 25,  70 => 40,  56 => 13,  50 => 19,  43 => 6,  40 => 24,  35 => 3,  29 => 2,);
    }
}
