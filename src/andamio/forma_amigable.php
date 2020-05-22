<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="procesaforma.php" method="POST">
<?PHP 

    for($i=0;$i<10;$i++){

        echo '<input type="text" name="campo['.$i.']" value="'.$i.'"><br>';

    }


?>
<input type="submit" name="guardar" value="guardar">
</form>
    
</body>
</html>