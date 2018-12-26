<?php

/* HomeBundle:front/Blog:single.html.twig */
class __TwigTemplate_07edc6f5cab58c9ee587c3fb6beae50fb37dcdeeda22307bfa276485ec1954ff extends Twig_Template
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
        echo "BlogPostPage";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"banner_1\">   
   ";
        // line 6
        echo twig_include($this->env, $context, "HomeBundle::HomePage/search_form_single.html.twig");
        echo "
</div>\t
<div class=\"container\">
    <div class=\"single\">  
\t    <!--left column--->\t
\t    <div class=\"col-md-4\">
\t      <div class=\"col_3\">
\t   \t  ";
        // line 13
        echo twig_include($this->env, $context, "HomeBundle::HomePage/todays_jobs.html.twig");
        echo "
\t\t  </div>
\t   \t  <div class=\"col_3\">
\t\t  ";
        // line 16
        echo twig_include($this->env, $context, "HomeBundle::HomePage/jobs_by_category.html.twig");
        echo "\t   \t  \t
\t   \t  </div>
         </div>\t\t  
    <!--end of left column--->\t 

\t </div>
\t <div class=\"col-md-8 single_right\">
\t      <h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
        echo "</h3>
\t      <div class=\"row_1\">
\t      \t<div class=\"col-sm-5 single_img\">
\t      \t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "img"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
\t      \t</div>
\t      \t<div class=\"col-sm-7 single-para\">
\t      \t\t<p>";
        // line 29
        echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "content"), 0, 320) . "..."), "html", null, true);
        echo "</p>\t      \t\t
\t      \t</div>
\t      \t<div class=\"clearfix\"> </div>
\t      </div>
\t      <h5>";
        // line 33
        echo "</h5>
\t      <p> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "content"), "html", null, true);
        echo " </p>\t

           <ul>
\t\t   <hr/>
\t\t   <h3>Articles similaires</h3>
          ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["blog_posts"]) ? $context["blog_posts"] : $this->getContext($context, "blog_posts")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 40
            echo "         <li> <h4><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_blogpost", array("idpost" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
            echo "</a></h4></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " \t\t
          </ul>\t\t  
\t\t  
\t\t  <div class=\"comments\">
\t      \t<h6>Commentaires</h6>
            <div id=\"fb-root\"></div>

             <script>
\t\t\t (function(d, s, id) {
                 var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                 js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10\";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
\t\t\t  </script>



<div class=\"fb-comments\" data-href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["page_url"]) ? $context["page_url"] : $this->getContext($context, "page_url")), "html", null, true);
        echo "\" data-width=\"600\" data-numposts=\"";
        echo twig_escape_filter($this->env, (isset($context["default_number"]) ? $context["default_number"] : $this->getContext($context, "default_number")), "html", null, true);
        echo "\"></div>
\t\t\t
\t\t\t
\t\t  </div>\t\t  
\t   </div>
\t   <div class=\"clearfix\"> </div>
\t </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "HomeBundle:front/Blog:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  113 => 41,  102 => 40,  98 => 39,  90 => 34,  87 => 33,  80 => 29,  73 => 26,  67 => 23,  57 => 16,  51 => 13,  41 => 6,  38 => 5,  35 => 3,  29 => 2,);
    }
}
