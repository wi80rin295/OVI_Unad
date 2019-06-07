<?php
    function conectar (){
        //Creas una variable de tipo objeto mysqli con los datos de la bd y el charset que quieras
        //$mysqli = new mysqli('localhost', 'Unad_Pagina', 'Ing_Sis2019', 'UnadPag_Consultas');
        $mysqli->set_charset("utf8"); 
        return $mysqli;        
}

?>