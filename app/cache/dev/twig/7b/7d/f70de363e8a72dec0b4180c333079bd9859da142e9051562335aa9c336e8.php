<?php

/* ProjetDarnaBundle:Terrain:afficherTerrainFront.html.twig */
class __TwigTemplate_7b7df70de363e8a72dec0b4180c333079bd9859da142e9051562335aa9c336e8 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <center>  
        
       <table border=\"0\">

            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "                
                <div class=\"grid_4 preffix_1\">
                 <h3 class=\"head__1\">Nos Terrains</h3>
                 <blockquote class=\"bq_1\">
       <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/>
          <div class=\"extra_wrapper\">
              <div class=\"bq_title\"><font color=\"red\" >Profitez</font> </div>
          </div>
          <div class=\"clear\"></div>
          
                <div align=\"left\">  <font color=\"blue\" > ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo "</font></div><br>
                
                <font color=\"purple\"> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</font>
                <br> 
                     
                   se trouve à  <font color=\"purple\"> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "</font>
                    <br> 
                  coute  <font color=\"purple\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "</font> Dinars
                   <br> 
                 sa surface est :  <font color=\"purple\"> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo "</font> m²
                  <br> 
                   engagé par  <font color=\"purple\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo "</font>
                    <br> 
                  
                  sa vocation  <font color=\"purple\"> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "vocation", array()), "html", null, true);
            echo "</font> 
                  <br>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AjoutRendezVous", array("idOffre" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"btn\">   
   Reservez cette offre</a>
               <br><br>
           <a onclick=\"window.open('../../web/facebook-php-sdk-master/src/envoyer.php?message=";
            // line 40
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
             </blockquote>
      </div>
            </table>   
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </table>  </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Terrain:afficherTerrainFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  107 => 40,  101 => 37,  96 => 35,  90 => 32,  85 => 30,  80 => 28,  75 => 26,  69 => 23,  64 => 21,  55 => 15,  49 => 11,  45 => 10,  39 => 6,  36 => 5,  11 => 2,);
    }
}
