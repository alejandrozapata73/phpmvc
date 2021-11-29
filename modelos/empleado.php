<?php


class Empleado{


    public static function crear($nombre,$correo){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("INSERT INTO empleados(nombre,correo) VALUES (?,?)");

        $sql->execute(array($nombre,$correo));

    }



}



?>