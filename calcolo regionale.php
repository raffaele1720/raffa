<html>
<head>
   <link rel="stylesheet" href="stile.css">
   
</head>
<body>

    <form action="prova.php" method="post">
        <label class="a" for="name">reddito</label>
        <input  class="b" type ="text" name="reddito" value=" " placebolder ="inserisci reddito"><br>
        <label class="c" for ="name">addizionale regionale</label>
        <input  class="d" type="text" name="addizionale" value=" " placebolder="inserisci addizionale regionale"><br>
        <label   class="e" for ="name"> addizionale comunale</label>
        <input  class="f" type="text" name="addizionale comunale" value=" " placebolder="inserisci addizionale comunale"><br>
        <input class="bottone1"type="submit" value="calcola">
        <input class="bottone2"type="reset" value="cancella">
</form>



<?php
$reddito = $_POST['reddito'];
$addizionale_regionale = $_POST['addizionale'];
$addizionale_comunale = $_POST['addizionale comunale'];


function calcolo() {
      GLOBAL $reddito;
      GLOBAL $addizionale_regionale;
      GLOBAL $addizionale_comunale;
         

        $calcolo_addizionale_regionale = ($reddito * $addizionale_regionale) 1.23/100;
        $calcolo_addizionale_comunale = ($reddito * $addizionale_comunale)0.8/100;
        $calcolo_totale = $calcolo_addizionale_comunale+$calcolo_addizionale_regionale;
        echo "l'addizionale regionale e' di:" . $calcolo_addizionale_regionale . "euro" .<br>
        echo "l addizionale comunale e' di:" .$calcolo_addizionale_comunale . "euro" .<br>
        echo "l'addizionaele totale da pagare e' di:" . $calcolo_totale. "euro";


      


}

calcolo();






?>

</body>
</html>