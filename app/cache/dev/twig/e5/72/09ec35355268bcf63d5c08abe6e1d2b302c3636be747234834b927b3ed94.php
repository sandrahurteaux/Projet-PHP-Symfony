<?php

/* AdminBundle:StateOrder:show.html.twig */
class __TwigTemplate_e57209ec35355268bcf63d5c08abe6e1d2b302c3636be747234834b927b3ed94 extends Twig_Template
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
            <h1>Etat de commande : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</h1>

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
                        <th>Type</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_stateorder");
        echo "\" class=\"btn btn-primary\">
                        Retour à la liste
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_stateorder_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        Editer
                    </a>
                </li>
                <li>";
        // line 33
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
        return "AdminBundle:StateOrder:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  70 => 29,  62 => 24,  52 => 17,  45 => 13,  36 => 7,  31 => 4,  28 => 3,);
    }
}
