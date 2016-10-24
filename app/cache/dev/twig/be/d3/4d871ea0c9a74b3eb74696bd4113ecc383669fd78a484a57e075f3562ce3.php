<?php

/* ProjetDarnaBundle:gerant:ajouterGerant.html.twig */
class __TwigTemplate_bed34d871ea0c9a74b3eb74696bd4113ecc383669fd78a484a57e075f3562ce3 extends Twig_Template
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
        echo " Ajouter Gérant";
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
        <tr> <td>Agence : </td> <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idagence", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td> </tr>

     <tr>  <td> <br><br>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</td> </tr>
     ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " <tr>  <td> <br><br><br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</td> </tr>
     
         
    </table>
</form>  ";
        // line 20
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:gerant:ajouterGerant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  84 => 16,  80 => 15,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
