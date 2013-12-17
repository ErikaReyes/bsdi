<?php
/*
Template Name: Template-pagina
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>
									<!--<p class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link() );
									?></p>-->

								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
									<div class="tabs-contenido">
										<div class="threecol first clearfix">

											<ul class="tabs">
												<?php $idp=get_the_ID(); ?>
												<?php $args = array(
												    'post_type' => 'tab',
												    'posts_per_page' => -1,
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
												    'posts_per_page' => -1,
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
								</section>

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

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

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

