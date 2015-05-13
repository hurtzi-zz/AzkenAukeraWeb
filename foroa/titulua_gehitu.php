<?php
  //<iritziak azkenid="0"></iritziak>
 if (file_exists('iritziak.xml')) 
                    $Iritiziak = simplexml_load_file('iritziak.xml');
            else 
                    exit('Ezin izan da iritziak.xml fitxategia aurkitu.');
      //formularioko datuak jaso
    $izena = $_POST['izena'];
    $eposta=$_POST['eposta'];
	$titulua=$_POST['titulua'];
	$iruzkina=$_POST['iruzkina'];
	if($_POST['ezkutua']==="on"){
			$bistan="ez";}
	else{$bistan="bai";}
    // Gaurko data eta ordua lortu
	$data=date("Y/m/d H:i");
	//Artxiboan dauden iruzk irakurri eta handitu
	$Idzahar= $Iritiziak['azkenid'];
	$zenb= (substr($Idzahar, 2))+1;
	$Iritiziak['azkenid']='id'.$zenb;
    //xml dokumentu bukaeran seme berri bat erantsi
    $iritziBerr = $Iritiziak -> addChild('foroa');
    $iritziBerr -> addAttribute('id','id'.$zenb);
    $iritziBerr -> addAttribute('titulua',$titulua);
    $iritziBerr -> addChild('izena', $izena);
	$iritziBerr->addChild('eposta',$eposta);
	$iritziBerr->eposta->addAttribute('erakutsi',$bistan);
    $iritziBerr -> addChild('data',  $data);
    $iritziBerr -> addChild('iruzkina',$iruzkina);
	$iritziBerr -> addChild('erantzunak');
	$iritziBerr-> erantzunak->addAttribute('eraKont',0);
    $Iritiziak -> asXML('iritziak.xml');
    header("Location:index.php");
?>