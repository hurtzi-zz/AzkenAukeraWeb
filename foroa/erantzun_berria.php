<?php 
// erakutsi nahi dugun errezetaren id-a lortu
$id = $_GET['id'];
?>

<!DOCTYPE HTML>
<html lang="eu">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<title>FOROA azken-aukera</title>
		<meta name="description" content="">
		<meta name="author" content="Urtzi Diaz Arberas">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<section id="slide">
		<div id="slideshow">
			<ul>
        		<li><img src="img/slider2.jpg" alt="slide1" /></li>
        		<li><img src="img/slider2.jpg" alt="slide3" /></li>
        		<li><img src="img/slider3.jpg" alt="slide1" /></li>
        		<li><img src="img/slider4.jpg" alt="slide3" /></li>
			</ul>
    	</div>
    	<article>idatzi zure iritziak <b>azken aukera</b>-ren foroan<br/>
    		<a href="titulua_gehitu.html" title="Tema berri idatzi">TEMA BERRIA</a>
   		</article>   
	</section>

	<header>
		<section id="content">
			<h1>
				<strong><a style="text-decoration: none; color:#0d9ce0; " href="index.php" title="Foro home">FOROA</a></strong><a> AZKEN-AUKERA</a>
			</h1>
        	<b>Informazio gehiago: <span class="rest"> 652729490</span></b>
    	</section>
	</header>

	<nav>
		<ul>
			<li><a href="../index.php">HOME</a></li>
			<li><a  href="../nortzuk.html">NORTZUK GARA?</a></li>
			<li><a  href="../argazkiak.html">ARGAZKIAK</a></li>
			<li><a  href="../bideoak.html">BIDEOAK</a></li>
			<li><a  href="../audioak.html">AUDIOAK</a></li>
			<li><a style='background-color: grey' href="../foroak.html">FOROAK</a></li>
			<li><a href="../kontaktua.html">KONTAKTUA</a></li>
	    </ul>
	</nav>

	<section id="encard" class="erantzunBerria">
    	    	<div  class="erantzunBotoia">
					<?php echo "<li><a style='text-decoration:none;'  href='erantzuna_gehitu_intfz.php?id=$id'>ERANTZUNA gehitu</a></li>"; ?>
				</div>
    	<h2>TEMA:</h2>

     	<body>
			
			<table border="1" class="taula">
				<?php //xml fitxategia ireki
				if (file_exists('iritziak.xml'))
					$Iritiziak = simplexml_load_file('iritziak.xml');
				else
					exit('Ezin izan da iritziak.xml fitxategia aurkitu.');
				?>
				<div class="tema">
					<table border="3" class="taula1">
						<?php
						foreach ($Iritiziak->foroa as $Iritizia) {
							if (strcmp($Iritizia['id'], $id) == 0) {
								$titulua = $Iritizia['titulua'];
								echo "<tr class=\"titulua\">\n";
							
								echo("<td><span class=\"titulu\">".$titulua."</span></td>\n");
								echo("<td><span class=\"izena\">".$Iritizia -> izena."</span></td>\n");
								echo("<td><span class=\"data\">".$Iritizia -> data."</span></td>\n");
		
								if (strcmp($Iritizia -> eposta['erakutsi'], "bai") == 0) {
									echo("<td><span class=\"eposta\">" . $Iritizia -> eposta . "</span></td>\n");
		
								} else {
									echo("<td><span class=\"eposta\">" . "<i>ezkutua</i>" . "</span></td>\n");
								}
								echo("<tr class=\"iruzkina1\">\n<td colspan=\"4\"><p>".$Iritizia -> iruzkina."</p></td>\n</tr>\n");
							}
						}
						?>
					</table>
				</div>
				
			<div class="erantzunBerria2">
				<h2 >ERANTZUNAK:</h2>
						<table border="2" class="taula2">
						<?php
							//iruzkinak pantailaratu
			    			$Erantzuna = $Iritiziak->foroa[(substr($id, 2)-1)];
			    			$erantzunak = $Erantzuna->erantzunak;
						
							foreach ($erantzunak->erantzuna as $erantzuna) {					
								echo("<td><span class=\"izena2\">".$erantzuna -> izena."</span></td>\n");
								echo("<td><span class=\"data\">".$erantzuna -> data."</span></td>\n");
			
								if (strcmp($erantzuna -> eposta['erakutsi'], "bai") == 0) {
									echo("<td><span class=\"eposta\">" . $erantzuna -> eposta . "</span></td>\n");
								} else {
									echo("<td><span class=\"eposta\">" . "<i>ezkutua</i>" . "</span></td>\n");
								}
								echo("<tr class=\"iruzkina\">\n<td colspan=\"3\"><p>".$erantzuna -> iruzkina."</p></td>\n</tr>\n");
								
							}
			
						?>
					</table>
		</div>
	</body>
		
   		
     
     
	</section>


	<footer>
		<p>
			&copy; Copyright  by Urtzi Diaz Arberas
		</p>
	</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="js/craftyslide.min.js"></script>
	<script>
		$("#slideshow").craftyslide();
	</script> 
	</body>
</html>
