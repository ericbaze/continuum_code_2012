<?php get_header(); ?>
<section class="content_center">
    <article class="container">
        <section class="row blog_content">
            <section class="span8">
                <div id="content" role="main">           
					<?php if ( have_posts() ) the_post(); ?> 
                        <h1 class="page-title">
                    <?php if ( is_day() ) : ?>
                            <?php printf( __( 'Daily Archives: <span>%s</span>', 'Continuum' ), get_the_date() ); ?>
                    <?php elseif ( is_month() ) : ?>
                            <?php printf( __( 'Monthly Archives: <span>%s</span>', 'Continuum' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'Continuum' ) ) ); ?>
                    <?php elseif ( is_year() ) : ?>
                            <?php printf( __( 'Yearly Archives: <span>%s</span>', 'Continuum' ), get_the_date( _x( 'Y', 'yearly archives date format', 'Continuum' ) ) ); ?>
                    <?php else : ?>
                            <?php _e( 'Blog Archives', 'Continuum' ); ?>
                    <?php endif; ?>
                        </h1>
                    
                    <?php rewind_posts(); get_template_part( 'loop', 'archive' ); ?>
                </div><!-- #content -->
            </section> <!-- span 8 -->
            <?php get_sidebar(); ?>
        </section><!--/row blog_content-->
    </article><!--container-->
</section><!--/container content_center-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
