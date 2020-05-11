<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    for($i=0;$i<100;$i++){
        for($j=0;$j<100;$j++){
            $aux="c_$i"."_$j";
            echo '<input type="text" name="'.$aux.'" id="'.$aux.'" class="celda">';
        }
    }


?>

<script>

    var oa_celdas = document.querySelectorAll(".celda")

    //console.log(oa_celdas)

    oa_celdas.forEach(function(obj){ }) // en linea

    oa_celdas.forEach((obj)=>{ }) //en linea forma inyeccion




    //funcion fuera de cuerpo o fuera de linea
    function eventosCelda(obj){

    }


    oa_celdas.forEach(eventosCelda(obj))





    //alias fuera de linea
    var mifun = eventosCelda

    oa_celdas.forEach(mifun(obj))


    // alias a funcion de inyeccion
    var mifun2 = obj => { }

    oa_celdas.forEach(mifun2(o))


</script>
</body>
</html>