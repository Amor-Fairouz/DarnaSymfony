<?php

/* ProjetDarnaBundle:Default:index.html.twig */
class __TwigTemplate_a105006816728f7ea9307843ea4d91cb4192aef0631cdd053597684d58aa7ab7 extends Twig_Template
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
        echo " Espace Administrateur";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div align=\"center\"><h1>Espace Administrateur</h1></div>
    
     ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
