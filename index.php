<?php

//lien : http://localhost:8081/informatique/dev-php/index.php

// Initialisation des paramètres du site

session_name('Hana');
session_start();
require_once('./config.php');
require_once('./lib/foncBase.php');
require_once(PATH_TEXTES.LANG.'.php');



//vérification de la page demandée 

if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
  if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
  { 
    $page = '404'; //page demandée inexistante
  }
}
else
	$page='accueil'; //page d'accueil du site - http://.../index.php

//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php'); 

?>
