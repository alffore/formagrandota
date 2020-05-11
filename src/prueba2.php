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

    

    oa_celdas.forEach((obj)=>{ 
        if(obj.id=='c_75_75'){
            console.log(obj)
        }
    }) 




</script>
</body>
</html>