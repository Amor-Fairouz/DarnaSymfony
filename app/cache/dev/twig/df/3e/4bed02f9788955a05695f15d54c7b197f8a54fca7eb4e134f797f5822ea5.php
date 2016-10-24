<?php

/* ProjetDarnaBundle:Default:home.html.twig */
class __TwigTemplate_df3e4bed02f9788955a05695f15d54c7b197f8a54fca7eb4e134f797f5822ea5 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
    <center>
    
    <form method=\"POST\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'enctype');
        echo ">
 
  <br><br><br><br><br><br><br>
 <div class=\"panel panel-primary\">
               <div class=\"panel-heading\">
                                <h3 >Recherche      Avancée</h3>
                            </div>
     
      <div class=\"panel-body\">
 
      <div >
                       
                            </div>
        <table>
            <tr>
                <td><h3 >Type</h3></td>
                <td></td>
                <td><h3 >Prix minimal</h3></td>
                <td></td>
                <td><h3 >Prix maximal</h3></td>
                <td></td>
                <td><h3 >Région</h3></td>
                <td></td>
                <td><h3 >Engagement</h3> 
                
            </tr>
            <tr>
                <td> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "type", array()), 'widget');
        echo " </td>
                <td><font color=\"white\">__________</font></td>
              <td> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prixMin", array()), 'widget');
        echo "</td>
             <td><font color=\"white\">__________</font></td>
           <td>  ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prixMax", array()), 'widget');
        echo "</td>
           <td><font color=\"white\">__________</font></td>
            <td> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "region", array()), 'widget');
        echo "</td>
        <td><font color=\"white\">__________</font></td>
       <td> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "engagement", array()), 'widget');
        echo "</td>
</tr>
        </table>
      <br>
     ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), 'rest');
        echo "
   
    
      
             
 </div>  </div>
 
 </form>     
       </center>
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  101 => 46,  94 => 42,  89 => 40,  84 => 38,  79 => 36,  74 => 34,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
