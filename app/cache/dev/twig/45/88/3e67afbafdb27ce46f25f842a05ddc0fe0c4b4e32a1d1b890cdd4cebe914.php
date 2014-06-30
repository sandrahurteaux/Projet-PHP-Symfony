<?php

/* FrontBundle:FrontAddress:index.html.twig */
class __TwigTemplate_45883e67afbafdb27ce46f25f842a05ddc0fe0c4b4e32a1d1b890cdd4cebe914 extends Twig_Template
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

        <h1>Mes adresses</h1>
        
               
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
        echo "
                <div class=\"row\">
                    
                    
                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                        <div class=\"address col-md-3 col-md-offset-1\">                            
                            <p> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address1"), "html", null, true);
            echo "<br/>
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address2"), "html", null, true);
            echo "<br/>
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postalcode"), "html", null, true);
            echo "<br/>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "town"), "html", null, true);
            echo "</p>
                            <p>Facturation : ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "billing"), "html", null, true);
            echo "</p>
                            <p> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone1"), "html", null, true);
            echo "<br/>
                                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone2"), "html", null, true);
            echo "</p>
                            <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), "html", null, true);
            echo "</p>                           
                            
                            <p><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifieradresse", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">éditer</a></p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </div> <!-- end .row -->
                    
                    <div class=\"right\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("nouvelleadresse");
        echo "\" class=\"btn btn-primary btn-sm\">Ajouter une adresse</a></div>
                    <div class=\"clearfix\"></div>
                
            </div><!-- end col-md-8 -->
       
        </div><!-- end row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:FrontAddress:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  142 => 47,  133 => 44,  128 => 42,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  97 => 34,  93 => 33,  87 => 29,  79 => 23,  75 => 22,  71 => 21,  60 => 12,  57 => 11,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
