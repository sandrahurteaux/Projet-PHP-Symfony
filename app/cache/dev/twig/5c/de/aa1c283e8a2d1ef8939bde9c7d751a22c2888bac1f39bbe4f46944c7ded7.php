<?php

/* FrontBundle::base_compte.html.twig */
class __TwigTemplate_5cdeaa1c283e8a2d1ef8939bde9c7d751a22c2888bac1f39bbe4f46944c7ded7 extends Twig_Template
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
        return "FrontBundle::base_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 135,  270 => 127,  218 => 77,  215 => 76,  210 => 73,  205 => 56,  202 => 55,  192 => 66,  170 => 59,  167 => 58,  165 => 55,  137 => 36,  70 => 29,  113 => 5,  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 60,  100 => 133,  58 => 20,  127 => 29,  129 => 52,  110 => 44,  104 => 135,  97 => 38,  81 => 27,  77 => 29,  65 => 26,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 60,  140 => 37,  132 => 46,  128 => 45,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 27,  102 => 46,  71 => 88,  67 => 26,  63 => 15,  59 => 14,  38 => 9,  94 => 74,  89 => 36,  85 => 31,  75 => 17,  68 => 14,  56 => 24,  87 => 25,  21 => 2,  26 => 1,  93 => 33,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 47,  121 => 46,  117 => 49,  105 => 49,  91 => 73,  62 => 24,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 29,  72 => 25,  69 => 18,  47 => 11,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 40,  139 => 45,  131 => 30,  123 => 47,  120 => 58,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 76,  96 => 46,  83 => 32,  74 => 30,  66 => 24,  55 => 13,  52 => 23,  50 => 18,  43 => 10,  41 => 9,  35 => 6,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 64,  182 => 63,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 28,  116 => 41,  112 => 53,  109 => 29,  106 => 136,  103 => 25,  99 => 40,  95 => 42,  92 => 35,  86 => 16,  82 => 22,  80 => 29,  73 => 28,  64 => 10,  60 => 22,  57 => 11,  54 => 20,  51 => 12,  48 => 13,  45 => 13,  42 => 10,  39 => 9,  36 => 7,  33 => 6,  30 => 7,);
    }
}
