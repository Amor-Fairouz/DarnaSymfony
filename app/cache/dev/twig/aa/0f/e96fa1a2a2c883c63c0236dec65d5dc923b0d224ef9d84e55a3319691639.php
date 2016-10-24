<?php

/* ProjetDarnaBundle:Terrain:afficherTerrain.html.twig */
class __TwigTemplate_aa0fe96fa1a2a2c883c63c0236dec65d5dc923b0d224ef9d84e55a3319691639 extends Twig_Template
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
    <center><h1><font color=\"#337AB7\"> Liste des Terrains </font></h1></center><br>
    
     <table cellspacing=6 width=100%> <tr>
             <td><div align=\"left\" >    <a href=\"  ";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ajouter_Terrain");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter une terrain\"/></a>
     </div></td>
     
    <td> <div align=\"right\">           <a href=\"  ";
        // line 12
        echo $this->env->getExtension('routing')->getPath("rechercher_Terrain");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher une terrain\"/></a>
    </div></td>
</tr></table>
    <br>
    <center>  
        
            <table class=\"table table-hover\">
            <tr>
                
                <td> Déscription :</td> 
                <td> Date  </td>
                <td> Région </td>
                <td> Prix </td>
                <td> Surface </td>
                <td> Engagement </td>
                <td> Vocation</td>
               
                <td> Image</td>
                
                <td> <font color=\"red\">Supprimer</font></td>
                <td><font color=\"green\"> Modifier</font></td>
                
            </tr>


            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "

                <tr> <td> <font color=\"purple\"> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</font></td>
                    <td> <font color=\"purple\"> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo "</font></td>
                    <td> <font color=\"purple\"> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "vocation", array()), "html", null, true);
            echo "</font></td>
                   
  <td><img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></td>
                    
          
          <td><font color=\"purple\"> <a  href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_Terrain", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/></a></font></td>
         <td><font color=\"purple\"> <a  href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_Terrain", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"/></a></font></td>
         <td>                  <a onclick=\"window.open('../../web/facebook-php-sdk-master/src/envoyer.php?message=";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "&description=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "&region=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "&prix=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "&type=t','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partager.png"), "html", null, true);
            echo "\" /></a></td>

         
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </table> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   ";
        // line 60
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "   </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Terrain:afficherTerrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  153 => 58,  134 => 53,  128 => 52,  122 => 51,  116 => 48,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  83 => 38,  79 => 37,  51 => 12,  45 => 9,  39 => 5,  36 => 4,  11 => 1,);
    }
}
