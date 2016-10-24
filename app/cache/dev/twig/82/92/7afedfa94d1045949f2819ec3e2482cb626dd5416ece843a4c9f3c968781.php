<?php

/* ProjetDarnaBundle:Agence:modifierAgence.html.twig */
class __TwigTemplate_82927afedfa94d1045949f2819ec3e2482cb626dd5416ece843a4c9f3c968781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout1.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetDarnaBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <center>
     <center><h1><font color=\"#337AB7\"> Modifier des Agences </font></h1></center><br>
        <br><br>
        <form method=\"POST\">
    <table>
   <tr><td> Adresse  :</td> <td> ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>
   <tr>  <td> Télephone  :</td>  <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td></tr>
   <tr>  <td> Nom: </td> <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
  
            
    <tr>  <td><br><br><input type=\"submit\" value=\"Envoyer\"/></td> </tr>
     
         ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), 'rest');
        echo "
    </table>
    </form>
    ";
        // line 18
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    </center>
   ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Agence:modifierAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  62 => 15,  54 => 10,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
