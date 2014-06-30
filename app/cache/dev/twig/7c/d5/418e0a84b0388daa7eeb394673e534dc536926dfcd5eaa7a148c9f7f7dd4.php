<?php

/* FrontBundle:FrontAddress:new.html.twig */
class __TwigTemplate_7cd5418e0a84b0388daa7eeb394673e534dc536926dfcd5eaa7a148c9f7f7dd4 extends Twig_Template
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
        echo " Mon compte ";
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

        <h1>Nouvelle adresse</h1>
        
               
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
                    <li><a href=\"#\" title=\"\">Mes adresses</a></li>
                    <li><a href=\"#\" title=\"\">Mes commandes</a></li>
                </ul>
            </div>
            <div class=\"col-md-8 col-md-offset-1\">
   
                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                <ul class=\"record_actions no-list\">
                    <li>
                        <p><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("address");
        echo "\" class='btn btn-default'>
                            Retour à la liste des adresses
                        </a></p>
                    </li>
                </ul>
            </div><!-- end col-md-8 -->
       
        </div><!-- end row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:FrontAddress:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  85 => 29,  75 => 22,  71 => 21,  60 => 12,  57 => 11,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
