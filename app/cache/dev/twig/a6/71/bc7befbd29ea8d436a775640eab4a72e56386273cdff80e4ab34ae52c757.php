<?php

/* FrontBundle:item:item.html.twig */
class __TwigTemplate_a671bc7befbd29ea8d436a775640eab4a72e56386273cdff80e4ab34ae52c757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle::base.html.twig");

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo "       
        <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a></li>      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<main class=\"item\">
    <div class=\"container\">
                
                 
            <div class=\"col-md-10 col-md-offset-1\">
                <a href=\"";
        // line 17
        echo "\" title=\"Voir tous les produits de la catégorie ";
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) ? $context["categoryName"] : $this->getContext($context, "categoryName")), "html", null, true);
        echo "\" class=\"label label-primary\"><span>";
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) ? $context["categoryName"] : $this->getContext($context, "categoryName")), "html", null, true);
        echo "</span></a>
                <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo " </h1>
                <div class=\"row\">
                    <figure class=\"col-md-3\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "picture"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "\" /></figure> 
                    <div class=\"col-md-8 col-md-offset-1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</div>

                    <div class=\"price col-md-8 col-md-offset-4\">
                        <p>Prix :  <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), "html", null, true);
        echo "</span>€</p>
                    </div>
                    
                    <form method='post' action='' role='form' class='form-inline col-md-6 col-md-offset-6 basket'>
                        <div class='form-group'>
                            <input type='hidden' name='id' value='";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "' />
                            
                            <label for='number' class='col-sm-5 control-label'>Nombre</label>
                            
                            <div class=\"col-sm-4 col-sm-offset-1\"> 
                                <input type='number' value='' pattern='[1-9]' placeholder='0' class='form-control' />
                            </div>
                        </div>
                        <button type='submit' value='' class='btn btn-default'>Ajouter au panier</button>
                        
                    </form>
                </div> <!-- end .row -->
            </div>    
        
       
        
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:item:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  118 => 41,  76 => 20,  146 => 49,  124 => 41,  280 => 135,  270 => 127,  218 => 77,  215 => 76,  210 => 73,  205 => 56,  202 => 55,  192 => 66,  170 => 59,  167 => 58,  165 => 55,  137 => 36,  70 => 29,  113 => 5,  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 60,  100 => 32,  58 => 11,  127 => 62,  129 => 52,  110 => 40,  104 => 36,  97 => 32,  81 => 34,  77 => 19,  65 => 15,  53 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 60,  140 => 52,  132 => 50,  128 => 42,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 46,  71 => 21,  67 => 26,  63 => 13,  59 => 12,  38 => 7,  94 => 24,  89 => 30,  85 => 21,  75 => 22,  68 => 14,  56 => 11,  87 => 29,  21 => 2,  26 => 1,  93 => 31,  88 => 21,  78 => 20,  46 => 9,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 47,  138 => 54,  136 => 51,  121 => 41,  117 => 40,  105 => 49,  91 => 24,  62 => 14,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 22,  69 => 19,  47 => 11,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 40,  139 => 45,  131 => 30,  123 => 46,  120 => 47,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 76,  96 => 32,  83 => 27,  74 => 19,  66 => 17,  55 => 13,  52 => 23,  50 => 9,  43 => 10,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 64,  182 => 63,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 44,  130 => 41,  125 => 44,  122 => 42,  116 => 39,  112 => 53,  109 => 29,  106 => 30,  103 => 35,  99 => 29,  95 => 42,  92 => 33,  86 => 16,  82 => 21,  80 => 20,  73 => 18,  64 => 12,  60 => 12,  57 => 11,  54 => 20,  51 => 8,  48 => 13,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
