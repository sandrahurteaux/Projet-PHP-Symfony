<?php

/* FrontBundle::base.html.twig */
class __TwigTemplate_3bf76947b15bd3aec877d2f50b1d8abe203e19ddbef691cd1a5011871d35b093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
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
        echo " | ArtSpace</title>
         
            
        <!-- Appel des differents icones generes selon les systemes pour affichage en tuile / raccourcis  -->
\t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-57x57.png"), "html", null, true);
        echo "\" />
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-72x72.png"), "html", null, true);
        echo "\" />
\t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-60x60.png"), "html", null, true);
        echo "\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-76x76.png"), "html", null, true);
        echo "\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-96x96.png\" sizes=\"96x96"), "html", null, true);
        echo "\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-32x32.png\" sizes=\"32x32"), "html", null, true);
        echo "\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-16x16.png\" sizes=\"16x16"), "html", null, true);
        echo "\" />
\t<meta name=\"msapplication-TileColor\" content=\"#58cb8e\" />
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    
        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    </head>
    
    <body> 
       
        ";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        
        
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        echo "        
       
        ";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </body>
    
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/css/styles_page2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 36
    public function block_header($context, array $blocks = array())
    {
        // line 37
        echo "       
           <header>
\t\t<div class=\"container\">
\t\t\t<div id=\"logo\" class=\"logo col-xs-6 col-sm-3 col-md-3\"><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" title=\"Art.Space - Home\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo Art.Space\"></a></div>
\t\t\t
\t\t\t<nav class=\"col-xs-6 col-sm-9 col-md-9 navbar navbar-default\" role=\"navigation\">
\t\t  <!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t      <span class=\"sr-only\">Toggle navigation</span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t    </button>
\t\t\t</div>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
                                    ";
        // line 55
        $this->displayBlock('nav', $context, $blocks);
        // line 58
        echo "                                    
                                    ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 60
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("client");
            echo "\">Mon compte</a></li>
                                        <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se déconnecter</a></li>
                                    ";
        } else {
            // line 63
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Me connecter</a></li>
                                        <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">Créer un compte</a></li>
                                    ";
        }
        // line 66
        echo "\t\t\t\t</ul>
\t\t\t</div><!-- /.navbar-collapse -->
\t\t</nav>
\t\t</div>
\t</header>
        
        ";
    }

    // line 55
    public function block_nav($context, array $blocks = array())
    {
        // line 56
        echo "                                         
                                    ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "            <footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"premier_footer\">
\t\t\t<div class=\"col-xs-3 col-sm-3 col-md-3\">
\t\t\t\t<h4 data-toggle=\"collapse\" data-target=\"#footer1\">Product</h4>
\t\t\t\t<ul id=\"footer1\">
\t\t\t\t\t<li><a href=\"#\">Tour</a></li>
\t\t\t\t\t<li><a href=\"#\">Templates</a></li>
\t\t\t\t\t<li><a href=\"#\">Mobile apps</a></li>
\t\t\t\t\t<li><a href=\"#\">Developpers</a></li>
\t\t\t\t\t<li><a href=\"#\">Pricing</a></li>
\t\t\t\t\t<li><a href=\"#\">Sign up</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-3 col-sm-3 col-md-3\">
\t\t\t\t<h4 data-toggle=\"collapse\" data-target=\"#footer2\">Company</h4>
\t\t\t\t<ul id=\"footer2\">
\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t<li><a href=\"#\">Careers</a></li>
\t\t\t\t\t<li><a href=\"#\">Press & media</a></li>
\t\t\t\t\t<li><a href=\"#\">Environment impact</a></li>
\t\t\t\t\t<li><a href=\"#\">Affiliate program</a></li>
\t\t\t\t\t<li><a href=\"#\">Terms of service</a></li>
\t\t\t\t\t<li><a href=\"#\">Privacy policy</a></li>
\t\t\t\t\t<li><a href=\"#\">Contact us</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-3 col-sm-3 col-md-3\">
\t\t\t\t<h4 data-toggle=\"collapse\" data-target=\"#footer3\">Community</h4>
\t\t\t\t<ul id=\"footer3\">
\t\t\t\t\t<li><a href=\"#\">Blog</a></li>
\t\t\t\t\t<li><a href=\"#\">Help & support</a></li>
\t\t\t\t\t<li><a href=\"#\">Answers</a></li>
\t\t\t\t\t<li><a href=\"#\">Workshops</a></li>
\t\t\t\t\t<li><a href=\"#\">Service updates</a></li>
\t\t\t\t\t<li><a href=\"#\">Twitter</a></li>
\t\t\t\t\t<li><a href=\"#\">Facebook</a></li>
\t\t\t\t\t<li><a href=\"#\">Google+</a></li>
\t\t\t\t\t<li><a href=\"#\">YouTube</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clear-condition\"></div>
\t\t\t</div><!-- .premier_footer -->
\t\t\t<div class=\"col-xs-3 col-sm-3 col-md-3 dernier\">
\t\t\t\t<button>Try it free</button>
\t\t\t\t<p>
\t\t\t\t\tFree 14 day trial.<br/>
\t\t\t\t\tNo credit card required.<br>
\t\t\t\t\t24/7 support.
\t\t\t\t</p>
\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/footer-truste.png"), "html", null, true);
        echo "\" alt=\"Truste, certified privacy\">
\t\t\t</div>
\t\t</div>
\t</footer>

        ";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 135,  270 => 127,  218 => 77,  215 => 76,  210 => 73,  205 => 56,  202 => 55,  192 => 66,  187 => 64,  182 => 63,  177 => 61,  172 => 60,  170 => 59,  167 => 58,  165 => 55,  145 => 40,  140 => 37,  137 => 36,  131 => 30,  127 => 29,  122 => 28,  119 => 27,  113 => 5,  104 => 135,  100 => 133,  98 => 76,  91 => 73,  89 => 36,  83 => 32,  81 => 27,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  26 => 1,  106 => 136,  94 => 74,  88 => 21,  80 => 20,  69 => 18,  61 => 16,  53 => 10,  50 => 9,  37 => 5,  32 => 5,  29 => 3,);
    }
}
