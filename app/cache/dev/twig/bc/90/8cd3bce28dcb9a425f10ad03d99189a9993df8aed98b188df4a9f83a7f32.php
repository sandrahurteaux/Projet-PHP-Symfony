<?php

/* AdminBundle:Orders:show.html.twig */
class __TwigTemplate_bc908cd3bce28dcb9a425f10ad03d99189a9993df8aed98b188df4a9f83a7f32 extends Twig_Template
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
            <h1>Commande</h1>

            <table class=\"record_properties table table-striped\"\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Reference</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Montant total</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sum"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

                <ul class=\"record_actions no-list\">
                    <li>
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_orders");
        echo "\" class=\"btn btn-primary\">
                            Retour à la liste
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_orders_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                            Editer
                        </a>
                    </li>
                    <li>";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                </ul>
        </div><!-- end .col-md-12 -->
    </div><!-- end .row -->
</main>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Orders:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  113 => 54,  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 67,  100 => 47,  58 => 20,  127 => 62,  129 => 52,  110 => 44,  104 => 43,  97 => 38,  81 => 37,  77 => 29,  65 => 26,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 46,  128 => 45,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 46,  71 => 88,  67 => 22,  63 => 25,  59 => 20,  38 => 9,  94 => 18,  89 => 17,  85 => 32,  75 => 17,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 33,  88 => 41,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 47,  121 => 46,  117 => 49,  105 => 40,  91 => 27,  62 => 23,  49 => 17,  24 => 4,  25 => 1,  19 => 1,  79 => 29,  72 => 25,  69 => 27,  47 => 18,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 58,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 45,  96 => 46,  83 => 25,  74 => 26,  66 => 24,  55 => 17,  52 => 17,  50 => 18,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 47,  116 => 41,  112 => 53,  109 => 29,  106 => 50,  103 => 25,  99 => 40,  95 => 42,  92 => 35,  86 => 16,  82 => 22,  80 => 29,  73 => 32,  64 => 10,  60 => 22,  57 => 11,  54 => 19,  51 => 19,  48 => 13,  45 => 13,  42 => 13,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
