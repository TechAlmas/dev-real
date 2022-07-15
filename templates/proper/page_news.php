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
            <?php if(file_exists(APPPATH.'controllers/admin/news.php')):?>
            <div class="span9">
            <?php else:?>
            <div class="span12">  
            <?php endif;?>
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
                <?php if(file_exists(APPPATH.'controllers/admin/news.php')):?>
                <div class="new-list property_content_position" id="news">
                <?php foreach($news_module_all as $key=>$row):?> 
                    <div class="item panel">
                        <h2 class="title-heading"><?php echo $row->title; ?></h2>
                        <?php if(file_exists('files/thumbnail/'.$row->image_filename)):?>
                        <img src="<?php echo _simg('files/'.$row->image_filename, '870x290'); ?>" />
                        <?php else:?>
                            <img style="height:290px;width:870px" src="assets/img/no_image.jpg" alt="new-image">
                        <?php endif;?>
                        <div class="box-panel">
                            <div class="clearfix decs-meta">
                                <span class="italic pull-left">
                                    <?php _l('Dates');?> : <?php echo date("Y-m-d", strtotime($row->date_publish));?></span>
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
                <div class="pagination pagination-large panel">
                       <?php echo $news_pagination; ?>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <?php if(file_exists(APPPATH.'controllers/admin/news.php')):?>
            <div class="span3">
                <div class="panel">
                    <h3 class="main-heading bottom-line "><span class="main-circle-icon"><i class="icon-paper-clip"></i></span> Category</h3>   
                    <div class="accordion">
                        <div class="accordion-group">
                            <?php foreach($categories as $id=>$category_name):?>
                            <?php if($id != 0): ?>
                            <div class="accordion-heading">
                                <a class="accordion-toggle" href="{page_current_url}?cat=<?php echo $id; ?>#news"><?php echo $category_name; ?></a>
                            </div>
                            <?php endif;?>
                            <?php endforeach;?>
                        </div>
                    </div><!--End Accordion2-->
                </div>
            </div>
            <?php endif?>
        </div>
    </div>
    </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
    </div><!-- End Wrapper-->
<?php _widget('custom_javascript'); ?>
<script language="javascript">
    $(document).ready(function(){
        $("#search_news").keyup( function() {
            if($(this).val().length > 2 || $(this).val().length == 0)
            {
                $.post('<?php echo $ajax_news_load_url; ?>', {search: $('#search_news').val()}, function(data){
                    $('.property_content_position').html(data.print);
                    
                    reloadElements();
                }, "json");
            }
        });
    });    
</script>
</body>
</html>
