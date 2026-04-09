



<?php
$reddito = $_POST['reddito'];
$reddito = (float)$reddito;
$cognome = $_POST['cognome'];
$nome = $_POST['nome'];
$auto = $_POST['auto'];
$rate = $_POST['rate'];

$accessori = $_POST['accessori'];





function calcolo(){


    $calcolo_rate = $GLOBALS["reddito"] / $GLOBALS["rate"];
  

    echo "<table border='1'; style ='border-collapse: collapse;margin-left:35%;color:red;background-color:lightblue;'>
                 
        <tr>
        <th>nome</th> 
        <th>cognome</th><br>
        <th>auto</th><br>
        <th>reddito</th><br>
        <th>rate</th><br>
        <th>accessori</th><br>
        <th>calcolo rate</th><br>
      
        </tr>
        <tr>
        <td>".$GLOBALS["nome"]."</td>
        <td>".$GLOBALS["cognome"]."</td>
        <td>".$GLOBALS["auto"]."</td>
        <td>".$GLOBALS["reddito"]."</td>
        <td>".$GLOBALS["rate"]."</td>
        <td>".$GLOBALS["accessori"]."</td>
        <td>$calcolo_rate</td>
            </tr>        
        </table>";



}                                                                                                                                                                                                                                                                      

calcolo();
?>