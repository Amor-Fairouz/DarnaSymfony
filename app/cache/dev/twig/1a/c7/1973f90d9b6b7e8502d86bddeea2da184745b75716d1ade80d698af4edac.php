<?php

/* ProjetDarnaBundle::layout9.html.twig */
class __TwigTemplate_1ac71973f90d9b6b7e8502d86bddeea2da184745b75716d1ade80d698af4edac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ptitre' => array($this, 'block_ptitre'),
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

    <div id=\"wrapper\">
      

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
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong></strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong></strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong></strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Read All New Messages</a>
                        </li>
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
                    <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i>  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
                       <li class=\"dropdown\">
          <a href=\"";
        // line 137
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
                        </li>
                    </ul>
                </li>
            </ul>
                 
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("espace_admin");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Acceuil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("projet_afficher_admin");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i>Gestion Administrateur</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("projet_afficher_client");
        echo "\"><i class=\"fa fa-fw fa-table\"></i> Gestion Clients</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("projet_afficher_gerant");
        echo "\"><i class=\"fa fa-fw fa-edit\"></i>Gestion Gérants</a>
                    </li>
                   
                 <li>
                 <a  href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("Myapp_MenuStat");
        echo "\" ><i class=\"fa fa-fw fa-bar-chart-o\"> </i>Gestion Statistique </a>
                 </li>
                   
                   
                   
                </ul>
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
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                <i class=\"fa fa-dashboard\"></i>";
        // line 197
        $this->displayBlock('ptitre', $context, $blocks);
        // line 198
        echo "
                            </li>
                        </ol>
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
        // line 219
        $this->displayBlock('content', $context, $blocks);
        // line 220
        echo "                                   
                               
                           
                            
                 
                  
                   
                   
               

            
              
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

   
        <!-- /#page-wrapper -->

  
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"js1/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"1/bootstrap.min.js\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"js1/plugins/morris/raphael.min.js\"></script>
    <script src=\"js1/plugins/morris/morris.min.js\"></script>
    <script src=\"js1/plugins/morris/morris-data.js\"></script>

</body>

</html>
";
    }

    // line 197
    public function block_ptitre($context, array $blocks = array())
    {
    }

    // line 219
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle::layout9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 219,  333 => 197,  289 => 220,  287 => 219,  264 => 198,  262 => 197,  237 => 175,  230 => 171,  224 => 168,  218 => 165,  212 => 162,  182 => 137,  175 => 135,  63 => 26,  59 => 25,  55 => 24,  49 => 21,  43 => 18,  37 => 15,  21 => 1,);
    }
}
