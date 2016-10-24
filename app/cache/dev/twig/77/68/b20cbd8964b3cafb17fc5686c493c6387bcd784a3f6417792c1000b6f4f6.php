<?php

/* ProjetDarnaBundle::layout1.html.twig */
class __TwigTemplate_7768b20cbd8964b3cafb17fc5686c493c6387bcd784a3f6417792c1000b6f4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"author\" content=\"\">

    <title>Darna</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\">
<link rel=\"shortcuon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoDarna.ico"), "html", null, true);
        echo "\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\" >
      

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Darna</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <ul class=\"dropdown-menu message-dropdown\">
                       
                       
                        
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">View All</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
                    
                    <li class=\"dropdown\">
          <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i ></i> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout.png"), "html", null, true);
        echo "\"/></a>

                    </li>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion des offres</a>
                    </li>
                    
                    <li>
                        <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("afficher_Entreprise");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Gestion Entreprise</a>
                    </li>
                    
                    <li>
                        <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("afficher_Logement");
        echo "\"><i class=\"fa fa-fw fa-table\"></i> Gestion Logement</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("afficher_Terrain");
        echo "\"><i class=\"fa fa-fw fa-edit\"></i> Gestion Terrain</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("Afficher_Facture");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Gestion Facture</a>
                    </li>
                    
                      <li>
                        <a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("Afficher_Alerte");
        echo "\"><i class=\"fa fa-fw fa-table\"></i> Gestion Alerte</a>
                    </li>
                     <li>
                       
                          <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("Afficher_agence");
        echo "\" ><i class=\"fa fa-fw fa-desktop\"></i> Gestion Agence</a>
                   
                     
                                
                      </li>
                    
                    <li>
                        <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("Afficher_transp");
        echo "\"><i class=\"fa fa-fw fa-table\"></i> Gestion Transporteur</a>
                    </li>
                    
                    <li>
                       
                          <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("ListRendez");
        echo "\" ><i class=\"fa fa-fw fa-desktop\"></i> Gestion Rendez-vous</a>
                   
                     
                                
                      </li>
                
                     
                        <li>
                            <a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("ListRec");
        echo "\" data-toggle=\"collapse\" data-target=\"#demo\" class=\"collapsed\" aria-expanded=\"true\">
                              <i class=\"fa fa-fw fa-edit\"  > </i>
                               Gestion Reclamation
                                <i class=\"fa fa-fw fa-caret-down\"></i>
                                    
                        </a>
                       
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Darna 
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                    
                       
                        
                                
                                   
                                       
                                         ";
        // line 201
        $this->displayBlock('content', $context, $blocks);
        // line 202
        echo "                                   
                               
                           
                            
                 
                  
                   
                   
               

            
              
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

   
        <!-- /#page-wrapper -->

            <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

   
        <!-- /#page-wrapper -->

  
    <!-- /#wrapper -->

   
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"js1/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"1/bootstrap.min.js\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"js1/plugins/morris/raphael.min.js\"></script>
    <script src=\"js1/plugins/morris/morris.min.js\"></script>
    <script src=\"js1/plugins/morris/morris-data.js\"></script>
    <br><br><br><br><br><br>
</body>

</html>
";
    }

    // line 201
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 201,  277 => 202,  275 => 201,  232 => 161,  221 => 153,  213 => 148,  203 => 141,  196 => 137,  189 => 133,  183 => 130,  177 => 127,  170 => 123,  135 => 93,  129 => 90,  62 => 26,  58 => 25,  54 => 24,  48 => 21,  42 => 18,  36 => 15,  20 => 1,);
    }
}
