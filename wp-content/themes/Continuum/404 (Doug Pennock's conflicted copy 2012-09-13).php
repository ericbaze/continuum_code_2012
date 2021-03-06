<?php get_header(); ?>

<section class="content_center">
    <article class="container">
        <section class="row blog_content">
            <section class="span8">
                <div id="content" role="main">
                    <div id="post-0" class="post error404 not-found">
                        <h1 class="entry-title"><?php _e( 'Not Found', 'Continuum' ); ?></h1>
                        <div class="entry-content">
                            <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'Continuum' ); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-0 -->
                </div><!-- #content -->
            </section> <!-- span 8 -->
            <section class="span4">
            	<? include(ABSPATH . "contact_form.inc" ); ?>
            </section><!-- span4 -->
        </section><!--/row blog_content-->
    </article><!--container-->
</section><!--/container content_center-->

<script type="text/javascript">
	// focus on search field after it has loaded
	document.getElementById('s') && document.getElementById('s').focus();
</script>

<?php get_footer(); ?>