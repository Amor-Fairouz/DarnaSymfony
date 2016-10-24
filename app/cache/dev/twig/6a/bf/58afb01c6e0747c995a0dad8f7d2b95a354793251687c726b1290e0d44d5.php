<?php

/* ProjetDarnaBundle:Alerte:afficherAlerte.html.twig */
class __TwigTemplate_6abf58afb01c6e0747c995a0dad8f7d2b95a354793251687c726b1290e0d44d5 extends Twig_Template
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
        echo "<center><h1><font color=\"#337AB7\"> Liste des alertes </font></h1></center><br>

    <center>  
        <table class=\"table table-hover\">
            <tr>  
              <td> PrixMin </td> 
              <td>PrixMax</td>
              <td>Region</td>
               <td>Engagement</td>
               <td>Type de bien</td>
                <td>Surface</td>
                <td>Supprimer</td>
            </tr>

";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Alerte"]) ? $context["Alerte"] : $this->getContext($context, "Alerte")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "                <tr> 
                   <td> 
                    <font color=\"#337AB7\"> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prixmin", array()), "html", null, true);
            echo "</font>    
                   </td>
                   <td> <font color=\"v\"> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prixmax", array()), "html", null, true);
            echo "</font></td>
                   <td> <font color=\"v\"> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo "</font></td>
                   <td>      <font color=\"#337AB7\"\"> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo "</font></td>

                   <td> <font color=\"v\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typedebien", array()), "html", null, true);
            echo "</font></td>
                   <td>   <font color=\"#337AB7\"> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo "</font></td>

   <td><font color=\"purple\"> <a  href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_Alerte", array("id" => $this->getAttribute(            // line 32
$context["i"], "id", array()))), "html", null, true);
            echo "\"><img type=\"submit\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/></a></font></td>
               
   
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </table> 
        ";
        // line 38
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
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
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Alerte:afficherAlerte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  104 => 37,  91 => 32,  90 => 31,  85 => 29,  81 => 28,  76 => 26,  72 => 25,  68 => 24,  63 => 22,  59 => 20,  55 => 19,  39 => 5,  36 => 4,  11 => 1,);
    }
}
