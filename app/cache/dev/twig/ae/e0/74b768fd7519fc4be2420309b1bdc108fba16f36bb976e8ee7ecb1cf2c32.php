<?php

/* ProjetDarnaBundle:Agence:ajouterAgence.html.twig */
class __TwigTemplate_aee074b768fd7519fc4be2420309b1bdc108fba16f36bb976e8ee7ecb1cf2c32 extends Twig_Template
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
        <center><h1><font color=\"#337AB7\"> Ajouter Agence </font></h1></center><br>

    <form method=\"POST\">
       
        <table style=\"height: 200px\">
        <tr>
             <td style=\"font: bold;font-size: 18px \">Adresse</td>
             <td> 
                 ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                 
             </td>
               

        </tr>
        
        <tr>
            <td style=\"font: bold;font-size: 18px \">Télephone</td>
             <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        <tr>
             <td style=\"font: bold;font-size: 18px\">Nom</td>
             <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        
        
        </table>
        <br><br>
         <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\">
      
         ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), 'rest');
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
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Agence:ajouterAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  70 => 28,  62 => 23,  50 => 14,  39 => 5,  36 => 4,  11 => 1,);
    }
}
