<?php

/* HomeBundle:HomePage:job_search.html.twig */
class __TwigTemplate_a968a932bea0d1c3c421cbb3b2afa14f293263ec8eb28ac3b5e1b4980fa277b4 extends Twig_Template
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
<div class=\"banner_1\">   
   ";
        // line 5
        echo twig_include($this->env, $context, "HomeBundle::HomePage/search_form_single.html.twig");
        echo "
</div>\t
<div class=\"container\">
<div class=\"single\"> \t 

<h2 style=\"margin-top:20px; margin-bottom:50px;margin-left:100px;\">Lister les offres</h2>
\t
<section style=\"margin-top:20px; margin-bottom:50px;margin-left:100px;\">
<h3  class=\"title\"  id=\"entreprise\">Par Entreprise:</h3>

</section>

<hr/>

<section style=\"margin-top:20px; margin-bottom:50px;margin-left:100px;\">
      <div id=\"city_1\" class=\"clearfix\">
\t <h3  class=\"title\"  id=\"region\">Par Region:</h3>
\t
\t\t\t <ul class=\"orange\">
\t\t\t ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 26
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
        // line 28
        echo "\t\t\t\t 
\t\t\t </ul>
\t\t\t <ul class=\"orange\">
\t\t\t 
\t\t\t ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), 8, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            echo "\t
\t\t\t <li>
\t\t\t <a href=\"";
            // line 34
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
        // line 36
        echo "\t
\t\t\t 
\t\t\t </ul>\t\t\t 
\t\t\t 
\t     </div>
</section>

<hr/>

<section style=\"margin-top:20px; margin-bottom:50px;\">
<div id=\"city_1\" class=\"clearfix\">
<h2  id=\"fonction\">Par fonction ou industrie:</h2>

<ul class=\"blue\">
\t\t\t ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 51
            echo "\t\t\t <li>
\t\t\t <a href=\"";
            // line 52
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
        // line 54
        echo " \t\t\t 
\t\t\t </ul>
\t\t\t <ul class=\"blue\">\t\t\t  
\t\t\t  ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 8, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 58
            echo "\t\t\t <li>
\t\t\t <a href=\"";
            // line 59
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
        // line 61
        echo " \t\t\t\t       \t\t\t 
\t\t\t </ul>    

</div>
</section>

</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "HomeBundle:HomePage:job_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  153 => 59,  150 => 58,  146 => 57,  141 => 54,  128 => 52,  125 => 51,  121 => 50,  105 => 36,  94 => 34,  87 => 32,  81 => 28,  70 => 26,  63 => 24,  41 => 5,  35 => 3,  29 => 2,);
    }
}
