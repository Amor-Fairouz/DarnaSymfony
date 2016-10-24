<?php

/* ProjetDarnaBundle:admin:listerAdmin.html.twig */
class __TwigTemplate_1a2ec9142cba0fc43c101fe71f648883570037f17924b69758741b67ce5a38b8 extends Twig_Template
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
            'content' => array($this, 'block_content'),
            'ptitre' => array($this, 'block_ptitre'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    
    
    ";
        // line 5
        $this->displayBlock('ptitre', $context, $blocks);
        // line 6
        echo "    <center><h1><font color=\"#337AB7\"> Liste des Administrateur </font></h1></center><br>
     <div >    <a href=\"  ";
        // line 7
        echo $this->env->getExtension('routing')->getPath("projet_ajouter_admin");
        echo " \"><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter un administrateur\"/></a>
     </div>
    <br>
        <table class=\"table table-hover\">
    <tr>
        
        <td><b> nom </b></td>
        <td><b> prenom </b></td>
        <td><b> Date de naissance </b></td>
        <td><b> telephone</b> </td>
   
        <td><b> Email</b> </td>
       
        
        
    </tr>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 24
            echo "        <tr>
            
            <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " </td>
              <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "datenaiss", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "tel", array()), "html", null, true);
            echo " </td>
        
                <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "email", array()), "html", null, true);
            echo " </td>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>
    
      ";
        // line 36
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
    
       ";
    }

    // line 5
    public function block_ptitre($context, array $blocks = array())
    {
        echo "  ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:admin:listerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 5,  106 => 36,  102 => 34,  93 => 31,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 24,  68 => 23,  49 => 7,  46 => 6,  44 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
