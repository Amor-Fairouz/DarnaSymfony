<?php
namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Offre;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;

class GraphicsController extends Controller{
    
    
    public function  StatAction()
    {
        return $this->render('ProjetDarnaBundle:Graphe:Menu.html.twig');
        
    }
    
    
 public function chartLineAction(){
// Chart
    $em=$this->container->get('doctrine')->getEntityManager();
      
    $modeleoui = $em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('engagement'=>'vente'));
    $modelenon = $em->getRepository('ProjetDarnaBundle:Personne')->findBy(array('type'=>'c')); 

    $series = array(
array("name" => "Staistique Selon nombre de vente par rapport aux nombre des abonnées ",
    "data" =>
    array(array('c', count($modelenon) ),
array('vente',count($modeleoui)))),
        

        
);
     $ob = new Highchart();
$ob->chart->renderTo('linechart'); // #id du div où afficher le graphe
$ob->title->text('Staistique Selon nombre de vente par rapport aux nombre des abonnées ');
$ob->xAxis->title(array('text' => "Nombre de clients"));
$ob->yAxis->title(array('text' => "Nombre de vente "));
     $ob->series($series);

 
return $this->render('ProjetDarnaBundle:Graphe:LineChart.html.twig', array(
'chart' => $ob
));
      
/*$series = array(
array("name" => "Staistique Selon nombre de vente par rapport aux nombre des abonnées ",
    "data" =>
    array(1,2,4,5,6,3,8))
);
$ob = new Highchart();
$ob->chart->renderTo('linechart'); // #id du div où afficher le graphe
$ob->title->text('statistique');
$ob->xAxis->title(array('text' => "Nombre d'offres"));
$ob->yAxis->title(array('text' => "Nombre de vente "));
$ob->series($series);
return $this->render('ProjetDarnaBundle:Graphe:LineChart.html.twig', array(
'chart' => $ob
));*/
}





public function chartHistogrammeAction()
{
    $em=$this->container->get('doctrine')->getEntityManager();
      
   $modeleoui = $em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('engagement'=>'vente'));

    $series = array(
array(
'name' => 'nombre des offres vendus',
'type' => 'column',
'color' => '#4572A7',
'yAxis' => 1,
'data' => array(array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui)), array('vente',count($modeleoui))),
)
);
$yData = array(
array(
'labels' => array(
'formatter' => new Expr('function () { return this.value + " degrees C" }'),
'style' => array('color' => '#AA4643')
),


),
array(
'labels' => array(
'formatter' => new Expr('function () { return this.value + " mm" }'),
'style' => array('color' => '#4572A7')
)
),
);

    
 $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$ob = new Highchart();
$ob->chart->renderTo('container'); 
$ob->chart->type('column');
$ob->title->text('Histogramme ');
$ob->xAxis->categories($categories);
$ob->yAxis($yData);
$ob->legend->enabled(false);
$formatter = new Expr('function () {
var unit = {
"Rainfall": "mm",
"Temperature": "degrees C"
}[this.series.name];
return this.x + ": <b>" + this.y + "</b> " + unit;
}');
$ob->tooltip->formatter($formatter);
$ob->series($series);
return $this->render('ProjetDarnaBundle:Graphe:histogramme.html.twig', array(
'chart' => $ob
));
    
    
    
    
}  

public function chartPieAction()
        {
    

$ob = new Highchart();//instantiation de la classe hightchart
$ob->chart->renderTo('piechart');
$ob->title->text('le nombre ');
$ob->plotOptions->pie(array(
'allowPointSelect' => true,
'cursor' => 'pointer',
'dataLabels' => array('enabled' => false),
'showInLegend' => true
));

 $em=$this->container->get('doctrine')->getEntityManager();
      
   $modeleoui = $em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('engagement'=>'vente'));
   $modelenon = $em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('engagement'=>'location')); 
$data = array(
array('vente',count($modeleoui) ),
array('location', count($modelenon)),
);
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));
return $this->render('ProjetDarnaBundle:Graphe:pie.html.twig', array(
'chart' => $ob
));}










}



