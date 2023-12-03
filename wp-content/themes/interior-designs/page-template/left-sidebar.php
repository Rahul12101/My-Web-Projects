<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'interior_designs_pageleft_header' ); ?>

<div class="container space-top">
    <main id="main" role="main" class="middle-align">
        <div class="row">       
    		<div class="col-lg-4 col-md-4" id="sidebar">
    			<?php dynamic_sidebar('sidebar-2'); ?>
    		</div>		 
    		<div class="col-lg-8 col-md-8" id="content-ma" >
    			<?php while ( have_posts() ) : the_post(); ?>
                    <div class="feature-box">   
                        <?php the_post_thumbnail(); ?>
                    </div>
                  
                    <div class="entry-content"><?php the_content();?></div>
                    <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'interior-designs' ),
                        'after'  => '</div>',
                    ) );
                    
                        //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>
                <div class="clear"></div> 
            </div>  
        </div>
    </main>
</div>

<?php do_action( 'interior_designs_pageleft_footer' ); ?>

<?php get_footer(); ?>