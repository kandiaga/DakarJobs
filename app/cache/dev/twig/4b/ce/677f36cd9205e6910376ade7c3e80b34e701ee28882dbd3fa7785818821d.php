<?php

/* HomeBundle:HomePage:left_side_categories.html.twig */
class __TwigTemplate_4bce677f36cd9205e6910376ade7c3e80b34e701ee28882dbd3fa7785818821d extends Twig_Template
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
        echo "<h3>Offres par  Catégorie</h3>
<ul class=\"list_2\">
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["left_categories"]) ? $context["left_categories"] : $this->getContext($context, "left_categories")), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 4
            echo "    <li>
      <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_view", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "
      </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t
</ul>
<button  class=\"btn default\">
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("category_view", array("id" => 0));
        echo "\">
Voir toutes les caregories\t
</a>
</button>\t\t\t\t 
<div class=\"widget\">
\t        <h3>Take The Seeking Poll!</h3>
    \t        <div class=\"widget-content\"> 
                 <div class=\"seeking-answer\">
\t\t\t    \t<span class=\"seeking-answer-group\">
\t\t    \t\t\t<span class=\"seeking-answer-input\">
\t\t    \t\t\t   <input class=\"seeking-radiobutton\" type=\"radio\">
\t\t    \t\t\t</span>
\t\t    \t\t\t<label for=\"\" class=\"seeking-input-label\">
\t\t    \t\t\t\t<span class=\"seeking-answer-span\">Frequently</span>
\t\t    \t\t\t</label>
\t\t    \t\t</span>
\t\t\t    \t<span class=\"seeking-answer-group\">
\t\t    \t\t\t<span class=\"seeking-answer-input\">
\t\t    \t\t\t   <input class=\"seeking-radiobutton\" type=\"radio\">
\t\t    \t\t\t</span>
\t\t    \t\t\t<label for=\"\" class=\"seeking-input-label\">
\t\t    \t\t\t\t<span class=\"seeking-answer-span\">Interviewing</span>
\t\t    \t\t\t</label>
\t\t    \t\t</span>
\t\t\t        <span class=\"seeking-answer-group\">
\t\t    \t\t\t<span class=\"seeking-answer-input\">
\t\t    \t\t\t   <input class=\"seeking-radiobutton\" type=\"radio\">
\t\t    \t\t\t</span>
\t\t    \t\t\t<label for=\"\" class=\"seeking-input-label\">
\t\t    \t\t\t\t<span class=\"seeking-answer-span\">Leaving a familiar workplace</span>
\t\t    \t\t\t</label>
\t\t    \t\t</span>
\t\t    \t\t<div class=\"seeking_vote\">
\t\t    \t\t  <a class=\"seeking-vote-button\">Vote</a>
\t\t    \t\t</div>
\t\t\t     </div>
    \t       </div>
</div>\t\t\t";
    }

    public function getTemplateName()
    {
        return "HomeBundle:HomePage:left_side_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  48 => 12,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  21 => 4,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,  253 => 106,  249 => 104,  223 => 85,  219 => 84,  214 => 82,  208 => 81,  199 => 78,  195 => 76,  191 => 75,  181 => 68,  175 => 65,  165 => 58,  159 => 55,  148 => 46,  135 => 44,  132 => 43,  128 => 42,  123 => 39,  110 => 37,  107 => 36,  103 => 35,  97 => 31,  86 => 29,  79 => 27,  73 => 23,  62 => 21,  55 => 19,  35 => 3,  29 => 2,);
    }
}
