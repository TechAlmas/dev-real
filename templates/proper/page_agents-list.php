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
        <!--Start Content-->
            <div id="content">
                <?php _widget('top_title'); ?>
                <?php _widget('top_newsfeed'); ?>
                <!--    End News Carousel-->
                <div class="container agents-list-header">
                    <div class="row-fluid bottom-line">
                    <div class="span9">
                        <h2>{page_title}</h2>
                        {page_body}

                        <?php if(count($page_images) > 0): ?>
                        <h2>{lang_Imagegallery}</h2>
                        <div class="row image-gallery"> 
                            <?php foreach($page_images as $row): ?>
                            <div class="post-picture col-sm-3">
                            <div class="post-picture-inner">
                                <a href="<?php echo base_url('files/'.$row->filename); ?>" class="post-picture-target">
                                  <img src="<?php echo _simg('files/'.$row->filename, '520x500'); ?>" alt="<?php echo $row->filename; ?>" class="img-responsive">
                                </a><!-- /.post-picture-target -->
                            </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <br style="clear: both;" />
                        <hr />
                        <?php endif; ?>

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
                    <div class="span3">
                        <div class="sidebar">
                            <div class="sidebar-inner">                                  
                                <h2>{lang_Search}</h2>
                                <form class="form-search agents" action="<?php echo current_url().'#content'; ?>" method="get">
                                <input name="search-agent" type="text" placeholder="{lang_CityorName}" value="<?php echo $this->input->get('search-agent'); ?>" class="input-medium" />
                                <button type="submit" class="btn">{lang_Search}</button>
                                </form>
                            </div><!-- /.sidebar-inner -->
                        </div><!-- /.sidebar -->
                    </div>
                    </div>
                </div>
                <?php _widget('center_agents');?>
            </div><!--End Content-->            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
        </div><!-- End Wrapper-->
       <!-- Just For Demo You can Remove it if unnecessary-->
    <?php _widget('custom_javascript'); ?>
    </body>
</html>
