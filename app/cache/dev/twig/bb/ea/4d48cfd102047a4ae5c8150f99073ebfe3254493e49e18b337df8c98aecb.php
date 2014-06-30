<?php

/* FrontBundle:Category:category.html.twig */
class __TwigTemplate_bbea4d48cfd102047a4ae5c8150f99073ebfe3254493e49e18b337df8c98aecb extends Twig_Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id") == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))) {
                // line 7
                echo "            <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
                echo "</a></li>
        ";
            } else {
                // line 9
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<main class=\"category\">
    <div class=\"container\">
        
        <div class=\"row\"><h1 class=\"col-md-12\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</h1></div>
        <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
           
            <table class=\"table table-striped\">
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                <tr>                
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FrontBundle/img/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "picture"), "html", null, true);
            echo "\" alt=\"\" /></a></td>
                    <td>
                        <h2><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</a></h2>
                        <div><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 250, false, ""), "html", null, true);
            echo "(...).</a></div>
                    </td>
                    <td><div class=\"price\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo "€</div></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </table>
            
           </div><!-- end .col-md-10 -->
        </div>  <!-- end .row -->
    
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 34,  119 => 31,  110 => 29,  102 => 28,  92 => 26,  89 => 25,  85 => 24,  77 => 19,  72 => 16,  69 => 15,  64 => 12,  58 => 11,  50 => 9,  42 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
