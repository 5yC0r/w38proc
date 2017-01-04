<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if lte IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie9" lang="en"> <!--<![endif]-->
<head>
	<!-- ESPECIFICACIONES BASICAS DE PAGINAS
  ================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>SyArPC | Soluciones Informáticas</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- META PARA PAGINA DE MOVIL :D
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" media="all" href="stylesheets/base.css">
	<link rel="stylesheet" media="all" href="stylesheets/layout.css">
    <link rel="stylesheet" media="all" href="stylesheets/960.html">
    <link rel="stylesheet" media="all" href="stylesheets/768.html">
    <link rel="stylesheet" media="all" href="stylesheets/480.html">
    <link rel="stylesheet" media="all" href="stylesheets/479.html">

    <link rel="stylesheet" type="text/css" href="stylesheets/slider.css" />
	<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
	<noscript>
		<link rel="stylesheet" type="text/css" href="stylesheets/nojs.css" />
	</noscript>
	<!-- Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
    <!-- JavaScript
    ================================================== -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>  
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>

</head>
<body class="rght">
	<!-- Start Top
	================================================== -->
	<div id="top">
		<div class="top-content clearfix">
			<!-- Start Top Menu
			================================================== -->
			<ul class="top-menu left">
			<?php
			include('include/menu-sup.php');
			?>
		    </ul>
			<!-- End Top menu & Start Social Icons
			================================================== -->
			<div class="social-icons right">
			<?php
			include('include/social.php');
			?>
			</div>
			<!-- End Social Icons -->
		</div>
	</div>
	<!-- End Top menu & Start Wrapper
	================================================== -->
	<div id="wrapper">
		<!-- Start Main menu
		================================================== -->
		<div class="main-menu clearfix">
			<div class="left logo"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>
      <nav id="main-nav" class="right">
            	<ul>
               	  <li class="current"><a href="index.php">Inicio</a></li>
                  <li><a href="#">Dominios</a></li>
				  <li><a href="#">Hosting</a></li>
                  <li><a href="#">Diseño Web</a></li>
                  <li><a href="#">Harware</a></li>
           		  <li><a href="#">Aplicaciones</a></li>
           		  <li class="last"><a href="#" target="_blank">Blog</a></li>
   	 			</ul>
        	</nav>
		</div>
	</div>
	<!-- End Main menu & Start Contact MAP
	================================================== -->
	<div id="contact-map">
		<iframe width="100%" height="580" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.pe/maps?hl=es&ll=-8.108857,-79.016247&spn=0.096359,0.169086&t=m&z=13&amp;output=embed"></iframe>
	</div>
	<div class="wrapper">
		<!-- End Contact MAP & Start Breadcrumbs
		================================================== -->
		<div class="breadcrumbs">
			<a href="#">Inicio</a>
			<a href="#">Páginas</a>
			<p>Contacto</p>
		</div>
		<!-- End Breadcrumbs & Start Page Title
		================================================== -->
		<div class="page-title">Contacto</div>
		<!-- End Pge Title & Start Content
		================================================== -->
		<div class="content">
			<!-- Start Domains & Search Domains
			================================================== -->
			<div class="web-domains clearfix">
				<div class="domains left">
					<div class="first-line">
						<p class="f-title">Dominios Web</p>
						<p>.com</p>
						<p>.net</p>
						<p>.org</p>
						<p>.info</p>
						<p>.biz</p>
						<p>.tv</p>
						<p>.mobi</p>
					</div>
					<div class="second-line">
						<p class="f-title">Precios Registración</p>
						<p>S/. 30.00</p>
						<p>S/. 30.00</p>
						<p>S/. 30.00</p>
						<p>S/. 30.00</p>
						<p>S/. 30.00</p>
						<p>S/. 115.00</p>
						<p>S/. 50.00</p>
					</div>
				</div>
				<div class="search-domains left">
					<div class="s-title">Buscar Dominio <span>(ejm. www.eldomino.com)</span></div>
					<div class="form clearfix">
						<div class="f-intro left">www.</div>
						<form name="" action="#" class="search-form left clearfix">
							<input type="text" name="" value="Ingrese el dominio a buscar..." class="search-input left" />
							<input type="submit" name="" value="Buscar" class="search-submit left" />
						</form>
				  </div>
					<div class="search-links"><a href="#">Busqueda multiple</a>  |  <a href="#">Lista de extensiones</a></div>
				</div>
			</div>
			<!-- End Domains/Search Domains & Contact Intro
			================================================== -->
			<div class="contact-intro">"Somos un grupo de experimentados diseñadores, desarrolladores; establecemos nuevos estándares en la <span>experiencia del usuario</span>." 
			</div>
			<div class="contact-txt">
				
			</div>
			<div class="clearfix">
				<div class="contact-left left">
					<div class="contact-title">No dude en ponerse en contacto con nosotros.</div>
                    
                   <?php
                 $error    = ''; // error mensaje
                 $name     = ''; // nombre
				 $telefono = ''; // telefono
                 $email    = ''; // mail
                 $subject  = ''; // subject
                 $message  = ''; // mensaje
               	 $spamcheck = ''; // Spam check

            if(isset($_POST['send']))
            {
                 $name     = $_POST['name'];
				 $telefono    = $_POST['telefono'];
                 $email    = $_POST['email'];
                 $subject  = $_POST['subject'];
                 $message  = $_POST['message'];
               	 $spamcheck = $_POST['spamcheck'];

                if(trim($name) == '')
                {
                    $error = '<div class="errormsg">Por favor escriba su nombre!</div>';
                }
				else if(trim($telefono) == '')
	            {
	            	$error = '<div class="errormsg">Porfavor escriba su numero de teléfono</div>';
	            }	
            	    else if(trim($email) == '')
                {
                    $error = '<div class="errormsg">Por favor indique su direccion Email!</div>';
                }
                else if(!isEmail($email))
                {
                    $error = '<div class="errormsg">Su Email no es valido, por favor intente de nuevo!!</div>';
                }
            	    if(trim($subject) == '')
                {
                    $error = '<div class="errormsg">Indique el asunto del mensaje!</div>';
                }
            	else if(trim($message) == '')
                {
                    $error = '<div class="errormsg">Escriba su mensaje!</div>';
                }
	          	else if(trim($spamcheck) == '')
	            {
	            	$error = '<div class="errormsg">Realice la suma para controlar el Spam!</div>';
	            }
	          	else if(trim($spamcheck) != '5')
	            {
	            	$error = '<div class="errormsg">Control Spam: El resultado de la suma no es correcta! 2 + 3 = ???</div>';
	            }
                if($error == '')
                {
                    if(get_magic_quotes_gpc())
                    {
                        $message = stripslashes($message);
                    }
                    // AKI EL CORREO AL QUE KIERO QUE LLEGUE EL FORMULARIO
                    $to      = "informes@witsmedia.com";
					
                    $subject = '[Solicitud de Pedido] : ' . $subject;

                    $msg     = "De : $name \r\nTelefono : $telefono \r\ne-Mail : $email \r\nAsunto : $subject \r\n\n" . "Mensaje : \r\n$message";

                    mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
            ?>
                  <!-- Message sent! (change the text below as you wish)-->
<div style="text-align:center; font-size:22px">
<br><br><br>
                    <h1>Enviado</h1>
                       <p>Gracias <b><?=$name;?></b>, le responderemos lo antes posible!</p>
                  </div>
                  <!--End Message Sent-->


            <?php
                }
            }

            if(!isset($_POST['send']) || $error != '')
            {
            ?>

       
  <!--Error Message-->
            <?=$error;?>   
					<form method="post" name="contFrm" action="" class="contact-form">
						<div class="clearfix">
							<div class="contact-col left">
								<p>Nombre <span>(obligatorio)</span></p>
								<input type="text" name="name" value="<?=$name;?>" class="contact-input" />
							</div>
							<div class="contact-col left">
								<p>Teléfono <span>(obligatorio)</span></p>
								<input type="text" name="telefono" value="<?=$telefono;?>" class="contact-input" />
							</div>
							<div class="contact-col left last">
								<p>Email <span>(obligatorio)</span></p>
								<input type="text" name="email" value="<?=$email;?>" class="contact-input" />
							</div>
						</div>
						<p>Mensaje <span>(Obligatorio)</span></p>
						<textarea name="message"><?=$message;?></textarea>
                        	<div>
								<p>Asunto <span>(Obligatorio)</span><span>
								  <input type="text" name="subject" value="<?=$subject;?>" class="contact-input" />
								</span>Control Spam <span>2+3</span> <span> 
						      <input type="text" name="spamcheck" value="<?=$spamcheck;?>" class="contact-input" /> </span></p>
								
					  </div>                
				  <div class="clearfix">
							<input type="submit" name="send" value="Enviar Mensaje" class="contact-submit right" />
						</div>
                        
					</form>
                <!-- E-mail verification.-->
            <?php
            }

            function isEmail($email)
            {
                return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                        ,$email));
            }
            ?>
  
				</div>
				<div class="contact-right left">
               		<div class="contact-title">Información de Contacto</div>
					<div class="cont-txt">Podras contactarte con nosotros en cualquier momento, solucionaremos todas tus dudas y tus pedidos.</div>
					<div class="contact-address">Trujillo, Perú</div>
					<div class="contact-email">
                    
                    Soporte <a href="#">soporte_@syarpc.com</a><br>
                    
                    </div>
					<div class="contact-phone"> Fijo: 390092 Anexo 471<br> Claro: 980464418</div>
				</div>
			</div>
		</div>
		<!-- End Content & Start Brands
		================================================== -->
		<div class="brands">
			<div class="top-shadow"><!-- --></div>
			<div class="logos">
				<script type="text/javascript">
					jQuery(document).ready(function() {
					    jQuery('#logos').jcarousel();
					});
				</script>
				<ul id="logos" class="jcarousel-skin-tango">
				    <li><img src="images/logos/1.png" alt="" /></li>
                    <li><img src="images/logos/2.png" alt="" /></li>
                    <li><img src="images/logos/3.png" alt="" /></li>
                    <li><img src="images/logos/4.png" alt="" /></li>
                    <li><img src="images/logos/5.png" alt="" /></li>
                    <li><img src="images/logos/6.png" alt="" /></li>
                    <li><img src="images/logos/7.png" alt="" /></li>
				</ul>
			</div>
			<div class="bottom-shadow"><!-- --></div>
		</div>
		

	</div>
<!-- End Content & Start Footer
	================================================== -->
	<div id="footer">
		<div class="footer clearfix">
			<div class="footer-left left">
				<div class="footer-news"><strong>NOTICIAS:</strong>Proximamente estaremos llegando a ustedes con  <span>Desarrollo de Aplicaciones!</span></div>
			  <div class="footer-menu">
              <?php
			  include('include/menu-inf.php');
			  ?>
              </div>
		  </div>
			<div class="footer-right right">
				<form name="" action="#" class="newsletter clearfix">
					<input type="text" name="" value="Introduce tu email aquí..." class="newsletter-input left" />
					<input type="submit" name="" value="Ok" class="newsletter-submit left" />
				</form>
				<div class="newsletter-intro">Recibir novedades sobre nuestros productos !</div>
			</div>
		</div>
	</div>
	<!-- End Footer & Start Copyright
	================================================== -->
	<div id="copyright" class="clearfix">
		<div class="copyright left">© Copyright 2015 <span>SyArPC.COM</span> Soluciones Informáticas</div>
		<div class="created right">SyArPC.COM | By Jonathán Baltodano</div>
	</div>
<script src="js/respond.min.js"></script>
<?php include_once("analyticstracking.php") ?>
</body>
</html>