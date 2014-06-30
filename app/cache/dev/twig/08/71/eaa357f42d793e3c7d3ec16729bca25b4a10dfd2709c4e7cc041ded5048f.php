<?php

/* AdminBundle:Category:show.html.twig */
class __TwigTemplate_0871eaa357f42d793e3c7d3ec16729bca25b4a10dfd2709c4e7cc041ded5048f extends Twig_Template
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
            <h1>Edition de la catégorie <span>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</span></h1>

            <table class=\"record_properties table table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary btn-xs\">
                        Retour à la liste
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs\">
                        Editer
                    </a>
                </li>
                <li>";
        // line 37
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
        return "AdminBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  77 => 33,  69 => 28,  59 => 21,  52 => 17,  45 => 13,  36 => 7,  31 => 4,  28 => 3,);
    }
}
