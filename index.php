<?php
/**
 *@package veterinariaweb
 //index principal
 */
 
 if(!isset($_REQUEST['accion'])){
	include('controller/DefaultCtl.php');
	$controlador = new DefaultCtl();
	}else{
	$accion=$_REQUEST['accion'];
 switch($_REQUEST['accion']){
	case 'usuario':
		include('controller/UsuarioCtl.php');
		$controlador = new UsuarioCtl();
		break;
	case 'cita':
		include('controller/CitaCtl.php');
		$controlador = new CitaCtl();
	        break;
	case 'pedido':
		include('controller/PedidoCtl.php');
		$controlador = new PedidoCtl();
        	break;
	case 'servicio':
		include('controller/ServicioCtl.php');
		$controlador = new ServicioCtl();
	        break;
	case 'articulo':
	        include('controller/ArticuloCtl.php');
		$controlador = new ArticuloCtl();
		break;
	case 'log':
		include('controller/LogCtl.php');
		$controlador = new LogCtl();
		break;
	default:
		include('controller/DefaultCtl.php');
		$controlador = new DefaultCtl();
 }
}
 $controlador->ejecutar();




?>
