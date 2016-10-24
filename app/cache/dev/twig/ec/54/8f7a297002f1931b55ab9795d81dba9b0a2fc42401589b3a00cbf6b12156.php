<?php

/* ProjetDarnaBundle:Projet:ModifierRendez.html.twig */
class __TwigTemplate_ec548f7a297002f1931b55ab9795d81dba9b0a2fc42401589b3a00cbf6b12156 extends Twig_Template
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
            'rendezActive' => array($this, 'block_rendezActive'),
            'listRendez' => array($this, 'block_listRendez'),
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

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "




    

    <div id=\"wrapper\">

       
         
                
                 
                 
                               
              
            
       

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">
                

               

                <div >
    
     
                 <div >
    
      
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                              
                                <div class=\"col-sm-7\">
    <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Modifier les details des Rendez-vous</h3>
                            </div>        
                <form method=\"POST\">
               
                    <br>
              Le Lieu : ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
               
                        La Date : ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        
                     client : ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>

                        
                 Description de l'offre : ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idOffre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                          
<br><br><center>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Modifier", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "</center>
  ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     
</form>
                <!-- /.row -->
</div>
               
</div> 
                                
                                
                            </div>
                            </div>
                        </div>
                                 
                    </div>   
                   
                <!-- /.row -->
</div>
               
</div> 
                <!-- /.row -->
                
         
               
               
            </div>
                    
                                            
          
                  
                
                    
             
               
          

        ";
        // line 97
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo " 
    

";
    }

    // line 134
    public function block_rendezActive($context, array $blocks = array())
    {
        // line 135
        echo "<li class=\"active\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-desktop\"></i> Rendez-vous</a>
                    </li>

";
    }

    // line 142
    public function block_listRendez($context, array $blocks = array())
    {
        // line 143
        echo "
  
<div >
    
      <center>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Liste des Rendez-vous</h3>
                            </div>
                            <div class=\"panel-body\">
                              
                                <div class=\"col-sm-7\">
    <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Modifier les details des Rendez-vous</h3>
                            </div>        
                <form method=\"POST\">
               
                    <br>
              Le Lieu : ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
               
                        La Date : ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <br>
                        
                    Identifiant du client : ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>

                        
                Identifiant de l'offre : ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idOffre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
                          
<br><br><center>";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Modifier", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "</center>
  ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     
</form>
                <!-- /.row -->
</div>
               
</div> 
                                
                                
                            </div>
                        </div>
                                  </center>
                    </div>
             
              ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:ModifierRendez.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 173,  215 => 172,  210 => 170,  204 => 167,  198 => 164,  193 => 162,  172 => 143,  169 => 142,  161 => 135,  158 => 134,  150 => 97,  112 => 62,  108 => 61,  103 => 59,  97 => 56,  91 => 53,  86 => 51,  41 => 8,  38 => 7,  11 => 4,);
    }
}
