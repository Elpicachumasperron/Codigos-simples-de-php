<?php

$colores=array ("amarillo","rojo","azul","verde");
	$colores[]="morado";
	print_r($colores);
	
	$eliminarColores="verde";
	$llave = array_search($eliminarColores,$colores);
	
	if ($llave!==false){
	  unset($colores[$llave]);
	  }
	  
	  $colores[1]="morado";
	  
	  $colores[3]="marron";
	  print_r($colores);
	  
	  $coloresSeleccionado= array_slice($colores,1,2)
	  print_r($coloresSeleccionado);
	  


?>