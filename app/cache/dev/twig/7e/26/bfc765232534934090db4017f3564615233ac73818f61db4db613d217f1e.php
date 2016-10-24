<?php

/* ProjetDarnaBundle:Terrain:rechercherTerrain.html.twig */
class __TwigTemplate_7e26bfc765232534934090db4017f3564615233ac73818f61db4db613d217f1e extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
     <center><h1><font color=\"#337AB7\"> Rechercher des Terrains </font></h1></center><br>
        <form method=\"POST\">
Vocation";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "vocation", array()), 'widget');
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
    </form>
<table class=\"table table-hover\">   
    <tr>
        
        <td><font color=\"green\"> Description</font> </td>
        <td><font color=\"green\"> Date </font> </td>
        <td> <font color=\"green\">Région</font>  </td>
        <td> <font color=\"green\">Prix </font> </td>
        <td><font color=\"green\"> Surface </font> </td>
        <td> <font color=\"green\">Engagement</font>  </td>
        <td> <font color=\"green\">Vocation</font> </td>
         <td> <font color=\"green\">Image</font> </td>
    </tr>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "        <tr>
            
            <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "vocation", array()), "html", null, true);
            echo " </td>
                  <td><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></td>

             </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>  ";
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Terrain:rechercherTerrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 23,  67 => 22,  50 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 2,);
    }
}
