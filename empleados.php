<?php
require_once 'EmpleadoController.php';
$empleadoController = new EmpleadoController();


if(isset($_POST['agregar'])){
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $empleadoController->agregarEmpleado($nombre, $direccion, $telefono, $correo);
}


if(isset($_POST['eliminar'])){
    $id = $_POST['id'];
    $empleadoController->eliminarEmpleado($id);
}


if(isset($_POST['actualizar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $empleadoController->actualizarEmpleado($id, $nombre, $direccion, $telefono, $correo);
}

$empleados = $empleadoController->listarEmpleados();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Empleados</title>
</head>
<body>
    <h1>CRUD Empleados</h1>
    

    <h2>Agregar Empleado</h2>
    <form method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br>
        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br>
        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>
        <button type="submit" name="agregar">Agregar Empleado</button>
    </form>


    <h2>Listado de Empleados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($empleados as $empleado) { ?>
            <tr>
                <td><?php echo $empleado->getId(); ?></td>
                <td><?php echo $empleado->getNombre(); ?></td>
                <td><?php echo $empleado->getDireccion(); ?></td>
                <td><?php echo $empleado->getTelefono(); ?></td>
                <td><?php echo $empleado->getCorreo(); ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $empleado->getId(); ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
