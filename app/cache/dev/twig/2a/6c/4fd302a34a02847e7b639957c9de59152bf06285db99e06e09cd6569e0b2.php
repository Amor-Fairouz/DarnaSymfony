<?php

/* ProjetDarnaBundle:Facture:ajouterFacture.html.twig */
class __TwigTemplate_2a6c4fd302a34a02847e7b639957c9de59152bf06285db99e06e09cd6569e0b2 extends Twig_Template
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
        echo "    <center>  
        <center><h1><font color=\"#337AB7\"> Ajouter Facture </font></h1></center><br>

    <form method=\"POST\">
       
        <table>
        <tr>
             <td style=\"font: bold;font-size: 18px \" > Date</td>
             <td> 
                 ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                 
             </td>
               

        </tr>
        
        <tr>
            <td style=\"font: bold;font-size: 18px \">Nom du Gerant</td>
             <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "idgerant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        <tr>
             <td style=\"font: bold;font-size: 18px\">Nom du Client</td>
             <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "idclient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        
        <tr>
             <td style=\"font: bold;font-size: 18px\">Engagement</td>
             <td style=\"font: bold;font-size: 18px\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), "idoffre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        </table>
        <br><br>
         <input class=\"btn btn-primary\" type=\"submit\" onclick=\"return confirm('êtes-vous sûr de vouloir valider ces coordonnées?')\" value=\"Ajouter\">
      
         ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")), 'rest');
        echo "
         
         
         
      <br> <br>

</form>
         
         
    </form>
    </center>
         <br><br>
                  <br><br>
                           <br><br>
         <br><br>
  ";
        // line 56
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "

         ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Facture:ajouterFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 56,  89 => 41,  79 => 34,  70 => 28,  62 => 23,  50 => 14,  39 => 5,  36 => 4,  11 => 1,);
    }
}
