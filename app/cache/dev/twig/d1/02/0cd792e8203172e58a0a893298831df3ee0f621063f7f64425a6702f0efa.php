<?php

/* ProjetDarnaBundle:Facture:afficherFacture.html.twig */
class __TwigTemplate_d1020cd792e8203172e58a0a893298831df3ee0f621063f7f64425a6702f0efa extends Twig_Template
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
        echo "<center><h1><font color=\"#337AB7\"> Liste des Factures </font></h1></center><br>
<div >    
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Ajouter_Facture");
        echo "\">
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter Facture\"/></a>
     </div>
    <br>
    <center>  
        <table class=\"table table-hover\">
            <tr>  
                <td> <center> <h4><font color=\"#337AB7\">Date</font> </h4></center> </td>
                        <td> <center> <h4><font color=\"#337AB7\">Nom Client</font> </h4></center> </td>
                        <td> <center> <h4><font color=\"#337AB7\">Engagement</font> </h4></center> </td>

        <td> <center> <h4><font color=\"#337AB7\">Supprimer Facture</font></h4> </center></td>

<td> <center> <h4><font color=\"#337AB7\">Modifier Facture</font></h4> </center></td>
<td><center> <h4><font color=\"#337AB7\">Exporter PDF</font></h4></center></td>

            </tr>


            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Facture"]) ? $context["Facture"] : $this->getContext($context, "Facture")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "

                <tr> 
                    <td> 
                <center>   <font color=\"#337AB7\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo "</font></center>
                    </td>
                      <td> 
                      <center>  <font color=\"#337AB7\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "idclient", array()), "toString", array(), "method"), "html", null, true);
            echo "</font></center>
                    </td>
                    <td> 
                    <center> <font color=\"#337AB7\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "idoffre", array()), "toString", array(), "method"), "html", null, true);
            echo "</font></center>
                    </td>
                    

                    <td><font color=\"#337AB7\"> <a  href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_Facture", array("idfacture" => $this->getAttribute($context["i"], "idfacture", array()))), "html", null, true);
            echo "\"><center><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/></center></a></font></td>
                    <td><font color=\"#337AB7\"> <a  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Modifier_Facture", array("idfacture" => $this->getAttribute($context["i"], "idfacture", array()))), "html", null, true);
            echo "\"><center><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"/></center></a></font></td>                   
                    <td><font color=\"#337AB7\"> <a  href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Myapp_PDF", array("idfacture" => $this->getAttribute($context["i"], "idfacture", array()))), "html", null, true);
            echo "\"> <center><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pdf.jpg"), "html", null, true);
            echo "\"/></center></a></font></td>                    

                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </table>
        
    </center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
             ";
        // line 58
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "     
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Facture:afficherFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 58,  118 => 47,  106 => 43,  100 => 42,  94 => 41,  87 => 37,  81 => 34,  75 => 31,  69 => 27,  65 => 26,  43 => 7,  39 => 5,  36 => 4,  11 => 1,);
    }
}
