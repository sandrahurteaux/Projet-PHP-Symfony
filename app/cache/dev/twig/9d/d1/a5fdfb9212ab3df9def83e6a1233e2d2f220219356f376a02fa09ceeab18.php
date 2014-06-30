<?php

/* FrontBundle:FrontAddress:edit.html.twig */
class __TwigTemplate_9dd1a5fdfb9212ab3df9def83e6a1233e2d2f220219356f376a02fa09ceeab18 extends Twig_Template
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
        echo " Adresses - Modification - Mon compte ";
    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "           <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a></li>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<main class=\"home\">
    <div class=\"container\">

        <h1>Modification de mon adresse</h1>
        
               
        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul>
                    <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mesinfos", array("id" => (isset($context["logged_user"]) ? $context["logged_user"] : $this->getContext($context, "logged_user")))), "html", null, true);
        echo "\" title=\"\">Mes informations</a></li>
                    <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => (isset($context["logged_user"]) ? $context["logged_user"] : $this->getContext($context, "logged_user")))), "html", null, true);
        echo "\" title=\"\">Modifier mes informations</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mesadresses");
        echo "\" title=\"\">Mes adresses</a></li>
                    <li><a href=\"#\" title=\"\">Mes commandes</a></li>
                </ul>
            </div>
            <div class=\"col-md-8 col-md-offset-1\">

                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

                <ul class=\"record_actions no-list\">
                    <li>
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("mesadresses");
        echo "\" class=\"btn btn-primary\">
                            Liste des adresses
                        </a>
                    </li>
                    <li>";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                </ul>

            </div><!-- end col-md-8 -->
       
        </div><!-- end row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:FrontAddress:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  95 => 33,  88 => 29,  79 => 23,  75 => 22,  71 => 21,  60 => 12,  57 => 11,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
