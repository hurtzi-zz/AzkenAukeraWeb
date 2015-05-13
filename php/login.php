<?php
	$pErabiltzailea=trim($_POST['erabiltzailea']);
	$pPasahitza=trim($_POST['pasahitza']);




            if(strcmp($pErabiltzailea,"urtzidiaz")==0 && strcmp($pPasahitza,"azkenaukera")==0){
            	    session_start();
                    $_SESSION['erabiltzailea']=$pErabiltzailea;
                    $_SESSION['pasahitza']=$pPasahitza;
                    header("Location: albisteak_sartu.php");
            }else{
            		echo "pasaitze edo user gaizki";
            		

}
?>