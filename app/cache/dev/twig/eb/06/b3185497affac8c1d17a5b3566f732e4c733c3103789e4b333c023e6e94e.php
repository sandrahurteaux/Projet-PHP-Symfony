<?php

/* FrontBundle:Security:login.html.twig */
class __TwigTemplate_eb06b3185497affac8c1d17a5b3566f732e4c733c3103789e4b333c023e6e94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        // line 4
        echo "Connexion
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<main class=\"home\">
    <div class=\"container\">
        
    <h1>Connexion</h1> 
    
    <div class=\"row\">

            <div class=\"col-md-6 col-md-offset-3\">

                ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
                ";
        }
        // line 20
        echo "
                <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                    <label for=\"username\">Login :</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                    <label for=\"password\">Mot de passe :</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />

                    ";
        // line 32
        echo "                    

                    <button type=\"submit\">login</button>
                </form>
  
            </div><!-- end .col-md-6 -->
        </div> <!-- end .row -->
    </div><!-- end .container -->
</main>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  67 => 23,  62 => 21,  59 => 20,  53 => 18,  51 => 17,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
