<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_79b1d26efebdf6f9987f2e8a799c0a8331da52402524a4f6235fb92bd445385f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetUserBundle::layout5.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetUserBundle::layout5.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Authentification ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    
    
 
    
    
    
";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "
<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <br> <br> <br>  <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

    <br>  <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
   

    <br> <br> <br> <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    <br><br><br>
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"> <font color=\"blue\"> Inscription</font> </a>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  92 => 29,  83 => 23,  78 => 21,  74 => 20,  69 => 18,  65 => 17,  62 => 16,  56 => 14,  54 => 13,  46 => 7,  43 => 6,  37 => 5,  11 => 1,);
    }
}
