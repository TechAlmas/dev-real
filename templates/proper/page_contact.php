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
                    <div class="span3 right-side">
                        <?php _widget('right_contact');?>
                        <?php _widget('right_recentproperties');?>
                    </div>
                    <div class="span9">
                        <div class="panel left-line">
                            <?php _widget('center_companymap'); ?>
                            <?php _widget('center_contact'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
        </div><!-- End Wrapper-->
       <!-- Just For Demo You can Remove it if unnecessary-->
    <?php _widget('custom_javascript'); ?>
    </body>
</html>
