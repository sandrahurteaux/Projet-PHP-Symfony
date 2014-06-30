<?php

/* FrontBundle:Item:item.html.twig */
class __TwigTemplate_50e19745e1fd9b2cc680245ca1c21e7b61b9f5dda5e72e84538cdc7691920b47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle::base.html.twig");

        $this->blocks = array(
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
    public function block_nav($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo "       
        <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a></li>      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<main class=\"item\">
    <div class=\"container\">
                
                 
            <div class=\"col-md-10 col-md-offset-1\">
                <a href=\"";
        // line 17
        echo "\" title=\"Voir tous les produits de la catégorie ";
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) ? $context["categoryName"] : $this->getContext($context, "categoryName")), "html", null, true);
        echo "\" class=\"label label-primary\"><span>";
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) ? $context["categoryName"] : $this->getContext($context, "categoryName")), "html", null, true);
        echo "</span></a>
                <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo " </h1>
                <div class=\"row\">
                    <figure class=\"col-md-3\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "picture"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "\" /></figure> 
                    <div class=\"col-md-8 col-md-offset-1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</div>

                    <div class=\"price col-md-8 col-md-offset-4\">
                        <p>Prix :  <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), "html", null, true);
        echo "</span>€</p>
                    </div>
                    
                    <form method='post' action='' role='form' class='form-inline col-md-6 col-md-offset-6 basket'>
                        <div class='form-group'>
                            <input type='hidden' name='id' value='";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "' />
                            
                            <label for='number' class='col-sm-5 control-label'>Nombre</label>
                            
                            <div class=\"col-sm-4 col-sm-offset-1\"> 
                                <input type='number' value='' pattern='[1-9]' placeholder='0' class='form-control' />
                            </div>
                        </div>
                        <button type='submit' value='' class='btn btn-default'>Ajouter au panier</button>
                        
                    </form>
                </div> <!-- end .row -->
            </div>    
        
       
        
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Item:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  91 => 24,  85 => 21,  78 => 20,  73 => 18,  66 => 17,  59 => 12,  56 => 11,  51 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
