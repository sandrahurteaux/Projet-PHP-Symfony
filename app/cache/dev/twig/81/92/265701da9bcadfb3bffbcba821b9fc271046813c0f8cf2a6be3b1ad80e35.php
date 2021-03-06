<?php

/* AdminBundle:Payment:index.html.twig */
class __TwigTemplate_8192265701da9bcadfb3bffbcba821b9fc271046813c0f8cf2a6be3b1ad80e35 extends Twig_Template
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
            <h1>Liste des moyens de paiement</h1>

            <table class=\"records_list table table-striped\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                    <tr>
                        <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_payment_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</td>
                        <td>
                        <ul class=\"no-list\">
                            <li>
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_payment_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">voir</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_payment_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 34
        echo "                </tbody>
            </table>

             <ul class=\"no-list\">
                <li>
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_payment_new");
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
        return "AdminBundle:Payment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  85 => 34,  73 => 28,  67 => 25,  60 => 21,  54 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,);
    }
}
