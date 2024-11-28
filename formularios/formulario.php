<?php
// Verifica si se recibieron datos por el método GET
// Comprueba si existe 'name' y 'email' en la URL
isset($_GET['direccion']); // false
// $persona = array(
//     "id" => 1,
//     "nombre" => "Jorge"
// );
// $persona['nombre']; 

// $ciudad = array("madrid");
// $ciudad[0];

// $_GET = array(
//     "direccion" => null,
//     "nombre" => "Jorge",
//     "email" => "miemail@email.es"
// );
// $_GET["nombre"];

// $_GET['direccion'] = null; == array_push($_GET, 'direccion');
// is_null($_GET['direccion']); // false + error,
// $_GET['direccion'] = "";
// empty($_GET['direccion']); // false

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name']) && isset($_GET['email'])) {
    echo "<h2>Datos recibidos via GET:</h2>";
    // htmlspecialchars se usa para prevenir ataques XSS
    echo "<p>Nombre: " . htmlspecialchars($_GET['name']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_GET['email']) . "</p>";
}

// Verifica si se recibieron datos por el método POST
// Comprueba si existe 'name' y 'email' en el cuerpo de la petición
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['email'])) {
    echo "<h2>Datos recibidos via POST:</h2>";
    // htmlspecialchars se usa para prevenir ataques XSS
    echo "<p>Nombre: " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_POST['email']) . "</p>";
}

// Si no se recibió ningún dato
// Verifica si la petición es GET sin datos o POST sin datos
if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET) || 
    $_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST)) {
    echo "<p>No se recibieron datos.</p>";
}
?>
