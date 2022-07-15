<!DOCTYPE html>
<html>
<head>
    {template_head}
</head>
<body class="<?php _widget('custom_paletteclass'); ?>">
<!-- Start Wrapper-->
    <div id="wrapper">
        <?php _widget('header_loginmenu'); ?>
        <?php _widget('header_logo');?>
        <?php _widget('header_mainmenu'); ?>
    <div id="content">
    <?php _widget('top_title'); ?>
    <?php _widget('top_newsfeed'); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <div class="panel right-line">
                    <h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-building"></i></span> {page_title}</h2>   
                    <!-- START DETAIL-->
                    <div class="detail-properties right-space">
                        <p><?php echo $agent_profile['description']; ?></p>
                    </div>
                    <!-- END DETAIL--> 
                    <?php if(count($agent_estates) > 0): ?>
                        <h2 class="main-heading bottom-line top-line "><span class="main-circle-icon"><i class="icon-building"></i></span> <?php _l('Assigned Properties'); ?></h2>
                        <div class="grid-item grid-style-properties" id="ajax_results">     
                        <?php foreach($agent_estates as $key=>$item): ?>
                        <?php
                            if($key==0)echo '<div class="row-properties">';
                        ?>
                            <?php _generate_results_item(array('key'=>$key, 'item'=>$item)); ?>
                        <?php
                            if( ($key+1)%3==0 )
                            {
                                echo '</div><div class="row-properties">';
                            }
                            if( ($key+1)==count($agent_estates) ) echo '</div>';
                        endforeach;
                        ?>  
                            <div class="pagination pagination-large pagination-ajax-results pagination-centered">
                                <?php echo $pagination_links_agent; ?>
                            </div>
                        </div>    
                    <?php endif; ?>  
                </div>
            </div>
            <div class="span3">
                <div class="panel">
                    <!-- Detail Agent -->
                    <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-user"></i></span> {lang_Agent}</h3>
                    <div class="agent-panel bottom-line line-before">
                        <a href="{agent_url}#content" class="agent-image ">
                            <img src="{agent_image_url}" class="img-polaroid" alt="agent">
                        </a>
                        <ul class="unstyled margin20">
                            <li><i class="icon-phone"></i> {agent_phone} </li>
                            <li><i class="icon-envelope"></i> agent@company.com</li>
                        </ul>
                        <ul class="social social-boxed">
                            <?php if(!empty($agent_profile['facebook_link'])): ?>
                                <li><a href="<?php echo $agent_profile['facebook_link']; ?>"><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if(!empty($agent_profile['youtube_link'])): ?>
                                <li><a href="<?php echo $agent_profile['youtube_link']; ?>"><i class="fa fa-youtube"></i></a></li>
                            <?php endif; ?>
                            <?php if(!empty($agent_profile['gplus_link'])): ?>
                                <li><a href="<?php echo $agent_profile['gplus_link']; ?>"><i class="fa fa-google-plus"></i></a></li>
                            <?php endif; ?>
                            <?php if(!empty($agent_profile['twitter_link'])): ?>
                                <li><a href="<?php echo $agent_profile['twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if(!empty($agent_profile['linkedin_link'])): ?>
                                <li><a href="<?php echo $agent_profile['linkedin_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
                            <?php endif; ?>
                        </ul><!-- /.social-->
                    </div><!-- END Detail Agent -->
                    <!-- FORM CONTACT -->
                    <h3 class="main-heading bottom-line line-before" id="contactForm"><span class="main-circle-icon"><i class="icon-envelope-alt"></i></span><?php _l('Enquireform'); ?></h3>
                     <form method="post" action="<?php _che($page_current_url); ?>#contactForm">
                        <?php _che($validation_errors); ?>
                        <?php _che($form_sent_message); ?>
                        <div class="form-group {form_error_firstname}">
                            <label>{lang_FirstLast}</label>
                            <input class="input-block-level" id="firstname" name="firstname" type="text" value="{form_value_firstname}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_email}">
                            <label>{lang_Email}</label>
                            <input class="input-block-level" id="email" name="email" type="text" value="{form_value_email}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_phone}">
                            <label>{lang_Phone}</label>
                            <input class="input-block-level" id="phone" name="phone" type="text" value="{form_value_phone}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_address}">
                            <label>{lang_Address}</label>
                            <input class="input-block-level" id="address" name="address" type="text" value="{form_value_address}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_message}">
                            <label>{lang_Message}</label>
                            <textarea id="message" name="message" rows="4" class="input-block-level" type="text">{form_value_message}</textarea>
                        </div><!-- /.form-group -->

                        <?php if(config_item('captcha_disabled') === FALSE): ?>
                        <div class="control-group form-group captcha {form_error_captcha}" >
                            <?php echo $captcha['image']; ?>
                            <input class="input-block-level captcha {form_error_captcha}" name="captcha" type="text" placeholder="{lang_Captcha}" value="" />
                            <input class="hidden" style="display:none;" name="captcha_hash" type="text" value="<?php echo $captcha_hash; ?>" />
                        </div>
                        <?php endif; ?>
                        <?php if(config_item('recaptcha_site_key') !== FALSE): ?>
                        <div class="control-group form-group" >
                            <label class="control-label captcha"></label>
                            <div class="controls">
                                <?php _recaptcha(true); ?>
                           </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="submit" value="<?php _l('Send'); ?>" class="btn btn-proper ">
                        </div><!-- /.form-group -->
                    </form>
                    <!-- END FORM CONTACT -->
                    <?php _widget('right_recentproperties'); ?>  
                </div>
            </div>
        </div>
    </div>
</div><!--EndContent-->  
<?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
        </div><!-- End Wrapper-->
       <!-- Just For Demo You can Remove it if unnecessary-->
    <?php _widget('custom_javascript'); ?>
    </body>
</html>
