<?php

/* ProjetDarnaBundle:Projet:AfficherRendez.html.twig */
class __TwigTemplate_4f540dca8b0c7bafb2e145ff939adb3e963b258075886f8c52673018481b7da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("ProjetDarnaBundle::layout1.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "            
            <div class=\"container-fluid\">
                

               
                <!-- /.row -->

                <div >
    
     
                 <div >
    
      <center>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Liste des Rendez-vous</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover table-striped\">
                                        <thead>
                                            <tr class=\"success\">
                                                <th>La Date</th>
                                                <th >Le Lieu</th>
                                            
                                                <th >Nom et prenom du Client</th>
                                                <th >Téléphone</th>
                                                <th >Details Offre</th>
                                                <th >Supprimer Offre</th>
                                        
                                     ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Rendezvous"]) ? $context["Rendezvous"] : $this->getContext($context, "Rendezvous")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "    
                                           
                                     
                                           <tr class=\"active\">
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "date", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "lieu", array()), "html", null, true);
            echo "</td>
                             
                             <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "prenom", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "tel", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idoffre", array()), "description", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idoffre", array()), "id", array()), "html", null, true);
            echo "</td>   
                                <td>
                                     <font class=\"btn btn-sm btn-success\"> 
                                    <a  href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ModifierRendez", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                                    </font>
                                    
                                     <font class=\"btn btn-sm btn-success\"> 
                                    <a  href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("RechercheRendez");
            echo "\">Chercher</a>
                                    </font>
                                    
                                  <font class=\"btn btn-sm btn-warning\"> 
                                    <a  href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerRendez", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">supprimer</a> </font>
                             
                                   </td>
                               
                                </tr>  
                                
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                       
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div> ";
        // line 71
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
                                  </center>
                    </div>   
                   
                <!-- /.row -->
</div>
               
</div> 
                <!-- /.row -->
            ";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:AfficherRendez.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 71,  134 => 65,  121 => 58,  114 => 54,  107 => 50,  99 => 47,  95 => 46,  89 => 45,  84 => 43,  80 => 42,  71 => 38,  39 => 8,  36 => 7,  11 => 2,);
    }
}
