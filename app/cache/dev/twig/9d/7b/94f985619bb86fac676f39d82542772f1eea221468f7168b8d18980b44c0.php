<?php

/* HomeBundle::HomePage/jobs_by_category.html.twig */
class __TwigTemplate_9d7b94f985619bb86fac676f39d82542772f1eea221468f7168b8d18980b44c0 extends Twig_Template
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HomeBundle:RecentJob:leftCategories"));
        // line 4
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "HomeBundle::HomePage/jobs_by_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  21 => 4,  44 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,  253 => 106,  249 => 104,  223 => 85,  219 => 84,  214 => 82,  208 => 81,  199 => 78,  195 => 76,  191 => 75,  181 => 68,  175 => 65,  165 => 58,  159 => 55,  148 => 46,  135 => 44,  132 => 43,  128 => 42,  123 => 39,  110 => 37,  107 => 36,  103 => 35,  97 => 31,  86 => 29,  79 => 27,  73 => 23,  62 => 21,  55 => 19,  35 => 3,  29 => 2,);
    }
}
