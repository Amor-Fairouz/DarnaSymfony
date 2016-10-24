<?php

/* ProjetDarnaBundle:Entreprise:rechercherEntreprise.html.twig */
class __TwigTemplate_1ea47d44f5a572f58a611af518b01260d76e7b8fd8c0e1ee81f95aa6cd370f54 extends Twig_Template
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

      
    <center><h1><font color=\"#337AB7\"> Rechercher des Entreprises </font></h1></center><br>
    <form method=\"POST\">
    Nombre d'étage ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "nbrEtage", array()), 'widget');
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
    </form>
    <table class=\"table table-hover\">
    <tr>
        
        <td><font color=\"green\"> Description</font> </td>
        <td> <font color=\"green\">Date</font> </td>
        <td><font color=\"green\"> Région </font></td>
        <td><font color=\"green\"> Prix</font> </td>
        <td> <font color=\"green\">Surface </font></td>
        <td> <font color=\"green\">Engagement</font> </td>
        <td> <font color=\"green\">Surface couverte</font></td>
        <td> <font color=\"green\">Nombre d'étage</font></td>
        <td> <font color=\"green\">Image</font></td>
    </tr>
    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "        <tr>
            
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "date", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "region", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surface", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "engagement", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "surfacecouverte", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrEtage", array()), "html", null, true);
            echo " </td>
      <td><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></td>
             </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</table>
      ";
        // line 39
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Entreprise:rechercherEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  119 => 38,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 25,  70 => 24,  52 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
