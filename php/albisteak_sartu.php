<?php
    session_start();
     //Kontrolatu ea identifikatu den ala ez.
	if(!(isset($_SESSION['erabiltzailea'])) || !(isset($_SESSION['pasahitza']))){
		header("Location:../login.html");}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Albistea sartu</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<body>
	<h1>Albistea sartu</h1>
	
<body>
		<h2>Bete ondorengo parametroa iruzkina bidaltzeko:<br/></h2> 
		<form action="pasatu_albistea.php" method="post">
			Idatzi iruzkina(*): <br/>
			<textarea name="iruzkina" rows="12" cols="75"></textarea> 
			<input type="submit" value="Bidali" />
            <input type="reset"  value="Ezbatu" />
		</form>
	</body>
	
	
	
  
   <p>LOGOUT!!: <a class="haunditu2" href="sesioa_itxi.php">hemen</a>.</p>
</body>
</html>
