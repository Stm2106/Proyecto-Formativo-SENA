<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Check Box</title>
</head>

<body>
    <center>
    <form action="Pagina2_SumarCheckbox.php" method="POST">
      Ingrese el primer valor
      <input type="number" name="valor1"><br>
      Ingrese el segundo valor
      <input type="number" name="valor2"><br><br>
      
      <input type="checkbox" name="checkbox1">sumar<br>
      <input type="checkbox" name="checkbox2">Restar<br><br>
<input type="submit" name="Operar"><br><br>
    </form>
</center>
</body>
<?php

?>
</html>