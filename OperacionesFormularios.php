<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones desde un formulario</title>
</head>
<body>
    <form action="" method="GET" action="">
        
        Digite el primer número: <br>
        <input type="text" name="num1" required><br>

        Digite el segundo número: <br>
        <input type="text" name="num2" required><br><br><br>

        <input type="submit" name="sumar"><br><br><br>

    </form>

</body>

    <?php
//"$_POST es un super variable para recuperar los datos"
        $num10=$_GET['num1']; 
        $num20=$_GET['num2'];

        $resultado= $num10+$num20;

        echo 'La suma de: '.$num10.'+'.$num20.' es igual a '.$resultado;

    ?>

</html>