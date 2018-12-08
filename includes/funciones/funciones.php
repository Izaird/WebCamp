<?php 
    function productos_json(&$boletos, &$camisas = 0, &$etiquetas= 0){
        //El & es para el passo por referencia
        
        $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
        $total_boletos = array_combine($dias, $boletos);
        $json = array();

        foreach ($total_boletos as $dias => $boletos):
           if ((int) $boletos > 0):
               $json[$dias] = (int) $boletos;
           endif;
        endforeach; 


        $camisas = (int)$camisas;
        if ($camisas > 0):
            $json ['camisas' ] = $camisas;
        endif;
          
        $etiquetas = (int)$etiquetas;
        if ($etiquetas > 0):
            $json ['etiquetas' ] = $etiquetas;
        endif;
       return json_encode($json);//Regresa un json formateado (Js Object Notation)
    }


    function eventos_json(&$eventos){

        $eventos_json = array();

        foreach ($eventos as $evento) {
            $eventos_json['eventos'][] = $evento;
        }
    return json_encode($eventos_json);
    }
?>