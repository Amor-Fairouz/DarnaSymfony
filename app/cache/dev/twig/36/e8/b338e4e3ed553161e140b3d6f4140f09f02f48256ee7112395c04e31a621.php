<?php

/* ProjetDarnaBundle:Alerte:ajouterAlerte.html.twig */
class __TwigTemplate_36e8b338e4e3ed553161e140b3d6f4140f09f02f48256ee7112395c04e31a621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout.html.twig");
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
        return "ProjetDarnaBundle::layout.html.twig";
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
       
    <form  method=\"POST\" >
        <h3>Remplir votre Alerte</h3>  
        <table style=\"height: 400px\">
        <tr>
             <td style=\"font: bold;font-size: 18px \" > PrixMin</td>
             <td> 
                 ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "prixmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                
             </td>
               

        </tr>
        
        <tr>
             <td style=\"font: bold;font-size: 18px\">PrixMax</td>
             <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "prixmax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
             
        </tr>
        </br></br></br></br>
        <tr>
             <td style=\"font: bold;font-size: 18px\">Region</td>
             <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
       
        <tr>
             <td style=\"font: bold;font-size: 18px\">Description de l'Offre</td>
             <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "idoffre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
         <tr>
             <td style=\"font: bold;font-size: 18px\">Nom  Client</td>
             <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "idclient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
         <tr>
             <td style=\"font: bold;font-size: 18px\">Type De bien</td>
             <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "typedebien", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        <tr>
             <td style=\"font: bold;font-size: 18px\">Surface</td>
             <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        <tr>
             <td style=\"font: bold;font-size: 18px\">Engagement</td>
             <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), "engagement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        </table>
       
         <input type=\"submit\" class=\"btn btn-primary\"  value=\"Envoyer\">
         ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")), 'rest');
        echo "
         
       
    </form>
       
    </center>
         <br><br>
                  <br><br>
                           <br><br>
         <br><br>


         ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Alerte:ajouterAlerte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 57,  106 => 49,  99 => 45,  92 => 41,  85 => 37,  78 => 33,  70 => 28,  61 => 22,  49 => 13,  39 => 5,  36 => 4,  11 => 1,);
    }
}
