<?php

include '../conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM certificados
WHERE id='$id'";

$resultado = mysqli_query($conn,$sql);

$fila = mysqli_fetch_assoc($resultado);

$fecha = date("d/m/Y", strtotime($fila['fecha']));

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ver Certificado</title>

<style>

body{

    margin:0;
    padding:20px;

    background:#dcdcdc;

    display:flex;
    justify-content:center;
}

.certificado{

    position:relative;

    width:1100px;
    height:780px;

    background:white;

    border:4px solid #222;
}

.certificado::before{

    content:"";

    position:absolute;

    top:12px;
    left:12px;
    right:12px;
    bottom:12px;

    border:2px solid #555;
}

.logoClub{

    position:absolute;

    top:25px;
    left:35px;

    width:110px;
}

.logoConquistadores{

    position:absolute;

    top:25px;
    right:35px;

    width:110px;
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

    top:275px; /* SUBIDO */

    width:100%;

    text-align:center;

    font-size:30px;

    color:#c59d2a;
}

/* NOMBRE */

.nombre{

    position:absolute;

    top:335px;

    width:100%;

    text-align:center;

    font-size:42px;
    font-weight:bold;

    line-height:1.1;
}

/* LINEA DORADA */

.lineaNombre{

    position:absolute;

    top:400px; /* SUBIDA */

    left:130px;

    width:840px;

    border-bottom:2px solid #c59d2a;
}

/* DESCRIPCION */

.descripcion{

    position:absolute;

    top:420px; /* SUBIDA */

    width:100%;

    text-align:center;

    font-size:30px;
}
/* NOMBRE CLASE BIBLICA */

.descripcion2{

    position:absolute;

    top:475px;

    width:100%;

    text-align:center;

    font-size:32px;

    font-weight:bold;
}
/* CLUB */

.club{

    position:absolute;

    top:530px; /* SUBIDO */

    left:180px;

    font-size:30px;
}

/* FECHA */

.fecha{

    position:absolute;

    top:530px; /* SUBIDO */

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

    top: 4 px;
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

</style>

</head>
<body>

<div class="certificado">

    <img class="logoClub"
    src="../logos/<?php echo $fila['logo_club']; ?>">

    <img class="logoConquistadores"
    src="../logos/<?php echo $fila['logo_conquistadores']; ?>">

    <div class="titulo1">
        CERTIFICADO DE
    </div>

    <div class="titulo2">
        CLASE BÍBLICA
    </div>

    <div class="texto1">
        Se otorga el presente certificado a:
    </div>

    <div class="decoracion1">
        ✦ ━━━━━ ✦
    </div>

    <div class="nombre">
        <?php echo $fila['nombre']; ?>
    </div>

    <div class="lineaNombre"></div>

    <div class="descripcion">
        Por haber cumplido satisfactoriamente la clase bíblica
    </div>
     <div class="descripcion2">
        <?php echo $fila['clase_biblica']; ?>
    </div>       
    <div class="club">
        <b>Club:</b> Mikel
    </div>

    <div class="fecha">
        <b>Fecha:</b> <?php echo $fecha; ?>
    </div>

    <div class="lineaFirma1"></div>

    <div class="lineaFirma2"></div>

    <div class="director">
        DIRECTOR
    </div>

    <div class="instructor">
        INSTRUCTOR
    </div>

</div>

</body>
</html>
