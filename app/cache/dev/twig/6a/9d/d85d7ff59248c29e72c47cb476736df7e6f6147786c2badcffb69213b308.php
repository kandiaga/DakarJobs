<?php

/* HomeBundle:front/Resume:resume.html.twig */
class __TwigTemplate_6a9dd85d7ff59248c29e72c47cb476736df7e6f6147786c2badcffb69213b308 extends Twig_Template
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
        echo "LoginPage";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"banner_1\">
\t";
        // line 5
        echo twig_include($this->env, $context, "HomeBundle::HomePage/search_form_single.html.twig");
        echo "
</div>\t
<div class=\"container\">
    <div class=\"single\">  
   
   <p>
 <a class=\"btn btn-default pull-right marginBottom10\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("job_resume_add");
        echo "\">
 <i class=\"glyphicon glyphicon-chevron-right\"></i>
 Ajouter un nouveau CV
 </a> 
  </p> \t
\t<div class=\"form-container\" >
        <h2>Liste de vos  CV</h2>\t
\t\t
\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["my_resumes"]) ? $context["my_resumes"] : $this->getContext($context, "my_resumes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["resume"]) {
            // line 20
            echo "\t\t\t<h6 class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_resume_view", array("id" => $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_alias"), "html", null, true);
            echo "</a></h6>
\t\t\t
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "              <p>
             <a class=\"btn btn-default pull-right marginBottom10\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("job_resume_add");
            echo "\">
           <i class=\"glyphicon glyphicon-chevron-right\"></i>
           Ajouter un CV
            </a> 
            </p> \t
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resume'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t
\t    
    </div>\t
\t
 </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "HomeBundle:front/Resume:resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  80 => 24,  77 => 23,  66 => 20,  61 => 19,  50 => 11,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
