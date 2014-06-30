<?php

/* AdminBundle:Index:index.html.twig */
class __TwigTemplate_5cbdabd5527453326a8037eb9d220781cb0ed9f38cfdb4b9e65e77bf9efaf509 extends Twig_Template
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
        <div class=\"col-md-9\">
            <div class=\"row\">
                <div class=\"cartel col-md-5 col-md-offset-1\">
                     <div class=\"col-md-4\"><h2>Produits</h2></div>
                        <div class=\"col-md-8\">
                    <p><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_item");
        echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Voir tous les produits</a></p>
                    <p><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_item_new");
        echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Ajouter un produit</a></p>
                        </div>                        
                  </div>

                <div class=\"cartel col-md-5 col-md-offset-1\">
                     <div class=\"col-md-4\"><h2>Catégories</h2></div>
                        <div class=\"col-md-8\">
                    <p><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Voir toutes les catégories</a></p>
                    <p><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Ajouter une catégorie</a></p>
                        </div>                        
                </div>
            </div>
            <div class=\"row margin-top\">
                <div class=\"cartel col-md-5 col-md-offset-1\">
                        <div class=\"col-md-4\"><h2>Historique des commandes</h2></div>
                        <div class=\"col-md-8\">
                             <p><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_orders");
        echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Toutes les commandes</a></p> 
                        </div>                
                </div>
                
                <div class=\"cartel col-md-5 col-md-offset-1\">
                    <div class=\"col-md-4\"><h2>Clients</h2></div>
                        <div class=\"col-md-8\">
                    <p><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Afficher la liste</a></p>
                        </div>                        
                </div>
            </div>
        </div>
        <div class=\"cartel col_cartel col-md-2 col-md-offset-1\">
            
                <h2>Autres actions</h2>
                
                <ul>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_payment");
        echo "\" class=\"\" >Les moyens de paiments</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_stateorder");
        echo "\">Les états de commande</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_civility");
        echo "\">Les civilités</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("address");
        echo "\">Les adresses</a></li>
                </ul> 
                             
            
        </div>
        


    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  100 => 47,  96 => 46,  92 => 45,  79 => 35,  69 => 28,  58 => 20,  54 => 19,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
