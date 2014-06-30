<?php

/* AdminBundle:Civility:new.html.twig */
class __TwigTemplate_f0033cb43aa37408f097616d8c1db015e5f189fe8c6e4e4f60526d3793d4cef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<main class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Nouvelle entrée Civilité</h1>

            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_civility");
        echo "\" class=\"btn btn-primary\">
                        Retour à la liste
                    </a>
                </li>
            </ul>
        </div><!-- end .col-md-12 -->
    </div><!-- end .row -->
</main>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Civility:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 67,  100 => 24,  58 => 59,  127 => 62,  129 => 52,  110 => 41,  104 => 38,  97 => 41,  81 => 34,  77 => 33,  65 => 23,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 46,  128 => 45,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 46,  71 => 88,  67 => 25,  63 => 15,  59 => 21,  38 => 9,  94 => 18,  89 => 17,  85 => 34,  75 => 17,  68 => 14,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 33,  88 => 38,  78 => 30,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 47,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 17,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 27,  69 => 28,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 58,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 15,  55 => 21,  52 => 17,  50 => 20,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 47,  116 => 41,  112 => 53,  109 => 29,  106 => 36,  103 => 25,  99 => 31,  95 => 42,  92 => 39,  86 => 16,  82 => 22,  80 => 5,  73 => 28,  64 => 10,  60 => 21,  57 => 11,  54 => 20,  51 => 19,  48 => 19,  45 => 13,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
