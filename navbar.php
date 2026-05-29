
<!-- NAVBAR -->

<style>

.navbar{

    width:100%;

    background:#0b57d0;

    padding:15px 40px;

    display:flex;

    justify-content:space-between;
    align-items:center;

    box-shadow:0px 2px 10px rgba(0,0,0,.2);
}

/* LOGO */

.logo{

    color:white;

    font-size:28px;

    font-weight:bold;
}

/* LINKS */

.menu{

    display:flex;

    gap:20px;
}

.menu a{

    text-decoration:none;

    color:white;

    font-size:18px;

    padding:10px 18px;

    border-radius:8px;

    transition:.3s;
}

.menu a:hover{

    background:white;

    color:#0b57d0;
}

</style>

<div class="navbar">

    <div class="logo">
        📜 Certificados
    </div>

    <div class="menu">
         <a href="../index.php">
            Panel
        </a>
        <a href="../clases/Registrar_Certificados.php">
            Registrar Certificado
        </a>

        <a href="../clases/listar.php">
            Listado de Certificados
        </a>
       
    </div>

</div>

