<?php
	session_start();	
	$totpunti=0;
    $punti=0;
	$d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $d3=$_POST['d3'];
    $d4=$_POST['d4'];
    $d5=$_POST['d5'];
    $d6=$_POST['d6'];
	
    $r1 = [
    "r1d1" => "Karate",
    "r2d1" => "Kung Fu",
    "r3d1" => "Judo",
    "r4d1" => "Taekwondo",
    ];
    echo "<i>Domanda 1:</i><br><b>Qual è il nome dell'arte marziale che deriva dai monaci Shaolin?</b>";
    if($d1=="r2d1") {
		$punti=$punti+10;
        echo "<br>Hai risposto correttamente: Kung Fu";
    } else {
		$punti=$punti-5;
        echo "<br>Risposta errata; hai risposto: " . $r1[$d1];
    	echo "<br>La risposta corretta era: Kung Fu";
	}
    
    $r2 = [
    "r1d2" => "John Locke",
    "r2d2" => "François-Marie Voltaire",
    "r3d2" => "Thomas Hobbes",
    "r4d2" => "Jean-Jacques Rousseau",
    ];
    echo "<i><br><br>Domanda 2:</i><br><b>Qual è il nome del filosofo che ha scritto \"Il contratto sociale\"?</b>";
    if($d2=="r4d2") {
		$punti=$punti+10;
        echo "<br>Hai risposto correttamente: Jean-Jacques Rousseau";
    } else {
		$punti=$punti-5;
        echo "<br>Risposta errata; hai risposto: " . $r2[$d2];
    	echo "<br>La risposta corretta era: Jean-Jacques Rousseau";
	}
    
    $r3 = [
    "r1d3" => "Lev Tolstoj",
    "r2d3" => "Albert Camus",
    "r3d3" => "Fyodor Dostoyevsky",
    "r4d3" => "Franz Kafka",
    ];
    echo "<i><br><br>Domanda 3:</i><br><b>Chi ha scritto il libro \"Guerra e Pace\"?</b>";
    if($d3=="r1d3") {
		$punti=$punti+10;
        echo "<br>Hai risposto correttamente: Lev Tolstoj";
    } else {
		$punti=$punti-5;
        echo "<br>Risposta errata; hai risposto: " . $r3[$d3];
    	echo "<br>La risposta corretta era: Lev Tolstoj";
	}
    
    $r4 = [
    "r1d4" => "Berlino",
    "r2d4" => "Versailles",
    "r3d4" => "Londra",
    "r4d4" => "Norimberga",
    ];
    echo "<i><br><br>Domanda 4:</i><br><b>Qual è il nome della città dove fu firmato il Trattato di Pace tra gli alleati e la Germania alla fine della Prima Guerra Mondiale?</b>";
    if($d4=="r2d4") {
		$punti=$punti+10;
        echo "<br>Hai risposto correttamente: Versailles";
    } else {
		$punti=$punti-5;
        echo "<br>Risposta errata; hai risposto: " . $r4[$d4];
    	echo "<br>La risposta corretta era: Versailles";
	}
    
    $r5 = [
    "r1d5" => "Salvador Dalí",
    "r2d5" => "Leonardo da Vinci",
    "r3d5" => "Claude Debussy",
    "r4d5" => "Lucio Fontana",
    ];
    echo "<i><br><br>Domanda 5:</i><br><b>Qual è il nome dell'artista che ha dipinto \"La tentazione di Sant’Antonio\"?</b>";
    if($d5=="r1d5") {
		$punti=$punti+10;
        echo "<br>Hai risposto correttamente: Salvador Dalí";
    } else {
		$punti=$punti-5;
        echo "<br>Risposta errata; hai risposto: " . $r5[$d5];
    	echo "<br>La risposta corretta era: Salvador Dalí";
	}
    
    $r6 = [
    "r1d6" => "Germania",
    "r2d6" => "Repubblica di Venezia",
    "r3d6" => "Cina",
    "r4d6" => "Egitto",
    ];
    echo "<i><br><br>Domanda 6:</i><br><b>Qual è il nome del paese in cui è stata inventata la stampa a caratteri mobili?</b>";
    if($d6=="r3d6") {
		$punti=$punti+10;
        echo "<br>Hai risposto correttamente: Cina";
    } else {
		$punti=$punti-5;
        echo "<br>Risposta errata; hai risposto: " . $r6[$d6];
    	echo "<br>La risposta corretta era: Cina";
	}
    
    $totpunti=$punti;
    $_SESSION['tot']=$totpunti;
    
    echo "<br><br><br>___________________________________________________________________";
    echo "<br>In questa sezione del quiz hai totalizzato " . $punti . "/60 punti";
    echo "<br><br>Il tuo punteggio totale è " . $totpunti . "/60 punti";
    
    echo "<br><br><br><a href='form1.html'>Continua il quiz</a>";
?>
