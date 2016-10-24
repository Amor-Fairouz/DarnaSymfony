<?php

/* ProjetDarnaBundle:Entreprise:ajouterEntreprise.html.twig */
class __TwigTemplate_e7556810afe5204ee70c2510921b7a64f386cd33e740c510fa2a1fe666fda849 extends Twig_Template
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
        echo "    
    <center>  
    <center><h1><font color=\"#337AB7\"> Ajouter des Entreprises </font></h1></center><br>
    <form method=\"POST\">
       
        <table>
         <tr>
             <td style=\"font: bold;font-size: 18px\"> Description :</td>
             <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         <tr>
             <td style=\"font: bold;font-size: 18px\">Date</td>
             <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
           <tr>
             <td style=\"font: bold;font-size: 18px\">Région</td>
             <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Prix</td>
             <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Surface</td>
             <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         <tr>
             <td style=\"font: bold;font-size: 18px\">Engagement</td>
             <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "engagement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>

          <tr>
             <td style=\"font: bold;font-size: 18px\">Surface couverte</td>
             <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surfacecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Nombre d'étage</td>
             <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrEtage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
        
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Nom du gérant</td>
             <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idgerant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
        
         
              
            <tr>
                <td style=\"font: bold;font-size: 18px\">insere image svp</td>
                    <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "path", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
            
        </table>
               <br> 
         
         <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\">
         ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
          <br><br>
    </form> <br><br>  ";
        // line 68
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    </center>
         ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Entreprise:ajouterEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 68,  132 => 66,  122 => 59,  112 => 52,  102 => 45,  94 => 40,  86 => 35,  79 => 31,  71 => 26,  63 => 21,  56 => 17,  49 => 13,  39 => 5,  36 => 4,  11 => 1,);
    }
}
