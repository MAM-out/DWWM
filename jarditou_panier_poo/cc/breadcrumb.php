<?php
/**
* \brief fonctionnement du fil d'ariane
* \param  $def	renvoi à l'accueil
* \param  $chemin	recupere toute les étapes pour constituer le fil du parcours  
* \param  $j    	compteur   
* \param  $etapes	page active    
* \param  $ttetapes toutes les pages necessaires pour arriver à l'active
* \author Marion Mounier
* \date 26/02/2020
*/
$def = "index";
$chemin = $_SERVER['PHP_SELF'];
$etapes = explode("/", $chemin);

echo('<a class="dynNav text-decoration-none text-dark" href="/">Accueil</a><span class="dynNav text-decoration-none text-dark"> > </span>');
for($i=1; $i<count($etapes); $i++ ){
	echo('<a class="dynNav text-decoration-none text-dark" href="/');
	for($j=1; $j<=$i; $j++ ){
		echo($etapes[$j]);
		if($j!=count($etapes)-1){ echo("/");}
	}
	
	if($i==count($etapes)-1){
		$ttetapes = explode(".", $etapes[$i]);
		if ($ttetapes[0] == $def) $ttetapes[0] = "";
		$ttetapes[0] = $ttetapes[0] . "</a>";
	}
	else $ttetapes[0]=$etapes[$i] . '</a><span class="dynNav text-decoration-none text-dark"> > </span>';
	echo('">');
	echo(str_replace("_" , " " , $ttetapes[0]));
} 
?>