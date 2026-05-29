



<<<<<<< HEAD
```php
=======

>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
<?php

include '../conexion.php';

$sql = "SELECT * FROM certificados ORDER BY id DESC";
<<<<<<< HEAD
$resultado = mysqli_query($conn, $sql);
=======

$resultado = mysqli_query($conn,$sql);
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

?>

<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Todos los Certificados</title>

<!-- FUENTE -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- LIBRERIAS -->

=======
<meta charset="UTF-8">
<title>Todos los Certificados</title>
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
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

<<<<<<< HEAD
    font-family:'Montserrat',sans-serif;
}

=======
    font-family:'Times New Roman', serif;
}
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
/* BOTON */

.acciones{

<<<<<<< HEAD
    width:100%;

    display:flex;

    justify-content:center;

    margin:30px 0;
=======
    text-align:center;

    margin:25px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

.acciones button{

<<<<<<< HEAD
    padding:15px 35px;
=======
    padding:15px 30px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    background:#0b57d0;

    color:white;

    border:none;

<<<<<<< HEAD
    border-radius:12px;

    font-size:18px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;
}

.acciones button:hover{

    background:#0845a8;
=======
    border-radius:10px;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* GALERIA */

.galeria{

<<<<<<< HEAD
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
=======
    padding:40px;

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(600px,1fr));

    gap:40px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* CERTIFICADO */

.certificado{

    position:relative;

<<<<<<< HEAD
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
=======
    width:100%;

    height:780px;

    background:white;

    border:4px solid #222;

    box-shadow:0px 0px 15px rgba(0,0,0,.3);

    overflow:hidden;

    transform:scale(0.65);

    transform-origin:top center;

    margin-bottom:-300px;

    transition:.3s;
}

.certificado:hover{

    transform:scale(0.58);
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* BORDE INTERNO */

.certificado::before{

    content:"";

    position:absolute;

<<<<<<< HEAD
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
=======
    top:12px;
    left:12px;
    right:12px;
    bottom:12px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    border:2px solid #555;
}

/* LOGOS */

.logoClub{

    position:absolute;

<<<<<<< HEAD
    top:20px;
    left:25px;

    width:70px;
    height:70px;
=======
    top:25px;
    left:35px;

    width:110px;
    height:110px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    object-fit:contain;
}

.logoConquistadores{

    position:absolute;

<<<<<<< HEAD
    top:20px;
    right:25px;

    width:70px;
    height:70px;
=======
    top:25px;
    right:35px;

    width:110px;
    height:110px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    object-fit:contain;
}

/* TITULOS */

.titulo1{

    position:absolute;

<<<<<<< HEAD
    top:40px;

=======
    top:45px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    width:100%;

    text-align:center;

<<<<<<< HEAD
    font-size:32px;

    font-weight:800;

    letter-spacing:1px;
=======
    font-size:50px;
    font-weight:bold;

    letter-spacing:2px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

.titulo2{

    position:absolute;

<<<<<<< HEAD
    top:82px;

=======
    top:105px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    width:100%;

    text-align:center;

<<<<<<< HEAD
    font-size:44px;

    font-weight:800;
=======
    font-size:68px;
    font-weight:bold;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* TEXTO */

.texto1{

    position:absolute;

<<<<<<< HEAD
    top:140px;

=======
    top:235px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    width:100%;

    text-align:center;

<<<<<<< HEAD
    font-size:20px;

    font-weight:500;
=======
    font-size:30px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* DECORACION */

.decoracion1{

    position:absolute;

<<<<<<< HEAD
    top:170px;
=======
    top:270px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    width:100%;

    text-align:center;

<<<<<<< HEAD
    font-size:26px;
=======
    font-size:30px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    color:#c59d2a;
}

/* NOMBRE */

.nombre{

    position:absolute;

<<<<<<< HEAD
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
=======
    top:310px;

    width:100%;

    text-align:center;

    font-size:42px;
    font-weight:bold;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* LINEA */

.lineaNombre{

    position:absolute;

<<<<<<< HEAD
    top:250px;

    left:80px;

    width:520px;
=======
    top:400px;

    left:70px;

    width:700px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    border-bottom:2px solid #c59d2a;
}

/* DESCRIPCION */

.descripcion{

    position:absolute;

<<<<<<< HEAD
    top:270px;
=======
    top:420px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

    width:100%;

    text-align:center;

<<<<<<< HEAD
    font-size:20px;
}

/* LINEA CENTRAL */

=======
    font-size:30px;
}
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
.descripcion2{

    position:absolute;

<<<<<<< HEAD
    top:330px;

    left:100px;

    width:500px;

    border-bottom:2px solid black;
}

/* DATOS */
=======
    top:470px;

    width:100%;

    text-align:center;

    font-size:30px;
}
/* CLUB */
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

.club{

    position:absolute;

<<<<<<< HEAD
    top:340px;

    left:70px;

    font-size:20px;
}

=======
    top:530px;

    left:180px;

    font-size:30px;
}

/* FECHA */

>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
.fecha{

    position:absolute;

<<<<<<< HEAD
    top:340px;

    right:70px;

    font-size:20px;
=======
    top:530px;

    right:180px;

    font-size:30px;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* FIRMAS */

.lineaFirma1{

    position:absolute;
<<<<<<< HEAD

    bottom:50px;

    left:80px;

    width:170px;

    border-bottom:2px solid black;
=======
    
    bottom:85px;
    left:120px;

    width:250px;

    border-bottom:3px solid black;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

.lineaFirma2{

    position:absolute;

<<<<<<< HEAD
    bottom:50px;

    right:80px;

    width:170px;

    border-bottom:2px solid black;
=======
    bottom:85px;
    right:120px;

    width:250px;

    border-bottom:3px solid black;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

/* TEXTOS */

.director{

    position:absolute;

<<<<<<< HEAD
    bottom:18px;

    left:85px;

    width:160px;

    text-align:center;

    font-size:17px;

    font-weight:700;
=======
    bottom:45px;
    left:150px;

    width:190px;

    text-align:center;

    font-size:22px;
    font-weight:bold;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

.instructor{

    position:absolute;

<<<<<<< HEAD
    bottom:18px;

    right:85px;

    width:160px;

    text-align:center;

    font-size:17px;

    font-weight:700;
}

=======
    bottom:45px;
    right:150px;

    width:190px;

    text-align:center;

    font-size:22px;
    font-weight:bold;
}
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
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
<<<<<<< HEAD
=======

        padding:0;
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    }

    .certificado{

<<<<<<< HEAD
        margin:auto;

        margin-bottom:20px;
    }
}

</style>

</head>

<body>

<?php include '../navbar.php'; ?>

<!-- BOTON -->

=======
        page-break-after:always;

        margin:0 auto 40px auto;

        transform:scale(0.9);

        box-shadow:none;
    }
}
</style>

</head>
<body>

<?php include '../navbar.php'; ?>
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
<div class="acciones">

    <button onclick="descargarPDF()">
        Descargar PDF
    </button>

</div>
<<<<<<< HEAD

<!-- GALERIA -->

=======
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
<div class="galeria">

<?php while($fila = mysqli_fetch_assoc($resultado)){

<<<<<<< HEAD
$fecha =
date("d/m/Y",
strtotime($fila['fecha']));

$nombre =
strtoupper($fila['nombre']);

$claseNombre = "nombre";

if(strlen($nombre) > 30){

    $claseNombre .= " nombreLargo";
}
=======
$fecha = date("d/m/Y", strtotime($fila['fecha']));
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

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
<<<<<<< HEAD
        ✦ ✦ ✦
=======
        ✦ ━━━━━ ✦
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    </div>

    <!-- NOMBRE -->

<<<<<<< HEAD
    <div class="<?php echo $claseNombre; ?>">

        <?php echo $nombre; ?>

=======
    <div class="nombre">
        <?php echo $fila['nombre']; ?>
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    </div>

    <!-- LINEA -->

    <div class="lineaNombre"></div>

    <!-- DESCRIPCION -->

    <div class="descripcion">
        Por haber cumplido satisfactoriamente la clase bíblica
    </div>
<<<<<<< HEAD

    <!-- LINEA CENTRAL -->

    <div class="descripcion2"></div>

=======
    <div class="descripcion2">
            ______________________________________________
    </div>
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
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

<<<<<<< HEAD
=======
</body>

>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
<script>

async function descargarPDF(){

    const { jsPDF } = window.jspdf;

<<<<<<< HEAD
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
=======
    const pdf = new jsPDF('p','mm','a4');

    const certificados = document.querySelectorAll('.certificado');

    /* POSICIONES 4 POR HOJA */

    const posiciones = [

        {x:10,  y:10},
        {x:105, y:10},

        {x:10,  y:145},
        {x:105, y:145}
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
    ];

    let contador = 0;

<<<<<<< HEAD
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
=======
    for(let i = 0; i < certificados.length; i++){

        const canvas = await html2canvas(certificados[i],{
            scale:2
        });

        const imgData = canvas.toDataURL('image/png');

        const pos = posiciones[contador];

        pdf.addImage(
            imgData,
            'PNG',
            pos.x,
            pos.y,
            90,
            120
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
        );

        contador++;

        /* NUEVA PAGINA */

<<<<<<< HEAD
        if(contador == 4 &&
           i != certificados.length - 1){
=======
        if(contador == 4 && i != certificados.length - 1){
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

            pdf.addPage();

            contador = 0;
        }
    }

<<<<<<< HEAD
    pdf.save(
    'certificados_clases_biblicas_2026.pdf'
    );
=======
    pdf.save('certificados clases biblicas 2026.pdf');
>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d
}

</script>

<<<<<<< HEAD
</body>
</html>
```
=======





</html>

>>>>>>> 3ecdbc9f89b731bdec6da33197e97055188b6b1d

