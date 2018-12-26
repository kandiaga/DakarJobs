<?php

/* HomeBundle:HomePage:footer_content.html.twig */
class __TwigTemplate_e85df40fb79336e9c07be4d67954e3876e4072db637f8d90ab8a60c7c7792a89 extends Twig_Template
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
        echo "﻿<div class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"col-md-3 grid_3\">
\t\t\t<h4>Naviguer</h4>
\t\t\t<ul class=\"f_list f_list1\">
\t\t\t\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("home_homepage");
        echo "\">Home</a></li>
\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("home_loginpage");
        echo "\">Sign In</a></li>
\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("home_registrationpage");
        echo "\">Join Now</a></li>
\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("job_about");
        echo "\">About</a></li>  
\t\t\t</ul>
\t\t\t<ul class=\"f_list\">
\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("job_features");
        echo "\">Usage</a></li>
\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("job_terms");
        echo "\">Conditions</a></li>
\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home_contactpage");
        echo "\">Contact Us</a></li>
\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("job_add");
        echo "\">Post a Job</a></li>
\t\t\t</ul>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"col-md-3 grid_3\">
\t\t\t<h4> Suivez Nous</h4>
\t\t\t<div class=\"footer-list\">
\t\t\t  <ul>
\t\t\t\t<li><i class=\"fa fa-twitter tw1\"> </i><p><span class=\"yellow\"><a href=\"https://twitter.com/DakarJobs\"  target=\"_blank\">@DakarJobs</a></span>  sur twitter</p></li>
\t\t\t\t<li><i class=\"fa fa-twitter tw1\"> </i><p><span class=\"yellow\"><a href=\"https://plus.google.com/u/0/113702378639028705039\"   target=\"_blank\">DakarJobs</a></span>  sur Google+</p></li>
\t\t\t\t<li><i class=\"fa fa-facebook tw1\"> </i><p><span class=\"yellow\"><a href=\"https://web.facebook.com/DakarJobs-184193405568425/\"   target=\"_blank\">DakarJobs</a></span>  sur facebook</p></li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3 grid_3\">
\t\t\t<h4>DakarJobs</h4>
\t\t\t<p>DakarJobs est une platforme de recherche d'emploi sur le Senegal. Nous permettons aux demandeurs d'emplois d'acceder facilement aux offres d'emplois disponibles sur Dakar et dans les autres Regions du Senegal. </p>
\t\t</div>
\t\t<div class=\"col-md-3 grid_3\">
\t\t\t<h4>Sign up for our newsletter</h4>
\t\t\t<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
\t\t\t<form>
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter your email\">
\t\t\t\t<button type=\"button\" class=\"btn red\">Subscribe now!</button>
\t\t    </form>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>
<div class=\"footer_bottom\">\t
  <div class=\"container\">    
    <div class=\"col-sm-2\">
  \t\t<ul class=\"f_list2\">
\t\t\t ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_view", array("id" => $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "name"), "html", null, true);
            echo " </a>
\t\t\t </li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t
\t    </ul>
  \t</div>
  \t<div class=\"col-sm-2\">
  \t\t<ul class=\"f_list2\">
\t\t\t ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 4, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_view", array("id" => $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "name"), "html", null, true);
            echo "</a>
\t\t\t </li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t
\t    </ul>
  \t</div>
  \t<div class=\"col-sm-2\">
  \t\t<ul class=\"f_list2\">
\t\t\t ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 8, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_view", array("id" => $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "name"), "html", null, true);
            echo " </a>
\t\t\t </li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t
\t    </ul>
  \t</div>
\t
\t
  \t<div class=\"col-sm-6 footer_text\">
       <p>\"Facilitons la recherche d'emploi et la recherche de personnels en mettant les offres sur DakarJobs et nos CV en ligne. DakarJobs est une opportunite pour offrire des opportunites.Allez vers les demandeurs d'emplois et faites decouvrire votre entreprise aux jeunes talents sur DakarJobs.\"</p>
  \t</div>
  \t<div class=\"clearfix\"> </div>
\t<div class=\"copy\">
\t\t<p>Copyright ©  ";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " DakarJobs. All Rights Reserved . Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> & Developed by <a href=\"http://innovativelabs.prestatuts.com/\" target=\"_blank\">InnovativeLabs</a></p>
\t</div>
  </div>
</div>
</body>
</html>\t\t\t";
    }

    public function getTemplateName()
    {
        return "HomeBundle:HomePage:footer_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 80,  142 => 66,  135 => 61,  124 => 59,  117 => 57,  110 => 52,  99 => 50,  52 => 14,  34 => 8,  26 => 6,  22 => 4,  153 => 98,  147 => 95,  139 => 93,  134 => 91,  62 => 22,  54 => 20,  46 => 18,  41 => 16,  30 => 7,  19 => 1,  104 => 37,  97 => 21,  90 => 17,  85 => 15,  80 => 14,  77 => 13,  64 => 37,  58 => 21,  48 => 13,  44 => 12,  38 => 9,  32 => 10,  21 => 1,  278 => 103,  267 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 96,  245 => 93,  234 => 90,  227 => 89,  223 => 88,  215 => 82,  208 => 81,  195 => 75,  184 => 67,  178 => 66,  174 => 64,  168 => 63,  164 => 62,  160 => 70,  154 => 57,  149 => 68,  143 => 94,  136 => 51,  123 => 45,  113 => 38,  107 => 37,  102 => 34,  96 => 33,  92 => 48,  88 => 31,  79 => 27,  75 => 25,  70 => 40,  56 => 15,  50 => 19,  43 => 6,  40 => 24,  35 => 3,  29 => 2,);
    }
}
