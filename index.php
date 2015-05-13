<!DOCTYPE html>
<html lang="eu">
	<head>
		<title>AZKEN AUKERA</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="author" content="Urtzi Diaz Arberas">
		<link rel="stylesheet"  href="aa.css">
		<link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
		<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
		<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
		<script src='scriptNagusia.js'></script>
	</head>

	<!--  -->

	<body>
		<div id="kont">
			<header style='margin:0px' ><!--definir encabezado-->
					<h1>AZKEN&nbsp;<a href="index.php"><img alt="HOME" src="media/images/logo.png" title="HOME"></a> AUKERA</h1>
				<nav><!-- botonera de navegacion -->
					<ul><!-- listas desordenadas -->
						<li><a style='background-color: grey' href="index.php">HOME</a></li><!-- agregar elento a la lista -->
							<li><a href="nortzuk.html">NORTZUK GARA?</a></li>
							<li><a  href="">GALERIAK</a>
							 		<ul>
							 			<li><a  href="argazkiak.html">ARGAZKIAK</a></li>
							 			<li><a  href="bideoak.html">BIDEOAK</a></li>
							 			<li><a  href="audioak.html">AUDIOAK</a></li>
							 		</ul>
							 </li>			
							 <li><a href="foroak.html">FOROAK</a></li>
							 <li><a href="kontaktua.html">KONTAKTUA</a></li>
					</ul>
				</nav>
			</header>
			<section><!--una neva secion de una pagina-->
				<div id="text1" style='width: 910px; height: 90%;'>
					<div class="index">


						<article>
								<h1>Ongi etorri gure web gunera</h1>
							<div style="float: left; width: 45%">
								<p style="text-shadow: 1px 1px 5px #fff;">Carpe Diem singelaren aurkezpen bideoa:</p>
								<div class="hbideo">
									<iframe  width="410" height="300" 	style="border-radius: 5px;" src="//www.youtube.com/embed/KSEXixDVGG8?rel=0&autoplay=1"  allowfullscreen></iframe>
									<h1 style="margin-top:38px;">Azken albistea:</h1>
								</div>
							</div>
							<div style="float: right; width: 45%; height: 90%;">
								<p style="text-shadow: 1px 1px 5px #fff;">Gure azken tweet-ak:</p>
								<aside class="twitter" style="padding: 1px;">
									<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/azkenaukera" data-widget-id="401715103776534529">@azkenaukera(r)en Txioak</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</aside>
							</div>
						<div style="clear: both">
						</div>
							<article class="albisteak">
								
									<p>
<?php //xml fitxategia ireki
				if (file_exists('php/albiste_berria.xml'))
					$Berria = simplexml_load_file('php/albiste_berria.xml');
				else
					exit('Ezin izan da iritziak.xml fitxategia aurkitu.');
echo$Berria->iruzkina;
echo " ";
echo "<a>".$Berria->data."</a>";
?>
									</p>
							</article>
						</article>
					</div>
				</div>
			</section>
		</div>
		<footer><!--pie de pag...-->
			<aside id="menusoziala" style="display:block;margin:0 auto 0 auto; "><!--anuncios,redes social...-->
        				<ul>
							<li><a href="https://www.facebook.com/azkenaukerataldea?fref=ts" target="_blank" ><img alt="Facebook" src="media/ico/facebook.png" title="Facebook"></a></li>
            				<li><a href="https://twitter.com/azkenaukera" target="_blank"><img alt="Twitter" src="media/ico/twitter.png" title="Twitter"></a></li>
            				<li><a href="http://bandcamp.com/" target="_blank"><img alt="Bandcamp" src="media/ico/bandcamp.png" title="Bandcamp"></a></li>
            				<li><a href="http://www.youtube.com/channel/UCBtLaMfnxQDWKx7nW36QfVg" target="_blank"><img alt="Youtube" src="media/ico/youtube.png" title="Youtube"></a></li>
							<li><a href="https://soundcloud.com/azken-aukera/" target="_blank"><img alt="Soundcloud" src="media/ico/soundcloud.png" title="Soundcloud"></a></li>
							<li><a href="https://myspace.com/azkenaukera" target="_blank"><img alt="Myspace" src="media/ico/myspace.png" title="Myspace"></a></li>
							<li><a href="https://itunes.apple.com/es/artist/berri-txarrak/id215543306" target="_blank"><img alt="Itunes" src="media/ico/itunes.png" title="Itunes"></a></li>
							<li><a href="http://open.spotify.com/artist/4us4jlCknYAd9OSkLSu82e" target="_blank"><img alt="Spotify" src="media/ico/Spotify.png" title="Spotify"></a></li>
							<li><a href="http://grooveshark.com/#!/berritxarrak" target="_blank"><img alt="GrooveShark" src="media/ico/grooveshark.png" title="GrooveShark"></a></li>
							<li><a href="login.html" target="_blank"><img alt="LOGIN AA" src="media/ico/aa.png" title="LOGIN"></a></li>
        				</ul>
				</aside>
			<div class='log'>
				<a href="index.php"><img style="display:block;  margin:0 auto 0 auto; padding-top: 22px;" alt="Azken Aukera HOME" src="media/images/log.jpeg"></a>
			</div>
			<!--<canvas id="aaCanvas"(lienzo dnd trabajaremos)-->				
			<p>
				&copy; Copyright  by Urtzi Diaz Arberas
			</p>
		</footer>
	</body>
</html>