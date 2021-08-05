<?php

function choixAlert($message, $arg= null )
{
  $alert = array();
	  switch($message)
	  {
	    case 'query' :
	      $alert['messageAlert'] = ERREUR_QUERY;
	      break;
	 
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}
