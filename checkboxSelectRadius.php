<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recibe.php" method="POST">
<input type="text" placeholder="Nombre: " name="Nombre">
<br>
<br><br>
<label for="Hombre">Hombre</label>
<input type="radio" name="sexo" value="hombre" id="hombre">
<br>
<label for="Hombre">Mujer</label>
<input type="radio" name="sexo" value="mujer" id="mujer">
<br><br><br>
<select name="year" id="year">
<option value="2000">2000</option>
<option value="2000">2001</option>
<option value="2000">2002</option>
</select>
<br><br><br>
<label for="terminos">¿Acepta los terminos?</label>
<input type="checkbox" name="terminos" id="terminos" values="ok">
<br><br><br>
<input type="submit" values="enviar">
</form>
</body>
</html>