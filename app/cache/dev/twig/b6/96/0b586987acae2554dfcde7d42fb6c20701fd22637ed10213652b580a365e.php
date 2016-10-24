<?php

/* ProjetDarnaBundle:admin:ajouterAdmin.html.twig */
class __TwigTemplate_b6960b586987acae2554dfcde7d42fb6c20701fd22637ed10213652b580a365e extends Twig_Template
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
        echo " Ajouter administrateur";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form method=\"POST\">
   <table>
       
        <tr><td> Nom :</td> <td> ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>  </tr>
  <tr>  <td> Prenom :</td>  <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td></tr>
   <tr>  <td>Date de naisance : </td> <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaiss", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
    <tr> <td>Telephone : </td> <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
    <tr> <td>E-Mail : </td> <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>
        <tr> <td>Password : </td> <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>

     <tr>  <td> <br><br>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</td> </tr>
     ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
     
         
    </table>  ";
        // line 18
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
</form>
  ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:admin:ajouterAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
