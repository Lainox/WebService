<?php 

//solicitud cliente (Vía URL)
include('funciones.php');
if(!empty($_GET['nombre'])){

	$nombre = $_GET['nombre'];
	$precio = get_precio($nombre);

	if(empty($precio))
	{   //libro no encontrado
		entrega_respuesta(200,"Libro no encontrado", NULL);
	}
	else
	{
		//responde con el precio del libro
		entrega_respuesta(200,"Libro encontrado",$precio);
	}

}
else
{
	 //Solicitud inválida
	entrega_respuesta(400,"Solicitud invalida", NULL);
}

function entrega_respuesta($status, $status_message,$data)
{
	header("HTTP/1.1 $status $status_message");

	$respuesta['status'] = $status;
	$respuesta['status_message'] = $status_message;
	$respuesta['data'] = $data;

	$json_response = json_encode($respuesta);
	echo $json_response;
}
 ?>