<?php

/* FrontBundle:category:category.html.twig */
class __TwigTemplate_7ecc37777aab5039960799866966ca23d6bab473f141205ecd4767d4fd9b6479 extends Twig_Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id") == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                // line 7
                echo "            <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
                echo "</a></li>
        ";
            } else {
                // line 9
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<main class=\"category\">
    <div class=\"container\">
        
        <div class=\"row\"><h1 class=\"col-md-12\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</h1></div>
        <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
           
            <table class=\"table table-striped\">
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                <tr>                
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "picture"), "html", null, true);
            echo "\" alt=\"\" /></a></td>
                    <td>
                        <h2><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</a></h2>
                        <div><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 250, false, ""), "html", null, true);
            echo "(...).</a></div>
                    </td>
                    <td><div class=\"price\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo "€</div></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </table>
            
           </div><!-- end .col-md-10 -->
        </div>  <!-- end .row -->
    
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 135,  270 => 127,  218 => 77,  215 => 76,  210 => 73,  205 => 56,  202 => 55,  192 => 66,  170 => 59,  167 => 58,  165 => 55,  137 => 36,  70 => 29,  113 => 5,  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 60,  100 => 133,  58 => 11,  127 => 29,  129 => 52,  110 => 29,  104 => 135,  97 => 38,  81 => 27,  77 => 19,  65 => 26,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 60,  140 => 37,  132 => 46,  128 => 34,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 28,  71 => 88,  67 => 26,  63 => 15,  59 => 14,  38 => 9,  94 => 74,  89 => 25,  85 => 24,  75 => 17,  68 => 14,  56 => 24,  87 => 25,  21 => 2,  26 => 1,  93 => 33,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 47,  121 => 46,  117 => 49,  105 => 49,  91 => 73,  62 => 24,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 29,  72 => 16,  69 => 15,  47 => 11,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 40,  139 => 45,  131 => 30,  123 => 47,  120 => 58,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 76,  96 => 46,  83 => 32,  74 => 30,  66 => 24,  55 => 13,  52 => 23,  50 => 9,  43 => 10,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 64,  182 => 63,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 28,  116 => 41,  112 => 53,  109 => 29,  106 => 136,  103 => 25,  99 => 40,  95 => 42,  92 => 26,  86 => 16,  82 => 22,  80 => 29,  73 => 28,  64 => 12,  60 => 22,  57 => 11,  54 => 20,  51 => 12,  48 => 13,  45 => 13,  42 => 7,  39 => 6,  36 => 7,  33 => 6,  30 => 7,);
    }
}
