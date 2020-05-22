<?php
class Analizador{

    protected $conn;
    protected $archivo_instrucciones;
    protected $id;

    protected $buffer;

    /**
     * 
     */
    function __construct($conn,$archivo_instrucciones,$id){

        $this->conn=$conn;
        $this->archivo_instrucciones = $archivo_instrucciones;
        $this->id=$id;

        $this->construccion();
    }

    /**
     * Metodo que analiza un CSV obtiene las instrucciones por renglon que corresponden a un campo y luego llama al constructor del campo
     */
    protected function construccion(){

        $af=file($this->archivo_instrucciones);

        $tam = count($af);

        for($i=1;$i<$tam;$i++){

            $aux= explode("|",$af[$i]);


            $tc=trim($aux[1]);
            
            switch($tc){
                case 'textline':
                    $this->procesaTextLine($aux);
                break;
                case 'textlinem':
                    $this->procesaTextLineM($aux);
                break;
                default:
                break;
            }



        }

    }


    protected function procesaTextLine($acampo){
        $buff='<div class="componente">';
        $buff.='<div>'.$acampo[2].'</div>';
        $buff.='<div><input type="text" name="'.$acampo[0].'" value=""></div>';
        $buff.='</div>';

        $this->buffer.=$buff;
    }



    protected function procesaTextLineM($acampo){
        $buff='<div class="componente multi">';
        $buff.='<div>'.$acampo[2].'</div>';
        for($i=0;$i<$acampo[3];$i++){
            $buff.='<div><input type="text" name="'.$acampo[0]."_$i".'" value=""></div>';
        }
        $buff.='</div>';

        $this->buffer.=$buff;
    }


    public function obtenBuffer(){
        return $this->buffer;
    }

}