<?php

/* ProjetDarnaBundle:Default:AccueilGerant.html.twig */
class __TwigTemplate_7d50322c4a810b5d5da616f0905a93e114a7daebf80d562817b3406584811dc3 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div align=\"center\"><h1>Espace Gérant</h1></div>
    <center>
        <br> <br>
        <br><br><br>
        <table>
            <td> <tr> Réclamations</tr> <tr> <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ListRec");
        echo "\">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/20.jpg"), "html", null, true);
        echo "\"    /></a></tr> </td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
            <td><tr>Agences</tr>  <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Afficher_agence");
        echo "\">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/21.jpg"), "html", null, true);
        echo "\"    /></a></tr></td>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <td><tr>Transporteurs</tr>  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Afficher_transp");
        echo "\">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/22.jpg"), "html", null, true);
        echo "\"    /></a></tr></td>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            <td><tr>Rendez-Vous</tr>  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ListRendez");
        echo "\">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/23.jpg"), "html", null, true);
        echo "\"    /></a></tr></td>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
            <td><tr>Offres</tr>  <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("afficher_Logement");
        echo "\">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/24.jpg"), "html", null, true);
        echo "\"    /></a></tr></td>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
<td><tr>Factures</tr>  <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("Afficher_Facture");
        echo "\" >   <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/25.jpg"), "html", null, true);
        echo "\"    /></a></tr></td>    
        </table>            
        <br><br><br> <br><br><br> <br><br><br> <br>
        
    </center>                                    
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Default:AccueilGerant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  70 => 16,  64 => 15,  58 => 14,  52 => 13,  46 => 12,  39 => 7,  36 => 6,  11 => 1,);
    }
}
