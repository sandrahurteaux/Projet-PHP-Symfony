<?php

/* AdminBundle:Address:index.html.twig */
class __TwigTemplate_f1d1cdf9162f80deceaba04b0437299e958511a931584ddca3bad20b0f0c6a60 extends Twig_Template
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
            <h1>Address list</h1>

            <table class=\"records_list table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Postalcode</th>
                        <th>Town</th>
                        <th>Billing</th>
                        <th>Phone1</th>
                        <th>Phone2</th>
                        <th>Comment</th>
                        <th>Isactive</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "                    <tr>
                        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("address_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address1"), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address2"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postalcode"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "town"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "billing"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone1"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone2"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"), "html", null, true);
            echo "</td>
                        <td>
                        <ul class=\"no-list\">
                            <li>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("address_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("address_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-default\">edit</a>
                            </li>
                        </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>

            <ul class=\"no-list\">
                <li>
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("address_new");
        echo "\" class=\"btn btn-xs btn-primary\">
                        Nouvelle entrée
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
        return "AdminBundle:Address:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  125 => 50,  113 => 44,  107 => 41,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  62 => 28,  59 => 27,  55 => 26,  31 => 4,  28 => 3,);
    }
}
