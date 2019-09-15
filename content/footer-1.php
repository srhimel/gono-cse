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
                        <div class="row">
                            
                                <?php dynamic_sidebar('footer_widgets'); ?>
                            
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <p><?php echo $copyright_text; ?></p>
                    </div>
                </div>                         
            </div>
        </div>
    </div>
</div> 