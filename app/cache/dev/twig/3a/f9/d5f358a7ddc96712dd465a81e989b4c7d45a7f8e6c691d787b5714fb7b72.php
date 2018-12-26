<?php

/* HomeBundle:front/Job:add.html.twig */
class __TwigTemplate_3af9d5f358a7ddc96712dd465a81e989b4c7d45a7f8e6c691d787b5714fb7b72 extends Twig_Template
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
        echo "AddJobsPage";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"single\">  
\t   <div class=\"form-container\">
<h2>Ajouter un emploi</h2>

<form class=\"form-horizontal\"  action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("job_add");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

    <div class=\"form-group\"> 
    <label class=\"control-label col-sm-2\" >";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label" => "Titre:"));
        echo "</label>
\t<div class=\"col-sm-10\">
     ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
     ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "form-control")));
        echo "\t
     </div>
\t  </div>
\t 
\t<input type=\"hidden\"  name=\"id_customer\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["customer_id"]) ? $context["customer_id"] : $this->getContext($context, "customer_id")), "html", null, true);
        echo "\">
\t
\t<div class=\"form-group\">
\t<label class=\"control-label col-sm-2\" > ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_category"), 'label', array("label" => "Catégorie:"));
        echo "</label>
\t<div class=\"col-sm-10\">
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_category"), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_category"), 'widget', array("attr" => array("class" => "form-control")));
        echo "\t
   </div>
    </div>
\t
\t
\t
\t<div class=\"form-group\">
\t<label class=\"control-label col-sm-2\" > ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_region"), 'label', array("label" => "Localité:"));
        echo "</label>
\t<div class=\"col-sm-10\">
\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_region"), 'errors');
        echo "
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_region"), 'widget', array("attr" => array("class" => "form-control")));
        echo "\t
   </div>
    </div>
   
   <div class=\"form-group\">
    <label class=\"control-label col-sm-2\" >";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label" => "Description:"));
        echo "</label>
\t<div class=\"col-sm-10\">
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "form-control")));
        echo "\t
    </div>
   </div>
   
\t
\t<div class=\"form-group\">
      <label class=\"control-label col-sm-2\" >";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirements"), 'label', array("label" => "Compétances Requises:"));
        echo "</label>
      <div class=\"col-sm-10\">
\t    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirements"), 'errors');
        echo "
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirements"), 'widget', array("attr" => array("class" => "form-control")));
        echo "\t
      </div>
    </div>
\t
\t
\t
\t<div class=\"form-group\">        
      <div class=\"col-sm-offset-2 col-sm-10\">
        <div class=\"checkbox\">
          <label><input type=\"checkbox\" name=\"remember\"   name=\"published\"  checked=\"checked\">Publié</label>
        </div>
      </div>
    </div>
\t
\t<div class=\"form-group\">        
      <div class=\"col-sm-offset-2 col-sm-10\">       
\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter"), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
      </div>
    </div>
\t
    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    
</form>

 </div>
 </div>
</div>






";
    }

    public function getTemplateName()
    {
        return "HomeBundle:front/Job:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 72,  157 => 68,  138 => 52,  134 => 51,  129 => 49,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 34,  94 => 32,  84 => 25,  80 => 24,  75 => 22,  69 => 19,  62 => 15,  58 => 14,  53 => 12,  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
