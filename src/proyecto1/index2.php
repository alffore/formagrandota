<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        #hojaceldas{
            min-width: 500px;
            width: 50%;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #ccc;

        }

        .renglon{
            width: 100%;
            height: 30px;
           /* border: 1px solid #f00;*/
            display: flex;
        }

        .celda{
            /*min-width: 10%;*/
            height: 30px;
            /*border: 1px solid #0f0;*/
        }

    </style>

</head>
<body>
    <div id="hojaceldas">    
    <?php


        $ncx = 10;
        $ncy =5;

        $atipoxcelda=[0=>'texto',3=>'texto',1=>'entero',2=>'selector'];


        $buff="";
        for($j=0;$j<$ncy;$j++){
            $buff.='<div class="renglon">';

            for($i=0;$i<$ncx;$i++){

                $buff.='<div class="celda">';
                $tipo=$atipoxcelda[$i];
                $id="c_".$i."_".$j;

                switch($tipo){
                    case 'entero':
                        $id.="_e";
                        $buff.='<input type="number" name="'.$id.'" id="'.$id.'" value="">'; 
                    break;
                    case 'selector':
                        $id.="_s";
                        $buff.='<input type="text" name="'.$id.'" id="'.$id.'" value="" class="selec">'; 
                    break;
                    case 'texto':
                    default:
                        $id.="_t";
                        $buff.='<input type="text" name="'.$id.'" id="'.$id.'"  value="">'; 
                    break;
                }
                   
                
                
                $buff.='</div>';
            }

            $buff.='</div>';
        }

        echo $buff;
    ?>
    </div>
    <script src="app.js" ></script>
</body>
</html>