<?php

/* ProjetDarnaBundle:Offre:OffreFrontOffice.html.twig */
class __TwigTemplate_a93aadad03d74111a3defaac397f52746e6e4d1b91b50151987d1116f4ee1ba6 extends Twig_Template
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
<script>
 \$(window).load(function(){
  \$().UItoTop({ easingType: 'easeOutQuart' });
  \$('#stuck_container').tmStickUp({});  
 }); 

</script>

<section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - August11, 2014!</div>

 <div class=\"grid_4\">
        <h2> Nos Propositions</h2>
        <ul class=\"list-1\">
<li><span></span><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("afficher_EntrepriseEF");
        echo "\"><div class=\"fa fa-chevron-right\"></div> Entreprise </a></li>
<li><span></span><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("afficher_LogementLF");
        echo "\"><div class=\"fa fa-chevron-right\"></div> Logement </a></li>
<li><span></span><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("afficher_TerrainTF");
        echo "\"><div class=\"fa fa-chevron-right\"></div> Terrain </a></li>
         
        </ul>
      </div>
   
</section>

";
    }

    public function getTemplateName()
    {
        return "ProjetDarnaBundle:Offre:OffreFrontOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 19,  55 => 18,  39 => 4,  36 => 3,  11 => 1,);
    }
}
