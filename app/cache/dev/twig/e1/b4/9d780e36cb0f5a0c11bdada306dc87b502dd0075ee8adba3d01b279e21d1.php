<?php

/* HomeBundle:HomePage:left_side_jobs.html.twig */
class __TwigTemplate_e1b49d780e36cb0f5a0c11bdada306dc87b502dd0075ee8adba3d01b279e21d1 extends Twig_Template
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
        echo "<h3>Offres Récents</h3>
<ul class=\"list_1\">
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["recent_jobs"]) ? $context["recent_jobs"] : $this->getContext($context, "recent_jobs")), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 4
            echo "    <li>
      <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title"), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
<button  class=\"btn default\">
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("job_view", array("id" => 0));
        echo "\">
Voir tous les Offres\t
</a>
</button>\t";
    }

    public function getTemplateName()
    {
        return "HomeBundle:HomePage:left_side_jobs.html.twig";
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
