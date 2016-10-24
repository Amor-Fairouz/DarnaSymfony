<?php

/* ProjetDarnaBundle:client:modifierClient.html.twig */
class __TwigTemplate_3fce456cf5c27fc35b5b6658142eea43c5d9ae41951a1216ff2787d731f91a3e extends Twig_Template
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
        echo " Modifier Client";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1> modifier un Client </h1>
 <form method=\"POST\">
   <table >
       
        <tr><td> Nom :</td> <td> ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>
  <tr>  <td> Prenom :</td>  <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td></tr>
   <tr>  <td>Date de naisance : </td> <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaiss", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
   <tr> <td>Pays : </td> <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
    <tr> <td>Telephone : </td> <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
    <tr> <td>E-Mail : </td> <td> ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
        <tr> <td>Password : </td> <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>

    <tr> <td>Adresse : </td> <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>

    <tr>  <td> <br><br>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</td> </tr>
     ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
         
    </table>
</form>  ";
        // line 23
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "

";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:client:modifierClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  90 => 20,  86 => 19,  81 => 17,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }
}
