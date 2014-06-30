<?php

/* FrontBundle:FrontUser:edit.html.twig */
class __TwigTemplate_3f56eb32ab59464d59c9e53a7065f321f387340df611b5e9e2406769997fbc42 extends Twig_Template
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
        echo " Edition de mes Coordonnées ";
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
        echo "<main class=\"container\">
            <h1>Fiche Client : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
        echo "</h1>
            
    <div class=\"row\">
            
        <div class=\"col-md-3\">
            <ul>
                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mesinfos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" title=\"\">Mes informations</a></li>
                <li class=\"active\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" title=\"\">Modifier mes informations</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("mesadresses");
        echo "\" title=\"\">Mes adresses</a></li>
                <li><a href=\"#\" title=\"\">Mes commandes</a></li>
            </ul>
        </div>
        <div class=\"col-md-7 col-md-offset-1\">
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
            
            <!--<form method=\"post\" class=\"form-horizontal\" role=\"form\">
                
                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName"), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName"), 'widget');
        echo "
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName"), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName"), 'widget');
        echo "
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "
                </div>
                    
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\" />
                
            </form>-->
  
           
        </div><!-- end .col-md-8 -->
    </div><!-- end .row -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:FrontUser:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  118 => 41,  111 => 37,  107 => 36,  100 => 32,  96 => 31,  88 => 26,  80 => 21,  76 => 20,  72 => 19,  63 => 13,  60 => 12,  57 => 11,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
