<?php

/* FrontBundle:FrontAddress:show.html.twig */
class __TwigTemplate_00d7515c27c5ff595c08c878e2eff622682ec5cac30cc225bf4354411912b75b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Address</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address1</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address1"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address2</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address2"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Postalcode</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postalcode"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Town</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "town"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Billing</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "billing"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone1</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone1"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone2</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone2"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("address");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("address_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:FrontAddress:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  124 => 41,  280 => 135,  270 => 127,  218 => 77,  215 => 76,  210 => 73,  205 => 56,  202 => 55,  192 => 66,  170 => 59,  167 => 58,  165 => 55,  137 => 36,  70 => 29,  113 => 5,  84 => 37,  90 => 36,  207 => 88,  184 => 70,  180 => 69,  172 => 60,  100 => 35,  58 => 11,  127 => 62,  129 => 52,  110 => 29,  104 => 36,  97 => 34,  81 => 34,  77 => 19,  65 => 26,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 60,  140 => 37,  132 => 46,  128 => 42,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 46,  71 => 21,  67 => 26,  63 => 15,  59 => 14,  38 => 9,  94 => 74,  89 => 25,  85 => 29,  75 => 22,  68 => 14,  56 => 24,  87 => 29,  21 => 2,  26 => 1,  93 => 33,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 82,  171 => 61,  166 => 63,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 47,  138 => 54,  136 => 47,  121 => 46,  117 => 49,  105 => 49,  91 => 73,  62 => 24,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 23,  72 => 16,  69 => 15,  47 => 11,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 40,  139 => 45,  131 => 30,  123 => 47,  120 => 58,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 76,  96 => 46,  83 => 32,  74 => 30,  66 => 24,  55 => 13,  52 => 23,  50 => 9,  43 => 10,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 64,  182 => 63,  176 => 68,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 44,  130 => 41,  125 => 44,  122 => 28,  116 => 39,  112 => 53,  109 => 29,  106 => 136,  103 => 25,  99 => 40,  95 => 42,  92 => 33,  86 => 16,  82 => 22,  80 => 29,  73 => 28,  64 => 12,  60 => 22,  57 => 11,  54 => 20,  51 => 12,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
