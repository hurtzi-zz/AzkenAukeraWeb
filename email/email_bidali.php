
<?php

	if(isset($_POST['eposta']) && !empty($_POST['eposta']) &&
	isset($_POST['asuntua']) && !empty($_POST['asuntua']) && 
	isset($_POST['mezua']) && !empty($_POST['mezua']))
	{
		$norakoa = "urtzidiaz@hotmail.com" ;
		$igorlea = $_POST['eposta'];
		$asuntua = $_POST['asuntua'];
		$mezua = $_POST['mezua'];
	}else{
    	echo "Ipini parametroak ondo";
   }
    
    
    if (mail($norakoa, $asuntua, $mezua, $igorlea)){
    	echo('<p>Korreoa ondo bidali da!</p>');
    }else{
    	echo('<p>Errore bat gertatu datu correoa bidaltzean!!</p>');
    }
	
	
	echo('<p>Orrialde nagusira itzultzeko sakatu <a href="../index.php">hemen</a>.</p>');
?>

