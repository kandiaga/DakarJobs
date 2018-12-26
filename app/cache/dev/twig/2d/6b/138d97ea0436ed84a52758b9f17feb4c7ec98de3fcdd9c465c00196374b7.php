<?php

/* HomeBundle:HomePage:featured_employers.html.twig */
class __TwigTemplate_2d6b138d97ea0436ed84a52758b9f17feb4c7ec98de3fcdd9c465c00196374b7 extends Twig_Template
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
        echo "  <div class=\"grid_1\">
\t <h3>Featured Employers</h3>
\t   <ul id=\"flexiselDemo3\">
\t      <li><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/c1.gif"), "html", null, true);
        echo "\"  class=\"img-responsive\" /></li>
\t\t  <li><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/c2.gif"), "html", null, true);
        echo "\"  class=\"img-responsive\" /></li>
\t\t  <li><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/c3.gif"), "html", null, true);
        echo "\"  class=\"img-responsive\" /></li>
\t\t  <li><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/c4.gif"), "html", null, true);
        echo "\"  class=\"img-responsive\" /></li>
\t\t  <li><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/c5.gif"), "html", null, true);
        echo "\"  class=\"img-responsive\" /></li>
\t\t  <li><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/c6.gif"), "html", null, true);
        echo "\"  class=\"img-responsive\" /></li>\t
\t    </ul>
\t\t
\t    <script type=\"text/javascript\">
\t\t \$(window).load(function() {
\t\t\t\$(\"#flexiselDemo3\").flexisel({
\t\t\t\tvisibleItems: 6,
\t\t\t\tanimationSpeed: 1000,
\t\t\t\tautoPlay:false,
\t\t\t\tautoPlaySpeed: 3000,    \t\t
\t\t\t\tpauseOnHover: true,
\t\t\t\tenableResponsiveBreakpoints: true,
\t\t    \tresponsiveBreakpoints: { 
\t\t    \t\tportrait: { 
\t\t    \t\t\tchangePoint:480,
\t\t    \t\t\tvisibleItems: 1
\t\t    \t\t}, 
\t\t    \t\tlandscape: { 
\t\t    \t\t\tchangePoint:640,
\t\t    \t\t\tvisibleItems: 2
\t\t    \t\t},
\t\t    \t\ttablet: { 
\t\t    \t\t\tchangePoint:768,
\t\t    \t\t\tvisibleItems: 3
\t\t    \t\t}
\t\t    \t}
\t\t    });
\t\t    
\t\t});
\t   </script>\t   
\t </div>\t";
    }

    public function getTemplateName()
    {
        return "HomeBundle:HomePage:featured_employers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,  253 => 106,  249 => 104,  223 => 85,  219 => 84,  214 => 82,  208 => 81,  199 => 78,  195 => 76,  191 => 75,  181 => 68,  175 => 65,  165 => 58,  159 => 55,  148 => 46,  135 => 44,  132 => 43,  128 => 42,  123 => 39,  110 => 37,  107 => 36,  103 => 35,  97 => 31,  86 => 29,  79 => 27,  73 => 23,  62 => 21,  55 => 19,  35 => 3,  29 => 2,);
    }
}
