<?php
/*
Template Name: Template-Home
*/
?>

<?php get_header(); ?>

<div id="content" style="margin-top:0px;">


	<div id="inner-content" class="wrap clearfix">
		<div class="twelvecol first">
			<div class="slider">
				<?php putRevSlider("Home") ?>
			</div>
		</div>

		<div class="eightcol first clearfix">
			<div class="twelvecol first clearfix">
				<div id="main" class="sixcol first clearfix" role="main">
					<div class="text-container">	
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
							</section>

										<!--<footer class="article-footer">
											<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

										</footer>-->

										<?php comments_template(); ?>

									</article>

								<?php endwhile; else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

							<?php endif; ?>
						</div>



					</div>

					<div id="noticias" class="sixcol last clearfix">
						<div class="titulo-seccion">Noticias</div>
						<div class="sombra-titulo"></div>
						<div>
									<?php $args = array(
									'posts_per_page' => 5,
									'post_status' => 'publish',
									'category_name' => 'noticias'
									);
									$noticias = new WP_Query( $args ); ?>
									<?php if ($noticias -> have_posts()) : while ($noticias -> have_posts()) : $noticias -> the_post(); ?>
									<h3 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
							
							
									<?php endwhile; ?>
								<?php else : ?>
								<?php endif; wp_reset_query();?>

						</div>

					</div>


				</div>
				<div class="twelvecol first clearfix">
					<div class="titulo-seccion">Nuestros servicios</div>
					<div class="sombra-titulo"></div>
					<div class="eightcol first">
						<div class="text-containerV"><?php echo get_post_meta($post->ID, 'servicios', true); ?>
						</div>
					</div>
					<div class="fourcol last">
						<div class="text-containerV imagenresponsiva">
							<?php echo types_render_field("banner-servicios1", array("output"=>"html")); ?><br>
							<?php echo types_render_field("banner-servicios2", array("output"=>"html")); ?><br>
							<?php echo types_render_field("banner-servicios3", array("output"=>"html")); ?>
							<!--<img class="imagenresponsiva" src="http://placekitten.com/235/95"> <br><br>
							<img class="imagenresponsiva" src="http://placekitten.com/235/95"> <br><br>
							<img class="imagenresponsiva" src="http://placekitten.com/235/95"> <br><br>
							<img class="imagenresponsiva" src="http://placekitten.com/235/95"> <br><br>-->
						</div>
						<p style="text-align: right;"><a href="http://localhost/bsdi/nuestros-servicios/"><span class="button">+ Ver más</span></a></p>
					</div>
				</div>
				<div class="twelvecol first clearfix">
					<div class="titulo-seccion">Nuestras industrias</div>
					<div class="sombra-titulo"></div>
					
						<div class="tabs-contenido">
										<div class="threecol first clearfix">

											<ul class="tabs">
												<?php $idp=get_the_ID(); ?>
												<?php $args = array(
												    'post_type' => 'tab',
												    'numberposts' => -1,
												    'meta_query' => array(
												        array(
												            'key' => '_wpcf_belongs_page_id',
												            'value' => $idp
												            )
												        )
												    );
												    $slide = new WP_Query( $args ); ?>
												    <?php if ($slide -> have_posts()) : while ($slide -> have_posts()) : $slide -> the_post(); ?>
												    	
												    		<li><a href="#"><?php the_title(); ?></a></li>
		
												    <?php endwhile; ?>
												<?php else : ?>
												No posts
												<?php endif; wp_reset_query();?>
											</ul>
										 </div> 
										<!-- tab "panes" -->
										<div class="ninecol last clearfix">
											<div class="panes">
												<?php $args = array(
												    'post_type' => 'tab',
												    'numberposts' => -1,
												    'meta_query' => array(
												        array(
												            'key' => '_wpcf_belongs_page_id',
												            'value' => $idp
												            )
												        )
												    );
												    $slide = new WP_Query( $args ); ?>
												    <?php if ($slide -> have_posts()) : while ($slide -> have_posts()) : $slide -> the_post(); ?>
												    	
												    		<div><?php echo types_render_field("texto-de-tab", array("output"=>"html")); ?></div>
		
												    <?php endwhile; ?>
												<?php else : ?>
												<?php endif; wp_reset_query();?>
											</div>
										</div>
									</div> 
					
				</div>
			</div>

				<?php get_sidebar(); ?>
			
			</div>

		</div>

<?php get_footer(); ?>
