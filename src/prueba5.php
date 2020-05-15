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

    async function manejaEvento(e){

        console.log(e.target)
        console.log(e.target.value)
        console.log(`name: ${e.target.name} value: ${e.target.value}`)

        const consulta = await fetch(`./proceso1.php?name=${e.target.name}&value=${e.target.value}`)
        const res= await consulta.text()

        console.log(`resultado: ${res}`)
    }



    oa_celdas.forEach((obj)=>{ 
        
            obj.addEventListener('blur',manejaEvento)
        
    }) 




</script>
</body>
</html>