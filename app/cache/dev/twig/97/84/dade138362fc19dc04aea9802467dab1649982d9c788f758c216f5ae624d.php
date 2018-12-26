<?php

/* HomeBundle:front/Job:category_jobs.html.twig */
class __TwigTemplate_9784dade138362fc19dc04aea9802467dab1649982d9c788f758c216f5ae624d extends Twig_Template
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
        echo "JobsByCategoryPage";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "\t 
";
        // line 5
        echo "<div class=\"banner_1\">
\t";
        // line 6
        echo twig_include($this->env, $context, "HomeBundle::HomePage/search_form_single.html.twig");
        echo "
</div>\t
<div class=\"container\">  

 <a class=\"btn btn-blog pull-right marginBottom10\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("job_add");
        echo "\">Add New job</a> 
    <div class=\"single\">  
\t
\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "</h2>
\t
\t   <div class=\"col-md-9 single_right\">
\t      <div class=\"but_list\">
\t       <div class=\"bs-example bs-example-tabs\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
\t\t\t<ul id=\"myTab\" class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t  <li role=\"presentation\" class=\"active\"><a href=\"#home\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"home\" aria-expanded=\"true\">Available jobs</a></li>
\t\t\t  <li role=\"presentation\"><a href=\"#profile\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-controls=\"profile\">Show Descriptions</a></li>
\t\t   </ul>
\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t  <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
\t\t    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Joblist"]) ? $context["Joblist"] : $this->getContext($context, "Joblist")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 25
            echo "\t\t\t<div class=\"tab_grid\">
\t\t\t    <div class=\"jobs-item with-thumb\">
\t\t\t\t    <div class=\"thumb\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/a2.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/></a></div>
\t\t\t\t    <div class=\"jobs_right\">
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 31
            if ((!(null === $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedAt")))) {
                echo " 
                        updated <span> ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedAt"), "d/m/Y"), "html", null, true);
                echo "</span> ";
            } else {
                // line 33
                echo "                     posted <span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "date"), "d/m/Y"), "html", null, true);
                echo " </span>
                     ";
            }
            // line 34
            echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date_desc\"><h6 class=\"title\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title"), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t  <span class=\"meta\">Region: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
                        <ul class=\"top-btns\">
\t\t\t\t\t\t    <li><a href=\"#\" class=\"fa fa-money\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"fa fa\"></a>500.000 FCFA</li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p class=\"description\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\" class=\"read-more\">Read More</a></p>
                    </div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t </div>\t\t
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "              No Job Yet!
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t 
\t\t\t 
\t\t  </div>
\t\t  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"profile\" aria-labelledby=\"profile-tab\">
\t\t    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Joblist"]) ? $context["Joblist"] : $this->getContext($context, "Joblist")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 57
            echo "\t\t\t<div class=\"tab_grid\">
\t\t\t    <div class=\"jobs-item with-thumb\">
\t\t\t\t   <div class=\"jobs_right\">
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t";
            // line 61
            if ((!(null === $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedAt")))) {
                echo " 
                        updated <span> ";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedAt"), "d/m/Y"), "html", null, true);
                echo "</span> ";
            } else {
                // line 63
                echo "                     posted <span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "date"), "d/m/Y"), "html", null, true);
                echo " </span>
                     ";
            }
            // line 64
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date_desc\"><h6 class=\"title\"><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title"), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t  <span class=\"meta\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
                        <ul class=\"top-btns\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-plus toggle\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-star\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-link\"></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p class=\"description\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_view", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"))), "html", null, true);
            echo "\" class=\"read-more\">Read More</a></p>
                    </div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t </div>\t\t\t 
\t\t\t ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "              No Job Yet!
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t 
\t\t  </div>
\t  </div>
     </div>
    </div>
\t<ul class=\"pagination\"> 
     ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 89
            echo "    <li";
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
      <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_jobspage", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</a>
    </li>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "      </ul>
    <ul class=\"pagination jobs_pagination\">\t
         <li class=\"disabled\">
\t\t <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("home_jobspage", array("page" => 2));
        echo "\" aria-label=\"Previous\"><span aria-hidden=\"true\">«</span></a></li>\t\t
\t\t";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 98
            echo "\t\t 
         <li";
            // line 99
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
          <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_jobspage", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
            echo "\"><span class=\"sr-only\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</span></a>
         </li>\t\t 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("home_jobspage", array("page" => 1));
        echo "\" aria-label=\"Next\"><span aria-hidden=\"true\">»</span></a></li>
\t\t
\t</ul>
   </div>
   <div class=\"col-md-3\">
\t   \t  <div class=\"widget_search\">
\t\t\t<h5 class=\"widget-title\">Search</h5>
\t\t\t<div class=\"widget-content\">
\t\t\t\t<span>I'm looking for a ...</span>
                <select class=\"form-control jb_1\">
\t\t\t\t\t<option value=\"0\">Job</option>
\t\t\t\t\t<option value=\"\">Category</option>
\t\t\t\t\t<option value=\"\">Category</option>
\t\t\t\t\t<option value=\"\">Category</option>
\t\t\t\t\t<option value=\"\">Category</option>
\t\t\t\t</select>
                <span>in</span>
                <input type=\"text\" class=\"form-control jb_2\" placeholder=\"Location\">
                <input type=\"text\" class=\"form-control jb_2\" placeholder=\"Industry / Role\">
                <input type=\"submit\" class=\"btn btn-default\" value=\"Search\">
\t\t\t</div>
\t\t  </div>
\t   \t  <div class=\"col_3\">
\t   \t  \t<h3>Work Experiance</h3>
\t   \t  \t  <table class=\"table\">
                    <tbody>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Senior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Middle
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                </tbody>
             </table>
\t   \t  </div>
\t   \t  <div class=\"col_3\">
\t   \t  \t<h3>Work Permit</h3>
\t   \t  \t<table class=\"table\">
                    <tbody>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Full time
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                Parttime
                            </td>
                        </tr>
                    </tbody>
             </table>
\t   \t  </div>
\t   </div>
  <div class=\"clearfix\"> </div>
 </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "HomeBundle:front/Job:category_jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 103,  267 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 96,  245 => 93,  234 => 90,  227 => 89,  223 => 88,  215 => 82,  208 => 81,  195 => 75,  184 => 67,  178 => 66,  174 => 64,  168 => 63,  164 => 62,  160 => 61,  154 => 57,  149 => 56,  143 => 52,  136 => 51,  123 => 45,  113 => 38,  107 => 37,  102 => 34,  96 => 33,  92 => 32,  88 => 31,  79 => 27,  75 => 25,  70 => 24,  56 => 13,  50 => 10,  43 => 6,  40 => 5,  35 => 3,  29 => 2,);
    }
}
