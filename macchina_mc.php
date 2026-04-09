<html>
<head>
   <link rel="stylesheet" href="stile1.css">
   
</head>
<body>
    

    <form action="macchina.php" method="post">
        <label class="a" for="name">reddito</label>
        <input  class="b" type ="text" name="reddito" value=" " placebolder ="inserisci reddito"><br>
        <label class="c" for ="name">cognome</label>
        <input  class="d" type="text" name="cognome" value=" " placebolder="inserisci cognome"><br>
        <label  class="e" for ="name">nome</label>
         <input  class="f" type="text" name="nome" value=" " placebolder="inserisci nome"><br>
            <label  class="g" for ="name">auto</label>
        <input  class="h" type="text" name="auto" value=" " placebolder="inserisci auto"><br>
        <label  class="l" for ="name">rate</label>
        <input  class="m" type="text" name="rate" value=" " placebolder="inserisci rate"><br>
         
        <input class="bottone1"type="submit" value="calcola">
        <input class="bottone2"type="reset" value="cancella">
        <select
        class="n" name="accessori">
              <option value=" "></option>
            <option value="ruote">ruote</option>
            <option value="cambio">cambio automatico</option>
            <option value="fanali">fanali</option>
            <option value="telecamera">telecamera</option>
          
</select>

 
</form>
</body>
</html>