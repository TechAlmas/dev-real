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
    <!--    End News Carousel-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <h2  id="expert" class=" home-page-body main-heading bottom-line"> <?php _l('Featuredproperties'); ?></h2>   
                <div class="home-page-body right-space" style="padding-bottom: 30px;">
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
                <?php _widget('center_featuredproperties'); ?>
            </div>
        </div>
    </div>
    </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
    </div><!-- End Wrapper-->
<?php _widget('custom_javascript'); ?>       <!-- start Footer -->
</body>
</html>
