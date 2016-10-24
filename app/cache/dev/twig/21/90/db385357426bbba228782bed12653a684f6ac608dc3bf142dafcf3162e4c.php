<?php

/* ProjetDarnaBundle:Logement:ajouterLogement.html.twig */
class __TwigTemplate_2190db385357426bbba228782bed12653a684f6ac608dc3bf142dafcf3162e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout1.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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
     <center><h1><font color=\"#337AB7\"> Ajouter des Logements </font></h1></center><br>
        <form method=\"POST\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'enctype');
        echo ">
            <table>
                <tr>
                    <td style=\"font: bold;font-size: 18px\"> Description :</td>
                    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <td style=\"font: bold;font-size: 18px\">Date</td>
                    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <td style=\"font: bold;font-size: 18px\">Région</td>
                    <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>

                <tr>
                    <td style=\"font: bold;font-size: 18px\">Prix</td>
                    <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>

                <tr>
                    <td style=\"font: bold;font-size: 18px\">Surface</td>
                    <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                    <td style=\"font: bold;font-size: 18px\">Engagement</td>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "engagement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>


                <tr>
                    <td style=\"font: bold;font-size: 18px\">Nombre de chambre</td>
                    <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrchambre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>

                <tr>
                    <td style=\"font: bold;font-size: 18px\">Surface couverte</td>
                    <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "surfacecouverte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>



                <tr>
                    <td style=\"font: bold;font-size: 18px\">nom gérant</td>
                    <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "idgerant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>

                  <tr>
                    <td style=\"font: bold;font-size: 18px\">inserer image svp</td>
                    <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "path", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
                </tr>
                <tr>
                   

            </table>
                <br>
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\">
                  

            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
        </form>
        <br><br<br><br><br><br><br><br<br><br><br><br>

  ";
        // line 70
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Logement:ajouterLogement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 70,  135 => 66,  122 => 56,  114 => 51,  104 => 44,  96 => 39,  87 => 33,  80 => 29,  72 => 24,  64 => 19,  57 => 15,  50 => 11,  43 => 7,  39 => 5,  36 => 4,  11 => 2,);
    }
}
