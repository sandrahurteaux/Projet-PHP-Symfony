<?php

/* AdminBundle:Address:show.html.twig */
class __TwigTemplate_6a88d0453df21e0ba75cbeb2ffd5512c1e809e06115657823df584e796adbf26 extends Twig_Template
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
            <h1>Address</h1>

            <table class=\"record_properties table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Address1</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address1"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Address2</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address2"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Postalcode</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postalcode"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Town</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "town"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Billing</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "billing"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Phone1</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone1"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Phone2</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone2"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Isactive</th>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("address");
        echo "\" class=\"btn btn-xs btn-primary\">
                        Retour à la liste
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("address_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-primary\">
                        Editer
                    </a>
                </li>
                <li>";
        // line 65
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
        return "AdminBundle:Address:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 65,  123 => 61,  115 => 56,  105 => 49,  98 => 45,  91 => 41,  84 => 37,  77 => 33,  70 => 29,  63 => 25,  56 => 21,  49 => 17,  42 => 13,  31 => 4,  28 => 3,);
    }
}
