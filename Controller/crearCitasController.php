<?php

require_once ('../bd/conexion.php');
require_once("../Model/crearCitasModel.php");

$nuevaCita= new crearCitasModel();

$cita=$nuevaCita->nuevaCita();
if($cita){
    echo'<script>alert("Usted ya cuenta con una cita. Nos pondremos en contacto");window.location="../index.php";</script>';
}
else{
    echo'<script>alert("Sus Datos han sido guardados, para su cita");window.location="../index.php";</script>';
}
require_once("../View/crearCitaView.php");
