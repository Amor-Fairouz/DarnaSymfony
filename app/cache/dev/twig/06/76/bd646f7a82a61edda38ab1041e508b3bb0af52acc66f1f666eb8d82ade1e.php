<?php

/* ProjetDarnaBundle:Entreprise:afficherEntrepriseFront.html.twig */
class __TwigTemplate_0676bd646f7a82a61edda38ab1041e508b3bb0af52acc66f1f666eb8d82ade1e extends Twig_Template
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
        
       <table border=\"0\">

            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "                <div class=\"grid_4 preffix_1\">
                 <h3 class=\"head__1\">Nos Logements</h3>
                 <blockquote class=\"bq_1\">
       <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/>
          <div class=\"extra_wrapper\">
              <div class=\"bq_title\"><font color=\"red\" >Profitez</font> </div>
          </div>
          <div class=\"clear\"></div>
                <div align=\"left\">  <font color=\"blue\" > ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo "</font></div><br>
                <font color=\"purple\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</font>
                <br> 
                   se trouve à  <font color=\"purple\"> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "</font>
                    <br> 
                  coute  <font color=\"purple\"> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "</font> Dinars
                   <br> 
                 sa surface est :  <font color=\"purple\"> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo "</font> m²
                  <br> 
                   engagé par  <font color=\"purple\"> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo "</font>
                    <br> 
                   possede une surface couverte de  <font color=\"purple\"> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surfacecouverte", array()), "html", null, true);
            echo "</font>m²
                    <br>
                  et contient  <font color=\"purple\"> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrEtage", array()), "html", null, true);
            echo "</font> étages
                  <br>
                  
                  <a onclick=\"window.open('../../web/facebook-php-sdk-master/src/envoyer.php?message=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "&description=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "&region=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "&prix=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "&type=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", array()), "html", null, true);
            echo "','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/partager.png"), "html", null, true);
            echo "\" /></a>
                  <br>
          <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjoutRendezVous", array("idOffre" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"btn\">Reservez un rendez-vous</a>
          </tr>
             </blockquote>
      </div>
            </table>   
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </table>  </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Entreprise:afficherEntrepriseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  117 => 36,  102 => 34,  96 => 31,  91 => 29,  86 => 27,  81 => 25,  76 => 23,  71 => 21,  66 => 19,  62 => 18,  54 => 13,  49 => 10,  45 => 9,  39 => 5,  36 => 4,  11 => 1,);
    }
}
