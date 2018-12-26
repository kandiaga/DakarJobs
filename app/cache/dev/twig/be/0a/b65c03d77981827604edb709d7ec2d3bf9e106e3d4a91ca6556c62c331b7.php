<?php

/* HomeBundle:HomePage:index.html.twig */
class __TwigTemplate_be0ab65c03d77981827604edb709d7ec2d3bf9e106e3d4a91ca6556c62c331b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HomeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "JobsPage";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "\t 
\t
<div class=\"banner\">
\t<div class=\"container\">
\t\t<div id=\"search_wrapper\">
\t\t <div id=\"search_form\" class=\"clearfix\">
\t\t <h1>Lancer votre recherche d'emploi</h1>
\t\t    <p>
\t\t\t <input type=\"text\" class=\"text\" placeholder=\" \" value=\"Mots clés\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter Keyword(s)';}\">
\t\t\t <input type=\"text\" class=\"text\" placeholder=\" \" value=\"Région, Localité\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Location';}\">
\t\t\t <label class=\"btn2 btn-2 btn2-1b\"><input type=\"submit\" value=\"Find Jobs\"></label>
\t\t\t</p>
            <h2 class=\"title\">Jobs par Régions &amp; par Catégorie</h2>
         </div>
\t\t <div id=\"city_1\" class=\"clearfix\">
\t\t\t <ul class=\"orange\">
\t\t\t ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 21
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
        // line 23
        echo "\t\t\t\t 
\t\t\t </ul>
\t\t\t <ul class=\"orange\">
\t\t\t 
\t\t\t ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 8, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 29
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
        // line 31
        echo "\t
\t\t\t 
\t\t\t </ul>
\t\t\t <ul class=\"blue\">
\t\t\t ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["left_categories"]) ? $context["left_categories"] : $this->getContext($context, "left_categories")), 0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 36
            echo "\t\t\t <li>
\t\t\t <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_view", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</a>
\t\t\t </li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " \t\t\t 
\t\t\t </ul>
\t\t\t <ul class=\"blue\">\t\t\t  
\t\t\t  ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["left_categories"]) ? $context["left_categories"] : $this->getContext($context, "left_categories")), 8, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 43
            echo "\t\t\t <li>
\t\t\t <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_view", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</a>
\t\t\t </li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo " \t\t\t\t       \t\t\t 
\t\t\t </ul>    
\t\t\t 
\t     </div>
       </div>
   </div> 
</div>\t
<div class=\"container\">     
\t<!--- Featured Employers--->
    ";
        // line 55
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HomeBundle:HomePage:featuredEmployers"));
        echo "
\t<!--- End Featured Employers--->\t\t 
\t 
\t  <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>\t 
\t 
\t <div class=\"single\"> \t 
\t   
\t   <!--left column--->\t
\t    <div class=\"col-md-4\">
\t      <div class=\"col_3\">
\t   \t  ";
        // line 65
        echo twig_include($this->env, $context, "HomeBundle::HomePage/todays_jobs.html.twig");
        echo "
\t\t  </div>
\t   \t  <div class=\"col_3\">
\t\t  ";
        // line 68
        echo twig_include($this->env, $context, "HomeBundle::HomePage/jobs_by_category.html.twig");
        echo "\t   \t  \t
\t   \t  </div>
         </div>\t\t  
    <!--end of left column--->\t\t
\t 
\t   <div class=\"col-md-8\">
\t  
\t     ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["blog_posts"]) ? $context["blog_posts"] : $this->getContext($context, "blog_posts")), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 76
            echo "\t      <div class=\"col_1\">
   \t        <div class=\"col-sm-4 row_2\">
\t\t\t\t<a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_blogpost", array("idpost" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "img"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/></a>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8 row_1\">
\t\t\t\t<h4><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_blogpost", array("idpost" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
            echo "</a></h4>
\t\t\t\t<h6>posté le <span class=\"dot\">·</span>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "date"), "d/m/Y"), "html", null, true);
            echo "</h6>
\t\t\t\t<p>
\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "content"), 0, 120) . "..."), "html", null, true);
            echo "
\t\t\t\t<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_blogpost", array("idpost" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">Lire la suite</a>
\t\t\t\t</p>\t\t\t\t
\t\t\t\t<div class=\"social\">\t
\t\t\t\t\t<a class=\"btn_1\" href=\"#\">
\t\t\t\t\t\t<i class=\"fa fa-facebook fb\"></i>
\t\t\t\t\t\t<span class=\"share1 fb\">Share</span>\t\t\t\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn_1\" href=\"#\">
\t\t\t\t\t\t<i class=\"fa fa-twitter tw\"></i>
\t\t\t\t\t\t<span class=\"share1\">Tweet</span>\t\t\t\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn_1\" href=\"#\">
\t\t\t\t\t\t<i class=\"fa fa-google-plus google\"></i>
\t\t\t\t\t\t<span class=\"share1 google\">Share</span>
\t\t\t\t\t</a>
\t\t\t   </div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t   </div>\t\t   
\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo " \t
         <button class=\"btn default\">
\t\t <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("job_blogpost_all");
        echo "\">Voir tous les articles</a>
\t\t </button>
\t   </div>
\t   <div class=\"clearfix\"> </div>
\t </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:HomePage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 106,  249 => 104,  223 => 85,  219 => 84,  214 => 82,  208 => 81,  199 => 78,  195 => 76,  191 => 75,  181 => 68,  175 => 65,  165 => 58,  159 => 55,  148 => 46,  135 => 44,  132 => 43,  128 => 42,  123 => 39,  110 => 37,  107 => 36,  103 => 35,  97 => 31,  86 => 29,  79 => 27,  73 => 23,  62 => 21,  55 => 19,  35 => 3,  29 => 2,);
    }
}
