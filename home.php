<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Diego Cantu">
    <meta name="keywords" content="pbx,virtual pbx,conmutador,skype,línea telefónica,teléfono ip,teléfono negocio,línea internet,01 800,teléfono internet,skype in,teléfono empresa,Teléfono virtual,teléfono skype,línea telefónica empresa,teléfono pyme,número virtual,telefonía virtual,número virtual méxico,plan telcel,conmutador virtual,conmutador barato,Teléfono con conmutador,conmutador accesible,conmutador en internet,línea sin renta,línea telefónica negocio,línea telefónica pyme,número virtual df,número virtual gdl,número virtual guadalajara,número virtual monterrey,número virtual mty,número virtual qro,número virtual querétaro,plan telcel empresa,plan telcel negocio,plan telcel pyme,plan teléfono empresa,plan teléfono negocio,plan teléfono pyme,sustituto nextel,sustituto nextel empresa,sustituto nextel negocio,sustituto nextel pyme,sustituto sígueme telmex,sígueme telmex,teléfono sin renta,nuevas alternativas telefonía"/>
    
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">

    <title>Fontacto.com</title>

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Gudea:400,700|Roboto:300' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_url'); ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/css/animations.css" rel="stylesheet" />
    
    
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>      
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar" ></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand slideDown" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#" id="cuantocuesta">Cuanto cuesta</a></li>
            <li><a href="preguntas.html">Preguntas</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="contacto.html">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="btn btn-default btn-lg" id="login">Iniciar Sesión</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      <div class="container">
	      <div class="login">
	      	<div id="login_form" style="display:none;">
	              <div id='login-error' class="form-group">
	                  Usuario y/o contraseña inválidos<br>Recupera tu contraseña <a href="http://fontacto.com/panel/users/password_recovery">aquí</a>
	              </div>
	              <form id="UserLoginForm" method="post" action="http://fontacto.com/panel/users/login" role="form">
	                  <fieldset style="display: none; ">
	                      <input type="hidden" name="_method" value="POST" class="form-control"/>
	                  </fieldset>
	                  <div class="input text">
	                      <h3><label for="UserUsername">Correo</label></h3>
	                      <input name="data[User][username]" type="text" value="" id="UserUsername" class="form-control"/>
	                  </div>
	                  <div class="input password">
	                      <h3><label for="UserPassword">Contraseña</label></h3>
	                      <input type="password" name="data[User][password]" value="" id="UserPassword" class="form-control"/>
	                  </div>
	                  <div class="submit">
	                      <input type="submit" value="Entrar"/ class="btn btn-default btn-lg">
	                  </div>
	              </form>
	              <a href="http://fontacto.com/panel/users/password_recovery">¿Olvidaste tu contraseña?</a>
	          </div>
	      </div>
      </div>
    </div>
    
    	    

    </div>
    
    <div class="llamanos">
    	<div class="container">
    		<h2><span class="bold_roboto">Dudas y contrataciones:</span>  01 (800) 030-2263  ó  (55) 1209-1160</h2>
    	</div>
    </div>

    <div class="slider">
    	<div class="container">
    	
    		<div class="row">
	    		<div class="col-md-12">
	    			<div class="col-md-7">
	    				<img src="<?php bloginfo('template_url'); ?>/img/usuario_slider.png" alt="" />
	    			</div><!--end col-md-7-->
	    			<div class="col-md-5">
	    				<h1>Un número que puedes contestar donde quieras.</h1>
	    				<p>Refleja lo profesional que eres.</p>
	    				<button type="button" class="btn btn-warning btn-lg" id="boton_contratar">Contratar</button>
	    			</div><!--end col-md-5-->
				</div><!--end col-md-12-->
    		</div><!--end row-->
    		
    	</div><!--end container-->
    </div> <!--end slider-->
    
    <div class="queobtienes">
    	<div class="container">
    		<h1>Que obtienes</h1>
    		<div class="row">
    			<div class="col-md-3">
    				<i class="icon-phone img-circle phone-bg fadeIn"></i>
    				<p>Un número telefónico con la capacidad de recibir hasta 5 llamadas al mismo tiempo.</p>
    			</div>
    			<div class="col-md-3">
    				<i class="icon-comment img-circle fadeIn"></i>
    				<p>Un mensaje de bienvenida personalizado.</p>
    			</div>
    			<div class="col-md-3">
    				<i class="icon-money img-circle fadeIn"></i>
    				<p>Créditos para contestar las llamadas en tus teléfonos
    				<small>(Fijo, Celular, Nextel, Skype)</small></p>
    			</div>
    			<div class="col-md-3">
    				<i class="icon-cog img-circle fadeIn"></i>
    				<p>La funcionalidad que necesitas.</p>
    				<a href="#" class="btn btn-default btn-lg" id="boton_funcionalidad">Ver Funcionalidad</a>
    			</div>
    		</div><!--end row-->
    	</div><!--end container-->
    </div> <!-- end que obtienes-->
    
    <div class="funcionalidad">
    	<div class="container">
    		<h1 id="funcionalidad_header">Funcionalidad</h1>
    		<div class="row">
    			<div class="feature col-md-4">
        			<i class="icon-comment img-circle"></i>
        			<h4>Mensaje de Bienvenida</h4>
        			<p>Tus clientes escucharán tu mensaje de bienvenida personalizado</p>
    			</div>
    			<div class="feature col-md-4 img-circle">
    				<i class="icon-warning-sign"></i>
    				<h4>Alerta de Llamadas Perdidas</h4>
    				<p>Recibe alertas en tu e-mail cuando no hayas podido contestar una llamada.</p>
    			</div>
    			<div class="feature col-md-4 img-circle">
    				<i class="icon-inbox"></i>
    				<h4>Buzón de Voz</h4>
    				<p>Recibe tus buzones de voz directamente en tu e-mail.</p>
    			</div>
    		</div> <!--end row-->
    		
    		<div class="row">
    			<div class="feature col-md-4 img-circle">
    				<i class="icon-exchange"></i>
    				<h4>Transferencia de Llamadas</h4>
    				<p>Transfiere llamadas a tus compañeros desde cualquier teléfono.</p>
    			</div>
    			<div class="feature col-md-4 img-circle">
    				<i class="icon-sitemap"></i>
    				<h4>Configura dónde contestar</h4>
    				<p>Crea extensiones para tu equipo.</p>
    			</div>
    			<div class="feature col-md-4 img-circle">
    				<i class="icon-cogs"></i>
    				<h4>Panel Web</h4>
    				<p>Consulta el detalle de tus llamadas y realiza cambios de configuración.</p>
    			</div>
    			
    		</div> <!--end row-->
    		
    	</div><!--end container -->
    </div><!-- end funcionalidad -->
    <div class="cuantocuesta" >
    	<div class="container">
    		<div class="row">
    			<h1 id="cuanto_header">Cuánto cuesta</h1>
    			
    			<p>Fontacto es un servicio sin plazo forzoso que funciona a través del prepago de créditos, los cuales se usan cada que contestas una llamada de tu número Fontacto.</p>
    			
    			<div class="paquete col-md-3">
    				<div class="header_telcel">
    					<img src="<?php bloginfo('template_url'); ?>/img/logo_telcel.png" alt="" />
    				</div>
    				<div class="container_paquete">
	    				<h2>$99 / Mes</h2>
	    				<h3>350 créditos</h3>
	    				<p>Para negocios tradicionales que reciben menos de 50 llamadas al mes.</p>
	    				<button type="button" class="btn btn-warning btn-lg plan" id="14">Contratar</button>
    				</div>
    				<div class="formaspago_telcel">
    					<h4>Forma de Pago</h4>
    					<img src="<?php bloginfo('template_url'); ?>/img/pago_telcel_bg.png" alt="Paga con Telcel" />
    				</div>
    			</div> <!--end paquete col-md-3-->
    			
    			<div class="paquete col-md-3">
    				<div class="header">
						<h2>Emprendedor</h2>
    				</div>
    				<div class="container_paquete">
	    				<h2>$150 / Mes</h2>
	    				<h3>500 créditos</h3>
	    				<p>Para nuevos negocios que reciben menos de 50 llamadas al mes.</p>
	    				<button type="button" class="btn btn-warning btn-lg plan" id="1">Contratar</button>
    				</div>
    				<div class="formaspago_telcel">
    					<h4>Forma de Pago</h4>
    					<ul>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_mastercard.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_visa.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_paypal.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_oxxo.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_banco.png" alt="" /></li>
    					</ul>
    				</div>
    			</div> <!--end paquete col-md-3-->
    			
    			<div class="paquete col-md-3">
    				<div class="header">
						<h2>Profesional</h2>
    				</div>
    				<div class="container_paquete">
	    				<h2>$300 / Mes</h2>
	    				<h3>1200 créditos</h3>
	    				<p>Ideal para negocios en crecimiento. Más de 50 llamadas al mes.</p>
	    				<button type="button" class="btn btn-warning btn-lg plan" id="2">Contratar</button>
    				</div>
    				<div class="formaspago_telcel">
    					<h4>Forma de Pago</h4>
    					<ul>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_mastercard.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_visa.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_paypal.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_oxxo.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_banco.png" alt="" /></li>
    					</ul>
    				</div>
    			</div> <!--end paquete col-md-3-->
    			
    			<div class="paquete col-md-3">
    				<div class="header">
						<h2>PyME</h2>
    				</div>
    				<div class="container_paquete">
	    				<h2>$370 / Mes</h2>
	    				<h3>1200 créditos</h3>
	    				<p>Para negocios que requieren presencia en otras ciudades. <span class="bold">Incluye 2 números.</span></p>
	    				<button type="button" class="btn btn-warning btn-lg plan" id="4">Contratar</button>
    				</div>
    				<div class="formaspago_telcel">
    					<h4>Forma de Pago</h4>
    					<ul>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_mastercard.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_visa.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_paypal.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_oxxo.png" alt="" /></li>
    						<li><img src="<?php bloginfo('template_url'); ?>/img/pago_banco.png" alt="" /></li>
    					</ul>
    				</div>
    			</div> <!--end paquete col-md-3-->
    			
    		</div> <!--end row-->
    	</div> <!--end container-->
    </div> <!--end cuantocuesta-->
    
    <div class="prueba">
    	<div class="container">
    		<p>¿Deseas probar sin costo alguno?</p>
    		<button type="button" class="btn btn-warning btn-lg plan" id="7">Probar</button>
    	</div>
    </div>
    <div class="como_se_usan">
	    <div class="container">
	    	<h1>¿Cómo se usan tus créditos?</h1>
	    	<div class="row">
	    		<div class="col-md-3">
		    		<i class="icon-mobile-phone img-circle"></i>
		    		<p><span class="bold">Contestada en celular</span><br>
		    		9 créditos / minuto</p>
	    		</div>
	    		<div class="col-md-3">
	    			<i class="icon-phone img-circle"></i>
	    			<p><span class="bold">Contestada en celular</span><br>
	    			9 créditos / minuto</p>
	    		</div>
	    		<div class="col-md-3">
	    			<i class="img-circle nextel"><img src="<?php bloginfo('template_url'); ?>/img/icon_nextel.png" alt="" /></i>
	    			<p><span class="bold">Contestada en celular</span><br>
	    			9 créditos / minuto</p>
	    		</div>
	    		<div class="col-md-3">
	    			<i class="icon-skype img-circle"></i>
	    			<p><span class="bold">Contestada en celular<br>
	    			9 créditos / minuto</p>
	    		</div>
	    	</div> <!--end row-->
	    	<p class="masinfo">Para más información consulta nuestra sección: <span class="bold">Preguntas Frecuentes</span></p>
		</div> <!--end container-->
    </div><!--end como_se_usan-->
    
    <div class="comparte">
    	<div class="container">
    		<h1>¡Comparte Fontacto!</h1>
    			<form id="recommend-form" role="form" action="panel/users/send_recommendation" method="post">
	    			<div class="row">
	    				<div class="col-md-3">
				    		<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Tu nombre" name="data[name]" id="name-recommend">
						</div>
						<div class="col-md-3">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="El correo de tu amigo" name="data[email]" id="email-recommend">
						</div>
						<div class="col-md-1">
							<button type="button" class="btn btn-warning btn-lg" name="data[send]" id="recommend_btn_send" value="Enviar">Enviar</button>
						</div>
						
						<div class="col-md-2 col-offset-1"></div>
							<button type="button" class="btn btn-default btn-lg" id="download_button"><i class="icon-cloud-download"></i>Descargar presentación</button>
			    		</div>
			    		
		    		<div class="row">
		    			<div class="col-md-8">
							<button type="button" class="btn btn-success btn-lg" id="show_message_button"><i class="icon-plus-sign"></i>
							Enviale un mensaje a tu amigo</button>
		    				<textarea placeholder="Tu mensaje" class="form-control" rows="3" name="data[msj]" id="msj-recommend" style="display:none;"></textarea>
		    			</div>
		    		</div>
	    		</form>
    	</div>
    </div>
    
    <div class="testimoniales">
    	<div class="container">
	    	<i class="icon-quote"></i> <h1>Testimoniales</h1>
    		<div class="row">
				<ul class="bxslider">
				  <li>
					  <img class="col-md-3 img-circle" src="<?php bloginfo('template_url'); ?>/img/andreatroyo.jpg" />
					  <p>Uno de los beneficios principales ha sido contar con una imagen corporativa y profesional ante los clientes que nos buscan por teléfono.</p>
					  <span class="bold">Andrea Troyo,</span> Personae Consultores
  				  </li>
  				  
  				  <li>
  				  	  <img class="col-md-3 img-circle" src="<?php bloginfo('template_url'); ?>/img/jamaica.jpg" />
  				  	  <p>Lo que más me gusta y que no tiene ningún otro sistema es la facilidad que yo tengo para expandir la capacidad.</p>
  				  	  <span class="bold">Arturo Jamaica,</span>  Brounie
  				    </li>
  				    
  				    <li>
  				    	  <img class="col-md-3 img-circle" src="<?php bloginfo('template_url'); ?>/img/olab.jpg" />
  				    	  <p>Somos una empresa que no estamos en la oficina y hay mucho contacto con clientes y proveedores. Nos ayuda a vernos profesionales y estar realmente disponibles para el cliente.</p>
  				    	  <span class="bold">Leticia Perea y Arasi K.,</span>  O-Lab
  				      </li>
  				      
  				      <li>
  				      	  <img class="col-md-3 img-circle" src="<?php bloginfo('template_url'); ?>/img/fernando.jpg" />
  				      	  <p>Para mi Fontacto es una herramienta increíble que aparte de darme la practicidad de traer siempre conmigo la comunicación con mis pacientes, también le ha creado una imagen más profesional a mi empresa.</p>
  				      	  <span class="bold">Fernando Urrieta,</span> Dentyco
				        </li>
				        
				        <li>
			        	  <img class="col-md-3 img-circle" src="<?php bloginfo('template_url'); ?>/img/fernando.jpg" />
			        	  <p>Lo recomiendo porque se me hace súper accesible y es algo que cualquier empresa necesita… se me hace el mejor invento de telefonía</p>
			        	  <span class="bold">Alejandra Velasco,</span> Glide
				        </li>
				</ul><!--end bxslider-->    		
    		</div><!-- end row-->
    	</div> <!--end container -->
    </div><!--end testimoniales-->
    <div class="reconocimientos">
    	<div class="container">
	    	<h1 id="reconocimientos_header">Reconocimientos</h1>
    		<div class="row">
    			<div class="col-md-4">
	    			<img class="img-circle" src="<?php bloginfo('template_url'); ?>/img/media_cnnexpansion.jpg" alt="" />
	    			<p>Emprendedores del año</p>
    			</div>
    			
    			<div class="col-md-4">
    				<img class="img-circle" src="<?php bloginfo('template_url'); ?>/img/media_entrepreneur.png" alt="" />
    				<p>“El primer servicio de telefonía virtual para PyMEs en México”</p>
    			</div>
    			
    			<div class="col-md-4">
    				<img class="img-circle" src="<?php bloginfo('template_url'); ?>/img/media_campusparty.png" alt="" />
    				<p>PROMEXICO
    				en Campus Party Mexico</p>
    			</div>
    			
    		</div><!--end row-->
    	</div><!-- end container -->
    </div><!-- end reconocimientos -->
    
    <div class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-7">
	    			<ul>
	    				<li><a href="#" id="cuantocuesta">Cuanto cuesta</a></li>
	    				<li><a href="<?php bloginfo('template_url'); ?>/preguntas.html">Preguntas</a></li>
	    				<li><a href="<?php bloginfo('template_url'); ?>/nosotros.html">Nosotros</a></li>
	    				<li><a href="<?php bloginfo('template_url'); ?>/contacto.html">Contacto</a></li>
	    			</ul>
    			</div>
    			<div class="col-md-3">
    				<p>Fontacto® Inc. 2012</p>
    			</div>
    		</div> <!--end row-->
    	</div><!--end container -->
    </div><!--end footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/bxslider/jquery.bxslider.min.js"></script> 
    
    <script type="text/javascript">
    	$(document).ready(function(){
    	  $('.bxslider').bxSlider();
    	  
    	  //Login stuff
    	  $('#login').click(function(e){
    	    e.preventDefault();
    	    $('#login_form').slideToggle();   
    	  });
    	  
    	  //Plan stuff
    	  $('.plan').click(function(e){
    	    e.preventDefault();
    	    window.location.href="/panel/users/register/"+$(this).attr('id');
    	  });
    	  
    	  $('#download_button').click(function(e){
    	    e.preventDefault();
    	    window.location.href="panel/users/download_recommendation";
    	  });
    	  
    	  $('#show_message_button').click(function(){
    	    $('#msj-recommend').slideToggle();
    	  });
    	  
    	  $('#recommend_btn_send').click(function(){
    	    $('#recommend-form').submit();
    	  });
    	});
    </script>
    
   <script>
   	$(window).scroll(function() {
   		var funcionalidad_header_pos = $('#funcionalidad_header').offset().top;
   		var reconocimientos_header_pos = $("#reconocimientos_header").offset().top;
   		var topOfWindow = $(window).scrollTop();
   		
   		if (funcionalidad_header_pos < topOfWindow+700){
   			$('.feature i').addClass("fadeIn"); 
   		}
   		
   		if (reconocimientos_header_pos < topOfWindow+700){
   			$('.reconocimientos img').addClass("fadeIn"); 
   		}
   	});
   	
   	$('#cuantocuesta').click(function(){
   		$.scrollTo($('.cuantocuesta'),1200,'slow');
   	});
   	
   	$('#boton_contratar').click(function(){
   		$.scrollTo($('.cuantocuesta'),1200,'slow');
   	});
   	
   	$('#boton_funcionalidad').click(function(){
   		$.scrollTo($('.funcionalidad'),1200,'slow');
   	});
   	
   </script>
   
 
	</body>
</html>
