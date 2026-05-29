<?php

include '../conexion.php';

$sql = "SELECT * FROM certificados
ORDER BY id DESC";

$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Certificados</title>

<style>

body{
    font-family:Arial;
    background:#f5f5f5;
    margin:0;
}

/* CONTENEDOR */

.contenedor{

    width:95%;
    margin:30px auto;
}

/* BOTON TODOS */

.botonTodos{

    display:inline-block;

    margin-bottom:20px;

    padding:12px 20px;

    background:#0b57d0;

    color:white;

    text-decoration:none;

    border-radius:8px;

    font-weight:bold;
}

/* TABLA */

table{

    width:100%;

    border-collapse:collapse;

    background:white;

    box-shadow:0px 0px 10px rgba(0,0,0,.1);
}

th,td{

    border:1px solid #ccc;

    padding:12px;

    text-align:center;
}

th{

    background:#0b57d0;

    color:white;
}

img{

    width:60px;
}

/* BOTON VER */

.btnVer{

    display:inline-block;

    padding:8px 14px;

    background:#198754;

    color:white;

    text-decoration:none;

    border-radius:6px;

    font-size:14px;

    font-weight:bold;
}

.btnVer:hover{

    background:#146c43;
}

</style>

</head>
<body>

<?php include '../navbar.php'; ?>

<div class="contenedor">

    <a class="botonTodos"
       href="todos.php">
       VER TODOS LOS CERTIFICADOS
    </a>

    <table>

        <tr>

            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Clase Bíblica</th>
            <th>Logo Club</th>
            <th>Logo Conquistadores</th>
            <th>Registro</th>
            <th>Acción</th>

        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

        <tr>

            <td><?php echo $fila['id']; ?></td>

            <td><?php echo $fila['nombre']; ?></td>

            <td><?php echo $fila['fecha']; ?></td>
            <td><?php echo $fila['clase_biblica']; ?></td>
            <td>
                <img src="../logos/<?php echo $fila['logo_club']; ?>">
            </td>

            <td>
                <img src="../logos/<?php echo $fila['logo_conquistadores']; ?>">
            </td>

            <td><?php echo $fila['fecha_registro']; ?></td>

            <td>

                <a class="btnVer"
                   href="ver.php?id=<?php echo $fila['id']; ?>">
                   VER CERTIFICADO
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
