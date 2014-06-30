<?php

/* AdminBundle:Item:edit.html.twig */
class __TwigTemplate_0731ee49b40301d979246ae44f7e556bcf1114b58fd816df5f8691b0392e0141 extends Twig_Template
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
            <h1>Edition du produit ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</h1>

            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_item");
        echo "\" class=\"btn btn-primary btn-xs\">
                        Retour à la liste
                    </a>
                </li>
                <li>";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>   
            
        </div><!-- end .col-md-12 -->
    </div><!-- end .row -->
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Item:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  48 => 13,  41 => 9,  36 => 7,  31 => 4,  28 => 3,);
    }
}
