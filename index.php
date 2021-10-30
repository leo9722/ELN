<!DOCTYPE html>
<html>
<head>
  <title> Projet Domo</title>
  </head>
  <link rel="stylesheet" href="index.css" type="text/css" media="screen" />
  <body>
    <form method="post">
      <fieldset>
        <legend> <h1>Projet Domotique </h1></legend>
          <p>
            <label for="Tube_rouge"> <h3 id="title_1">Tube Fluo Rouge : </h3></label> 
            <br>
            On
            <input type="radio" name="Tube_rouge" id="Tube_rouge_On" value="1"/>
          </p>
          <p>
            Off
            <input type="radio" name="Tube_rouge" id="Tube_rouge_Off" value="2"/> <br>

            <p>
            <label for="Tube_vert"> <h3 id="title_2"> Tube Fluo vert : </h3></label> 
            <br>
            On
            <input type="radio" name="Tube_vert" id="Tube_vert_On" value="1"/>
          </p>
          <p>
            Off
            <input type="radio" name="Tube_vert_" id="Tube_vert_Off" value="2"/> <br>

            <p>
            <label for="Tube_bleu"><h3 id="title_3">Tube Fluo bleu : </h3></label> 
            <br>
            On
            <input type="radio" name="Tube_bleu" id="Tube_bleu_On" value="1"/>
          </p>
          <p>
            Off
            <input type="radio" name="Tube_bleu" id="Tube_bleu_Off" value="2"/> <br> <br>


            <input type="submit" name="submit" value="Press The Button" />
          </p>
      </fieldset>
    </form>



<div id="debug">
  <h2> DEBUG SECTION </h2>

<?php


if ($_POST['Tube_rouge'] == 1) {
    $out = shell_exec('sudo./domotik C 1 1 10');
    echo $out . "<br>";
} else if ($_POST['Tube_rouge'] == 2) {
    $out = shell_exec('sudo ./domotik C 1 0 10');
    echo $out . "<br>";
}

if ($_POST['Tube_vert'] == 1) {
    $out = shell_exec('sudo ./domotik B 1 1 10');
    echo $out . "<br>";
} else if ($_POST['Tube_vert'] == 2) {
    $out = shell_exec('sudo ./domotik B 1 0 10');
    echo $out . "<br>";
}


if ($_POST['Tube_bleu'] == 1) {
    $out =shell_exec('sudo ./domotik A 1 1 10');
    echo $out;
} else if ($_POST['Tube_bleu'] == 2) {
    $out = shell_exec('sudo /./domotik A 1 0 10');
    echo $out . "<br>";
}


?>
</div>

</body>
</html>