<?php

/* ProjetDarnaBundle:Projet:ModifierRec.html.twig */
class __TwigTemplate_9576b7673728547a42d75b11accd79d64270cf98a6f5b0ffde8d84d9334c2e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout1.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(4);

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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "


   

                    
                    <center>
                                   
<div class=\"col-sm-7\">
    <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Modifier et Ajouter des Remarques</h3>
                            </div>        
                <form method=\"POST\" >
               
                    <br >
               La question : ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
               <br>
                        Remarque : ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reponse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                       

                        <br>
                       
                        
                        Identifiant du client : ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                         
                        
<br><br><center>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Modifier", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "</center>
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "   



                     
</form>
                <!-- /.row -->
</div>
            ";
        // line 43
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "    
</div> 
                <!-- /.row -->
                
                    </center>
               
               
          
        <!-- /#page-wrapper -->

    
    <!-- /#wrapper -->

    <!-- jQuery -->

 


";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:ModifierRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  81 => 35,  77 => 34,  71 => 31,  62 => 25,  57 => 23,  39 => 7,  36 => 6,  11 => 4,);
    }
}
