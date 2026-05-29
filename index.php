<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de Control</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    font-family:Arial;

    background:linear-gradient(135deg,#0b57d0,#1e3c72);

    min-height:100vh;

    display:flex;

    justify-content:center;
    align-items:center;
}

/* CONTENEDOR */

.panel{

    display:flex;

    gap:40px;
}

/* TARJETAS */

.card{

    width:350px;

    background:white;

    padding:40px;

    border-radius:20px;

    text-align:center;

    box-shadow:0px 10px 30px rgba(0,0,0,.3);

    transition:.3s;
}

.card:hover{

    transform:translateY(-10px);
}

/* ICONO */

.icono{

    font-size:80px;

    margin-bottom:20px;
}

h2{

    margin-bottom:15px;

    color:#0b57d0;
}

p{

    color:#666;

    margin-bottom:25px;
}

/* BOTON */

a{

    display:inline-block;

    padding:15px 30px;

    background:#0b57d0;

    color:white;

    text-decoration:none;

    border-radius:10px;

    font-weight:bold;
}

</style>

</head>
<body>

<div class="panel">

    <!-- BIBLICAS -->

    <div class="card">

        <div class="icono">
            📖
        </div>

        <h2>
            Certificados Bíblicos
        </h2>

        <p>
            Generar certificados de clases bíblicas
        </p>

        <a href="clases/Registrar_Certificados.php">
            INGRESAR
        </a>

    </div>

    <!-- ESPECIALIDADES -->

    <div class="card">

        <div class="icono">
            🏕
        </div>

        <h2>
            Certificados de Especialidades
        </h2>

        <p>
            Generar certificados de especialidades
        </p>

        <a href="especialidades/Registrar_certificados.php">
            INGRESAR
        </a>

    </div>

</div>

</body>
</html>

