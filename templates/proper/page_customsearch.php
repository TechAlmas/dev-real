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
                        <div class="span9">
                            <div class="panel right-line" id='content-block'>
                            <h2 class="main-heading bottom-line type-property-block" style="display:none;"><span class="main-circle-icon"><i class="icon-building"></i></span> <?php _l('Recent Properties');?></h2>   
                            <div class="panel first-panel">
                                <h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-building"></i></span> {page_title}</h2>     
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
                                        <?php _widget('center_lastproperties'); ?>
                            </div>
                            <div class="panel results_conteiner right-space">
                            </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="panel">
                                <?php _widget('right_searchform'); ?> 
                                
                                <?php _widget('right_mortgage'); ?> 
                                <?php _widget('right_adsverticalsmall'); ?>   
                                <?php _widget('right_agents'); ?>   
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
        </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
        </div><!-- End Wrapper-->
       <!-- Just For Demo You can Remove it if unnecessary-->
    <?php _widget('custom_javascript'); ?>
    <script>
        $('document').ready(function(){
            $('#search-start').click(function(){
                $('.type-property-block').delay(500).slideDown('fast');
                $('.first-panel').slideUp('slow');;
            })
        })
    </script>
    </body>
</html>
