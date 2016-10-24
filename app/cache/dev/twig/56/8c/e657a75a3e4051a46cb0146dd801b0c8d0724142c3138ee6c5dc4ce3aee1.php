<?php

/* ProjetDarnaBundle:Projet:RechercheRec.html.twig */
class __TwigTemplate_568ce657a75a3e4051a46cb0146dd801b0c8d0724142c3138ee6c5dc4ce3aee1 extends Twig_Template
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
               
           

               <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("RechercheRec");
        echo "\" method=\"POST\">


                   
        <div> 


        


            <div class=\"form-group input-group\">

   
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Reclamation"]) ? $context["Reclamation"] : $this->getContext($context, "Reclamation")), "question", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "


                <span class=\"input-group-btn\">
                
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Reclamation"]) ? $context["Reclamation"] : $this->getContext($context, "Reclamation")), "question", array()), 'widget');
        echo "
                   
                      <div class=\"btn btn-default\">
                          <i clas=\"fa fa-search\">
                       ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Reclamation"]) ? $context["Reclamation"] : $this->getContext($context, "Reclamation")), 'rest');
        echo "
                          </i>
                    </div>
                 
                </span>

            </div>
    
            <center>
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Liste des Reclamations</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped \">
                                <thead>
                                    <tr class=\"sucess\">
                                        <th class =\"success\"> Message du client</th>
                                        <th class=\"success\">Nom du Client </th>
                                         <th class=\"success\">Supprimer </th>
                                        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) ? $context["Reclamations"] : $this->getContext($context, "Reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 51
            echo "

                                        <tr class=\"active\">
                                            <td class=\"\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "question", array()), "html", null, true);
            echo "</td>
                                            <td class=\"\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "prenom", array()), "html", null, true);
            echo "</td> 
                                               <td>
                                     <font class=\"btn btn-sm btn-success\"> 
                                    <a  href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ModifierRec", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                                    </font>
                                    
                                  <font class=\"btn btn-sm btn-warning\"> 
                                    <a  href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SupprimerRec", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\">supprimer</a> </font>
                              <a  href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_mail_sendMail", array("mail" => $this->getAttribute($this->getAttribute($context["r"], "idclient", array()), "email", array()))), "html", null, true);
            echo "\"><font class=\"btn btn-sm btn-warning\"> repondre</font></a>
                                   </td>

                                        </tr> 

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                    
                            </table>   
                                    <div class=\"alert alert-danger\">
                    <strong>Chercher Vos Messages !! </strong>
                </div>
                        </div>     </div>   </div>    
        </div>  

    </form>       
      
           
            ";
        // line 80
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "     
       
";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Projet:RechercheRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 80,  144 => 69,  132 => 63,  128 => 62,  121 => 58,  113 => 55,  109 => 54,  104 => 51,  100 => 50,  76 => 29,  69 => 25,  61 => 20,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
