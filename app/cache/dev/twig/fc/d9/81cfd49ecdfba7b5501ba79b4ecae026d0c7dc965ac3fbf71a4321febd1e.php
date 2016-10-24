<?php

/* ProjetDarnaBundle:Projet:AfficherRec.html.twig */
class __TwigTemplate_fcd981cfd49ecdfba7b5501ba79b4ecae026d0c7dc965ac3fbf71a4321febd1e extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo " 


        
      <center>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Liste des Reclamations</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover table-striped\">
                                        <thead>
                                            <tr class=\"sucess\">
                                                    <th class=\"success\">Message du client</th>
                                                <th class=\"success\">Nom du Client </th>
                                            <th class=\"success\"> </th>
                                               
                                     ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamation"]) ? $context["Reclamation"] : $this->getContext($context, "Reclamation")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "    
                                           
                                     
                                           <tr class=\"active\">
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "question", array()), "html", null, true);
            echo "</td>
                           
                             
                             <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "prenom", array()), "html", null, true);
            echo "</td>
                              <td>
                                     <font class=\"btn btn-sm btn-success\"> 
                                    <a  href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ModifierRec", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                                    </font>
                                    
                                  <font class=\"btn btn-sm btn-warning\"> 
                                    <a  href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerRec", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">supprimer</a> </font>
                             
                                     <font class=\"btn btn-sm btn-warning\"> 
                                    <a  href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("RechercheRec");
            echo "\">Recherche</a> </font>
                                    
                                    
                                    <a  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_mail_sendMail", array("mail" => $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "email", array()))), "html", null, true);
            echo "\"><font class=\"btn btn-sm btn-warning\"> repondre</font></a>
                                 
                                   </td>
                                      </tr> 
                                   
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                       
                                
                             
                       
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"text-right\">
                                        <div class=\"search-bar\">
                    <div class=\"row-fluid\">
                        <div class=\"span12\">
                            <div class=\"search-bar-inner\">
                                <a id=\"menu-toggle\" href=\"#menu\" data-toggle=\"collapse\"
                                   class=\"accordion-toggle btn btn-inverse visible-phone\"
                                   rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Show/Hide Menu\">
                                    <i class=\"icon-sort\"></i>
                                </a>
                                
                            </div>

                        </div>
                    </div>

                </div>
                                        </i></a>
                                </div>
                            </div>
                        </div>  ";
        // line 75
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
                    </center>
                                            
               

        ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:AfficherRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 75,  112 => 48,  100 => 42,  94 => 39,  88 => 36,  81 => 32,  73 => 29,  67 => 26,  58 => 22,  36 => 4,  11 => 1,);
    }
}
