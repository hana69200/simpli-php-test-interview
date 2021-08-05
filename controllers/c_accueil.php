<?php
$ext= unserialize($INPUT_DATA);

// $ext as $cle => $variable

//on place les clés dans des variables
$c1=array_search($ext['1'], $ext);
$c2=array_search($ext['3'], $ext);
$c3=array_search($ext['10'], $ext);

//on place les valeurs dans des variables
$v1=$ext[1];
$v2=$ext[3];
$v3=$ext[10];


//on teste si la clé et la valeur ne sont pas vides
if (!empty($c1) && !empty($v1) )  { 
    $res1=$c1 + $v1;
}
else{  $res1=null; }
if (!empty($c2) && !empty($v2) )  { 
    $res2=$c2 + $v2;
}
else{ $res2=null; }
if (!empty($c3) && !empty($v3) )  { 
    $res3=$c3 + $v3;
}
else{ $res3=null; }

//Test nombre pair  || impair

if ($res1%2 ==1){ $m1= "Impaire" ; }
else{ $m1= "Paire" ; }
if ($res2%2 ==1){ $m2= "Impaire" ; }
else{ $m2= "Paire" ; }
if ($res3%2 ==1){ $m3= "Impaire" ; }
else{ $m3= "Paire" ; }

// Appel de la vue
require_once(PATH_VIEWS.$page.'.php');