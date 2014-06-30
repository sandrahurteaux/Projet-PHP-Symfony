<?php

/* AdminBundle:Item:index.html.twig */
class __TwigTemplate_9fdde72ee70354da2340df0069832f6fba5c2a4bfff61cf839a7cff9594ce238 extends Twig_Template
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
        echo "<main class=\"container admin_produit\">
    <div class=\"row\">
        <div class=\"col-md-12\">
        <h1>Liste des produits</h1>

        <table class=\"records_list table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Reference</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "                <tr>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_item_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), 250, false, "..."), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "picture"), "html", null, true);
            echo "\" /></td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock"), "html", null, true);
            echo "</td>
                    <td>
                    <ul class=\"no-list\">
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_item_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_item_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">éditer</a>
                        </li>
                    </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>

            <ul class=\"no-list\">
            <li>
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_item_new");
        echo "\" class=\"btn btn-primary\">
                    Création d'une nouvelle entrée
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
        return "AdminBundle:Item:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  111 => 44,  99 => 38,  93 => 35,  86 => 31,  82 => 30,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  59 => 25,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
