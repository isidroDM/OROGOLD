<?php
class crearCitasModel {
//Se declaran las variables privadas necesarias
    private $db;

//Se declara el constructor de a al clase
    public function __construct() {
        $this->db = Conectar::con();
    }
    
    public function nuevaCita() {
        if($this->db){
           $nombre = filter_input(INPUT_POST, 'nombre');
           $correo = filter_input(INPUT_POST, 'correo');
           $phone = filter_input(INPUT_POST, 'telefono');
           
           $sqlconsulta = ("SELECT*FROM orogoldcitas WHERE correo='".$correo."'");
        //php Realiza la consulta a Maria DB
        $resultado = $this->db->query($sqlconsulta);
        //recibe los resultados y los agrega aun arreglo
        echo $resultado->num_rows;
        if($resultado->num_rows!=0){
        $filas = $resultado->fetch_row();    
        return true;
        }
        else  {  
             $sqlinsert2 = ("INSERT INTO orogoldcitas VALUES ('', '".$nombre."', '".$correo."', ".$phone.")");
             echo $sqlinsert2;
            $resInsert = $this->db->query($sqlinsert2);
            return false;
            }
    }
    }
    
}