<?php

/* FrontBundle:inscription:confirmation.html.twig */
class __TwigTemplate_703f73dd2ac518084dfd5e246e1c373eff63e7bded3391f084531ea4a36adc0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Confirmation
";
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "           <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</a></li>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<main class=\"home\">
    <div class=\"container\">
        
        <h1>Confirmation d'inscription</h1>
        <div class=\"row\">

            <div class=\"col-md-6 col-md-offset-3\">
    
                <p class=\"confirmation\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>

            </div><!-- end .col-md-10 -->
        </div> <!-- end .row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:inscription:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  76 => 20,  146 => 49,  124 => 41,  280 => 135,  270 => 127,  218 => 77,  215 => 76,  210 => 73,  205 => 56,  202 => 55,  192 => 66,  170 => 59,  167 => 58,  165 => 55,  137 => 36,  70 => 29,  113 => 5,  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 60,  100 => 32,  58 => 11,  127 => 62,  129 => 52,  110 => 40,  104 => 36,  97 => 34,  81 => 34,  77 => 19,  65 => 15,  53 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 60,  140 => 37,  132 => 46,  128 => 42,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 46,  71 => 21,  67 => 26,  63 => 13,  59 => 13,  38 => 7,  94 => 24,  89 => 25,  85 => 29,  75 => 22,  68 => 14,  56 => 24,  87 => 29,  21 => 2,  26 => 1,  93 => 33,  88 => 21,  78 => 20,  46 => 9,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 47,  138 => 54,  136 => 47,  121 => 46,  117 => 49,  105 => 49,  91 => 73,  62 => 14,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 23,  72 => 22,  69 => 19,  47 => 11,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 40,  139 => 45,  131 => 30,  123 => 47,  120 => 47,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 76,  96 => 32,  83 => 32,  74 => 19,  66 => 24,  55 => 13,  52 => 23,  50 => 9,  43 => 10,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 64,  182 => 63,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 44,  130 => 41,  125 => 44,  122 => 42,  116 => 39,  112 => 53,  109 => 29,  106 => 30,  103 => 36,  99 => 40,  95 => 42,  92 => 33,  86 => 16,  82 => 21,  80 => 20,  73 => 28,  64 => 12,  60 => 12,  57 => 11,  54 => 20,  51 => 12,  48 => 13,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
