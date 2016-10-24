<?php

/* ProjetUserBundle::layout5.html.twig */
class __TwigTemplate_50c9938ef58612d4650d6657c9b25da2a233bacee6bc08e62262154cd60703c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'lien' => array($this, 'block_lien'),
            'nom' => array($this, 'block_nom'),
            'lien_logout' => array($this, 'block_lien_logout'),
            'img_logout' => array($this, 'block_img_logout'),
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title> Darna</title>
<meta charset=\"utf-8\">
<meta name = \"format-detection\" content = \"telephone=no\" />
<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\">
<link rel=\"shortcuon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<script src=\"js/jquery.js\"></script>
<script src=\"js/jquery-migrate-1.1.1.js\"></script>
<script src=\"js/jquery.easing.1.3.js\"></script>
<script src=\"js/script.js\"></script> 
<script src=\"js/superfish.js\"></script>
<script src=\"js/jquery.equalheights.js\"></script>
<script src=\"js/jquery.mobilemenu.js\"></script>
<script src=\"js/tmStickUp.js\"></script>
<script src=\"js/jquery.ui.totop.js\"></script>
<script src=\"js/jquery.shuffle-images.js\"></script>
<script>
 \$(window).load(function(){
  \$().UItoTop({ easingType: 'easeOutQuart' });
  \$('#stuck_container').tmStickUp({});  
 }); 

 \$(document).ready(function(){
       \$(\".shuffle-me\").shuffleImages({
         target: \".images > img\"
       });
    });

</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
     <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<link rel=\"stylesheet\" media=\"screen\" href=\"css/ie.css\">
<![endif]-->
</head>

<body class=\"page1\" id=\"top\">
<!--==============================
              header
=================================-->
<header>
  <div class=\"header_top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"grid_12\">
            <h1><a href=\"#\"> <font color=\"white\">  Darna</font>  </a></h1>
         
          <font color=\"white\">  Votre confort c'est notre intérêt </font>
        </div>
      </div>
    </div>
  </div>
  <section id=\"stuck_container\">
  <!--==============================
              Stuck menu
  =================================-->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"grid_12 \">
          <h1 class=\"logo\">
           
          </h1>
          <div class=\"navigation \">
            <nav>
              <ul class=\"sf-menu\">
               <li class=\"current\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
               <li><a href=\"#\">Nos offres</a></li>
               <li><a href=\"#\">A propos</a></li>
                              <li><a href=\"#\">Transporteur</a></li>

               <li><a href=\"#\">Contacts</a></li>
             </ul>
            </nav>
              
            <div class=\"clear\"></div>
          
          </div>       
         <div class=\"clear\"></div>  
        </div>
     </div> 
    </div> 
  </section>
    
</header>
<!--=====================
          Content
======================-->




<div class=\"container\">
      
        
          
        
           
              
           

             
        
      
     
    </div> 



<section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - August11, 2014!</div>
    
    
            <div align=\"right\" class=\"navigation\"><font color=\"red\" size=\"6\" FACE=\"Courier, MS Courier New, Prestige, monospace\"><a href=\"";
        // line 121
        $this->displayBlock('lien', $context, $blocks);
        echo "\">";
        $this->displayBlock('nom', $context, $blocks);
        echo "</a></font>
            
                <a href=\"";
        // line 123
        $this->displayBlock('lien_logout', $context, $blocks);
        echo "\">  <img src=\"";
        $this->displayBlock('img_logout', $context, $blocks);
        echo "\" alt=\"\" /></a>
            </div>
    
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"grid_12\">
        <h2 class=\"ta__center\">";
        // line 129
        $this->displayBlock('titre', $context, $blocks);
        echo "</h2>
        <div class=\"shuffle-group\">
         
            
        
              
            <center>    ";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "            </center>
                
            
          
           
         
           
            
           
          </div>
      </div>
    </div>
  </div>
  <div class=\"sep-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"grid_8\">
        <div class=\"clear\"></div>
        
      </div>
      <div class=\"grid_4\">
        <h3>Follow me</h3>
        <ul class=\"socials\">
          <li>
            <div class=\"fa fa-facebook\"></div>
            <a href=\"#\">";
        // line 161
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("googleplus" => false, "pinterest" => false, "linkedin" => false, "twitter" => false));
        echo "</a>
          </li>
          <li>
            <div class=\"fa fa-twitter\"></div>
            <a href=\"#\"> ";
        // line 165
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("pinterest" => false, "facebook" => false, "linkedin" => false, "googleplus" => false));
        echo "</a>
          </li>
          <li>
            <div class=\"fa fa-google-plus\"></div>
            <a href=\"#\">";
        // line 169
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("googleplus" => false, "facebook" => false, "linkedin" => false, "twitter" => false));
        echo "</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
  <div class=\"sep-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"grid_4 preffix_1\">
        <blockquote class=\"bq_1\">
        </blockquote>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id=\"footer\">
    <div> </div>
    <br>
    <div> </div>
   <br>
    <div> </div>
    
</footer>
<a href=\"#\" id=\"toTop\" class=\"fa fa-chevron-up\"></a>
</body>
</html>

";
    }

    // line 121
    public function block_lien($context, array $blocks = array())
    {
    }

    public function block_nom($context, array $blocks = array())
    {
    }

    // line 123
    public function block_lien_logout($context, array $blocks = array())
    {
    }

    public function block_img_logout($context, array $blocks = array())
    {
    }

    // line 129
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ProjetUserBundle::layout5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 135,  285 => 129,  276 => 123,  267 => 121,  229 => 169,  222 => 165,  215 => 161,  188 => 136,  186 => 135,  177 => 129,  166 => 123,  159 => 121,  110 => 75,  41 => 9,  37 => 8,  33 => 7,  25 => 1,);
    }
}
