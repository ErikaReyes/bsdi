			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
					<hr>
					<div id="footer1" class="twelvecol first clearfix">
						<div class="footer-txt">
					<div class="threecol first">
						<?php if ( is_active_sidebar( 'footer1' ) ) : ?>

						<?php dynamic_sidebar( 'footer1' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="threecol">
						<?php if ( is_active_sidebar( 'footer2' ) ) : ?>

						<?php dynamic_sidebar( 'footer2' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="threecol">
						<?php if ( is_active_sidebar( 'footer3' ) ) : ?>

						<?php dynamic_sidebar( 'footer3' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="threecol last">
						<?php if ( is_active_sidebar( 'footer4' ) ) : ?>

						<?php dynamic_sidebar( 'footer4' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
						<div>
						<ul>
								<li><h3>Cotice Rápidamente</h3></li>
								<li>1.-Descargue  el archivo de excel y conteste unas preguntas</li>
								<li>2.-Envíenos un e-mail,  y anexe el archivo a la siguiente dirección: ventas@bdsi.com.mx</li>
								<li>3.-Un correo le llegará a la brevedad.</li>
								<br><br>
								<a href="http://www.bdsi.com.mx/wp-content/uploads/2014/01/Cuestionario-clientes-2014-BdSI.xls"><span class="button button-cotiza ">¡Cotice ahora! &raquo;</span></a>
								
							</ul>
						</div>
					</div>
					
				</div>
				</div>
			</footer>
			<footer>
				<div class="cintillo">
				<div class="cintillo-footer">Llámenos: 3300-5489   |  Torre Mariano Escobedo, Mariano Escobedo 476 Piso 12, Col. Nueva Anzures, C.P. 11590, México, D.F.
					</div>
					</div>
			</footer>
			<footer id="container" class="footer2">
				<div id="inner-footer" class="wrap clearfix" style="line-height:1;">
					
					<div class="eightcol first clearfix">
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>
					</div>
					<div class="fourcol last clearfix">
							<div class="social-footer">
								<h4 style="float:left; margin:4px 20px;">¡Síguenos!</h4>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-facebook.png" style="margin-right: 7px; float:left;"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-twitter.png" style="margin-right: 7px; float:left;"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-linked.png" style="margin-right: 7px; float:left;"></a>
							</div>
					</div>
					<div class="twelvecol first clearfix">
						<div class="textfooter">
							El contenido de esta página es propiedad de BdSI Contadores y Fiscalistas, S.C. | Todos los derechos reservados. <br><br>
							BdSI México Contadores y Fiscalistas, S.C. en adelante  "BdSI”, estamos preocupados por la seguridad  y confidencialidad de sus datos personales, motivo por el cual le externamos nuestro compromiso de proteger su privacidad y cumplir con la legislación aplicable a la protección de datos personales en posesión de los particulares. BdSI es el responsable de recabar sus datos personales, por lo que, ante cualquier posible pregunta lo invitamos a que nos escriba en <b>ventas@bdsi.com.mx</b>, o nos visite directamente en nuestro domicilio fiscal ubicado en Torre Mariano Escobedo, Mariano Escobedo 476 Piso 12, Col. Nueva Anzures, C.P. 11590, México, D.F.
							<br><br>
							Todos los términos utilizados, están ligados directamente al aviso de privacidad que la Ley Federal de  Protección de Datos Personales en Posesión de Particulares publicada en el DOF el 5 de julio de 2010.
						</div>
						
						
					</div>

<!--<?php echo date('Y'); ?>-->
					<!--<div class="first"><p class="source-org copyright text-containerH">&copy;  <?php bloginfo( 'name' ); ?></p>
						</div>-->
				</div>
				</div>

			</footer>
			<footer>
				<div class="cintillo">
				<div class="cintillo-footer"><a href="http://www.bdsi.com.mx/aviso-de-privacidad/">Aviso de privacidad</a>   |   <a href="http://www.bdsi.com.mx/terminos-y-condiciones/">Términos y condiciones</a>
					</div>
					</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
