<?php

/* ProjetDarnaBundle:Default:Accueil.html.twig */
class __TwigTemplate_2d3239f215d89c25de2b2425c1a5137fc616b8ad54e200cc6797c72389dcfeda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\">
<link rel=\"shortcuon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tmStickUp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.shuffle-images.js"), "html", null, true);
        echo "\"></script>
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
            <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/connect.png"), "html", null, true);
        echo "\">            </a>
          </h1>
            
               
             <div class=\"navigation \">
            <nav>
              <ul class=\"sf-menu\">
               <li class=\"current\"><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
               <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Nos offres</a></li>
               <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">A propos</a></li>
                              <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Alerte</a></li>

               <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Contacts</a></li>
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
<section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - August11, 2014!</div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"grid_12\">
        <h2 class=\"ta__center\">Bienvenue dans notre Site </h2>
        <div class=\"shuffle-group\">
          <div class=\"row\">
            <div class=\"grid_7\">
              <div data-si-mousemove-trigger=\"100\"  class=\"shuffle-me offset__1\">
                <div class=\"images\">
                <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
              </div>
            </div>
            <div class=\"grid_4\">
              <div data-si-mousemove-trigger=\"100\" class=\"shuffle-me\">
                <div class=\"images\">
                  <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                      <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m9.jpg"), "html", null, true);
        echo "\" alt=\"\">


                 
                </div>
              </div>
              <div data-si-mousemove-trigger=\"100\" class=\"shuffle-me offset__1\">
                <div class=\"images\">
                  <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m5.jpg"), "html", null, true);
        echo "\" alt=\"\">

                </div>
              </div>
            </div>
            <div class=\"clear\"></div>
            <div class=\"grid_4\">
              <div data-si-mousemove-trigger=\"100\" class=\"shuffle-me\">
                <div class=\"images\">
                  <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  
                </div>
              </div>
              <div data-si-mousemove-trigger=\"100\" class=\"shuffle-me\">
                <div class=\"images\">
                  <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                 <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m1.jpg"), "html", null, true);
        echo "\" alt=\"\">

                </div>
              </div>
            
              <div data-si-mousemove-trigger=\"100\"  class=\"shuffle-me\">
                <div class=\"images\">
                                      <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m9.jpg"), "html", null, true);
        echo "\" alt=\"\">

                  <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/m2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
              </div>
            </div>
            </div>
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
        <div class=\"footer_phone\">+216 20 58 57 71 </div>
        <a href=\"#\" class=\"footer_mail\">darna@esprit.org</a>
        <div class=\"sub-copy\">Website designed by <a href=\"#\">Leaders Team</a></div>
        
      </div>
    </div>
      <br>";
        // line 198
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
  </div>  
</footer>
<a href=\"#\" id=\"toTop\" class=\"fa fa-chevron-up\"></a>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Default:Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 198,  311 => 171,  307 => 170,  302 => 168,  292 => 161,  288 => 160,  284 => 159,  275 => 153,  271 => 152,  267 => 151,  255 => 142,  251 => 141,  247 => 140,  236 => 132,  232 => 131,  228 => 130,  218 => 123,  214 => 122,  210 => 121,  179 => 93,  174 => 91,  170 => 90,  166 => 89,  162 => 88,  152 => 81,  148 => 80,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  54 => 19,  48 => 16,  42 => 13,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
