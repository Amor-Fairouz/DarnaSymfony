<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f8a1af8a16cf22f6d29cb96be7a66540624d4984a0100766f7c66b740306aa08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
   
       
    <center><h1><font color=\"black\" size=\"7\"> Inscription</font></h1></center>
    <br><br><br>
          <table>
              <tr>
                  <td>E-mail : </td>
                  <td> ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
              </tr>
              <tr>
                  <td>Pseudo : </td>
                  <td> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
              </tr>
              <tr>
                  <td>Mot de passe : </td>
                  <td> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
              </tr>
              <tr>
                  <td>Confirmer mot de passe : </td>
                  <td> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
              </tr>
              </tr>
          </table>
          
        
    
    <div>
        <br><br><br>
        <input type=\"submit\" value=\"Enregistrer\" />
    </div>
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  60 => 25,  53 => 21,  46 => 17,  39 => 13,  26 => 5,  23 => 4,  19 => 1,);
    }
}
