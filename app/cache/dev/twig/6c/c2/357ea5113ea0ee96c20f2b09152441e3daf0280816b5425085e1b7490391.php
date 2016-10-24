<?php

/* ProjetDarnaBundle:Logement:afficherLogement.html.twig */
class __TwigTemplate_6cc2357ea5113ea0ee96c20f2b09152441e3daf0280816b5425085e1b7490391 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "     <center><h1><font color=\"#337AB7\"> Liste des Logements </font></h1></center><br>
     <table cellspacing=6 width=100%> <tr>
             <td><div align=\"left\" >    <a href=\"  ";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ajouter_Logement");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter un logement\"/></a>
     </div></td>
     
    <td> <div align=\"right\">           <a href=\"  ";
        // line 11
        echo $this->env->getExtension('routing')->getPath("rechercher_Logement");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher un logement\"/></a>
    </div></td>
</tr></table>
    <center>  
    <table class=\"table table-hover\">
            <tr>
                <td> Déscription :</td> 
                <td> Date  </td>
                <td> Région </td>
                <td> Prix </td>
                <td> Surface </td>
                <td> Engagement </td>
                <td> Nombre de chambres</td>
                <td> Surface couverte</td>
                <td> Image</td>
                 <td> <font color=\"red\">Supprimer</font></td>
                <td><font color=\"green\"> Modifier</font></td>
               
            </tr>


            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "

                <tr> <td> <font color=\"purple\"> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</font></td>
                    <td> <font color=\"purple\"> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo "</font></td>
                    <td> <font color=\"purple\"> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo "</font></td>
                     <td><font color=\"purple\"> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrchambre", array()), "html", null, true);
            echo "</font></td>
                    <td><font color=\"purple\"> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surfacecouverte", array()), "html", null, true);
            echo "</font></td>
                    
          
 <td><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></td>

          <td><font color=\"purple\"> <a  href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_Logement", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/></a></font></td>
         <td><font color=\"purple\"> <a  href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_Logement", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"/></a></font></td>
         <td>                  <a onclick=\"window.open('../../web/facebook-php-sdk-master/src/envoyer.php?message=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "&description=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "&region=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "&prix=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "&type=l','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partager.png"), "html", null, true);
            echo "\" /></a></td>

         
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </table>  ";
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo " </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Logement:afficherLogement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 54,  132 => 49,  126 => 48,  120 => 47,  115 => 45,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 33,  73 => 32,  49 => 11,  43 => 8,  39 => 6,  36 => 5,  11 => 2,);
    }
}
