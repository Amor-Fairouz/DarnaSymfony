<?php

/* ProjetDarnaBundle:Logement:rechercherLogement.html.twig */
class __TwigTemplate_1721c422dadf824b50d71ae710bd7d30508b4a27901517473f228fe4fe670735 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    
     <center><h1><font color=\"#337AB7\"> Rechercher des Logements </font></h1></center><br>
     
        <form method=\"POST\">
Nombre de chambre";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrchambre", array()), 'widget');
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
    </form>
     
<br><br>
    <table class=\"table table-hover\">
    <tr>
        
        <td> <font color=\"green\">Description</font> </td>
        <td> <font color=\"green\">Date </font> </td>
        <td><font color=\"green\"> Région </font> </td>
        <td><font color=\"green\"> Prix </font> </td>
        <td><font color=\"green\"> Surface </font> </td>
        <td><font color=\"green\"> Engagement </font> </td>
        <td><font color=\"green\"> Nombre de chambres</font> </td>
        <td> <font color=\"green\">Surface couverte</font> </td>
        <td> <font color=\"green\">Image</font> </td>
    </tr>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "        <tr>
            
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrchambre", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surfacecouverte", array()), "html", null, true);
            echo " </td>
      <td><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></td>

             </tr>
        
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "   
</table>
     <br><br><br><br><br><br><br><br><br>  ";
        // line 44
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Logement:rechercherLogement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  123 => 42,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 26,  71 => 25,  51 => 8,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
