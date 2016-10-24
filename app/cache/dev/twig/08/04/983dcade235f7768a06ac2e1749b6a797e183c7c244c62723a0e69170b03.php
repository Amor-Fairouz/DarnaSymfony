<?php

/* ProjetMapsBundle:Default:index.html.twig */
class __TwigTemplate_0804983dcade235f7768a06ac2e1749b6a797e183c7c244c62723a0e69170b03 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
       
    
    <div class=\"grid_5\">
        <h2>A Propos de Darna</h2>
        <div class=\"text1 tx__1\"> Crée en 2015,par le Groupe Ledears est une agence immobilière familiale située à Tunis. 
</div>
        <p>Agence immobilière à taille humaine, elle s'efforce de rompre avec les méthodes de travail à la chaîne des agences standardisées.
        <p>Nous privilégions la qualité de nos mandats que nous travaillons pleinement. </p>
            
        <p>Nous abordons ce métier différemment sous l'angle du cousu main, du sur mesure.</p>
         <p>Nous proposons aux propriétaires et futurs acquéreurs les services essentiels pour valoriser.
</p>
        
        <div class=\"grid_4\" align=\"center\">
<p>  <strong>Nos Services</strong>     </p>
        <p>
Évaluation des biens immobiliers,
Gestion des biens immobiliers
Conseil en Immobilier (achat, location, vente)
Gestion des biens immobiliers
Notre Charte <a >
    <p><strong>Nos Objectifs</strong></a>,
        <p>
            Le BON Choix<br>
            Le BON Prix<br>
            Le SERVICE après transaction<br>    
        </p></div>
   
    








 
    
   
    
    
        
        <style type=\"text/css\">
             #map-canvas { height: 400px ;width: 1000px;  margin: 100; padding: 1000;}
        </style>
        <script type=\"text/javascript\" 
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD7m2WkoYm1XGAoPI8bCB9RQR-yKAjaVCk\">
        </script>
         <script type=\"text/javascript\">
            function initialize()
            {
                var lat = document.getElementById('lat').value;
                var lng = document.getElementById('lng').value;
                var myCenter = new google.maps.LatLng(lat, lng);
                var mapOptions = {
                    center: {lat: 10.1956, lng: 10.1956},
                    zoom: 8
                };
                
             
               
               
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                           
       var myLatlng1 = new google.maps.LatLng(36.45, 10.73);

            ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Locations"]) ? $context["Locations"] : $this->getContext($context, "Locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " 
                var myLatlng = new google.maps.LatLng(";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "latitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "longitude", array()), "html", null, true);
            echo ");
               
   
                    var mapOptions = {
                    zoom: 10,
                    center: myLatlng
                    
                }  
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo " 
                
                
                var map = new google.maps.Map(document.getElementById(\"map-canvas\"), mapOptions);
                
                // To add the marker to the map, use the 'map' property
               
  
    var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: \"Cinéma Pathé Bellecour\"
                });
                
                var marker1 = new google.maps.Marker({
                    position: myLatlng1,
                    map: map,
                    title: \"Cinéma Pathé Bellecour\"
                })
                
                
                
                
                var myWindowOptions = {
                    content:
                         '<h6>Cinéma Pathé Bellecour</h6>' +
                         '<p><a href=\"http://www.cinemasgaumontpathe.com/cinemas/cinema-pathe-lyon-bellecour/\" title=\"Site officiel\">Visiter le site officiel</a></p>'
                };
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
   
   
       
            <div id=\"map-canvas\"   >  
                   ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Locations"]) ? $context["Locations"] : $this->getContext($context, "Locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 119
            echo "        <input id=\"lat\" value= ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "latitude", array()), "html", null, true);
            echo "  readonly/> 
        <input id=\"lng\" value= ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "longitude", array()), "html", null, true);
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </div>
      
   

";
    }

    public function getTemplateName()
    {
        return "ProjetMapsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 122,  179 => 120,  174 => 119,  170 => 118,  133 => 83,  116 => 75,  110 => 74,  39 => 5,  36 => 4,  11 => 1,);
    }
}
