<?php

/* ProjetDarnaBundle:Entreprise:modifierEntreprise.html.twig */
class __TwigTemplate_3119ad6a2059cf67292e9dea05d963ddac4b59f58d280ae2995f34b7d5dab28e extends Twig_Template
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
     <center><h1><font color=\"#337AB7\"> Modifier des Entreprises </font></h1></center><br>
        <br><br>
        <form method=\"POST\">
    <table>
        
   <tr><td> Description :</td> <td> ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>
   <tr>  <td> Date  :</td>  <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td></tr>
   <tr>  <td> Région: </td> <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
   <tr> <td>Prix : </td> <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
 <tr><td> Surface :</td> <td> ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>
   <tr>  <td> Engagement  :</td>  <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "engagement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td></tr>
    <tr><td>  Surface cuverte:</td> <td> ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surfacecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>
   <tr>  <td> Nombre d'étage: </td> <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrEtage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
     <tr><td>  image:</td> <td> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "path", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>  
           <tr>
             <td style=\"font: bold;font-size: 18px\">Nom du gérant</td>
             <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idgerant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>   
    <tr>  <td><br><br><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"/></td> </tr>
     
         ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
    </table>
    </form>  ";
        // line 26
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    </center>
   ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Entreprise:modifierEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  92 => 24,  85 => 20,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  39 => 3,  36 => 2,  11 => 1,);
    }
}
