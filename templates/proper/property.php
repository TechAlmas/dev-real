<!DOCTYPE html>
<html>
<head>
    {template_head}
    <?php if(file_exists(FCPATH.'templates/'.$settings_template.'/assets/js/places.js')): ?>
    <script src="assets/js/places.js"></script>
    <?php endif; ?>
</head>
<body class="<?php _widget('custom_paletteclass'); ?>">
<?php if (!empty($settings_facebook_jsdk) && (config_db_item('appId') == '' || !file_exists(FCPATH . 'templates/' . $settings_template . '/assets/js/like2unlock/js/jquery.op.like2unlock.min.js'))): ?>
<?php
if (!empty($lang_facebook_code))
    $settings_facebook_jsdk = str_replace('en_EN', $lang_facebook_code, $settings_facebook_jsdk);
?>
<?php echo $settings_facebook_jsdk; ?>
<?php endif; ?>
       <!-- Start Wrapper-->
        <div id="wrapper">
            <?php _widget('header_loginmenu'); ?>
            <?php _widget('header_logo');?>
            <?php _widget('header_mainmenu'); ?>

<div id="content">
    <!--Start Main Title-->
    <div id="main-title-content">
        <img src="assets/proper_theme/images/properties/slider/fslider/p1.jpg" id="bg" alt="main-title"/>
        <div class="container">
            <div class="panel">
                <h1><?php _l('Detail Property'); ?></h1>    
                <p>{page_title}, #{estate_data_id}</p>    
            </div>
        </div>
    </div> <!--End Main Title-->
 <?php _widget('top_newsfeed'); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <div class="panel right-line">
                <?php _widget('center_adshorizontal');?>
                    <h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-building"></i></span><?php _che($estate_data_address); ?> </h2>   
                  <!-- START DETAIL-->
                    <div class="detail-properties right-space">
                        <!-- START SLIDER -->
                        <div class="big-image text-center">
                            <div class="preloader"></div>
                           <!-- <div class="desc-image">
                                <h3>Central Park 023</h3>
                                <p>In convallis venenatis magna, nec interdum ipsum iaculis et. Nulla facilisi. Duis in neque malesuada vestibulum ut neque. </p>
                            </div>-->
                            <img src="<?php echo _simg($estate_image_url, '840x500');?>" id="big-image-preview" alt="big-image-preview">
                        </div>
                        <div class="list_image_detail">
                            <ul id="list_images_property">
                                <?php foreach($slideshow_property_images as $file): ?>
                                <li><a href="#" data-bigimage="<?php echo _simg($file['url'], '840x500'); ?>" data-title="Interior 01" data-desc="Description 01 In convallis venenatis magna, nec interdum ipsum iaculis et. Nulla facilisi. Duis in neque malesuada vestibulum ut neque"><img src="<?php echo _simg($file['url'], '150x110'); ?>" alt="Thum"/></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="clearfix"></div>
                            <a id="prev2" class="prev" href="#">&lt;</a>
                            <a id="next2" class="next" href="#">&gt;</a>
                        </div>
                        <div class="row-fluid property-btn-box" id="main">
                        <?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
                        <?php
                            $favorite_added = false;
                            if(count($not_logged) == 0)
                            {
                                $CI =& get_instance();
                                $CI->load->model('favorites_m');
                                $favorite_added = $CI->favorites_m->check_if_exists($this->session->userdata('id'), 
                                                                                    $estate_data_id);
                                if($favorite_added>0)$favorite_added = true;
                            }
                        ?>
                        <div class="pull-left" style="padding: 0px 0px 10px 4px;margin: 15px 0;">
                            <a class="btn btn-warning" id="add_to_favorites" href="#" style="<?php echo ($favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Add to favorites'); ?> <i class="load-indicator"></i></a>
                            <a class="btn btn-success" id="remove_from_favorites" href="#" style="<?php echo (!$favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Remove from favorites'); ?> <i class="load-indicator"></i></a>
                        </div>
                        <?php endif; ?>
                        <ul class="clearfix sharing-buttons pull-right">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/share.php?u={page_current_url}&title={page_title}"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <i class="fa fa-facebook fa-left"></i>
                                    <span class="social-name">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="google-plus" href="https://plus.google.com/share?url={page_current_url}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <i class="fa fa-google-plus fa-left"></i>
                                    <span class="social-name">Google+</span>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="https://twitter.com/home?status={page_title}%20{page_current_url}"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <i class="fa fa-twitter fa-left"></i>
                                    <span class="social-name">Twitter</span>
                                </a>
                            </li>
                        </ul>
                        </div>
                        <!-- END SLIDER -->
                        <h3>{lang_Description}</h3>
                        <p>{page_body}</p>
                        <h3 class="bottom-line main-heading">{options_name_1}</h3>
                        <div class="property-detail-overview">
                            <div class="property-detail-overview-inner  clearfix">
                            {category_options_1}
                            {is_text}
                            <div class="property-detail-overview-item span4">
                                <strong>{option_name}:</strong>
                                <span>{option_prefix} {option_value} {option_suffix}</span>
                            </div><!-- /.property-detail-overview-item -->
                            {/is_text}
                            {is_dropdown}
                            <div class="property-detail-overview-item span4">
                                <strong>{option_name}:</strong>
                                <span class="label label-success">&nbsp;&nbsp;{option_value}&nbsp;&nbsp;</span>
                            </div><!-- /.property-detail-overview-item -->
                            {/is_dropdown}
                            {is_checkbox}
                            <div class="property-detail-overview-item span4">
                                <strong>{option_name}:</strong>
                                <span><img src="assets/img/checkbox_{option_value}.png" alt="{option_value}" /></span>
                            </div><!-- /.property-detail-overview-item -->
                            {/is_checkbox}
                            {/category_options_1}
                            </div><!-- /.property-detail-overview-inner -->
                        </div><!-- /.property-detail-overview -->
                        <?php if(config_item('enable_pedigree_input') === TRUE && !empty($estate_data_option_77)):?>
                        
                        
<?php 
    $id_tree = '77_1';
    
    $val = $estate_data_option_77;
    $el_num = substr_count($val, '<li');
    
    // If not defined in this language
    if($el_num < 2)
    {
        //Fetch option for default language
        $def_lang_id = $this->language_m->get_default_id();
        if(!empty($def_lang_id))
        {
            $val = $this->option_m->get_property_value($def_lang_id, $estate_data_id, 77);
        }
    }
    
    $el_num = substr_count($val, '<li');
    if($el_num > 1):
 ?>
<h3 class="bottom-line main-heading">{options_name_77}</h3>                  
<div class="PEDIGREE_wrap1">
    <div class="PEDIGREE_container overflow id<?php echo $id_tree; ?>">
        <div>
        <ul id="id<?php echo $id_tree; ?>" class='tree'>
        <?php 


        
        echo html_entity_decode($val);
        
        ?>
        
        </ul>
        </div>
    </div>
</div>
                        
<script type="text/javascript">

    $(function () {
        generate_pedigree_tree('<?php echo $id_tree; ?>');
    });

</script>
<?php endif; ?>       
                        <?php endif; ?>
                        
                        <?php if(isset($category_options_21) && $category_options_count_21>0): ?>
                        <h3>{options_name_21}</h3>
                        <div class="clearfix">
                         <ul class="property-detail-amenities  clearfix">
                        {category_options_21}
                        {is_checkbox}
                        <li class="span3">
                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                        </li>
                        {/is_checkbox}
                        {/category_options_21}
                            </ul>
                        </div><!-- /.row -->
                        <hr>
                        <?php endif; ?>

                        <?php if(isset($category_options_52) && $category_options_count_52>0): ?>
                        <h3>{options_name_52}</h3>
                        <div class="clearfix">
                         <ul class="property-detail-amenities  clearfix">
                        {category_options_52}
                        {is_checkbox}
                        <li class="span3">
                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                        </li>
                        {/is_checkbox}
                        {/category_options_52}
                            </ul>
                        </div><!-- /.row -->
                        <hr>
                        <?php endif; ?>
                        
                        <?php if(isset($category_options_43) && $category_options_count_43>0): ?>
                        <h3>{options_name_43}</h3>
                        <div class="clearfix">
                         <ul class="property-detail-amenities  clearfix">
                        {category_options_43}
                        {is_text}
                        <li class="span3">
                        <i class="fa fa-check ok"></i> {icon} {option_name}:&nbsp;&nbsp;{option_prefix}{option_value}{option_suffix}
                        </li>
                        {/is_text}
                        {/category_options_43}
                            </ul>
                        </div><!-- /.row -->
                        <hr>
                        <?php endif; ?>
                        
                        <?php if(!empty($estate_data_option_12)): ?>
                            <h2>{options_name_9}</h2>
                            {estate_data_option_12}
                            <br style="clear:both;" />
                        <?php endif; ?>
                            
                        <?php if(file_exists(FCPATH.'templates/'.$settings_template.'/assets/js/places.js')): ?> 
                        <?php _widget('property_center_nearplaces');?>  
                        <hr>
                        <?php endif;?>
                            
                        <?php if(config_db_item('walkscore_enabled') == TRUE && !empty($estate_data_address)): ?>
                            <br />
                            <script type='text/javascript'>
                            var ws_wsid = '';
                            <?php
                            echo "var ws_address = '$estate_data_address';";
                            ?>
                            var ws_width = '500';
                            var ws_height = '336';
                            var ws_layout = 'horizontal';
                            var ws_commute = 'true';
                            var ws_transit_score = 'true';
                            var ws_map_modules = 'all';
                            </script><style type='text/css'>#ws-walkscore-tile{position:relative;text-align:left}#ws-walkscore-tile *{float:none;}#ws-footer a,#ws-footer a:link{font:11px/14px Verdana,Arial,Helvetica,sans-serif;margin-right:6px;white-space:nowrap;padding:0;color:#000;font-weight:bold;text-decoration:none}#ws-footer a:hover{color:#777;text-decoration:none}#ws-footer a:active{color:#b14900}</style><div id='ws-walkscore-tile'><div id='ws-footer' style='position:absolute;top:318px;left:8px;width:488px'><form id='ws-form'><a id='ws-a' href='http://www.walkscore.com/' target='_blank'>What's Your Walk Score?</a><input type='text' id='ws-street' style='position:absolute;top:0px;left:170px;width:286px' /><input type='image' id='ws-go' src='http://cdn2.walk.sc/2/images/tile/go-button.gif' height='15' width='22' border='0' alt='get my Walk Score' style='position:absolute;top:0px;right:0px' /></form></div></div><script type='text/javascript' src='http://www.walkscore.com/tile/show-walkscore-tile.php'></script>
                        <?php endif; ?>
                
                       
                        <?php if(file_exists(APPPATH.'controllers/admin/reviews.php') && $settings_reviews_enabled): ?>
                        <h2 id="form_review" class="main-heading bottom-line"><?php echo lang_check('YourReview'); ?></h2>
                        <?php if(count($not_logged)): ?>
                        <p class="alert alert-success">
                            <?php echo lang_check('LoginToReview'); ?>
                        </p>
                        <?php else: ?>
                        
                        <?php if($reviews_submitted == 0): ?>
                        <form class="form-horizontal no-padding " method="post" action="{page_current_url}#form_review">
                        <div class="control-group">
                        <label class="control-label" for="inputRating"><?php echo lang_check('Rating'); ?></label>
                        <div class="controls">
                            <input type="number" data-max="5" data-min="1" name="stars" id="stars" class="rating" data-empty-value="5" value="5" data-active-icon="icon-star" data-inactive-icon="icon-star-empty" />
                        </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputMessageR"><?php echo lang_check('Message'); ?></label>
                            <div class="controls">
                                <textarea id="inputMessageR" rows="3" name="message" rows="3" placeholder="{lang_Message}"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn"><?php echo lang_check('Send'); ?></button>
                            </div>
                        </div>
                        </form>
                        <?php else: ?>
                        <p class="alert alert-info">
                            <?php echo lang_check('ThanksOnReview'); ?>
                        </p>
                        <?php endif; ?>

                        <?php endif; ?>
                        

                        <?php if($settings_reviews_public_visible_enabled): ?>
                        <h2><?php echo lang_check('Reviews'); ?></h2>
                        <div class="box-white">
                        <?php if(count($not_logged) && !$settings_reviews_public_visible_enabled): ?>
                        <p class="alert alert-success">
                            <?php echo lang_check('LoginToReadReviews'); ?>
                        </p>
                        <?php else: ?>
                        <?php if(count($reviews_all) > 0): ?>
                        <ul class="media-list">
                        <?php foreach($reviews_all as $review_data): ?>
                        <?php //print_r($review_data); ?>
                        <li class="media">
                        <div class="pull-left">
                        <?php if(isset($review_data['image_user_filename'])): ?>
                        <img class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;" src="<?php echo base_url('files/thumbnail/'.$review_data['image_user_filename']); ?>" />
                        <?php else: ?>
                        <img class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;" src="assets/img/user-agent.png" />
                        <?php endif; ?>
                        </div>
                        <div class="media-body">
                        <h4 class="media-heading"><div class="review_stars_<?php echo $review_data['stars']; ?>"> </div></h4>
                        <?php if($review_data['is_visible']): ?>
                        <?php echo $review_data['message']; ?>
                        <?php else: ?>
                        <?php echo lang_check('HiddenByAdmin'); ?>
                        <?php endif; ?>
                        </div>
                        </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php else: ?>
                        <p class="alert alert-success">
                            <?php echo lang_check('SubmitFirstReview'); ?>
                        </p>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                        </div>
                        <?php endif; ?>
                            
                        <?php _widget('property_center-facecomments');?>
                        <?php if(count($agent_estates) > 0): ?>
                                    <h2><?php _l('Agentestates'); ?></h2>
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
                   <!-- END DETAIL-->

                </div>
            </div>
            <div class="span3">
                <div class="panel no-padding ">
                    
                    <?php if(!file_exists(FCPATH.'templates/'.$settings_template.'/assets/js/places.js')): ?>
                    <!-- MAP LOCATION-->
                    <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-map-marker"></i></span>  <?php _l('Location');?></h3>    
                    <div class="bottom-line line-before" style="padding-bottom:15px;">
                        <div id="map-property-2" style="height:400px;"></div><!-- /.map-property -->   
                    </div><!-- END MAP LOCATION -->
                    <?php endif;?>
                    
                    <?php if(!empty($estate_data_option_56) || (!empty($avarage_stars) && file_exists(APPPATH.'controllers/admin/reviews.php') && $settings_reviews_enabled)): ?>
                    <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-star"></i></span>  <?php _l('Ratings');?></h3>     
                    <div class="widget bottom-line line-before widget-ratings">
                        <div class="row-fluid box-white ">
                        <?php if(!empty($estate_data_option_56)): ?>
                        <div class="row-fluid bottom-border">
                            <strong class="pull-left">{lang_Pro}:</strong>
                            <span class="pull-right review_stars_<?php echo $estate_data_option_56; ?>"> </span>
                        </div>
                        <?php endif;?>
                        <?php if(!empty($avarage_stars) && file_exists(APPPATH.'controllers/admin/reviews.php') && $settings_reviews_enabled): ?>
                        <div class="row-fluide">  
                            <strong class="pull-left">{lang_Users}:</strong>
                            <span class="pull-right review_stars_<?php echo $avarage_stars; ?>"> </span>
                        </div> 
                        <?php endif;?>
                        </div>
                    <?php endif;?>  
                        
                    </div>
                    <?php _widget('property_right_companydetails');?>
                    
                    {has_agent}
                    <!-- Detail Agent -->
                    <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-user"></i></span> {lang_Agent}</h3>
                    <div class="agent-panel bottom-line line-before">
                        <a href="{agent_url}#content" class="agent-image ">
                            <img src="{agent_image_url}" class="img-polaroid" alt="agent">
                        </a>
                        <ul class="unstyled margin20">
                            <li><i class="icon-phone"></i> {agent_phone} </li>
                            <li><i class="icon-envelope"></i> {agent_mail}</li>
                            <!--<li><i class="icon-facebook"></i> angel</li>
                            <li><i class="icon-twitter"></i> @angel</li>-->
                        </ul>
                    </div><!-- END Detail Agent -->
                    {/has_agent}
                    <div style="padding-top: 25px;">
                    <p style="text-align:right;">
                        <a target="_blank" type="button" class="btn" href="{estate_data_printurl}"><i class="icon-print"></i>&nbsp;{lang_PrintVersion}</a>
                    </p>
                    </div>

                    <?php _widget('property_right_qrcode');?>
                    <?php _widget('property_right_pdf');?>
                    
                    
                    <?php if(file_exists(APPPATH.'controllers/propertycompare.php')):?>
                        <?php _widget('property_compare'); ?>
                    <?php endif;?>
                    <?php _widget('property_right_currency-conversions');?>
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

                        <?php if(config_item('reservations_disabled') === FALSE ||
                                 (file_exists(APPPATH.'controllers/admin/booking.php') && count($is_purpose_rent) && $this->session->userdata('type')=='USER' && config_item('reservations_disabled') === FALSE)): ?>
                        {is_purpose_rent}
                        <div class="form-group {form_error_fromdate}">
                            <label>{lang_FromDate}</label>
                            <input class="input-block-level"  id="datetimepicker1" name="fromdate" type="text" placeholder="{lang_FromDate}" value="{form_value_fromdate}" />
                        </div><!-- /.form-group -->
                        <div class="form-group {form_error_todate}">
                            <label>{lang_ToDate}</label>
                            <input class="input-block-level" id="datetimepicker2" name="todate" type="text" placeholder="{lang_ToDate}" value="{form_value_todate}" />
                        </div><!-- /.form-group -->
                        {/is_purpose_rent}
                        <?php endif; ?>

                        <div class="form-group {form_error_message}">
                            <label>{lang_Message}</label>
                            <textarea id="message" name="message" rows="4" class="input-block-level" type="text">{form_value_message}</textarea>
                        </div><!-- /.form-group -->

                        <?php if(config_item('captcha_disabled') === FALSE): ?>
                        <div class="control-group form-group captcha" >
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
                    <?php _widget('right_adsvertical'); ?>
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
    <script type="text/javascript">

$(document).ready(function() {

<?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
    // [START] Add to favorites //  
    
    $("#add_to_favorites").click(function(){
        
        var data = { property_id: {estate_data_id} };
        
        var load_indicator = $(this).find('.load-indicator');
        load_indicator.css('display', 'inline-block');
        $.post("{api_private_url}/add_to_favorites/{lang_code}", data, 
               function(data){
            
            ShowStatus.show(data.message);
                            
            load_indicator.css('display', 'none');
            
            if(data.success)
            {
                $("#add_to_favorites").css('display', 'none');
                $("#remove_from_favorites").css('display', 'inline-block');
            }
        });

        return false;
    });
    
    $("#remove_from_favorites").click(function(){
        
        var data = { property_id: {estate_data_id} };
        
        var load_indicator = $(this).find('.load-indicator');
        load_indicator.css('display', 'inline-block');
        $.post("{api_private_url}/remove_from_favorites/{lang_code}", data, 
               function(data){
            
            ShowStatus.show(data.message);
                            
            load_indicator.css('display', 'none');
            
            if(data.success)
            {
                $("#remove_from_favorites").css('display', 'none');
                $("#add_to_favorites").css('display', 'inline-block');
            }
        });

        return false;
    });
    
    // [END] Add to favorites //  
<?php endif; ?>
    
    
    
 
});


</script>


<?php if(config_item('enable_pedigree_input') === TRUE):?>
<link rel="stylesheet" href="assets/js/pedigree/style.css">
<script src="assets/js/pedigree/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/pedigree/jquery.tree.js"></script>

<script>

function generate_pedigree_tree(id_key)
{
    $('#id'+id_key+'.tree').tree_structure({
        'add_option': false,
        'edit_option': false,
        'delete_option': false,
        'confirm_before_delete': false,
        'animate_option': false,
        'fullwidth_option': true,
        'align_option': 'center',
        'draggable_option': false,
        'click_to_add' : '<?php _l('Click for Add'); ?>',
        'click_to_edit' : '<?php _l('Click for Edit'); ?>',
        'click_to_delete' : '<?php _l('Click for Delete'); ?>',
        'first_name' : '<?php _l('Title'); ?>',
        'submit' : '<?php _l('Submit'); ?>',
        'base_path': 'assets/js/pedigree',
    });
    
    $('#id'+id_key+'.tree .add_action').remove();
    $('#id'+id_key+'.tree .edit_action').remove();
    $('#id'+id_key+'.tree .delete_action').remove();
}

</script>
<?php endif; ?>
       
       
    </body>
</html>
