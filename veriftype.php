<?php
echo"<meta charset='UTF-8'>";
include_once 'function.php';
if (isset($_POST["valid"])) {
	 $tab['name'] = test_type($_SERVER['REQUEST_METHOD'],"client_name","STRING");
	  $tab['age'] = test_type($_SERVER['REQUEST_METHOD'],"client_age","INT");
	  $tab['taille'] = test_type($_SERVER['REQUEST_METHOD'],"client_taille","FLOAT");
	 $tab['genre'] = test_type($_SERVER['REQUEST_METHOD'],"client_genre","BOOL");
	 $tab['desc'] = test_type($_SERVER['REQUEST_METHOD'],"client_html","HTML");

	if ($tab['genre']==0) {
		print_r("Votre resumer : <br>"."Votre nom est ".$tab['name']."<br>Vous avez : ". $tab['age']."ans<br>Vous mesuré :". $tab['taille']."cm<br>Homme<br>Votre description est".$tab['desc']);
	} else{
		print_r("Votre resumer : <br>"."Votre nom est : ".$tab['name']."<br>Vous avez : ". $tab['age']."ans<br>Vous mesuré : ". $tab['taille']."cm<br>Femme<br>Votre description est ".$tab['desc']);
	}
}
