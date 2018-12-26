<?php

/* HomeBundle:front/Resume:preview_resume.html.twig */
class __TwigTemplate_57d95793d9fa14e70b4aa6f03d71e2392f3c9d0427a14e730b4377a90331ff3a extends Twig_Template
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
    <div class=\"single\">  \t      
\t   <div class=\"form-container\" >
        <h2>Details de votre CV: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_alias"), "html", null, true);
        echo " </h2>        
\t\t\t
\t   <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_firstname"), "html", null, true);
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_lastname"), "html", null, true);
        echo "</h3>\t
        
\t\t";
        // line 15
        echo "\t\t
\t\t
        
\t\t<h3>Formations/Etudes</h3>
\t\t
\t\t<div class=\"row\">\t   
     <div class=\"form-group col-md-12\">\t
\t     <label for=\"intro\"  class=\"col-md-3 control-lable\"><h3>Niveau d'étude:</h3></label>\t
\t    <div class=\"col-md-9\">
\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_level"), "html", null, true);
        echo "  Bac +4
\t\t<p class=\"help-block\">Remplissez les champs suivant:</p>
\t\t</div>
\t </div>\t\t
   </div>     
        
\t\t
\t\t<div class=\"row\">\t   
     <div class=\"form-group col-md-12\">\t
\t     <label for=\"intro\"  class=\"col-md-3 control-lable\"> <h3>Diplôme Obtenu:</h3></label>\t
\t    <div class=\"col-md-9\">
\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome"), "html", null, true);
        echo "
\t\t<p class=\"help-block\">Spécialisation:</p>
\t\t</div>
\t </div>\t\t
   </div>\t         
        
\t\t
\t\t
\t\t\t   \t
       
       <div class=\"row\">\t   
     <div class=\"form-group col-md-12\">\t
\t     <label for=\"intro\"  class=\"col-md-3 control-lable\"> <h3>Ecole - Etablissement:</h3></label>\t
\t    <div class=\"col-md-9\">
\t\t ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_university"), "html", null, true);
        echo "
\t\t<p class=\"help-block\">Remplissez les champs suivant:</p>
\t\t</div>
\t </div>\t\t
   </div>\t\t\t
        
\t   
\t    <div class=\"row\">\t   
     <div class=\"form-group col-md-12\">\t
\t     <label for=\"intro\"  class=\"col-md-3 control-lable\"><h3>Période :</h3>\t</label>\t
\t    <div class=\"col-md-9\">
\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  
\t\t<p class=\"help-block\"> deSemptembre 2005 à Juillet  2010</p>
\t\t</div>
\t </div>\t\t
   </div>\t     

        
\t\t
\t\t
\t\tnka
\t\t
\t\t
\t\t
    </div>\t
\t
 </div>
</div>










<p style=\"float:left\" >\t\t
\t\t<a  href=\"#\"  class=\"button btn btn-default standard-checkout button-medium\" > 
\t\t<i class=\"icon-chevron-left left\"></i>
\t\tView All Events
\t\t</a>
\t\t
</p>
<div class=\"container\">
\t<div class=\"row\">
\t\t
        <div class=\"receipt-main col-xs-10 col-sm-10 col-md-12 \">
           <div class=\"row\">
    \t\t\t<div class=\"receipt-header\">
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t<div class=\"receipt-left\">
\t\t\t\t\t\t";
        // line 103
        echo "\t\t\t<img class=\"img-responsive\" alt=\"iamgurdeeposahan\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/a2.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 43px;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6 text-right\">
\t\t\t\t\t\t<div class=\"receipt-right\">
\t\t\t\t\t\t<h5>Contact:</h5>
\t\t\t\t\t\t\t<p>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_phone"), "html", null, true);
        echo " <i class=\"fa fa-phone\"></i></p>
\t\t\t\t\t\t\t<p>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_email"), "html", null, true);
        echo " <i class=\"fa fa-envelope-o\"></i></p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
                            <td>     
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"receipt-header receipt-header-mid\">
\t\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 text-left\">
\t\t\t\t\t\t<div class=\"receipt-right\">
\t\t\t\t\t\t\t<h2>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_firstname"), "html", null, true);
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_lastname"), "html", null, true);
        echo "</h2>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p><b>Ville:</b>Dakar";
        // line 122
        echo "</p>
\t\t                    <p><b>Sex:</b> Masculin</p>
\t\t                    <p><b>Age:</b> 35 ans </p>
                            <p><b>Email:</b>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_email"), "html", null, true);
        echo "</p>\t  
                            <p><b>Phone:</b> ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_phone"), "html", null, true);
        echo "</p>
\t\t                    <p><b>Address:</b>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_address_one"), "html", null, true);
        echo "</p>  
                            <p><b>Address Suite:</b>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_address_two"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 col-sm-4 col-md-4\">
\t\t\t\t\t\t<div class=\"receipt-left\">
\t\t\t\t\t\t\t<h1>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_firstname"), "html", null, true);
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_lastname"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t\t
            <div>         
\t\t <h3>Experience de travail: 5 ans</h3>\t\t
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"col-md-9\"><div class=\"rte\">";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  </div></td>
                            <td class=\"col-md-3\">\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<ul class=\"toggle-footer\" style=\"\">
                        \t<li>\t
                            \t\t\t\t
            \t\t       <i class=\"icon-map-marker\"></i> ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  
                           \t\t\t\t\t   
\t\t\t\t\t       </li>                                    \t
                           </ul>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
                        </tr>             
                        
                     <tr>
                            <td class=\"text-right\">
                            <p>
                                <strong>Start Date: </strong>
                            </p>
                            <p class=\"fa fa-clock-o\">
                                <strong>Start Time: </strong>
                            </p>
\t\t\t\t\t\t\t<p>
                                <strong>End Date:</strong>
                            </p>
\t\t\t\t\t\t\t<p >
                                <strong>End time:</strong>
                            </p>
\t\t\t\t\t\t\t</td>
                            <td>
                            <p>
                                <strong>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  </strong>
                            </p>
                            <p>
                                <strong>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  </strong>
                            </p>
\t\t\t\t\t\t\t<p>
                                <strong>";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  </strong>
                            </p>
\t\t\t\t\t\t\t<p>
                                <strong>";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_diplome_year"), "html", null, true);
        echo "  </strong>
                            </p>
\t\t\t\t\t\t\t</td>
                        </tr>                   
                    </tbody>
                </table>
            </div>
\t\t
\t\t   <h2>Compétances</h2>\t\t  
\t\t";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_skills"), "html", null, true);
        echo "   
\t\t   
\t\t<hr/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"receipt-header receipt-header-mid receipt-footer\">
\t\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 text-left\">\t\t\t\t\t
\t\t\t\t\t\t<div class=\"receipt-right\">
\t\t\t\t\t\t<p><b>Langues:</b></p>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                        <h1>French, English, Russian.</h1>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 col-sm-4 col-md-4\">
\t\t\t\t\t\t<div class=\"receipt-left\">
\t\t\t\t\t\t<b>Loisirs:</b></p>                        \t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h1>";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "resume_hobby"), "html", null, true);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t\t\t
        </div>   
\t\t
\t</div>
</div>
<p style=\"float:left\" >\t\t
\t\t<a  href=\"#\"  class=\"button btn btn-default standard-checkout button-medium\" > 
\t\t<i class=\"icon-chevron-left left\"></i>
\t\tView All Events
\t\t</a>
</p>



";
    }

    public function getTemplateName()
    {
        return "HomeBundle:front/Resume:preview_resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 212,  308 => 197,  296 => 188,  290 => 185,  284 => 182,  278 => 179,  251 => 155,  243 => 150,  221 => 133,  213 => 128,  209 => 127,  205 => 126,  201 => 125,  196 => 122,  190 => 121,  176 => 110,  172 => 109,  162 => 103,  117 => 60,  103 => 49,  86 => 35,  72 => 24,  61 => 15,  54 => 12,  49 => 10,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
