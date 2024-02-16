<?php
require_once 'Empleado.php';

class EmpleadoController {
    public function listarEmpleados() {
       
        return array();
    }

    public function agregarEmpleado($nombre, $direccion, $telefono, $correo) {
        $empleado = new Empleado($nombre, $direccion, $telefono, $correo);
       
    }

    public function eliminarEmpleado($id) {
     
    }

    public function obtenerEmpleado($id) {
    
        return null;
    }

    public function actualizarEmpleado($id, $nombre, $direccion, $telefono, $correo) {
      
    }
}
?>
