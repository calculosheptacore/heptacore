<?php 


require_once "controlador/plantilla.controlador.php";
require_once "controlador/usuarios.controlador.php";
require_once "controlador/planta.controlador.php";
require_once "controlador/equipo.controlador.php";
require_once "controlador/pais.controlador.php";
require_once "controlador/proyectos.controlador.php";
require_once "controlador/materiales.controlador.php";
require_once "controlador/tamanosAerodeslizadorControlador.php";
require_once "controlador/subareacontrolador.php";
require_once "controlador/departamentocontrolador.php";
require_once "controlador/departamentocontrolador.php";
require_once "controlador/condicionesestandarcontrolador.php";
require_once "controlador/calcularAerodeslizador.controlador.php";


require_once "modelo/usuario.modelo.php";
require_once "modelo/planta.modelo.php";
require_once "modelo/equipo.modelo.php";
require_once "modelo/pais.modelo.php";
require_once "modelo/proyectos.modelo.php";
require_once "modelo/materiales.modelo.php";
require_once "modelo/tamanosAerodeslizadormodelo.php";
require_once "modelo/subareamodelo.php";
require_once "modelo/departamentomodelo.php";
require_once "modelo/condicionesestandarmodelo.php";
require_once "modelo/calcularAerodeslizador.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

 ?>






