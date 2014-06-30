<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_f0d3b61f4deb51f69144db4684eb7b444dca53c31d57fffce172c9798fd1b069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    
    <body> 
       
        ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 59
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        
        
        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "        
       
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
    
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ArtSpace Administration";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "       
           <header>
\t\t<div class=\"container\">
                    <div class=\"row\">
                        <div id=\"logo\" class=\"logo col-xs-12 col-sm-12 col-md-12\"><a href=\"#\" title=\"Art.Space - Home\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/logo_blc.png"), "html", null, true);
        echo "\" alt=\"Logo Art.Space\"><span>Administration</span></a></div>
                    </div>
\t\t\t
                    <div class=\"row\">
\t\t\t<nav class=\"col-xs-12 col-sm-12 col-md-12\" role=\"navigation\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                  <span class=\"sr-only\">Toggle navigation</span>
                                  <span class=\"icon-bar\"></span>
                                  <span class=\"icon-bar\"></span>
                                  <span class=\"icon-bar\"></span>
                                </button>
                            </div>

                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav nav-tabs nav-justified\">
                                            <li class=\"active\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Dashboard</a></li>
                                            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\">Catégories</a></li>
                                            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_item");
        echo "\">Produits</a></li>
                                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_orders");
        echo "\">Commandes</a></li>
                                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">Clients</a></li>
                                            <li><a href=\"#\">Logout</a></li>
                                    </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div><!-- end row -->
\t\t</div>
\t</header>
        
        ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "            <footer class=\"container\">
\t\t<div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12\">                       
                        <ul id=\"footer1\">
                            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\">Catégories</a></li>
                            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_item");
        echo "\">Produits</a></li>
                            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("admin_orders");
        echo "\">Commandes</a></li>
                            <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">Clients</a></li>
                            <li><a href=\"#\">Logout</a></li>
                            <li>&copy; ArtSpace Company 2014</li>
                        </ul>
                    </div>
\t\t</div><!-- end .row -->
\t\t<div class=\"row margin-top\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12\">                       
                        <ul id=\"footer1\">
                            <li><a href=\"http://www.symfony.com\" title=\"Site développé avec Symfony version 2.4\"> <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/logo_sf.png"), "html", null, true);
        echo "\" alt=\"Site développé avec Symfony version 2.4\" /></a></li>
                        </ul>
                    </div>
\t\t</div><!-- end .row -->
\t</footer>

        ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 88,  196 => 79,  184 => 70,  180 => 69,  176 => 68,  172 => 67,  166 => 63,  163 => 62,  158 => 59,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  109 => 29,  103 => 25,  94 => 18,  89 => 17,  86 => 16,  80 => 5,  73 => 89,  71 => 88,  67 => 86,  65 => 62,  61 => 60,  56 => 24,  50 => 20,  48 => 16,  36 => 7,  25 => 1,  100 => 24,  96 => 46,  92 => 45,  79 => 35,  69 => 28,  58 => 59,  54 => 19,  44 => 12,  40 => 11,  31 => 5,  28 => 3,);
    }
}
