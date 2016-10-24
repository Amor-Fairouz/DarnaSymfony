<?php

/* ProjetDarnaBundle:gerant:listerGerant.html.twig */
class __TwigTemplate_f9a307880aa4c43650725f7bed3a5dbceac6bc837af016794aab95208f3c963e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout9.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 2
    public function block_ptitre($context, array $blocks = array())
    {
        echo " Gérant ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
    
    
     <center><h1><font color=\"#337AB7\"> Liste des Gérants </font></h1></center><br>
             <a href=\"  ";
        // line 8
        echo $this->env->getExtension('routing')->getPath("projet_ajouter_gerant");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter un gérant\"/></a>
             <br>
        <table class=\"table table-hover\">
    <tr>
        
        <td><b> nom </b></td>
        <td><b> prenom </b></td>
        <td><b> Date de naissance </b></td>
        <td><b> telephone</b> </td>
     
        <td><b> Email</b> </td>
        <td><b> Mot de Passe</b> </td>
       <td><b> Agence</b> </td>
        <td><b><font color=\"red\"> Supprimer</font></b> </td>
        <td><b><font color=\"green\"> Modifier</font></b> </td>
        
        
    </tr>
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 27
            echo "        <tr>
            
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " </td>
              <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "datenaiss", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "tel", array()), "html", null, true);
            echo " </td>
        
                <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "email", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, $this->getAttribute($context["personne"], "password", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "*";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </td>
                  <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["personne"], "idagence", array()), "nom", array()), "html", null, true);
            echo " </td>
            <td> <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_gerant", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/> </a></td>
            <td> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Modifier_gerant", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"/> </a></td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
    
      ";
        // line 42
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    
       ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:gerant:listerGerant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  133 => 40,  123 => 38,  117 => 37,  113 => 36,  102 => 35,  98 => 34,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  77 => 27,  73 => 26,  52 => 8,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
