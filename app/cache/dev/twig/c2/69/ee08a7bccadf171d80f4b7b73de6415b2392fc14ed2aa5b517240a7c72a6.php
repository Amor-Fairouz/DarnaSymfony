<?php

/* ProjetDarnaBundle:Projet:AjoutRendez.html.twig */
class __TwigTemplate_c269ee08a7bccadf171d80f4b7b73de6415b2392fc14ed2aa5b517240a7c72a6 extends Twig_Template
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
    
    <!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Home</title>
<meta charset=\"utf-8\">
<meta name = \"format-detection\" content = \"telephone=no\" />
<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/style.css"), "html", null, true);
        echo "\">


<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css4/bootstrap.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css4/datepicker.css"), "html", null, true);
        echo "\">
<script src=\"js4/bootstrap.min.js\"></script>
<script src=\"js4/bootstrap-datepicker.js\"></script>


<!--=====================
          Content
======================-->
<section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - August11, 2014!</div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"grid_12\">
        <h2 class=\"ta__center\">Fixer un Rendez-vous</h2>
        <div class=\"shuffle-group\">
          <div class=\"row\">
            <div class=\"grid_8\">
              <div data-si-mousemove-trigger=\"100\"  class=\"shuffle-me offset__1\">
                
                
            

 
   <form   method=\"POST\" action=\"\" id=\"contact-form\" >
 
        <div class=\"grid_4\">
                 
        
            Lieu :<br>
         ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form-control")));
        echo "<br><br>
       
         
         <br>Date
         ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "    <br><br>
         
          
            
         
           
        <br><br>Client:
              ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form-control")));
        echo "<br><br>
        
        
        
              <br>Offre:
              ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idOffre", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "comments")));
        echo "<br><br>
            
                
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
         <center>
            <input type=\"submit\" value=\"Ajouter\" class=\"btn\" onclick=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("rechercher_Tous");
        echo "\" >
         </center>
      
                 
                 
                 
                 
       
   
        

                
              </div>
         </form>
            </div>
            </div>
         
            <div class=\"grid_4\">
              <div data-si-mousemove-trigger=\"100\" class=\"shuffle-me\">
                <a href=\"gallery.html\" class=\"info\" target=\"_blank\"></a>
                <div class=\"images\">
                  <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rendez.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/maison1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rendez.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
              </div>
              <div data-si-mousemove-trigger=\"100\" class=\"shuffle-me offset__1\">
                <a href=\"gallery.html\" class=\"info\" target=\"_blank\"></a>
                <div class=\"images\">
                  <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/maison1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rendez.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/maison1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
              </div>
            </div>
            </div>
            <div class=\"clear\"></div>
           
          
            </div>
          </div>
      </div>
    </div>

  <div class=\"sep-1\"></div>
  

</section>
<!--==============================
              footer
=================================-->
<footer id=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"grid_12\"> 
        <h2>Contacts</h2>
        <div class=\"footer_phone\">+1 800 559 6580</div>
        <a href=\"#\" class=\"footer_mail\">info@demolink.org</a>
        <div class=\"sub-copy\">Website designed by <a href=\"http://www.templatemonster.com/\" rel=\"nofollow\">TemplateMonster.com</a></div>
      </div>
    </div>

  </div>  
</footer>
<a href=\"#\" id=\"toTop\" class=\"fa fa-chevron-up\"></a>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:AjoutRendez.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 99,  183 => 98,  179 => 97,  170 => 91,  166 => 90,  162 => 89,  138 => 68,  133 => 66,  127 => 63,  119 => 58,  109 => 51,  102 => 47,  71 => 19,  67 => 18,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
