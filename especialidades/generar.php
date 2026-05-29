
<?php

include '../conexion.php';




/* DATOS */

$nombre = strtoupper($_POST['nombre']);

$especialidad = strtoupper($_POST['especialidad']);

/* FECHA MYSQL */

$fecha_mysql = $_POST['fecha'];

/* FECHA VISUAL */

$fecha = date("d/m/Y", strtotime($_POST['fecha']));

/* LOGOS */

$logoClub = $_FILES['logo_club']['name'];
$tmpClub = $_FILES['logo_club']['tmp_name'];

$logoConquistadores = $_FILES['logo_conquistadores']['name'];
$tmpConquistadores = $_FILES['logo_conquistadores']['tmp_name'];

/* CREAR CARPETA */

if(!file_exists('../logos')){
    mkdir('../logos');
}

/* GUARDAR IMAGENES */

move_uploaded_file($tmpClub, '../logos/'.$logoClub);

move_uploaded_file($tmpConquistadores, '../logos/'.$logoConquistadores);

/* GUARDAR EN MYSQL */

$sql = "INSERT INTO certificados_especialidades
(nombre,especialidad,fecha,logo_club,logo_conquistadores)

VALUES

('$nombre',
'$especialidad',
'$fecha_mysql',
'$logoClub',
'$logoConquistadores')";

mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Certificado de Especialidad</title>

<style>

body{

    margin:0;
    padding:0;

    background:#dcdcdc;

    font-family:'Times New Roman', serif;
}

/* CONTENEDOR PRINCIPAL */

.contenedor-certificado{

    display:flex;

    justify-content:center;

    align-items:center;

    min-height:calc(100vh - 90px);

    padding:30px;
}

/* CERTIFICADO */

.certificado{

    position:relative;

    width:1100px;
    height:780px;

    background:white;

    border:4px solid #222;

    box-shadow:0px 0px 15px rgba(0,0,0,.3);

    overflow:hidden;
}

/* BORDE INTERNO */

.certificado::before{

    content:"";

    position:absolute;

    top:12px;
    left:12px;
    right:12px;
    bottom:12px;

    border:2px solid #555;
}

/* LOGOS */

.logoClub{

    position:absolute;

    top:25px;
    left:35px;

    width:110px;
    height:110px;

    object-fit:contain;
}

.logoConquistadores{

    position:absolute;

    top:25px;
    right:35px;

    width:110px;
    height:110px;

    object-fit:contain;
}

/* TITULOS */

.titulo1{

    position:absolute;

    top:45px;
    width:100%;

    text-align:center;

    font-size:50px;
    font-weight:bold;

    letter-spacing:2px;
}

.titulo2{

    position:absolute;

    top:105px;
    width:100%;

    text-align:center;

    font-size:68px;
    font-weight:bold;
}

/* TEXTO */

.texto1{

    position:absolute;

    top:235px;
    width:100%;

    text-align:center;

    font-size:30px;
}

/* DECORACION */

.decoracion1{

    position:absolute;

    top:275px;

    width:100%;

    text-align:center;

    font-size:30px;

    color:#c59d2a;
}

/* NOMBRE */

.nombre{

    position:absolute;

    top:325px;

    width:100%;

    text-align:center;

    font-size:42px;
    font-weight:bold;

    line-height:1.1;
}

/* LINEA DORADA */

.lineaNombre{

    position:absolute;

    top:390px;

    left:130px;

    width:840px;

    border-bottom:2px solid #c59d2a;
}

/* DESCRIPCION */

.descripcion{

    position:absolute;

    top:420px;

    width:100%;

    text-align:center;

    font-size:28px;

    line-height:1.5;
}

/* CLUB */

.club{

    position:absolute;

    top:540px;

    left:180px;

    font-size:30px;
}

/* FECHA */

.fecha{

    position:absolute;

    top:540px;

    right:180px;

    font-size:30px;
}

/* LINEAS FIRMA */

.lineaFirma1{

    position:absolute;
    
    bottom:85px;
    left:120px;

    width:250px;

    border-bottom:3px solid black;
}

.lineaFirma2{

    position:absolute;

    bottom:85px;
    right:120px;

    width:250px;

    border-bottom:3px solid black;
}

/* TEXTOS FIRMAS */

.director{

    position:absolute;

    bottom:45px;
    left:150px;

    width:190px;

    text-align:center;

    font-size:22px;
    font-weight:bold;
}

.instructor{

    position:absolute;

    bottom:45px;
    right:150px;

    width:190px;

    text-align:center;

    font-size:22px;
    font-weight:bold;
}

/* BOTON */

.imprimir{

    position:fixed;

    top:20px;
    right:20px;
}

button{

    padding:12px 20px;

    background:#0b57d0;

    color:white;

    border:none;

    border-radius:5px;

    cursor:pointer;

    font-size:16px;
}

/* IMPRESION */

@media print{

    .imprimir{
        display:none;
    }

    body{
        background:white;
    }

    .certificado{
        box-shadow:none;
    }
}

</style>

</head>
<body>

<!-- NAVBAR -->

<?php include '../navbar_Especialidades.php'; ?>

<!-- BOTON -->

<div class="imprimir">

    <button onclick="window.print()">
        Imprimir / Guardar PDF
    </button>

</div>

<!-- CONTENEDOR -->

<div class="contenedor-certificado">

    <div class="certificado">

        <!-- LOGOS -->

        <img class="logoClub"
        src="../logos/<?php echo $logoClub; ?>">

        <img class="logoConquistadores"
        src="../logos/<?php echo $logoConquistadores; ?>">

        <!-- TITULOS -->

        <div class="titulo1">
            CERTIFICADO DE
        </div>

        <div class="titulo2">
            ESPECIALIDAD
        </div>

        <!-- TEXTO -->

        <div class="texto1">
            Se otorga el presente certificado a:
        </div>

        <!-- DECORACION -->

        <div class="decoracion1">
            ✦ ━━━━━ ✦
        </div>

        <!-- NOMBRE -->

        <div class="nombre">
            <?php echo $nombre; ?>
        </div>

        <!-- LINEA -->

        <div class="lineaNombre"></div>

        <!-- DESCRIPCION -->

        <div class="descripcion">

            Por haber cumplido satisfactoriamente
            la especialidad de

            <br>

            <b><?php echo $especialidad; ?></b>

        </div>

        <!-- DATOS -->

        <div class="club">
            <b>Club:</b> Mikel
        </div>

        <div class="fecha">
            <b>Fecha:</b> <?php echo $fecha; ?>
        </div>

        <!-- FIRMAS -->

        <div class="lineaFirma1"></div>

        <div class="lineaFirma2"></div>

        <!-- TEXTOS -->

        <div class="director">
            DIRECTOR
            
        </div>

        <div class="instructor">
            INSTRUCTOR
        </div>

    </div>

</div>

</body>
</html>
