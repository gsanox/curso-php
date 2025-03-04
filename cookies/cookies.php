<?php

var_dump($_POST);

// Si tenemos el usuario y contraseña
if (isset($_POST['user']) && isset($_POST['password'])) {
    // logica para verificar que el usuario existe etc.
    setcookie("USUARIO", true, time() + 60, "/");
    /*
    1. `"usuario"` → Nombre de la cookie.
    2. `"Juan"` → Valor de la cookie.
    3. `time() + 3600` → Fecha de expiración (ahora + 3600 segundos = 1 hora).
    4. `"/"` → Rango de acceso ("/" significa que es accesible en todo el sitio).
    */
}

// leemos la cookie si es que la hay
// $cookie = $_COOKIE["USUARIO"];
var_dump($_COOKIE["USUARIO"]);