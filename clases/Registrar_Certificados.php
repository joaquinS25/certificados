<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Generador de Certificados</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

/* BODY */

body{

    font-family:Arial, Helvetica, sans-serif;

    background:linear-gradient(135deg,#0b57d0,#1e3c72);

    min-height:100vh;
}

/* CONTENEDOR PRINCIPAL */

.contenedor-principal{

    display:flex;

    justify-content:center;
    align-items:center;

    min-height:calc(100vh - 80px);

    padding:40px 20px;
}

/* FORMULARIO */

.contenedor{

    width:500px;

    background:white;

    padding:40px;

    border-radius:20px;

    box-shadow:0px 10px 30px rgba(0,0,0,.3);
}

/* TITULO */

.titulo{

    text-align:center;

    margin-bottom:30px;
}

.titulo h1{

    color:#0b57d0;

    margin-bottom:10px;

    font-size:32px;
}

.titulo p{

    color:#666;

    font-size:15px;
}

/* ICONO */

.icono{

    font-size:60px;

    text-align:center;

    margin-bottom:15px;
}

/* INPUTS */

.grupo{

    margin-bottom:20px;
}

label{

    display:block;

    margin-bottom:8px;

    font-weight:bold;

    color:#333;
}

input{

    width:100%;

    padding:14px;

    border:2px solid #dcdcdc;

    border-radius:10px;

    font-size:16px;

    transition:.3s;
}

input:focus{

    border-color:#0b57d0;

    outline:none;

    box-shadow:0px 0px 10px rgba(11,87,208,.2);
}

/* BOTON */

button{

    width:100%;

    padding:15px;

    background:#0b57d0;

    color:white;

    border:none;

    border-radius:10px;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;

    transition:.3s;
}

button:hover{

    background:#084298;

    transform:scale(1.02);
}

/* RESPONSIVE */

@media(max-width:600px){

    .contenedor{

        width:100%;
    }

}
select{

    width:100%;

    padding:14px;

    border:2px solid #dcdcdc;

    border-radius:10px;

    font-size:16px;

    transition:.3s;

    background:white;
}

select:focus{

    border-color:#0b57d0;

    outline:none;

    box-shadow:0px 0px 10px rgba(11,87,208,.2);
}
</style>

</head>
<body>

<!-- NAVBAR -->

<?php include '../navbar.php'; ?>

<!-- CONTENIDO -->

<div class="contenedor-principal">

    <div class="contenedor">

        <div class="titulo">

            <div class="icono">
                📜
            </div>

            <h1>Generador de Certificados</h1>

            <p>Complete los datos para generar el certificado</p>

        </div>

        <form action="generar.php"
              method="POST"
              enctype="multipart/form-data">

            <!-- NOMBRE -->

            <div class="grupo">

                <label>Nombre Completo</label>

                <input type="text"
                       name="nombre"
                       placeholder="Ingrese el nombre completo"
                       required>

            </div>

            <!-- FECHA -->

            <div class="grupo">

                <label>Fecha</label>

                <input type="date"
                       name="fecha"
                       required>

            </div>

            <!-- LOGO CLUB -->

            <div class="grupo">

                <label>Logo del Club</label>

                <input type="file"
                       name="logo_club"
                       accept="image/*"
                       required>

            </div>

            <!-- LOGO CONQUISTADORES -->

            <div class="grupo">

                <label>Logo de Conquistadores</label>

                <input type="file"
                       name="logo_conquistadores"
                       accept="image/*"
                       required>

            </div>
            <!-- CLASE BIBLICA -->

            <div class="grupo">

                <label>Clase Bíblica</label>

                <select name="clase_biblica" required>

                    <option value="">
                        Seleccione una clase bíblica
                    </option>

                    <option value="Joyas de la Eternidad">
                        JOYAS DE LA ETERNIDAD
                    </option>

                    <option value="Sumergidos en la Palabra">
                        SUMERGIDOS EN LA PALABRA
                    </option>

                </select>

            </div>
            <!-- BOTON -->

            <button type="submit">
                GENERAR CERTIFICADO
            </button>

        </form>

    </div>

</div>

</body>
</html>