<?php

/* ProjetDarnaBundle:Terrain:ajouterTerrain.html.twig */
class __TwigTemplate_a0d9f4c16dc9498d760b3cec30be11bad7c9dc78b60651837ad2d1783e4f29b6 extends Twig_Template
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
    <center><h1><font color=\"#337AB7\"> Ajouter des Terrains </font></h1></center><br>
    <form method=\"POST\">
       
        <table>
         <tr>
             <td style=\"font: bold;font-size: 18px\"> Description :</td>
             <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         <tr>
             <td style=\"font: bold;font-size: 18px\">Date</td>
             <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "date", array()), 'widget');
        echo "</td>
         </tr>
           <tr>
             <td style=\"font: bold;font-size: 18px\">Région</td>
             <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Prix</td>
             <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Surface</td>
             <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         <tr>
             <td style=\"font: bold;font-size: 18px\">Engagement</td>
             <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "engagement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
           <tr>
             <td style=\"font: bold;font-size: 18px\">Vocation</td>
             <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "vocation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         
         <tr>
             <td style=\"font: bold;font-size: 18px\">Nom du gérant</td>
             <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idgerant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
         </tr>
         <tr>
                    <td style=\"font: bold;font-size: 18px\">inserer image svp</td>
                    <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "path", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
         
        </table>
         
         <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\">
         ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
         
    </form>  ";
        // line 55
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    </center>
         ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Terrain:ajouterTerrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 55,  116 => 53,  107 => 47,  100 => 43,  92 => 38,  85 => 34,  78 => 30,  70 => 25,  62 => 20,  55 => 16,  48 => 12,  39 => 5,  36 => 4,  11 => 1,);
    }
}
