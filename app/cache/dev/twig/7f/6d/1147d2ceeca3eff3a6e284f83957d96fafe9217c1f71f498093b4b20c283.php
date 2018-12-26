<?php

/* HomeBundle::layout.html.twig */
class __TwigTemplate_7f6d1147d2ceeca3eff3a6e284f83957d96fafe9217c1f71f498093b4b20c283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<title>DakarJobs|Trouver de l'emploi au Senegal</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"DakarJobs,Trouver de l'emploi au Senegal, un emploi a Dakar, Offre d'emploi Senegal, 
rechercher un travail au Senegal, deposer son CV au Senegal, travailler, Dakar, Senegal, Mon CV en ligne\" />

<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\" sizes=\"16x16\">

<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t

<!-- Custom Theme files -->
</head>
<body>
<!--- Nav-->\t
";
        // line 34
        echo twig_include($this->env, $context, "HomeBundle::HomePage/header_nav.html.twig");
        echo "\t
<!--- End Nav -->\t

\t";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        echo "\t
\t
<!--- Footer-->\t
";
        // line 40
        echo twig_include($this->env, $context, "HomeBundle::HomePage/footer.html.twig");
        echo "\t
<!--- End Footer-->\t
 ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/css/bootstrap-3.1.1.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<!----font-Awesome----->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <!----font-Awesome----->\t\t\t
            <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

\t\t\t<!--<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/home/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />-->
           \t\t\t
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  97 => 21,  90 => 17,  85 => 15,  80 => 14,  77 => 13,  64 => 37,  58 => 34,  48 => 27,  44 => 26,  38 => 13,  32 => 10,  21 => 1,  278 => 103,  267 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 96,  245 => 93,  234 => 90,  227 => 89,  223 => 88,  215 => 82,  208 => 81,  195 => 75,  184 => 67,  178 => 66,  174 => 64,  168 => 63,  164 => 62,  160 => 61,  154 => 57,  149 => 56,  143 => 52,  136 => 51,  123 => 45,  113 => 38,  107 => 37,  102 => 34,  96 => 33,  92 => 32,  88 => 31,  79 => 27,  75 => 25,  70 => 40,  56 => 13,  50 => 10,  43 => 6,  40 => 24,  35 => 3,  29 => 2,);
    }
}
