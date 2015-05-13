<?php
    //Sesioekin amaitu.
	session_start();
	session_unset();
	//Identifikazioa.php ra bueltatu.
	header("Location:../index.php");
	
?>
