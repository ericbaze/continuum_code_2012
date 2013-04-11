<?php get_header(); ?>
<section class="content_center">
    <article class="container">
        <section class="row blog_content">
            <section class="span8">

                <div id="content" role="main">
            
                <?php get_template_part( 'loop', 'page' ); ?>
                </div><!-- #content -->
            </section> <!-- span 8 -->
            <section class="span4">
                    <? include(ABSPATH . "../contact_form.inc" ); ?>
            </section><!-- span4 -->
        </section><!--/row blog_content-->
    </article><!--container-->
</section><!--/container content_center-->

<?php get_footer(); ?>
