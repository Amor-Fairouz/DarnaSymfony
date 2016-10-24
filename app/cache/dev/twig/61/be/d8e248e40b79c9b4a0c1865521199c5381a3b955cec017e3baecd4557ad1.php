<?php

/* ProjetDarnaBundle:Graphe:Menu.html.twig */
class __TwigTemplate_61bed8e248e40b79c9b4a0c1865521199c5381a3b955cec017e3baecd4557ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout9.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'ptitre' => array($this, 'block_ptitre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetDarnaBundle::layout9.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_ptitre($context, array $blocks = array())
    {
        echo " Espace Administrateur";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div align=\"center\"><h1>Espace Administrateur</h1></div>
    
    
    

    <center>
        

    
    
    
    <br> <br>
        <br><br><br>
        <table>
            <td> <tr> PieChart</tr> <tr> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("Myapp_Pie");
        echo "\">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pie.png"), "html", null, true);
        echo "\"    /></a></tr> </td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
            <td><tr>Histogramme</tr>  <a href=\"  ";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Myapp_Histogramme");
        echo " \">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/histo.png"), "html", null, true);
        echo "\"    /></a></tr></td>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <td><tr>LineChart</tr>  <a href=\"  ";
        // line 21
        echo $this->env->getExtension('routing')->getPath("Myapp_chartLine");
        echo " \">    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/linepng.png"), "html", null, true);
        echo "\"    /></a></tr></td>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            
        </table>            
        <br><br><br> <br><br><br> <br><br><br> <br>
    
    
    
    
    
    
    
    
    </center>
    <br>
    <br>
    <br>
    ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Graphe:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  68 => 20,  62 => 19,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }
}
