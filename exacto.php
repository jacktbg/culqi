add_action('admin_post_nopriv_jalar_datos','jalar_datos');
add_action('admin_post_jalar_datos','jalar_datos');

<?php
function jalar_datos(){
$a=$_POST["precio"];
$b=$_POST["producto"];
$d=$a*0.05;
$e=$a+$d;
$n=$_POST["name"];
$f=$_POST["cell"];
$g=$_POST["mail"];}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Form Andean</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="pagar.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://checkout.culqi.com/js/v3"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

</head>
<body>
	<div id="contenedor">
	<form method="post" action="exacto.php">
	<div class="card-header" align="center">
		<img src="logos/andean.png" id="woa">
	</div>
	<div style="background-color: #01DF3A"><br></div>
	<div class="card-body" style="background-color: white">
	<div class="row">
		<div style="margin-left: 100px" class="col-sm-6">
			<img src="logos/seguro2.png" class="woa">
			<img src="logos/seguro1.png" class="woa"><br><br>		
			<h3>Datos del contacto</h3><br>
				<input type="" name="" value="<?php echo $n ?>" disabled>
				<input type="" name="" value="<?php echo $f ?>" disabled>
				<br><br>
				<input type="" name="" value="<?php echo $g ?>" disabled>
		</div>
		<div class="col-sm-4">
			<img style="border: 3px solid #DFDDDD" src="logos/llama2.png" class="woa">
		</div>
	</div>
	<hr>
	<div class="row">
	<div style="margin-left: 100px" class="col-sm-6">
		<h3>Datos de compra</h3>
		<h4> Producto: <input type="text" name="producto" value="<?php echo $b ?>" disabled><br></h4>
    	<h4> Impuesto del 5%: <input type="text" name="" value="<?php echo $d ?>" disabled></h4>
    	<h4> Monto: <input type="text" name="" value="<?php echo $a ?>" disabled></h4>
    	<h4> Monto total a pagar: <input type="text" name="precio" value="<?php echo $e ?>" disabled><select name="valor">
    		<option>Tipo de moneda </option>
    		<option value="PEN">PEN</option>
    		<option value="USD">USD</option>
    	</select></h4>
    	
	</div>
	</div>
	<hr>
	<div class="row">
		<div  style="margin-left: 100px; margin-top:10px" class="col-sm-5">
				<h3>Modo de pago</h3>
				<input width="" type="radio" name="option" value="culqi" id="tarjetas_option" onclick="changeFormula('logos/tarjetas.png');" checked>Tarjeta de Crédito
				<input type="radio" name="option" value="paypal" id="paypal_option" onclick="changeFormula('logos/paypal.png');" disabled>Paypal
				<br>
				<img src="logos/tarjetas.png" name="theimage" id="theimage" style="border: 2px solid  #DFDDDD" class="woa">
		</div>
		<div style="margin-left: 100px; margin-top:15px" class="col-sm-4">
			<h3>Detalles de su compra</h3>
			<div style="background-color: #DFDDDD ">
				<i class="fa-li fa fa-check-square"></i>Calidad y garantia<br>
				<i class="fa-li fa fa-check-square"></i>Operadores directos<br>
				<i class="fa-li fa fa-check-square"></i>Itinerarios personalizados<br>
				<i class="fa-li fa fa-check-square"></i>Multiples destinos<br>
				<i class="fa-li fa fa-check-square"></i>Agencia certificada<br>
				<i class="fa-li fa fa-check-square"></i>Facilidad de pago<br>
				<i class="fa-li fa fa-check-square"></i>Asistencia inmediata<br>
				<i class="fa-li fa fa-check-square"></i>Turismo sostenible
			</div>
			
		</div>
	</div>
	<div class="container" style="margin-top: 10px">
		<center>
			<input type="button" id="buyButton" value="Pagar Ahora">
			<h5 style="color: blue">100% Pago Seguro</h5>
		</center>
	</div>
	<hr>
<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-left'>
    <h3>Nuestras Recomendaciones</h3>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active" style="border: 3px solid #DFDDDD">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://scontent.faqp1-1.fna.fbcdn.net/v/t1.0-9/51172479_10215941147874823_2394049560025497600_n.jpg?_nc_cat=106&_nc_ht=scontent.faqp1-1.fna&oh=217efb5f96e6ca0a1b102116dbbb3464&oe=5CF7E073" style="width: 100px;height:100px;" onclick="">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <h4>Maritza Elizabeth NecSam</h4>
                  <h5>Tuve una excelente experiencia, cumplieron con todo lo indicado, tiene unos excelentes guías, muy buena atención del hospedaje y buena acogida. Gracias por todo. Estuvimos muy contentos por sus atenciones</h5>
                  <small>nuestros clientes</small>
                 
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item" style="border: 3px solid #DFDDDD">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://scontent.faqp1-1.fna.fbcdn.net/v/t1.0-1/c7.0.960.960a/p960x960/49467914_2361853610512201_3309573000818327552_o.jpg?_nc_cat=103&_nc_ht=scontent.faqp1-1.fna&oh=bc1770fbcd1d0100e4cfdd41d79a7d80&oe=5CFF8A93" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <h4>Thian Barrsies</h4>
                  <h5>Buena experiencia, agradable, buen servicio en general lo recomiendo 1000000 estrellas 😁</h5>
                  <small>nuestros clientes</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item" style="border: 3px solid #DFDDDD">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://scontent.faqp1-1.fna.fbcdn.net/v/t1.0-9/40137781_2215161001887409_667500336558112768_n.jpg?_nc_cat=111&_nc_ht=scontent.faqp1-1.fna&oh=326337b87d1f427ce0fb859f43fdcf70&oe=5CFB2B22" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <h4>Kike CQ</h4>
                  <h5>Buena atención y los guías excelentes, gran experiencia</h5>
                  <small>nuestros clientes</small>
                </div>
              </div>
            </blockquote>
          </div>
		<!-- Quote 4 -->
          <div class="item" style="border: 3px solid #DFDDDD">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://scontent.faqp1-1.fna.fbcdn.net/v/t1.0-9/1016493_10152787750875680_2332153336005252360_n.jpg?_nc_cat=105&_nc_ht=scontent.faqp1-1.fna&oh=9723e7a49f0854ffb5fce0dadd150a81&oe=5CB6F84D" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <h4>Pablo J. Riojas Ardiles</h4>
                  <h5>El servicio que brinda la agencia es muy bueno, lo principal es el seguimiento que realizan a los turistas. Durante mi visita a los lugares turísticos los guías realizaron un servicio excelente, preocupándose por nosotros en todo momento.</h5>
                  <small>nuestros clientes</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
      </div>                          
    </div>
  </div>
</div>
<hr>
</div>
</form>
</div>
</body>
<script type="text/javascript">
		Culqi.publicKey = 'pk_live_4xJdJm4knL74q4A8';
			
		var producto = "";
		var valor = "";
		var precio = "";
				
		$('#buyButton').on('click', function(e) {
		    
		    producto = $('input[name="producto"]').val();
		    valor = $('select[name="valor"]').val();
		    precio = $('input[name="precio"]').val()*100;
		    

		    Culqi.settings({
				title: producto,
				currency: valor,
				description: producto,
				amount: precio
		});

			Culqi.open();
			e.preventDefault();
		});

	function culqi() {
		  if (Culqi.token) { // ¡Objeto Token creado exitosamente!
		  	    var token = Culqi.token.id;
		  	    
		  	    var email = Culqi.token.email;

		  	    var data = {producto:producto, precio:precio, token:token, email:email, valor:valor}
		  	    
		  	    var url = "culqi.php";
		  	    $.post(url,data,function(res){
		  	    	alert(res);
		  	    });
		  	} else { // ¡Hubo algún problema!
		      // Mostramos JSON de objeto error en consola
		      console.log(Culqi.error);
		      alert(Culqi.error.user_message);
		  	}
			};

	function changeFormula(imgName) 
     {
     		image = document.getElementById('theimage');
     		image.src = imgName;
     };
     $(document).ready(function() 
     {
			$('#quote-carousel').carousel({
			 	pause: true,
			    interval: 4000,
		});
	 });

</script>
</html>
<!--<h4> Producto: <input type="" name="" value="<?php echo $b ?>" disabled><br></h4>
    <h4> Impuesto del 5%: <input type="" name="" value="<?php echo $d ?>" disabled></h4><br>
    <h4> Monto: <input type="" name="" value="<?php echo $a ?>" disabled></h4><br>
    <h4> Monto total a pagar: <input type="" name="" value="<?php echo $e ?>" disabled></h4><br>
    <h4> Moneda: <input type="" name="" value="<?php echo $c ?>" disabled></h4><br>