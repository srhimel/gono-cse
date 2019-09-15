<?php

  
 get_header();  ?>
    <div class="maincontent-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="maincontent">
                        <div class="row">
                            <?php if(is_singular( 'result' )) { echo do_shortcode('[results id="'.get_the_ID().'"]'); } ?>

                            <?php if(have_posts()) : ?>
                            <?php while(have_posts())  : the_post(); 
                            ?>
                            <div class="col-sm-12">
                                <div class="col-sm-6" style="padding:10px;">
                                    <div class="col-md-12" style="padding:0">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <?php the_post_thumbnail('small'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <hr>
                                        <div>
                                            <h4><i class="fas fa-user-tie"></i>
                                                <?php echo get_post_meta(get_the_id(),'teacher_designation',true); ?>
                                            </h4>
                                            <h4><i class="fa fa-graduation-cap"></i>
                                                <?php echo get_post_meta(get_the_id(),'teacher_edu_qualification',true); ?>
                                            </h4>
                                            <h4><i class="fa fa-envelope"></i>
                                                <?php echo get_post_meta(get_the_id(),'teacher_email',true); ?>
                                            </h4>
                                            <h4><i class="fa fa-phone"></i>
                                                <?php echo get_post_meta(get_the_id(),'teacher_mobile',true); ?>
                                            </h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="padding-top: 10px;">
                                        <p><b>Joined Gono Bishwabidyalay on <?php echo get_post_meta(get_the_id(),'teacher_join_date',true); ?></b></p>
                                    </div>
                                </div>
                            </div>
                            <p>
                                
                            </p>
                            <div class="col-sm-12 custom_border" style="margin-bottom:20px;">
                                <div class="col-md-12">
                                        <br>
                                        <h4>Research (National and International):</h4>
                                        <hr>
                                        <?php the_content(); ?>

                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
