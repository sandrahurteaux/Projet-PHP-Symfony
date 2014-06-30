<?php

/* AdminBundle:User:show.html.twig */
class __TwigTemplate_7d0dd98e72118b562cdc54eaee9d226a479d9ea35b3a39a445771a689f799a11 extends Twig_Template
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
            <h1>Utilisateurs</h1>

            <table class=\"record_properties table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prénom</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Isactive</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                              ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 39
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
            echo "
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"record_actions no-list\">
                <li>
                    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class='btn btn-primary'>
                        Retour à la liste
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class='btn btn-primary'>
                        Editer
                    </a>
                </li>
                <li>";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
        </div><!-- end .col-md-12 -->
    </div><!-- end .row -->
</main>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 57,  115 => 53,  107 => 48,  98 => 41,  89 => 39,  85 => 38,  77 => 33,  70 => 29,  63 => 25,  56 => 21,  49 => 17,  42 => 13,  31 => 4,  28 => 3,);
    }
}
