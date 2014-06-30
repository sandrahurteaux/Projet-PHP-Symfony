<?php

/* AdminBundle:Category:index.html.twig */
class __TwigTemplate_af6464972dba3d7a55d5afccc7782879b1354254b477c3c5ad3ce1454b43e76a extends Twig_Template
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
            <h1>Toutes les catégories</h1>

            <table class=\"records_list table table-striped\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                    <tr>
                        <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "</td>
                        <td>
                        <ul class=\"no-list\">
                            <li>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">edit</a>
                            </li>
                        </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>

            <ul class=\"no-list\">
                <li>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\" class=\"btn btn-primary\">
                       Créer une nouvelle entrée
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
        return "AdminBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  90 => 36,  78 => 30,  72 => 27,  65 => 23,  61 => 22,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,);
    }
}
