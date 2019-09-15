<?php 
    $contact_address = ot_get_option('contact_address');
    $contact_phone = ot_get_option('contact_phone');
    $copyright_text = ot_get_option('copyright_text');
    $top_email = ot_get_option('top_email');
?>
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <div class="footer-top">
                        <div class="footer-visitor-menu">
                            <?php
                                if(has_nav_menu('footer-menu')) {
                                    wp_nav_menu(array('theme_location' => 'footer-menu'));
                                } else {
                                    $page_count = 4;
                                    $page_source = wp_list_pages("title_li=&depth=1&echo=0");
                                    $pages_array = explode("\n", $page_source);
                                    echo '<ul>';
                                    for($i=0;$i<$page_count;$i++){
                                        echo $pages_array[$i];
                                    }
                                    echo '</ul>';
                                }
                            ?>                            
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <p><span class="big-text"><strong><?php _e( 'Contact Info : ', 'srh-education-theme' ); ?>:</strong> <?php echo $contact_address; ?>, <?php _e( 'Email Address : ', 'srh-education-theme' ); ?>: <a href="<?php echo $top_email; ?>"><?php echo $top_email; ?></a>, <?php _e( 'Contact No : ', 'srh-education-theme' ); ?>: <?php echo $contact_phone; ?></span><br/>
                        <?php echo $copyright_text; ?> &bull; <?php _e( 'Last Updated: ', 'srh-education-theme' ); ?>: <?php echo do_shortcode('[mb_last_modified]'); ?></p>
                    </div>
                </div>                         
            </div>
        </div>
    </div>
</div> 