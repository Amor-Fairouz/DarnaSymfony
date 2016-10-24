<?php

/* ProjetMailBundle:Default:formMail.html.twig */
class __TwigTemplate_df8181889eada74aee6ab4af5d4f07ddb055555a322011811fa6265fb4a049de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout1.html.twig");
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
        return "ProjetDarnaBundle::layout1.html.twig";
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

                <!-- /.row -->

                <div >
    
      
                    
               
    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_mail_sendMail", array("mail" => (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")))), "html", null, true);
        echo "\"  method=\"POST\">
       
        
        <br/>
       
            
        Sujet:
        <center> <input type=\"text\" name=\"question\"  class=\"form-control\"/> </center>
        
       
        Email:
        <center> <input   type=\"text\" name=\"email\" value= \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "\" class=\"form-control\" readonly/> </center> <br></br>   
        
        
        Text:
        <center>   <textarea name=\"reponse\" class=\"form-control\"></textarea> <br></br> </center>
      
      
        <center>   <input type=\"submit\" value=\"Envoyer Email\"/> </center>
    
    </form>
                       
</div>

           

";
    }

    public function getTemplateName()
    {
        return "ProjetMailBundle:Default:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  50 => 12,  39 => 3,  36 => 2,  11 => 1,);
    }
}
