<?php

class CONECTAR{
    private $servidor="localhost";
    private $usuario="root";
    private $bd="restaurant";
    private $password="";

    public function conexion(){
        $conexion=mysqli_connect($this->servidor,
            $this->usuario,
            $this->password,
            $this->bd,
            3308);
        return $conexion;
    }
}
//PRUEBA DE CONEXION 
//
$obj=new CONECTAR();
if ($obj->conexion()) {
    ECHO "simona la mona";
}
else{
    echo "Nel sin conexion";
}
?>