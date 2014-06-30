<?php

/* FrontBundle:FrontUser:show.html.twig */
class __TwigTemplate_c23437a287b23885034fa18a3ab54b54abfa542f21811d84b9845bfa3d8814e5 extends Twig_Template
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
        echo " Mes Coordonnées ";
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
        echo "<main class=\"container\">
            <h1>Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), "html", null, true);
        echo "</h1>
            
    <div class=\"row\">
            
        <div class=\"col-md-3\">
            <ul>
                <li class=\"active\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mesinfos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" title=\"\">Mes informations</a></li>
                <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" title=\"\">Modifier mes informations</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("mesadresses");
        echo "\" title=\"\">Mes adresses</a></li>
                <li><a href=\"#\" title=\"\">Mes commandes</a></li>
            </ul>
        </div>
        <div class=\"col-md-8 col-md-offset-1\">
            
                      
            <table class=\"record_properties table table-striped\">
                <tbody>
                    <tr>
                        <th>Prénom</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

                <ul class=\"record_actions no-list\">            
                    <li>
                        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                            Editer
                        </a>
                    </li>
                </ul>
        </div>

    </div><!-- end .row -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:FrontUser:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  110 => 40,  103 => 36,  96 => 32,  82 => 21,  78 => 20,  74 => 19,  63 => 13,  60 => 12,  57 => 11,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
