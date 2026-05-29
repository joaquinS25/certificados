
<?php

include '../conexion.php';

$sql = "SELECT * FROM certificados ORDER BY id DESC";

$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Todos los Certificados</title>
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

    font-family:'Times New Roman', serif;
}
/* BOTON */

.acciones{

    text-align:center;

    margin:25px;
}

.acciones button{

    padding:15px 30px;

    background:#0b57d0;

    color:white;

    border:none;

    border-radius:10px;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;
}

/* GALERIA */

.galeria{

    padding:40px;

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(600px,1fr));

    gap:40px;
}

/* CERTIFICADO */

.certificado{

    position:relative;

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

    top:270px;

    width:100%;

    text-align:center;

    font-size:30px;

    color:#c59d2a;
}

/* NOMBRE */

.nombre{

    position:absolute;

    top:310px;

    width:100%;

    text-align:center;

    font-size:42px;
    font-weight:bold;
}

/* LINEA */

.lineaNombre{

    position:absolute;

    top:400px;

    left:70px;

    width:700px;

    border-bottom:2px solid #c59d2a;
}

/* DESCRIPCION */

.descripcion{

    position:absolute;

    top:420px;

    width:100%;

    text-align:center;

    font-size:30px;
}
.descripcion2{

    position:absolute;

    top:470px;

    width:100%;

    text-align:center;

    font-size:30px;
}
/* CLUB */

.club{

    position:absolute;

    top:530px;

    left:180px;

    font-size:30px;
}

/* FECHA */

.fecha{

    position:absolute;

    top:530px;

    right:180px;

    font-size:30px;
}

/* FIRMAS */

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

/* TEXTOS */

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

        padding:0;
    }

    .certificado{

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
<div class="acciones">

    <button onclick="descargarPDF()">
        Descargar PDF
    </button>

</div>
<div class="galeria">

<?php while($fila = mysqli_fetch_assoc($resultado)){

$fecha = date("d/m/Y", strtotime($fila['fecha']));

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
        ✦ ━━━━━ ✦
    </div>

    <!-- NOMBRE -->

    <div class="nombre">
        <?php echo $fila['nombre']; ?>
    </div>

    <!-- LINEA -->

    <div class="lineaNombre"></div>

    <!-- DESCRIPCION -->

    <div class="descripcion">
        Por haber cumplido satisfactoriamente la clase bíblica
    </div>
    <div class="descripcion2">
            ______________________________________________
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

<?php } ?>

</div>

</body>

<script>

async function descargarPDF(){

    const { jsPDF } = window.jspdf;

    const pdf = new jsPDF('p','mm','a4');

    const certificados = document.querySelectorAll('.certificado');

    /* POSICIONES 4 POR HOJA */

    const posiciones = [

        {x:10,  y:10},
        {x:105, y:10},

        {x:10,  y:145},
        {x:105, y:145}
    ];

    let contador = 0;

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
        );

        contador++;

        /* NUEVA PAGINA */

        if(contador == 4 && i != certificados.length - 1){

            pdf.addPage();

            contador = 0;
        }
    }

    pdf.save('certificados clases biblicas 2026.pdf');
}

</script>






</html>