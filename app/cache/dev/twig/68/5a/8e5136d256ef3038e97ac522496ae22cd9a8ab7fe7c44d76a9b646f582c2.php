<?php

/* ProjetDarnaBundle:Offre:afficherOffre.html.twig */
class __TwigTemplate_685a8e5136d256ef3038e97ac522496ae22cd9a8ab7fe7c44d76a9b646f582c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout.html.twig");
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
        return "ProjetDarnaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <center>  
        
       <table border=\"0\">

            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "               ";
            if (($this->getAttribute($context["i"], "type", array()) == "e")) {
                echo " 
                <div class=\"grid_4 preffix_1\">
                 <h3 class=\"head__1\">Nos Entreprise</h3>
                 <blockquote class=\"bq_1\">
       <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
                echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/>
          <div class=\"extra_wrapper\">
              <div class=\"bq_title\"><font color=\"red\" >Profitez</font> </div>
          </div>
          <div class=\"clear\"></div>
          
                <div align=\"left\">  <font color=\"blue\" > ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
                echo "</font></div><br>
                
                <font color=\"purple\"> ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
                echo "</font>
                <br> 
                     
                   se trouve à  <font color=\"purple\"> ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
                echo "</font>
                    <br> 
                  coute  <font color=\"purple\"> ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
                echo "</font> Dinars
                   <br> 
                 sa surface est :  <font color=\"purple\"> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
                echo "</font> m²
                  <br> 
                   engagé par  <font color=\"purple\"> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
                echo "</font>
                    <br> 
                   possede une surface couverte de  <font color=\"purple\"> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surfacecouverte", array()), "html", null, true);
                echo "</font>m²
                    <br>
                  et contient  <font color=\"purple\"> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrEtage", array()), "html", null, true);
                echo "</font> étages
                  <br>
                    <br>
                       <br> 
                  
                 
                  
          <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjoutRendezVous", array("idOffre" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" class=\"btn\">   
   Reservez cette offre</a>
          </tr>
             </blockquote>
      </div>
                  
                  
                  
            ";
            } elseif (($this->getAttribute(            // line 57
$context["i"], "type", array()) == "t")) {
                echo "      
                  
                       <div class=\"grid_4 preffix_1\">
                 <h3 class=\"head__1\">Nos Terrain</h3>
                 <blockquote class=\"bq_1\">
       <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
                echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/>
          <div class=\"extra_wrapper\">
              <div class=\"bq_title\"><font color=\"red\" >Profitez</font> </div>
          </div>
          <div class=\"clear\"></div>
          
                <div align=\"left\">  <font color=\"blue\" > ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
                echo "</font></div><br>
                
                <font color=\"purple\"> ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
                echo "</font>
                <br> 
                     
                   se trouve à  <font color=\"purple\"> ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
                echo "</font>
                    <br> 
                  coute  <font color=\"purple\"> ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
                echo "</font> Dinars
                   <br> 
                 sa surface est :  <font color=\"purple\"> ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
                echo "</font> m²
                  <br> 
                   engagé par  <font color=\"purple\"> ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
                echo "</font>
                    <br> 
                  
                    <br>
                       <br> 
                  
                  sa vocation  <font color=\"purple\"> ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "vocation", array()), "html", null, true);
                echo "</font> 
                  <br>
                 
                  
                  
  <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjoutRendezVous", array("idOffre" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" class=\"btn\">   
   Reservez cette offre</a>          </tr>
             </blockquote>
      </div>
                  
              
       ";
            } elseif (($this->getAttribute(            // line 96
$context["i"], "type", array()) == "l")) {
                echo "            
            
                              <div class=\"grid_4 preffix_1\">
                 <h3 class=\"head__1\">Nos Logements</h3>
                 <blockquote class=\"bq_1\">
       <img src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
                echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/>
          <div class=\"extra_wrapper\">
              <div class=\"bq_title\"><font color=\"red\" >Profitez</font> </div>
          </div>
          <div class=\"clear\"></div>
          
                <div align=\"left\">  <font color=\"blue\" > ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
                echo "</font></div><br>
                
                <font color=\"purple\"> ";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
                echo "</font>
                <br> 
                     
                   se trouve à  <font color=\"purple\"> ";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
                echo "</font>
                    <br> 
                  coute  <font color=\"purple\"> ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
                echo "</font> Dinars
                   <br> 
                 sa surface est :  <font color=\"purple\"> ";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
                echo "</font> m²
                  <br> 
                   engagé par  <font color=\"purple\"> ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
                echo "</font>
                    <br> 
                   possede une surface couverte de  <font color=\"purple\"> ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surfacecouverte", array()), "html", null, true);
                echo "</font>m²
                    <br>
                 
                    <br>
                       <br> 
                  
                 
                  et contient  <font color=\"purple\"> ";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrchambre", array()), "html", null, true);
                echo "</font> chambres
                  <br>
  <a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjoutRendezVous", array("idOffre" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" class=\"btn\">   
   Reservez cette offre</a>          </tr>
             </blockquote>
      </div>
               
       ";
            }
            // line 134
            echo "           
                
            </table>   
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        </table>  </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Offre:afficherOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 138,  264 => 134,  255 => 129,  250 => 127,  240 => 120,  235 => 118,  230 => 116,  225 => 114,  220 => 112,  214 => 109,  209 => 107,  200 => 101,  192 => 96,  183 => 90,  175 => 85,  166 => 79,  161 => 77,  156 => 75,  151 => 73,  145 => 70,  140 => 68,  131 => 62,  123 => 57,  112 => 49,  102 => 42,  97 => 40,  92 => 38,  87 => 36,  82 => 34,  77 => 32,  71 => 29,  66 => 27,  57 => 21,  49 => 17,  45 => 16,  39 => 12,  36 => 11,  11 => 2,);
    }
}
