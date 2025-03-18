<?php
	$colores=array ("amarillo","rojo","azul","verde");
	$colores[]="morado";
	print_r($colores);
	
	$eliminarColores="verde";
	$llave = array_search($eliminarColores,$colores);
	
	if ($llave!==false){
	  unset($colores[$llave]);
	  }
	print_r($colores);
	
	
	$colores[1]="gris";
	print_r($colores);
	

	$colores[3]="violeta";
	print_r($colores);
	
	$coloresSeleccionados= array_slice($colores,3,5);
	print_r($coloresSeleccionados);
	
	?>