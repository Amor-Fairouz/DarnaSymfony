<?php

/* ProjetDarnaBundle:Alerte:message.html.twig */
class __TwigTemplate_64587ecc6332648ff18867087a4c2ff031f8382c760e82c90025842a14559276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout.html.twig");
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
        return "ProjetDarnaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <center>
        <h4>Votre Alerte a été enregistré avec succées </h4>
        
        
    </center>
        ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Alerte:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 1,);
    }
}
