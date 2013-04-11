<?php get_header(); ?>

<section class="content_center">
    <article class="container">
        <section class="row blog_content">
            <section class="span8">
                <div id="content" role="main">            
					<?php if ( have_posts() ) : ?>
                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'Continuum' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        <?php get_template_part( 'loop', 'search' );
                        ?>
                    <?php else : ?>
                        <div id="post-0" class="post no-results not-found">
                            <h2 class="entry-title"><?php _e( 'Nothing Found', 'Continuum' ); ?></h2>
                            <div class="entry-content">
                                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'Continuum' ); ?></p>
                                <?php get_search_form(); ?>
                            </div><!-- .entry-content -->
                        </div><!-- #post-0 -->
                    <?php endif; ?>
                </div><!-- #content -->
            </section> <!-- span 8 -->
            <section class="span4">
            	<? include(ABSPATH . "/contact_form.inc" ); ?>
            </section><!-- span4 -->
        </section><!--/row blog_content-->
    </article><!--container-->
</section><!--/container content_center-->

<?php get_footer(); ?>
