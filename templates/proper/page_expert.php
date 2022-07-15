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
                    <div class="row-fluid bottom-line">
                        <?php if(file_exists(APPPATH.'controllers/admin/expert.php')):?>
                        <div class="span9">
                        <?php else:?>
                        <div class="span12">  
                        <?php endif;?>
                            <div class="panel right-line">
                                <h2  id="expert" class="main-heading bottom-line"> {page_title}</h2>   
                                    <div class="home-page-body right-space" style="padding-bottom: 30px;">
                                        {page_body}
                                          <?php _widget('center_imagegallery'); ?>

                                        {has_page_documents}
                                        <h2>{lang_Filerepository}</h2>
                                        <ul>
                                        {page_documents}
                                        <li>
                                            <a href="{url}">{filename}</a>
                                        </li>
                                        {/page_documents}
                                        </ul>
                                        {/has_page_documents}
                                    </div>
                                <?php if(file_exists(APPPATH.'controllers/admin/expert.php')):?>
                                <h2  id="expert" class="main-heading bottom-line top-line"><span class="main-circle-icon"><i class="icon-lightbulb"></i></span> {page_title}</h2>   
                                <!--Start Accordion-->
                                <div class="accordion right-space property_content_position" >
                                    <div class="accordion-group">
                                    <?php foreach($expert_module_all as $key=>$row):?>
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#question<?php echo $key;?>">
                                                <h4><?php echo $row->question; ?></h4>
                                            </a>
                                        </div>
                                        <div id="question<?php echo $key;?>" class="accordion-body collapse <?php echo ($key==0) ? 'in' : '' ;?>">
                                            <div class="accordion-inner">
                                                <p><?php echo $row->answer; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                </div><!--End Accordion-->
                                <?php endif;?>
                            </div>
                        </div>
                        <?php if(file_exists(APPPATH.'controllers/admin/expert.php')):?>
                        <div class="span3">
                            <div class="panel ">
                                <h2 class="bottom-line line-before main-heading"><?php _l('Search');?></h2>   
                                <div class="sidebar-ads-1 bottom-line  line-before " style="padding-bottom: 30px;">
                                    <input type="text" placeholder="{lang_Search}" class="input-block-level" id="search_expert" autocomplete="off"/>
                                    <?php foreach($categories_expert as $id=>$category_name):?>
                                    <?php if($id != 0): ?>
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" href="{page_current_url}?cat=<?php echo $id; ?>#expert">
                                                <?php echo $category_name; ?>
                                            </a>
                                        </div>
                                     <?php endif;?>
                                    <?php endforeach;?>
                                </div>    
                                <h3 id="form" class="main-heading bottom-line line-before">{lang_AskExpert}</h3>
                                <div id="form" class="property-form">
                                  {validation_errors}
                                  {form_sent_message}
                                  <form method="post" action="{page_current_url}#form">
                                      <label>{lang_FirstLast}</label>
                                      <input class="input-block-level {form_error_firstname}" name="firstname" type="text" placeholder="{lang_FirstLast}" value="{form_value_firstname}" />
                                      <label>{lang_Phone}</label>
                                      <input class="input-block-level {form_error_phone}" name="phone" type="text" placeholder="{lang_Phone}" value="{form_value_phone}" />
                                      <label>{lang_Email}</label>
                                      <input class="input-block-level {form_error_email}" name="email" type="text" placeholder="{lang_Email}" value="{form_value_email}" />

                                      <label>{lang_Question}</label>
                                      <textarea class="input-block-level {form_error_question}" name="question" rows="3" placeholder="{lang_Question}">{form_value_question}</textarea>

                                      <?php if(config_item('captcha_disabled') === FALSE): ?>
                                      <label class="captcha"><?php echo $captcha['image']; ?></label>
                                      <input class="input-block-level captcha {form_error_captcha}" name="captcha" type="text" placeholder="{lang_Captcha}" value="" />
                                      <br style="clear: both;" />
                                      <input class="hidden" style="display:none;" name="captcha_hash" type="text" value="<?php echo $captcha_hash; ?>" />
                                      <?php endif; ?>
                                      <?php if(config_item('recaptcha_site_key') !== FALSE): ?>
                                        <div class="control-group" >
                                            <label class="control-label captcha"></label>
                                            <div class="controls">
                                                <?php _recaptcha(true); ?>
                                           </div>
                                        </div>
                                        <?php endif; ?>
                                     <button class="input-block-level btn-proper btn-large"> {lang_Send}</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
          
            </div>
        </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
        </div><!-- End Wrapper-->
       <!-- Just For Demo You can Remove it if unnecessary-->
    <?php _widget('custom_javascript'); ?>
    <script language="javascript">
    $(document).ready(function(){
        $("#search_expert").keyup( function() {
            if($(this).val().length > 2 || $(this).val().length == 0)
            {
                $.post('<?php echo $ajax_expert_load_url; ?>', {search: $('#search_expert').val()}, function(data){
                    $('.property_content_position').html(data.print);
                    
                    reloadElements();
                }, "json");
            }
        });

    });    
</script>
    </body>
</html>
