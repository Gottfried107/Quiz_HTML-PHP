<?php
	session_start();
	$totpunti=$_SESSION['tot'];
	$punti1=0;
	$vet_d1=$_POST['vet_d1'];    
    $vet_d2=$_POST['vet_d2'];    
    $vet_d3=$_POST['vet_d3'];
	$dim1=count($vet_d1);
    $dim2=count($vet_d2);
    $dim3=count($vet_d3);
	
    $r1 = [
    "r1d1" => "Leonhard Eulero",
    "r2d1" => "Charles Darwin",
    "r3d1" => "Fyodor Dostoyevsky",
    "r4d1" => "Napoleone Bonaparte",
    "r5d1" => "François-Marie Voltaire",
    "r6d1" => "Ludwig van Beethoven",
    ];
    echo "<i>Domanda 1:</i><br><b>Quali di questi personaggi sono nati tra il 1700 e il 1800?</b>";
    if($vet_d1[0]=="r1d1" && $vet_d1[1]=="r4d1" && $vet_d1[2]=="r6d1") {
		$punti1=$punti1+10;
        echo "<br>Hai risposto correttamente: Leonhard Eulero, Napoleone Bonaparte, Ludwig van Beethoven";
    } else {
		$punti1=$punti1-5;
        echo "<br>Risposta errata; hai risposto: " . $r1[$vet_d1[0]] . ", " . $r1[$vet_d1[1]] . ", " . $r1[$vet_d1[2]];
    	echo "<br>La risposta corretta era: Leonhard Eulero, Napoleone Bonaparte, Ludwig van Beethoven";
	}
    
    $r2 = [
    "r1d2" => "Iran",
    "r2d2" => "Russia",
    "r3d2" => "Afghanistan",
    "r4d2" => "Belize",
    "r5d2" => "Emirati Arabi Uniti",
    "r6d2" => "Turchia",
    ];
    echo "<i><br><br>Domanda 2:</i><br><b>Quali di questi paesi si trovano in Asia?</b>";
    if($vet_d2[0]=="r1d2" && $vet_d2[1]=="r3d2" && $vet_d2[2]=="r5d2") {
		$punti1=$punti1+10;
        echo "<br>Hai risposto correttamente: Iran, Afghanistan, Emirati Arabi Uniti";
    } else {
		$punti1=$punti1-5;
        echo "<br>Risposta errata; hai risposto: " . $r2[$vet_d2[0]] . ", " . $r2[$vet_d2[1]] . ", " . $r2[$vet_d2[2]];
    	echo "<br>La risposta corretta era: Iran, Afghanistan, Emirati Arabi Uniti";
	}
    
    $r3 = [
    "r1d3" => "Polonia",
    "r2d3" => "Austria",
    "r3d3" => "Inghilterra",
    "r4d3" => "Italia",
    "r5d3" => "Germania",
    "r6d3" => "Francia",
    ];
    echo "<i><br><br>Domanda 3:</i><br><b>Tra quali paesi fu stipulata la triplice alleanza?</b>";
    if($vet_d3[0]=="r2d3" && $vet_d3[1]=="r4d3" && $vet_d3[2]=="r5d3") {
		$punti1=$punti1+10;
        echo "<br>Hai risposto correttamente: Austria, Italia, Germania";
    } else {
		$punti1=$punti1-5;
        echo "<br>Risposta errata; hai risposto: " . $r3[$vet_d3[0]] . ", " . $r3[$vet_d3[1]] . ", " . $r3[$vet_d3[2]];
    	echo "<br>La risposta corretta era: Austria, Italia, Germania";
	}
    
    $totpunti1=$totpunti+$punti1;
    $_SESSION['tot']=$totpunti1;
    
	echo "<br>___________________________________________________________________";
    echo "<br>In questa sezione del quiz hai totalizzato " . $punti1 . "/30 punti";
    echo "<br><br>Il tuo punteggio totale è " . $totpunti1 . "/90 punti";
    
	echo "<br><a href='form2.html'>Continua il quiz</a>";
?>