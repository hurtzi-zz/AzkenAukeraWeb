<?php
   //xml fitxategia ireki  
 	if (file_exists('iritziak.xml')) 
        $Iritiziak = simplexml_load_file('iritziak.xml');
    else 
	    exit('Ezin izan da iritziak.xml fitxategia aurkitu.');

    
    // Erantzun nahi den errezetaren Id-a
    $id= $_GET ['id'];
    $Erantzuna = $Iritiziak->foroa[(substr($id, 2)-1)];
    $erantzunak = $Erantzuna->erantzunak;
	
	
	//formularioko datuak jaso
    $izena = $_POST['izena'];
    $eposta=$_POST['eposta'];
	$iruzkina=$_POST['iruzkina'];
	if($_POST['ezkutua']==="on"){
			$bistan="ez";}
	else{$bistan="bai";}
	// Gaurko data eta ordua lortu
	$data=date("Y/m/d H:i");
	  
	//Artxiboaren id-an dauden erant irakurri eta handitu
	$Idzahar= $Erantzuna->erantzunak['eraKont'];
	$zenb= $Idzahar+1;
	$Erantzuna->erantzunak['eraKont']=$zenb;
	    
    //Erantzuna gehitu
    $erantzunBerr = $erantzunak -> addChild('erantzuna');
	
	$erantzunBerr -> addAttribute('id',$zenb);
	
	$erantzunBerr -> addChild('izena', $izena);
	$erantzunBerr->addChild('eposta',$eposta);
	$erantzunBerr->eposta->addAttribute('erakutsi',$bistan);
    $erantzunBerr -> addChild('data',  $data);
    $erantzunBerr -> addChild('iruzkina',$iruzkina);
	
	
   
	$Iritiziak -> asXML('iritziak.xml');

	header("Location:erantzun_berria.php?id=$id");
?>