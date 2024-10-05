<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redsocial";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Aquí podrías realizar consultas SQL si necesitas mostrar algo en el home
// Por ejemplo, cargar publicaciones o perfiles

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/home.css">   
    <script src="/public/home/script.jss"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/public/img/logo cortado (Q).png">
    <title>Pagina de Quimi</title>
</head>
<body>
    
<div>

<h1>HOLA</h1>
<h2>Bienvenido a Quimi</h2>
<h3></h3>
</div>

<div class="navigation">
    <div class="menuToggle"></div>
    <ul>
        <li class="list active">
            <a href="#" style="--clr: #f44336;">
            <img class="icon" src="/public/img/pagina-de-inicio.png" alt="">
            <span class="text">Inicio</span>
            </a>
        </li>
        <li class="list">
            <a href="#" style="--clr: #0fc70f;">
            <img class="icon" src="/public/img/conversacion.png" alt="">
            <span class="text">Mensajes</span>
            </a>
        </li>
        <li class="list">
            <a href="#" style="--clr: #2196f3;">
            <img class="icon" src="/public/img/acceso.png" alt="">
            <span class="text">Perfil</span>
            </a>
        </li>
        <li class="list">
            <a href="#" style="--clr: #ffa117;">
                <img class="icon" src="/public/img/sobre-nosotros.png" alt="">
            <span class="text">Sobre Quimi</span>
            </a>
        </li>
    </ul>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    let menuToggle = document.querySelector('.menuToggle');
    let navigation = document.querySelector('.navigation');
    menuToggle.onclick = function(){
        navigation.classList.toggle('active')
    }

    let list = document.querySelectorAll('.list');
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('active'))
        this.classList.add('active');
    }
    list.forEach((item) =>
    item.addEventListener('click',activeLink)) 
</script>

<button id="themeToggle" onclick="toggleTheme()">Activar tema oscuro</button>

<script>
function toggleTheme() {
    document.body.classList.toggle('dark-mode');

    const button = document.getElementById('themeToggle');
    if (document.body.classList.contains('dark-mode')) {
        button.innerText = 'Activar tema claro';
        button.classList.add('dark-button');
        button.classList.remove('light-button');
    } else {
        button.innerText = 'Activar tema oscuro';
        button.classList.add('light-button');
        button.classList.remove('dark-button');
    }

    const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
    localStorage.setItem('theme', theme);
}

window.onload = function() {
    const savedTheme = localStorage.getItem('theme');
    const button = document.getElementById('themeToggle');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
        button.innerText = 'Activar tema claro';
        button.classList.add('dark-button');
    } else {
        button.classList.add('light-button');
    }
};
</script>
</body>
</html>
