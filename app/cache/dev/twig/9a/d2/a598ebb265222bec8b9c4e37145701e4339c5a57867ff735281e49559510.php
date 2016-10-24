<?php

/* ProjetDarnaBundle:client:listerClient.html.twig */
class __TwigTemplate_9ad2a598ebb265222bec8b9c4e37145701e4339c5a57867ff735281e49559510 extends Twig_Template
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
        echo "  Client";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
    
    
     <center><h1><font color=\"#337AB7\"> Liste des Clients </font></h1></center><br>
             <a href=\"  ";
        // line 9
        echo $this->env->getExtension('routing')->getPath("projet_ajouter_client");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter un client\"/></a>
             <br>
        <table class=\"table table-hover\">
    <tr>
        
        <td><b> nom </b></td>
        <td><b> prenom </b></td>
        <td><b> Date de naissance </b></td>
        <td><b> telephone</b> </td>
     
        <td><b> Email</b> </td>
        <td><b> Mot de Passe</b> </td>
       <td><b> Adresse</b> </td>
        <td><b><font color=\"red\"> Supprimer</font></b> </td>
        <td><b><font color=\"green\"> Modifier</font></b> </td>
        
        
    </tr>
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 28
            echo "        <tr>
            
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " </td>
              <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "datenaiss", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "tel", array()), "html", null, true);
            echo " </td>
        
                <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "email", array()), "html", null, true);
            echo " </td>
                 <td> ";
            // line 36
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
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "adresse", array()), "html", null, true);
            echo " </td>
                  <td> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Supprimer_client", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\"/> </a></td>
            <td> <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Modifier_client", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"/> </a></td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>
      ";
        // line 42
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    
    
       ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:client:listerClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  123 => 39,  117 => 38,  113 => 37,  102 => 36,  98 => 35,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 28,  73 => 27,  52 => 9,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
