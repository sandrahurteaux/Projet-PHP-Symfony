<?php

/* AdminBundle:User:new.html.twig */
class __TwigTemplate_cc2b60d450965a4074c6ed343029f6c66dd4ab8da4f2ccce4aecfc2d9245711e extends Twig_Template
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
            <h1>Créer un nouvel utilisateur</h1>

            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class='btn btn-primary'>
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
        return "AdminBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  31 => 4,  28 => 3,);
    }
}
