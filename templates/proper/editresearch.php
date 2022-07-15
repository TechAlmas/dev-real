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
        <div class="row-fluid">
            <div class="span12">
            <h2 class=" home-page-body main-heading bottom-line">{lang_Editresearch}, #<?php echo $listing['id']; ?></h2>
            <div class="property_content">
                    <?php echo validation_errors()?>
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    <!-- Form starts.  -->
                    <?php echo form_open(current_url().'#content-main', array('class' => 'form-horizontal form-estate', 'role'=>'form'))?>                              
                                
                                <div class="control-group">
                                  <label class="control-label"><?php echo lang_check('Activated')?></label>
                                  <div class="controls">
                                    <?php echo form_checkbox('activated', '1', set_value('activated', $listing['activated']), 'id="inputActivated"')?>
                                  </div>
                                </div>
                                
                                <div class="control-group">
                                  <label class="control-label"><?php echo lang_check('Parameters')?></label>
                                  <div class="controls">
                                        <?php echo lang_check('Lang code').': '; ?><?php echo '['.strtoupper($listing['lang_code']).']'; ?><br />
                                        <?php
                                        
                                        $parameters = json_decode($listing['parameters']);
                                        
                                        foreach($parameters as $key=>$value){
                                            if(!empty($value) && $key != 'view' && $key != 'order')
                                            {
                                                if(is_array($value))
                                                {
                                                    $value = implode(', ', $value);
                                                }
                                                
                                                echo $key.': <b>'.$value.'</b><br />';
                                            }
                                        }
                    
                                        ?>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <div class="controls">
                                    <?php echo form_submit('submit', lang('Save'), 'class="btn btn-primary"')?>
                                    <a href="<?php echo site_url('fresearch/myresearch/'.$lang_code)?>#content" class="btn btn-default" type="button"><?php echo lang('Cancel')?></a>
                                  </div>
                                </div>
                       <?php echo form_close()?>
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
