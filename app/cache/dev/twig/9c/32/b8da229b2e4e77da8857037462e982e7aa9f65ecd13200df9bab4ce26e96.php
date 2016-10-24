<?php

/* ProjetDarnaBundle:Transporteur:afficherTransporteur.html.twig */
class __TwigTemplate_9c32b8da229b2e4e77da8857037462e982e7aa9f65ecd13200df9bab4ce26e96 extends Twig_Template
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
        echo "     <center><h1><font color=\"#337AB7\"> Liste des Transporteurs </font></h1></center><br>
     <table cellspacing=6 width=100%> <tr>
             <td><div align=\"left\" >    <a href=\"  ";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Ajouter_transp");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter un Transporteur\"/></a>
     </div></td>
     
   
</tr></table>
    <center>  
    <table class=\"table table-hover\">
            <tr>
                <td> Nom</td> 
                <td> Prenom  </td>
                <td> Télephone </td>
                <td> Adresse</td>
                
                 <td> <font color=\"red\">Supprimer</font></td>
                <td><font color=\"green\"> Modifier</font></td>
              
                
            </tr>


            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transporteur"]) ? $context["transporteur"] : $this->getContext($context, "transporteur")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "

                <tr> <td> <font color=\"purple\"> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</font></td>
                    <td> <font color=\"purple\"> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenon", array()), "html", null, true);
            echo "</font></td>
                    <td> <font color=\"purple\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "tel", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "adresse", array()), "html", null, true);
            echo "</font></td>
                    
   <td><font color=\"purple\"> <a  href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_transp", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/></a></font></td>
<td><font color=\"purple\"> <a  href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_transp", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"/></a></font></td>

   
         

                
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </table>  ";
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo " </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Transporteur:afficherTransporteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  97 => 36,  91 => 35,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  70 => 28,  66 => 27,  43 => 7,  39 => 5,  36 => 4,  11 => 1,);
    }
}
