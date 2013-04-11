<?php get_header(); ?>
<section class="content_center">
    <article class="container">
        <section class="row blog_content">
            <section class="span8">            
                <div id="content" role="main">            
                <?php
                /* Run the loop to output the posts.
                 * If you want to overload this in a child theme then include a file
                 * called loop-index.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'single' );
                ?>
                </div><!-- #content -->
            </section> <!-- span 8 -->
           	<?php get_sidebar(); ?> 
        </section><!--/row blog_content-->
    </article><!--container-->
</section><!--/container content_center-->
<?php get_footer(); ?>
