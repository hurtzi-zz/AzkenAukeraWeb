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

	<section id="encard" class="php">
    	<h2>TEMA EZBERDINAK</h2>     	
			<?php // Iruzkinak gordeko diren fitxategia.
				if (!file_exists('iritziak.xml'))
					echo "lehenengoan ez da iritziak.xml fitxategia aurkitu.";
				//if (file_exists('iritziak.xml'))
				//	echo "lehenengoan iritziak.xml fitxategia aurkitu da.";

				$BL_FILE = 'iritziak.xml';

				function gorde_iruzkina($izena, $eposta, $pribatua, $iruzkina) {
					if (!file_exists($BL_FILE)) {// Iruzkinak gordetzeko XML fitxategia ez bada existitzen, sortu iruzkinik gabeko XML fitxategia.
						$iritziak = new SimpleXMLElement('<?xml version="1.0"?><!DOCTYPE bisitak SYSTEM "iritziak.dtd"><iritziak azkenid="0"></iritziak>');
						echo "sortzen";
					} else {// Bestela, kargatu XML fitxategia.
						$iritziak = simplexml_load_file($BL_FILE);
					}
					if (!$iritziak) {
						echo "ezzzzzzzzzzzzz";
						return false;
					}
					$iritziak['azkenid'] = $id;
					// Eguneratu erroko 'azkenid' atributua.
					return $iritziak -> asXML($BL_FILE);
					// Gorde aldaketak fitxategian.
				}

				// Iruzkinak gordeko diren fitxategia.
				if (!file_exists('iritziak.xml'))
					echo "bigarrenean ez da iritziak.xml fitxategia aurkitu.";
				//if (file_exists('iritziak.xml'))
				//	echo "bigarrenean iritziak.xml fitxategia aurkitu da.";
					
					
								//xml fitxategia ireki
				if (file_exists('iritziak.xml'))
					$Iritiziak = simplexml_load_file('iritziak.xml');
				else
					exit('Ezin izan da iritziak.xml fitxategia aurkitu.');
				echo "<div class='index'>";
				echo "<table border=1    style='font-size: 20px;'>
						<tr style='background-color: #0d9ce0; color: #FFFFFF;'>
							<td>Foroaren titulua</td>
							<td>Egilea</td>
							<td>ePosta</td>
							<td><a>Data  </a></td>
							<td><a>Erantzunak</a></td>
						</tr>";

				foreach ($Iritiziak->foroa as $Iritizia) {
					$id = $Iritizia['id'];
					$titulua = $Iritizia['titulua'];

					echo "<tr>
						<td class='ti' ><a class='tit' href='erantzun_berria.php?id=$id'> $titulua </a></td>
						<td>".$Iritizia->izena."</td>";
					if (strcmp($Iritizia -> eposta['erakutsi'], "bai") == 0) {
						echo "<td>".$Iritizia->eposta."</td>";
					} else {
						echo "<td><i>ezkutua</i></td>";
					}
					echo "<td>".$Iritizia->data."</td>";
					echo "<td>".$Iritizia->erantzunak['eraKont']."</td>
					
					</tr>";

				}
				echo '</table>';
				echo "</div>";	
			?>
			
   		
     
     
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
