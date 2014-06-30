<?php

/* FrontBundle:Inscription:Confirmation.html.twig */
class __TwigTemplate_417ce33c11cf9d620eb73cdb8bbb05913a6b3fbe10249cdc429f327fbc33fef7 extends Twig_Template
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
        // line 4
        echo "Confirmation
";
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "           <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</a></li>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<main class=\"home\">
    <div class=\"container\">
        
        <h1>Confirmation d'inscription</h1>
        <div class=\"row\">

            <div class=\"col-md-6 col-md-offset-3\">
    
                <p class=\"confirmation\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>

            </div><!-- end .col-md-10 -->
        </div> <!-- end .row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Inscription:Confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  62 => 14,  59 => 13,  46 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
