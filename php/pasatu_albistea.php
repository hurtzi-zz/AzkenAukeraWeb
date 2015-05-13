<?php
    session_start();
	if(!(isset($_SESSION['erabiltzailea'])) || !(isset($_SESSION['pasahitza']))){
		header("Location:../login.html");}


 
 if (file_exists('albistea.xml')) 
                    $Berria = simplexml_load_file('albistea.xml');
            else 
                    exit('Ezin izan da iritziak.xml fitxategia aurkitu.');



    //formularioko datuak jaso
	$iruzkina=$_POST['iruzkina'];
	
	// Gaurko data eta ordua lortu
	$data=date("Y/m/d H:i");
	
	//xml dokumentu bukaeran seme berri bat erantsi
    $albisteBerr = $Berria -> addChild('data',  $data);
	$albisteBerr = $Berria -> addChild('iruzkina',$iruzkina);
	
	
	//$albisteBerr -> addChild('data',  $data);
	//$albisteBerr -> addChild('iruzkina',$iruzkina);
	
	$Berria -> asXML('albiste_berria.xml');
	//header("Location:sesioa_itxi.php");
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Albistea sartu</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<body>
	<h1>Albistea ondo gorde da</h1>
	
   <p>LOGOUT!!: <a class="haunditu2" href="sesioa_itxi.php">hemen</a>.</p>
</body>
</html>