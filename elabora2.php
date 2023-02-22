<?php
	session_start();
	$totpunti1=$_SESSION['tot'];
	$punti2=0;
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $d3=$_POST['d3'];
    
    echo "<i>Domanda 1:</i><br><b>Qual è il più grande deserto del mondo?</b>";
    if($d1=="antartide" || $d1=="Antartide") {
		$punti2=$punti2+20;
        echo "<br>Hai risposto correttamente: Antartide";
    } else {
		$punti2=$punti2-10;
        echo "<br>Risposta errata; hai risposto: " . $d1;
    	echo "<br>La risposta corretta era: Antartide";
	}
    
    echo "<i><br><br>Domanda 2:</i><br><b>In che anno fu fondata l'Università di Bologna, la prima università del mondo?</b>";
    if($d2=="1088") {
		$punti2=$punti2+20;
        echo "<br>Hai risposto correttamente: 1088";
    } else {
		$punti2=$punti2-10;
        echo "<br>Risposta errata; hai risposto: " . $d2;
    	echo "<br>La risposta corretta era: 1088";
	}
	
    echo "<i><br><br>Domanda 3:</i><br><b>Quale paese condivide il confine più lungo con la Francia?</b>";
    if($d3=="brasile" || $d3=="Brasile") {
		$punti2=$punti2+20;
        echo "<br>Hai risposto correttamente: Brasile";
    } else {
		$punti2=$punti2-10;
        echo "<br>Risposta errata; hai risposto: " . $d3;
    	echo "<br>La risposta corretta era: Brasile";
	}
	
    $totpunti2=$totpunti1+$punti2;
    $_SESSION['tot']=$totpunti2;
    
    echo "<br>___________________________________________________________________";
	echo "<br>In questa sezione del quiz hai totalizzato " . $punti2 . "/60 punti";
    echo "<br><br>Il tuo punteggio totale è " . $totpunti2 . "/150 punti";
   
 	echo "<br><a href='risultati.php'>Vai ai risultati</a>";
?>