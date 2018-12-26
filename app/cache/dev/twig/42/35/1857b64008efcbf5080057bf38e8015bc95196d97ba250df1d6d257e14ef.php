<?php

/* HomeBundle:front/Job:jobs_single.html.twig */
class __TwigTemplate_42351857b64008efcbf5080057bf38e8015bc95196d97ba250df1d6d257e14ef extends Twig_Template
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
        echo "JobDetails";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"banner_1\">
\t";
        // line 6
        echo twig_include($this->env, $context, "HomeBundle::HomePage/search_form_single.html.twig");
        echo "
</div>\t
<div class=\"container\">
    <div class=\"single\">  
\t   <div class=\"col-md-9 single_right\">
\t       <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title"), "html", null, true);
        echo "</h2>
\t\t   <i>Par ndiaga, le ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
\t\t   <br/>
\t       <h3>Description de l'offre</h3>
          <div class=\"well\">
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description"), "html", null, true);
        echo "
          </div>

         <h3>Compétances Requises</h3>
        <div class=\"well\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "requirements"), "html", null, true);
        echo "
        </div>
\t       <dl class=\"experience\">
\t       \t <div class=\"experience_content experience_content1\">
\t       \t   
\t       \t   <div class=\"experience_1\"><dt><h6>Catégorie:</h6></dt>
\t       \t\t <dd>
\t       \t\t \t<p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "</p>
\t       \t\t </dd></div>
\t       \t   </div>
\t       \t   <div class=\"experience_content\">
\t       \t   \t
\t       \t   \t<div class=\"experience_1\">
\t       \t   \t  <dt><h6>Région:</h6></dt>
\t       \t   \t  <dd>
\t       \t   \t  \t<p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "name"), "html", null, true);
        echo "</p>
\t       \t\t  </dd>
\t       \t\t</div>
\t       \t   </div>
\t       </dl>
\t       <div class=\"comments\">
\t      \t<h6>Entreprise:</h6>
\t\t\t<div class=\"media media_1\">
\t\t\t  <div class=\"media-left\"><a href=\"#\"> </a></div>
\t\t\t  <div class=\"media-body\">
\t\t\t    <h4 class=\"media-heading\"><a class=\"author\" href=\"#\">InnovativeLabs</a><a class=\"reply\" href=\"#\">Lire</a><div class=\"clearfix\"> </div></h4>
\t\t\t    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
\t\t\t  </div>
\t\t\t  <div class=\"clearfix\"> </div>
\t\t\t</div>\t\t\t
\t\t  </div>
\t\t  <hr/>
\t      <form>
\t\t\t<div class=\"to\">
             \t<input type=\"text\" class=\"text\" value=\"Name\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name';}\">
\t\t\t \t<input type=\"text\" class=\"text\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" style=\"margin-left:3%\">
\t\t\t</div>
\t\t\t<div class=\"text\">
               <textarea value=\"Message\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Message';}\">Message</textarea>
            </div>
            <div class=\"form-submit1\">
\t           <input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Postuler\"><br>
\t        </div>
\t\t\t<div class=\"clearfix\"></div>
          </form>
\t\t  
\t\t <hr/> 
          <div class=\"candidates-item\">
          \t <h5>Offres Similaires en <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_view", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "</a> sur <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_view", array("id" => $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "name"), "html", null, true);
        echo "</a></h5>\t
            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["similar_jobs"]) ? $context["similar_jobs"] : $this->getContext($context, "similar_jobs")), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            echo "\t           
\t\t   <div class=\"candidate_1\">
             <div class=\"thumb_desc\">
\t\t\t   <h6 class=\"title\"><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title"), "html", null, true);
            echo "</a></h6>
\t\t\t   <span class=\"meta\">";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "date"), "d/m/Y"), "html", null, true);
            echo "</span>
               <div class=\"candidate_but\">
\t\t\t\t<ul class=\"top-btns\">\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\" class=\"btn_5 btn-gray fa fa-link\">Consulter</a></li>
\t\t\t\t</ul>
               </div>
\t\t\t   <p class=\"sm_1\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>\t
\t\t   </div>\t\t   
\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t</div>
       </div>
       <div class=\"col-md-3\">
\t   \t  <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/a3.jpg"), "html", null, true);
        echo "images/f11.jpg\" class=\"img-responsive\" alt=\"\"/>
\t   \t  <div class=\"map_1\">
\t         <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978\"> </iframe>
          </div>
          <table class=\"condidate_detail\">
          \t<h4>A Propos de l'entreprise</h4>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Nom:</td>
\t\t\t\t\t<td>InnovativeLabs</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Domaine d'activité:</td>
\t\t\t\t\t<td> Informatique IT Télécom</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Pays</td>
\t\t\t\t\t<td>Australia</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Experiance</td>
\t\t\t\t\t<td>10 Years</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Dgree</td>
\t\t\t\t\t<td>MCA</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Career Lavel</td>
\t\t\t\t\t<td>Mid-Level</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Phone</td>
\t\t\t\t\t<td>(800) 2547-879</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Fax</td>
\t\t\t\t\t<td>(800) 1247-256</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>E-mail</td>
\t\t\t\t\t<td><a href=\"mailto:example@example.com\">example@example.com</a></td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>Website</td>
\t\t\t\t\t<td><a href=\"#\">example.com</a></td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t </table>
       </div>
       <div class=\"clearfix\"> </div>
    </div>
</div>   
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:front/Job:jobs_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 88,  173 => 85,  162 => 80,  156 => 77,  150 => 74,  144 => 73,  136 => 70,  126 => 69,  90 => 36,  79 => 28,  69 => 21,  61 => 16,  54 => 12,  50 => 11,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
