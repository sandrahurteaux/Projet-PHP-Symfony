<?php

/* AdminBundle:Item:show.html.twig */
class __TwigTemplate_4f2f90463d670f2df15fcb9172cd9d9399e4ec31132c6bc59aa83b6fe74a9419 extends Twig_Template
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
        echo "<main class=\"container show-page\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            
            <h1>Edition du produit <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</span></h1>

            <table class=\"record_properties table table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Reference</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "picture"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

                <ul class=\"record_actions no-list\">
            <li>
                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_item");
        echo "\" class=\"btn btn-primary btn-xs\">
                    Retour à la liste
                </a>
            </li>
            <li>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_item_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">
                    Editer
                </a>
            </li>
            <li>";
        // line 54
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
        return "AdminBundle:Item:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  106 => 50,  98 => 45,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  37 => 8,  31 => 4,  28 => 3,);
    }
}
