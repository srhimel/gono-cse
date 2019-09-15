<?php get_header(); /* Template Name: Jurnal Page */ ?>


<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="maincontent">
                    <div class="row">
                        <div class="col-md-12">
                               <h2>Journal Paper</h2>
                               <hr>
                                <?php $alada = new Wp_Query(array(
            'post_type' => 'teacher',
        )); ?>
        <?php while($alada->have_posts()) : $alada->the_post(); ?>
            <h4> By: <a href="<?php the_permalink(); ?>"><u><?php the_title(); ?></u></a></h4>
            <p><?php the_content(); ?></p>
            <hr>
        <?php endwhile; ?>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>                           
                        
<?php get_footer(); ?>