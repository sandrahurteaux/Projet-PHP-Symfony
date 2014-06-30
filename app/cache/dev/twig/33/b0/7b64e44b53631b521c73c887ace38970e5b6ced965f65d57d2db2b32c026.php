<?php

/* AdminBundle:User:index.html.twig */
class __TwigTemplate_33b07b64e44b53631b521c73c887ace38970e5b6ced965f65d57d2db2b32c026 extends Twig_Template
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
            <h1>Liste des utilisateurs</h1>

            <table class=\"records_list table\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Mot de passe</th>
                        <th>Rôles</th>
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
            echo "                    <tr>
                        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"), "html", null, true);
            echo "</td>
                        <td>
                              ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 33
                echo "                                    ";
                echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
                echo "
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        </td>
                        <td>
                        <ul class=\"no-list\">
                            <li>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class='btn btn-xs btn-default'>show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class='btn btn-xs btn-default'>edit</a>
                            </li>
                        </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>

            <ul class=\"no-list\">
                <li>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\" class='btn btn-primary'>
                        Créer un nouvel utilisateur
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
        return "AdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  123 => 48,  111 => 42,  105 => 39,  99 => 35,  90 => 33,  86 => 32,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  59 => 25,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
