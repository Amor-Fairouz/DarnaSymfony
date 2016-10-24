<?php

/* ProjetDarnaBundle:Facture:template.html.twig */
class __TwigTemplate_ca36ddb3d7b52185f347b234bd839a62448e41b247bfc5396f840a3e0bfd89e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <page>
    <style type=\"text/css\">
        #hello{
            color: #002549;
            font-family: Helvetica, sans-serif;
            text-align:center;
            font-size: 40px;
        }
    </style>
    <img>
    <div id=\"hello\">

        <div style=\"position:absolute;top:0;left:0;z-index:1;opacity:0.6;\">
            <h1> Votre Facture </h1>
              
            
    <table border=\"1\" color=\"#337AB7\">
        
        <tr> 
                    <td> 
                        <h5>Date de la facture</h5>
                    </td>
                      <td> 
                          <h5>Nom client</h5>
                    </td>
                    <td> 
                        <h5> L'engagement de votre offre</h5>
                    </td>
                </tr>
                <tr> 
                    <td> 
                <font color=\"#337AB7\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</font>
                    </td>
                      <td> 
                    <font color=\"#337AB7\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")), "idclient", array()), "toString", array(), "method"), "html", null, true);
        echo "</font>
                    </td>
                    <td> 
             <font color=\"#337AB7\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")), "idoffre", array()), "toString", array(), "method"), "html", null, true);
        echo "</font>
                    </td>
                </tr>
          </table>
             
                


  
        </div>

    </div>
</page>
    
              

";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Facture:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 39,  59 => 36,  53 => 33,  19 => 1,);
    }
}
