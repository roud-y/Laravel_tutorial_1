<?php 

function delete_form($param, $nom = 'Delete'){
	$form = Form::open(['method' => 'DELETE', 'route' => $param]);
	$form .= Form::submit($nom,['class' => 'btn btn-danger']);

	return $form .= Form::close();
}

 ?>