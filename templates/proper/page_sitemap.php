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
            <div class="home-page-body">
            <h2  id="expert" class="main-heading bottom-line"> {page_title}</h2>   
        <div class="property_content">
        {page_body}
        <div class="box-white">
           <?php echo treefield_sitemap(64, $lang_id, 'ul'); ?>
            <br/>
            <h2>  <?php echo lang_check('Website sitemap');?> </h2>
            <?php echo website_sitemap(64, $lang_id, 'ul'); ?>
            </div>
            </div>
        </div>
    </div>
    </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
    </div><!-- End Wrapper-->
<?php _widget('custom_javascript'); ?>       <!-- start Footer -->
</body>
</html>
