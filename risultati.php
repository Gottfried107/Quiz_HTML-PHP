<?php
	session_start();
	echo "<h2>Risultati</h2>";
    $tot=$_SESSION['tot'];
    echo "Hai totalizzato " . $tot . "/150 punti";
    if ($tot>125){    
    echo ": medaglia di platino";
    } elseif ($tot>90){
    echo ": medaglia d'oro";
    } elseif ($tot>45){
    echo ": medaglia d'argento";
    } elseif ($tot>-10){
    echo ": medaglia di bronzo";
    } else{
    echo ": medaglia di legno";
    }
    
    echo '<br>
          <br>
          <h4>Punteggi e medaglie:</h4>
          <table border="1"; style="text-align: center; border-collapse: collapse; border:1px solid black;">
              <tr>
                  <th width="100px"><i>Punteggio:</i></th>
                  <td width="100px">125 &#60 P &#8804 150</td>
                  <td width="100px">90 &#60 P &#8804 125</td>
                  <td width="100px">45 &#60 P &#8804 90</td>
                  <td width="100px">-10 &#60 P &#8804 45</td>
                  <td width="100px">-75 &#8804 P &#8804 -10</td>
              </tr>
              <tr>
                  <th><i>Medaglia:</i></th>
                  <td style="color: #C9C8C6">Platino</td>
                  <td style="color: #FFD700">Oro</td>
                  <td style="color: #706F6D">Argento</td>
                  <td style="color: #CD7F32">Bronzo</td>
                  <td style="color: #966F33">Legno</td></tr>
          </table>'
?>
