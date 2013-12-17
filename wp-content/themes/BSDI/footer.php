			<footer class="footer" role="contentinfo">
				<div id="inner-footer"  class="container">
					<div class="row">
						<div class="col-sm-12">
							<nav role="navigation">
							<?php bones_footer_links(); ?>
							</nav>
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>							
						</div>
					</div>
				</div>
			</footer> <?php // end footer ?>


		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <?php // end page. what a ride! ?>
