```php
<?php

include '../conexion.php';

$sql = "SELECT * FROM certificados ORDER BY id DESC";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Todos los Certificados</title>

<!-- FUENTE -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- LIBRERIAS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:#f0f2f5;

    font-family:'Montserrat',sans-serif;
}

/* BOTON */

.acciones{

    width:100%;

    display:flex;

    justify-content:center;

    margin:30px 0;
}

.acciones button{

    padding:15px 35px;

    background:#0b57d0;

    color:white;

    border:none;

    border-radius:12px;

    font-size:18px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;
}

.acciones button:hover{

    background:#0845a8;
}

/* GALERIA */

.galeria{

    width:100%;

    padding:20px;

    display:grid;

    grid-template-columns:repeat(2, 1fr);

    gap:30px;

    justify-items:center;

    align-items:start;
}

/* RESPONSIVE */

@media(max-width:1500px){

    .galeria{

        grid-template-columns:1fr;
    }
}

/* CERTIFICADO */

.certificado{

    position:relative;

    width:680px;
    height:480px;

    background:
    linear-gradient(
        to bottom,
        #ffffff,
        #faf8f2
    );

    border:2px solid #222;

    overflow:hidden;

    box-shadow:
    0 10px 25px rgba(0,0,0,.15);
}

/* RESPONSIVE MOVIL */

@media(max-width:760px){

    .certificado{

        width:95%;
        height:460px;
    }
}

/* BORDE INTERNO */

.certificado::before{

    content:"";

    position:absolute;

    top:10px;
    left:10px;
    right:10px;
    bottom:10px;

    border:2px solid #555;
}

/* LOGOS */

.logoClub{

    position:absolute;

    top:20px;
    left:25px;

    width:70px;
    height:70px;

    object-fit:contain;
}

.logoConquistadores{

    position:absolute;

    top:20px;
    right:25px;

    width:70px;
    height:70px;

    object-fit:contain;
}

/* TITULOS */

.titulo1{

    position:absolute;

    top:40px;

    width:100%;

    text-align:center;

    font-size:32px;

    font-weight:800;

    letter-spacing:1px;
}

.titulo2{

    position:absolute;

    top:82px;

    width:100%;

    text-align:center;

    font-size:44px;

    font-weight:800;
}

/* TEXTO */

.texto1{

    position:absolute;

    top:140px;

    width:100%;

    text-align:center;

    font-size:20px;

    font-weight:500;
}

/* DECORACION */

.decoracion1{

    position:absolute;

    top:170px;

    width:100%;

    text-align:center;

    font-size:26px;

    color:#c59d2a;
}

/* NOMBRE */

.nombre{

    position:absolute;

    top:190px;

    left:40px;

    width:600px;

    height:70px;

    display:flex;

    align-items:center;

    justify-content:center;

    text-align:center;

    font-size:22px;

    font-weight:800;

    line-height:1.2;

    word-break:break-word;

    overflow:hidden;

    padding:0 10px;
}

/* NOMBRES LARGOS */

.nombreLargo{

    font-size:18px;
}

/* LINEA */

.lineaNombre{

    position:absolute;

    top:250px;

    left:80px;

    width:520px;

    border-bottom:2px solid #c59d2a;
}

/* DESCRIPCION */

.descripcion{

    position:absolute;

    top:270px;

    width:100%;

    text-align:center;

    font-size:20px;
}

/* LINEA CENTRAL */

.descripcion2{

    position:absolute;

    top:330px;

    left:100px;

    width:500px;

    border-bottom:2px solid black;
}

/* DATOS */

.club{

    position:absolute;

    top:340px;

    left:70px;

    font-size:20px;
}

.fecha{

    position:absolute;

    top:340px;

    right:70px;

    font-size:20px;
}

/* FIRMAS */

.lineaFirma1{

    position:absolute;

    bottom:50px;

    left:80px;

    width:170px;

    border-bottom:2px solid black;
}

.lineaFirma2{

    position:absolute;

    bottom:50px;

    right:80px;

    width:170px;

    border-bottom:2px solid black;
}

/* TEXTOS */

.director{

    position:absolute;

    bottom:18px;

    left:85px;

    width:160px;

    text-align:center;

    font-size:17px;

    font-weight:700;
}

.instructor{

    position:absolute;

    bottom:18px;

    right:85px;

    width:160px;

    text-align:center;

    font-size:17px;

    font-weight:700;
}

/* IMPRESION */

@media print{

    .acciones,
    .navbar{

        display:none;
    }

    body{

        background:white;
    }

    .galeria{

        display:block;
    }

    .certificado{

        margin:auto;

        margin-bottom:20px;
    }
}

</style>

</head>

<body>

<?php include '../navbar.php'; ?>

<!-- BOTON -->

<div class="acciones">

    <button onclick="descargarPDF()">
        Descargar PDF
    </button>

</div>

<!-- GALERIA -->

<div class="galeria">

<?php while($fila = mysqli_fetch_assoc($resultado)){

$fecha =
date("d/m/Y",
strtotime($fila['fecha']));

$nombre =
strtoupper($fila['nombre']);

$claseNombre = "nombre";

if(strlen($nombre) > 30){

    $claseNombre .= " nombreLargo";
}

?>

<div class="certificado">

    <!-- LOGOS -->

    <img class="logoClub"
    src="../logos/<?php echo $fila['logo_club']; ?>">

    <img class="logoConquistadores"
    src="../logos/<?php echo $fila['logo_conquistadores']; ?>">

    <!-- TITULOS -->

    <div class="titulo1">
        CERTIFICADO DE
    </div>

    <div class="titulo2">
        CLASE BÍBLICA
    </div>

    <!-- TEXTO -->

    <div class="texto1">
        Se otorga el presente certificado a:
    </div>

    <!-- DECORACION -->

    <div class="decoracion1">
        ✦ ✦ ✦
    </div>

    <!-- NOMBRE -->

    <div class="<?php echo $claseNombre; ?>">

        <?php echo $nombre; ?>

    </div>

    <!-- LINEA -->

    <div class="lineaNombre"></div>

    <!-- DESCRIPCION -->

    <div class="descripcion">
        Por haber cumplido satisfactoriamente la clase bíblica
    </div>

    <!-- LINEA CENTRAL -->

    <div class="descripcion2"></div>

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

<?php } ?>

</div>

<script>

async function descargarPDF(){

    const { jsPDF } = window.jspdf;

    const pdf = new jsPDF({

        orientation:'landscape',

        unit:'mm',

        format:'a4'
    });

    const certificados =
    document.querySelectorAll('.certificado');

    /* POSICIONES PDF */

    const posiciones = [

        {x:5, y:5},
        {x:145, y:5},

        {x:5, y:104},
        {x:145, y:104}
    ];

    let contador = 0;

    for(let i = 0;
        i < certificados.length;
        i++){

        const canvas =
        await html2canvas(

            certificados[i],

            {
                scale:2,

                useCORS:true,

                backgroundColor:"#ffffff"
            }
        );

        const imgData =
        canvas.toDataURL(
        'image/jpeg',
        1.0);

        const pos =
        posiciones[contador];

        pdf.addImage(

            imgData,

            'JPEG',

            pos.x,
            pos.y,

            140,
            99
        );

        contador++;

        /* NUEVA PAGINA */

        if(contador == 4 &&
           i != certificados.length - 1){

            pdf.addPage();

            contador = 0;
        }
    }

    pdf.save(
    'certificados_clases_biblicas_2026.pdf'
    );
}

</script>

</body>
</html>
```
