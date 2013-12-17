<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e( 'Error 404 - Artículo No Encontrado', 'bonestheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'El artículo que estabas buscando no ha sido encontrado. Intenta otra vez.', 'bonestheme' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>

							<footer class="article-footer">

									<p><?php _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

							</footer>

						</article>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
