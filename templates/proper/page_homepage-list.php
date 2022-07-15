<!DOCTYPE html>
<html>
    <head>
        {template_head}
    </head>
    <body class="<?php _widget('custom_paletteclass'); ?>">
        <!-- Start Wrapper-->
        <div id="wrapper">
            {template_header}
            <!-- start Content -->
            <div id="content">
                <?php _widget('top_map'); ?>
                <!--    News Carousel-->
                <?php _widget('top_newsfeed'); ?>
                <!--    End News Carousel-->
                <div class="container">
                    <div class="row-fluid bottom-line">
                        <div class="span9">
                            <div class="panel right-line" id='content-block'>
                                <!--Start Grid Featured-->
                                <?php _widget('center_propertieslist'); ?>
                                <!--End Grid Featured-->
                                <!--Start New List-->
                                <?php _widget('center_lastnews'); ?>
                                <!--End News List-->
                                <?php _widget('center_defaultcontent'); ?>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="panel">
                                <?php _widget('right_searchform1'); ?> 
                                <?php _widget('right_mortgage'); ?> 
                                <?php _widget('right_adsverticalsmall'); ?>   
                                <?php _widget('right_agents'); ?>   
                            </div>
                        </div>
                    </div>
                     <?php _widget('bottom_agencies'); ?>
                </div>
            </div>
        <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
        </div><!-- End Wrapper-->
        <!-- Just For Demo You can Remove it if unnecessary-->
        <?php _widget('custom_javascript'); ?>
    </body>
</html>
