<!DOCTYPE html>
   <html lang="pt-BR">
    <head>
      <meta charset="UTF-8">
      <title>Calculo IMC</title>

    </head>
  <body>
     <?php
	$n = $_POST["n"];
	echo "$n";
  $t= $_POST["t"];
  $p= $_POST["p"];
  $genero= $_POST["genero"];
  $imc= ($p / $t)/$t;

  if ( $genero == "feminino")
  if ($imc  <19.1) {
    echo "$imc Abaixo do peso"; 
  } elseif($imc >19.1 && $imc <= 25.8  ) {
    echo "$imc Peso normal";
  }    
  elseif ($imc >25.8 && $imc <=27.2) {
    echo "$imc Levemente Acima do Peso ";
  }
 elseif ($imc >27.3 && $imc <=32.2) {
    echo "$imc Acima do Peso ";
  }
  elseif ($imc >32.2 ) {
    echo " $imc Obeso ";
  }
if ( $genero == "masculino")
  if ($imc  <21.1) {
    echo "$imc Abaixo do peso"; 
  } elseif($imc >21.1 && $imc <= 27.2  ) {
    echo "$imc Peso normal";
  }    
  elseif ($imc >27.2 && $imc <=32.2) {
    echo "$imc Levemente Acima do Peso ";
  }
 elseif ($imc >32.2 && $imc <=35.2) {
    echo "$imc Acima do Peso ";
  }
  if ($imc >35.2 ) {
    echo " $imc Obeso ";
  }
?>


    </form>
    <form action="imc.html" method="POST">
            
	   <input name="voltar" type="submit" value="Voltar">
   </body>
    </html>