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
    <div class="container" id="main">
        <div class="row-fluid">
            <div class="span12">
                <div class="home-page-body right-space" style="padding-bottom: 30px;">
                     <div id="main-inner">
                <!-- MAP -->
                <div  class="container">
                    <!-- SLOGAN -->
                    <div class="block-content block-content-small-padding">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php //_widget('center_recentproperties'); ?>  
        <div class="row-fluid">
            <div class="span12">
            <h2 id="content-main" class=" home-page-body main-heading bottom-line">{lang_Myresearch}</h2>
            <div class="property_content">
                <div class="widget-content">
                
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        	<th>#</th>
                            <th><?php echo lang_check('Parameters');?></th>
                            <th><?php echo lang_check('Lang code');?></th>
                            <th><?php echo lang_check('Activated');?></th>
                            <?php if(false): ?><th class="control"><?php echo lang_check('Load');?></th><?php endif;?>
                        	<th class="control"><?php echo lang_check('Edit');?></th>
                        	<th class="control"><?php echo lang_check('Delete');?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($listings)): foreach($listings as $listing_item):?>
                                    <tr>
                                        <td><?php echo $listing_item->id; ?></td>
                                        <td>
                                        <?php
                                        
                                        $parameters = json_decode($listing_item->parameters);
                                        
                                        foreach($parameters as $key=>$value){
                                            if(!empty($value) && $key != 'view' && $key != 'order')
                                            echo '<span><span class="par_key">'.$key.'</span>: <b class="par_value">'.$value.'</b></span><br />';
                                        }
                    
                                        ?>
                                        </td>
                                        <td><?php echo '['.strtoupper($listing_item->lang_code).']'; ?></td>
                                        <td>
                                            <?php echo $listing_item->activated?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>'; ?>
                                        </td>
                                        <?php if(false): ?>
                                        <td>
                                        <?php if($lang_code == $listing_item->lang_code): ?>
                                        <button class="load_search btn"><i class="icon-search"></i></button>
                                        <?php else: ?>
                                        <?php echo '->'.strtoupper($listing_item->lang_code).'<-'; ?>
                                        <?php endif; ?>
                                        </td>
                                        <?php endif;?>
                                    	<td><?php echo btn_edit('fresearch/myresearch_edit/'.$lang_code.'/'.$listing_item->id.'#content')?></td>
                                    	<td><?php echo btn_delete('fresearch/myresearch_delete/'.$lang_code.'/'.$listing_item->id)?></td>
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="20"><?php echo lang('We could not find any');?></td>
                                    </tr>
                        <?php endif;?>           
                      </tbody>
                    </table>

                  </div>
            </div>
            </div>
        </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.block-content -->
                    <!-- SOCIAL -->
                    <?php //_widget('bottom_social'); ?>  
                    <!-- STATISTICS -->
                    <?php //_widget('bottom_stats'); ?> 
                </div><!-- /.container -->
            </div><!-- /#main-inner -->
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
