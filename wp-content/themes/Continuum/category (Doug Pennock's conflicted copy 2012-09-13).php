<?php get_header(); ?>
	<section class="content_center">
    	<article class="container">
        	<section class="row blog_content">
            	<section class="span8">
                	<div id="content" role="main">
                        <h1 class="page-title"><?php
                            printf( __( 'Category Archives: %s', 'Continuum' ), '<span>' . single_cat_title( '', false ) . '</span>' );
                        ?></h1>
                        <?php
                            $category_description = category_description();
                            if ( ! empty( $category_description ) )
                                echo '<div class="archive-meta">' . $category_description . '</div>';
                        get_template_part( 'loop', 'category' );
                        ?>
                    </div><!-- #content -->
                </section> <!-- span 8 -->
                <section class="span4">
                        <? include(ABSPATH . "/contact_form.inc" ); ?>
                </section><!-- span4 -->
            </section><!--/row blog_content-->
        </article><!--container-->
    </section><!--/container content_center-->
<?php get_footer(); ?>
