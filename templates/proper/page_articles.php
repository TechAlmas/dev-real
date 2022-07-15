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

                <div class="new-list" id="showroom">
                <?php foreach($news_articles as $key=>$row):?> 
                    <div class="item panel">
                        <h2 class="title-heading"><?php echo $row->title; ?></h2>
                        <?php if(file_exists('files/thumbnail/'.$row->image_filename)):?>
                        <img src="<?php echo _simg('files/'.$row->image_filename, '870x290'); ?>" />
                        <?php else:?>
                        <img  style="height:290px;width:870px" src="assets/img/no_image.jpg" alt="new-image">
                        <?php endif;?>
                        <div class="box-panel">
                            <div class="clearfix decs-meta">
                                <span class="italic pull-left"></span>
                                   <span class="italic pull-right">
                                        <div class="tags">
                                            <p class="">
                                                <?php foreach (explode(',', $row->keywords) as $val): ?>
                                                    <span class="label"><?php echo trim($val); ?></span>
                                                <?php endforeach; ?>
                                            </p>
                                        </div>

                                </span>
                            </div>
                            <p><?php echo $row->description; ?></p>
                            <a href="<?php echo site_url($lang_code.'/'.$row->id.'/'.url_title_cro($row->title)); ?>" class="btn-mini btn btn-proper">{lang_Details}</a>
                        </div>
                    </div>
                <?php endforeach;?>  
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
