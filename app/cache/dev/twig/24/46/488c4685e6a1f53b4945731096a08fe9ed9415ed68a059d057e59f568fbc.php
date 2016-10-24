<?php

/* ProjetDarnaBundle:Facture:modifierFacture.html.twig */
class __TwigTemplate_2446488c4685e6a1f53b4945731096a08fe9ed9415ed68a059d057e59f568fbc extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "               <center><h1><font color=\"#337AB7\"> Modifier Facture </font></h1></center><br>

   <form style=\"font-size: 20px\" method=\"POST\">
       <center>
           <table>
          <tr>
              <td style=\"font: bold;font-size: 18px \" color=\"#337AB7\">Date</td>
              <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "date", array()), 'widget');
        echo "</td>
          </tr> 
          <br>
           <tr>
              
               <td style=\"font: bold;font-size: 18px \">Nom client</td>
              <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "idclient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
              
           </tr>
          
          <tr>
              <td style=\"font: bold;font-size: 18px \">Nom gerant</td>
              <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "idgerant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
          </tr> 
          <br>
          <tr>
              <td style=\"font: bold;font-size: 18px \">Engagement</td>
              <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "idoffre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
          </tr> 
           
          
    
      </table>
          <br>
          
          
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" />
                  ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), 'rest');
        echo "
<br>
          <br>
          <br>
       </center>
 
     <br>
          <br>
          <br>
          <br>
     
  </form>  ";
        // line 50
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "

";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Facture:modifierFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 50,  87 => 39,  74 => 29,  66 => 24,  57 => 18,  48 => 12,  39 => 5,  36 => 4,  11 => 1,);
    }
}
