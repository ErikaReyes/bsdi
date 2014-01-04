			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div id="footer1" class="twelvecol first clearfix">
						<div class="text-container footer-txt">
					<div class="twocol first">
						<?php if ( is_active_sidebar( 'footer1' ) ) : ?>

						<?php dynamic_sidebar( 'footer1' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="twocol">
						<?php if ( is_active_sidebar( 'footer2' ) ) : ?>

						<?php dynamic_sidebar( 'footer2' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="twocol">
						<?php if ( is_active_sidebar( 'footer3' ) ) : ?>

						<?php dynamic_sidebar( 'footer3' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="twocol">
						<?php if ( is_active_sidebar( 'footer4' ) ) : ?>

						<?php dynamic_sidebar( 'footer4' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>
					</div>
					<div class="fourcol last">
						<ul>
							<li><h3>Cotice Rápidamente</h3></li>
							<li>1.-Descargue  el archivo de excel y conteste 10 preguntas</li>
							<li>2.-Envíenos un e-mail,  y anexe el archivo a la siguiente dirección: ventas@bdsicontadores.com</li>
							<li>3.-Un correo le llegará a la brevedad.</li>
							<br><br>
							<span class="button button-cotiza ">¡Cotice ahora!</span>
							<h4>¡Síguenos!</h4>
							<div class="social" align="left">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-facebook.png"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-twitter.png"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-linked.png"></a>
							</div>
						</ul>
					</div>
				</div>
				</div>
			</footer>
			<footer id="container" class="footer2">
				<div id="inner-footer" class="wrap clearfix">
					<div class="cintillo-footer" style="margin-bottom:20px;">Llámenos: 5676-8990  |  Presidente Masaryk No. 61 piso 2 Col. Chapultepec Morales, C.P. 11570, Polanco, México, D.F. 
					</div>
					<div class="twelvecol clearfix" style="margin-bottom:20px;">
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>
					</div>
					<div class="text-container textfooter" style="margin-top:20px;">
						El contenido de esta página es propiedad de  BdSI México contadores, S.C. | Todos los derechos reservados. <br><br>
						BdSI  México contadores, S.C.. en adelante  "BdSI”,  estamos preocupados por la seguridad  y confidencialidad de sus datos personales , motivo por el cual le externamos nuestro  compromiso de proteger su privacidad y cumplir con la legislación aplicable a la protección de datos personales en posesión de los particulares. BdSI es el responsable de recabar sus datos personales, por lo que,  ante cualquier posible  pregunta  lo invitamos a que nos escriba  en  <b>ventas@bdsicontadores.com</b>, o nos visite directamente en nuestro domicilio fiscal ubicado en Presidente Masaryk No. 61 piso 2 Col. Chapultepec Morales, C.P. 11570, Polanco, México, D.F.
						<br><br>
						Todos los términos utilizados,  están ligados directamente al aviso  de privacidad  que la Ley Federal de  Protección  de Datos Personales  en Posesión de Particulares  publicada en el DOF el 5 de julio de 2010.
					</div>

<!--<?php echo date('Y'); ?>-->
					<p class="source-org copyright text-container">&copy;  <?php bloginfo( 'name' ); ?></p>
				</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
