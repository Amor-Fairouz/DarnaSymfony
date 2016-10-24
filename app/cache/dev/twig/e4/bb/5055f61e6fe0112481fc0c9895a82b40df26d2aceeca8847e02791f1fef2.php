<?php

/* ProjetDarnaBundle::layout.html.twig */
class __TwigTemplate_e4bb5055f61e6fe0112481fc0c9895a82b40df26d2aceeca8847e02791f1fef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'lien' => array($this, 'block_lien'),
            'nom' => array($this, 'block_nom'),
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
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\">
<link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tmStickUp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
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
            <a href=\"index.html\">
              <table>
                    <tr>    
                        <td align=\"left\"><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"> <font color='white' size=\"7\"><strong>    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</strong> </a>      </font></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td align=\"center\"><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/exit.png"), "html", null, true);
        echo "\" alt=\"\" /></a></td>
                </tr>
            </table>
            </a>
          </h1>
          <div class=\"navigation \">
            <nav>
              <ul class=\"sf-menu\">
               <li class=\"current\"><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("rechercher_Tous");
        echo "\">Home</a></li>
               <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("afficher_OffreF");
        echo "\">Nos Offres</a></li>
               <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("mytest_homepage");
        echo "\">A propos</a></li>
               <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("Ajouter_Alerte");
        echo "\">Alerte</a></li>

               <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("AjoutReclamation");
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
    <div align=\"right\" class=\"navigation\"><font color=\"red\" size=\"6\" FACE=\"Courier, MS Courier New, Prestige, monospace\"><a href=\"";
        // line 117
        $this->displayBlock('lien', $context, $blocks);
        echo "\">";
        $this->displayBlock('nom', $context, $blocks);
        echo "</a></font>
                <br>  
            </div>
  <div class=\"container\">
   <center>    ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 122
        echo "            </center>
    </div>
  </div>
  <div class=\"sep-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
     
      <div class=\"grid_4\">
        <h3>Follow me</h3>
        <ul class=\"socials\">
          <li>
            <div class=\"fa fa-facebook\"></div>
            <a href=\"#\">";
        // line 134
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("googleplus" => false, "pinterest" => false, "linkedin" => false, "twitter" => false));
        echo "</a>
          </li>
          <li>
            <div class=\"fa fa-twitter\"></div>
            <a href=\"#\"> ";
        // line 138
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("pinterest" => false, "facebook" => false, "linkedin" => false, "googleplus" => false));
        echo "</a>
          </li>
          <li>
            <div class=\"fa fa-google-plus\"></div>
            <a href=\"#\">";
        // line 142
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("googleplus" => false, "facebook" => false, "linkedin" => false, "twitter" => false));
        echo "</a>
          </li>
         
        </ul>
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
        <div class=\"footer_phone\">+216 55 67 86 43</div>
        <a href=\"#\" class=\"footer_mail\">agenceespritpidev@gmail.com</a>
        <div class=\"sub-copy\">Website designed by <a href=\"https://www.facebook.com/profile.php?id=660944714014882&fref=ts\" rel=\"nofollow\">Leaders</a></div>
      </div>
    </div>
  </div>  
</footer>
<a href=\"#\" id=\"toTop\" class=\"fa fa-chevron-up\"></a>
</body>
</html>
";
    }

    // line 117
    public function block_lien($context, array $blocks = array())
    {
    }

    public function block_nom($context, array $blocks = array())
    {
    }

    // line 121
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 121,  285 => 117,  252 => 142,  245 => 138,  238 => 134,  224 => 122,  222 => 121,  213 => 117,  189 => 96,  184 => 94,  180 => 93,  176 => 92,  172 => 91,  159 => 83,  152 => 81,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  56 => 18,  50 => 15,  44 => 12,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
