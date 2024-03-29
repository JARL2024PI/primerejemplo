<?php 

require_once __DIR__ . '/../includes/inicio.php';
//require_once __DIR__ . '/../includes/funciones.php';
use MVC\Enrutador;
use Controladores\LoginControl;

$ruta = new Enrutador();
var_dump($ruta);

//var_dump($_SERVER['PATH_INFO']); devuelve null
echo ' Otra vez /n';
// Iniciar Sesión
$ruta->get('/', [LoginControl::class, 'login']);
$ruta->post('/', [LoginControl::class, 'login']);
$ruta->get('/logout', [LoginControl::class, 'logout']);

// Recuperar Password
$ruta->get('/olvide', [LoginControl::class, 'olvide']);
$ruta->post('/olvide', [LoginControl::class, 'olvide']);
$ruta->get('/recuperar', [LoginControl::class, 'recuperar']);
$ruta->post('/recuperar', [LoginControl::class, 'recuperar']);

// Crear Cuenta
$ruta->get('/crear-cuenta', [LoginControl::class, 'crear']);
$ruta->post('/crear-cuenta', [LoginControl::class, 'crear']);

// Confirmar cuenta
$ruta->get('/confirmar-cuenta', [LoginControl::class, 'confirmar']);
$ruta->get('/mensaje', [LoginControl::class, 'mensaje']);

// AREA PRIVADA
$ruta->get('/cita', [CitaController::class, 'index']);
$ruta->get('/admin', [AdminController::class, 'index']);

// API de Citas
$ruta->get('/api/servicios', [APIController::class, 'index']);
$ruta->post('/api/citas', [APIController::class, 'guardar']);
$ruta->post('/api/eliminar', [APIController::class, 'eliminar']);

// CRUD de Servicios
$ruta->get('/servicios', [ServicioController::class, 'index']);
$ruta->get('/servicios/crear', [ServicioController::class, 'crear']);
$ruta->post('/servicios/crear', [ServicioController::class, 'crear']);
$ruta->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$ruta->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$ruta->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$ruta->comprobarRutas();