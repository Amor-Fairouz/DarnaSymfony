<?php

/* ProjetDarnaBundle:Projet:RechercheRendez.html.twig */
class __TwigTemplate_5c6967c9ff94fae5a93f5727916475443632cc4e1254678801bf3df5a8e3d593 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

                <!-- /.row -->

                <div >
    
     
                 <div >
     <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("RechercheRendez");
        echo "\" method=\"POST\">



        <div> 


        


            <div class=\"form-group input-group\">


                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Rendezvous"]) ? $context["Rendezvous"] : $this->getContext($context, "Rendezvous")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "


                <span class=\"input-group-btn\">
                  
                     ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Rendezvous"]) ? $context["Rendezvous"] : $this->getContext($context, "Rendezvous")), "lieu", array()), 'widget');
        echo "
                      
                      <div class=\"btn btn-default\">
                          <i clas=\"fa fa-search\">
                       ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Rendezvous"]) ? $context["Rendezvous"] : $this->getContext($context, "Rendezvous")), 'rest');
        echo "
                          </i>
                    </div>
                 
                </span>

            </div>
    
            <center>
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Liste des Rendez-vous</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped \">
                                <thead>
                                    <tr class=\"sucess\">
                                        <th class =\"success\">Date du Rendez-vous</th>
                                        <th class=\"success\">lieu du Rendez-vous </th>
                                        <th class=\"success\">Nom et Prenom du client </th>
                                       <th class=\"success\"> </th>
                                        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RendezVouss"]) ? $context["RendezVouss"] : $this->getContext($context, "RendezVouss")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 59
            echo "
                                        <tr>
                                            <td class=\"\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "date", array()), "html", null, true);
            echo "</td>
                                             <td class=\"\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "lieu", array()), "html", null, true);
            echo "</td>
                                            <td class=\"\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "prenom", array()), "html", null, true);
            echo "</td> 
                                              <td>
                                                     <font class=\"btn btn-sm btn-success\"> 
                                    <a  href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ModifierRendez", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                                    </font>
                                           <font class=\"btn btn-sm btn-warning\"> 
                                    <a  href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("RechercheRendez");
            echo "\">Recherche</a>
                                   
                                    </font>
                                    
                                                  <font class=\"btn btn-sm btn-warning\"> 
                                    <a  href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerRendez", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">supprimer</a>
                                   
                                    </font>
                                              
                                           
                                              </td>

                                        </tr> 

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                    
                            </table>   
                                    <div class=\"alert alert-danger\">
                    <strong>Chercher Vos Rendez-vous !! </strong>
                </div>
                        </div>     </div>   </div>    
        </div>  

    </form>    
                    </div>   
                   
                <!-- /.row -->
</div>
               
</div> 
                <!-- /.row -->
                
         
           ";
        // line 102
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:RechercheRendez.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 102,  159 => 84,  143 => 74,  135 => 69,  129 => 66,  121 => 63,  117 => 62,  113 => 61,  109 => 59,  105 => 58,  80 => 36,  73 => 32,  65 => 27,  49 => 14,  39 => 6,  36 => 5,  11 => 1,);
    }
}
