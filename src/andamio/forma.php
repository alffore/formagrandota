<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        #contenedor{
            max-width: 600px;
            width: 50%;
            border: 1px solid #ccc;
            margin-left: auto;
            margin-right: auto;
        }

        .componente{
            width: 100%;
            margin-bottom: 10px;
            display: flex;
        }

        .multi{
            display: flex;
            flex-wrap: wrap;
        }

    </style>
</head>
<body>
    <form name="forma" action="procesaforma.php" method="POST">
        <div id="contenedor">
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL & ~E_NOTICE);


            include_once 'Analizador.class.php';

            $ma = new Analizador($conn,'instrucciones.txt',0);

            echo $ma->obtenBuffer();
        ?>
        <div class="componente">
            <input type="submit" value="Guarda" name="Guarda">
        </div>
        </div>
    </form>


</body>
</html>