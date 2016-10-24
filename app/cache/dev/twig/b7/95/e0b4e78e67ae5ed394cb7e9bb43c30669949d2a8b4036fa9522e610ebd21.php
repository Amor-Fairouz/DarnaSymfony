<?php

/* ProjetDarnaBundle:Transporteur:ajouterTransp.html.twig */
class __TwigTemplate_b795e0b4e78e67ae5ed394cb7e9bb43c30669949d2a8b4036fa9522e610ebd21 extends Twig_Template
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
        <center><h1><font color=\"#337AB7\"> Ajouter Transporteur </font></h1></center><br>

    <form method=\"POST\">
       
        <table style=\"height: 200px\">
        <tr>
             <td style=\"font: bold;font-size: 18px \">Nom Transporteur</td>
             <td> 
                 ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["transporteur"]) ? $context["transporteur"] : $this->getContext($context, "transporteur")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                 
             </td>
               

        </tr>
        
        <tr>
            <td style=\"font: bold;font-size: 18px \">Prenom Transporteur</td>
             <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["transporteur"]) ? $context["transporteur"] : $this->getContext($context, "transporteur")), "prenon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        <tr>
             <td style=\"font: bold;font-size: 18px\">Telephone du Transporteurt</td>
             <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["transporteur"]) ? $context["transporteur"] : $this->getContext($context, "transporteur")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        
        <tr>
             <td style=\"font: bold;font-size: 18px\">Adresse</td>
             <td >";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["transporteur"]) ? $context["transporteur"] : $this->getContext($context, "transporteur")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
        </tr>
        
        </table>
        <br><br>
         <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\">
      
         ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["transporteur"]) ? $context["transporteur"] : $this->getContext($context, "transporteur")), 'rest');
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
        return "ProjetDarnaBundle:Transporteur:ajouterTransp.html.twig";
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
