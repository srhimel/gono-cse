<?php get_header(); ?>
    
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="maincontent">
                    <div class="row">
                        <div class="col-md-8">
                            
                            <?php if(is_singular( 'result' )) { echo do_shortcode('[results id="'.get_the_ID().'"]'); } ?>
                            <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); 
                            ?> <h2> <?php the_title(); ?></h2>
                            <?php the_post_thumbnail('full'); ?> <br><br> <p> Posted on: <?php the_time('M, d, Y'); ?> </p>
                            <p><?php the_content(); ?></p>
                            <?php endwhile; endif; ?> 
                        </div>

                        <?php get_sidebar(); ?>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</div>    
                        
<?php get_footer(); ?>