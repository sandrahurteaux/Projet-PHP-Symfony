<?php

/* FrontBundle:Inscription:index.html.twig */
class __TwigTemplate_4d5c9712fa6856d53756183be718363b1962db8d9ebd801ae6b26333b9ad8264 extends Twig_Template
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
        echo "Inscription
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
        
    <h1>Création de votre compte</h1> 
        <div class=\"row\">

            <div class=\"col-md-6 col-md-offset-3\">
                
                <form method=\"post\" novalidate class=\"form-horizontal\" role=\"form\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "_token"), 'widget');
        echo "

                    <div class=\"form-group\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "civility"), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "civility"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>  
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "firstName"), 'label', array("label" => "Votre nom"));
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "firstName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "firstName"), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "lastName"), 'label', array("label" => "Votre nom"));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "lastName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "lastName"), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "email"), 'label', array("label" => "Votre mail"));
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "email"), 'widget', array("attr" => array("placeholder" => "votre.mail@adresse.ad", "class" => "form-control")));
        // line 46
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "email"), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "password"), 'label', array("label" => "Votre mot de passe"));
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "password"), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\"><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\" /></div>
                </form>
                
            </div><!-- end .col-md-10 -->
        </div> <!-- end .row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Inscription:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  136 => 51,  132 => 50,  126 => 47,  123 => 46,  121 => 41,  117 => 40,  111 => 37,  107 => 36,  103 => 35,  97 => 32,  93 => 31,  89 => 30,  83 => 27,  79 => 26,  73 => 23,  62 => 14,  59 => 13,  46 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
