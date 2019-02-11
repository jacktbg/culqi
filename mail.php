<?php function send_mail_data() {
	$num_recla= $_POST['reclamo'];
	$RUC= $_POST['Rcu'];
	$punt_venta = $_POST['punt_venta'];
	$name_ase = $_POST['name_ase'];
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$tipo_doc = $_POST['tipo_doc'];
	$number_doc = $_POST['number_doc'];
	$telef = $_POST['telef'];
	$direc = $_POST['direccion'];
	$email = $_POST['email'];
	$men_edad = $_POST['men_edad'];
	$iden_contra = $_POST['iden_contra'];
	$des_serv = $_POST['des_servi'];
	$mont_recla = $_POST['mont_recla'];
	$tipo_recla = $_POST['tipo_recla'];
	$det_recla = $_POST['det_recla'];
	$pedido = $_POST['pedido'];
	$observa = $_POST['observa'];


	$adminmail = "stevenoblea@andeanperutour.com"; //email destino
	$subject = 'Formulario de contacto'; //asunto
	$headers = "Reply-to: " . $punt_venta . " <" . $name_ase . ">";

	//Cuerpo del mensaje
	$msg = "Numero de reclamos: " . $num_recla . "\n";
	$msg .= "RUC: " . $RUC . "\n\n";
	$msg .= "Punto de venta: " . $punt_venta . "\n\n";
	$msg .= "Nombre Asesora: " . $name_ase . "\n\n";
	$msg .= "Datos del Apoderado: " . "\n\n";
	$msg .= "Nombre: " . $name . "\n\n";
	$msg .= "Apellidos: " . $last_name . "\n\n";
	$msg .= "Tipo de Documento: " . $tipo_doc . "\n\n";
	$msg .= "Numero Doc: " . $number_doc . "\n\n";
	$msg .= "Telefono: " . $telef . "\n\n";
	$msg .= "Direccion: " . $direc . "\n\n";
	$msg .= "Email: " . $email . "\n\n";
	$msg .= "Menor de edad: " . $men_edad . "\n\n";
	$msg .= "Indetificacion del bien contratado: " . $iden_contra . "\n\n";
	$msg .= "Descripcion del servicio contratado: " . $des_serv . "\n\n";
	$msg .= "Monto reclamado: " . $mont_recla . "\n\n";
	$msg .= "Tipo de Reclamo: " . $tipo_doc . "\n\n";
	$msg .= "Detalle de reclamo: " . $det_recla . "\n\n";
	$msg .= "pedido: " . $pedido . "\n\n";
	$msg .= "Observaciones: " . $observa;


	$sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

	wp_redirect( home_url("/libro-reclamos/")."?sent=".$sendmail ); ?>