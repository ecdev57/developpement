<?php

 if (!isset($_POST['submit'])) {
 //exo1
  /*setcookie( "fond", "#".$_POST['fond'], strtotime( '+2 month' )); 
  setcookie( "police", "#".$_POST['police'], strtotime( '+2 month' ));
  echo'<META http-equiv="refresh">';*/
  //exo2
  setcookie( "policeFond", "#".$_POST['police']."/#".$_POST['fond'], strtotime( '+2 month' ));
echo'<META http-equiv="refresh">';
 	$tab=explode("/", $_COOKIE['policeFond']);
 	
 	
}
if (!isset($_POST["delette"])) {
	setcookie('policeFond', '', time() - 3600, '/');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>color</title>

	<style type="text/css">
		body{
			background: <?= $tab[1];?>;
			color:<?= $color ?>;
		}
	</style>
</head>
<body>
	<form method="post" action="index.php">
	     <label>Votre couleur de fond</label>:<input type="text" name="fond" />
	     <label>Votre couleur de police</label>:<input type="text" name="police" />
	     <?=$tab[0]."<br>". $tab[1];?>
	    <input type="submit" name="submit" value="valider">
	    <input type="submit" name="delette" value="delete">
	</form>
<?php

 print_r($_COOKIE);?>
</body>
</html>