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
                <div class="container">
                    <!-- SLOGAN -->
                    <div class="block-content block-content-small-padding">
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="row-fluid">
                                        <div class="span12">
                                        <h2  class=" home-page-body main-heading bottom-line" >{lang_Myreservations}</h2>
                                        <div class="property_content">
                                            <div class="widget-content">
                                                <?php if($this->session->flashdata('error')):?>
                                                <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                                                <?php endif;?>
                                                <table class="table table-striped">
                                                  <thead>
                                                    <tr>
                                                            <th>#</th>
                                                        <th><?php echo lang('Dates');?></th>
                                                        <!-- Dynamic generated -->
                                                        <?php foreach($this->option_m->get_visible($content_language_id) as $row):?>
                                                        <th><?php echo $row->option?></th>
                                                        <?php endforeach;?>
                                                        <!-- End dynamic generated -->
                                                            <th class="control" style="width: 120px;"><?php echo lang('Edit');?></th>
                                                            <th class="control"><?php echo lang('Delete');?></th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php if(count($estates)): foreach($estates as $estate):?>
                                                                <tr>
                                                                    <td><?php echo $estate->id?></td>
                                                                    <td>
                                                                    <?php echo anchor('frontend/viewreservation/'.$lang_code.'/'.$estate->id, date('Y-m-d', strtotime($estate->date_from)).' - '.date('Y-m-d', strtotime($estate->date_to)))?>
                                                                    <?php if($estate->is_confirmed == 0):?>
                                                                    &nbsp;<span class="label label-important"><?php echo lang_check('Not confirmed')?></span>
                                                                    <?php else: ?>
                                                                    &nbsp;<span class="label label-success"><?php echo lang_check('Confirmed')?></span>
                                                                    <?php endif;?>
                                                                    </td>
                                                                    <!-- Dynamic generated -->
                                                                    <?php foreach($this->option_m->get_visible($content_language_id) as $row):?>
                                                                    <td>
                                                                    <?php echo isset($options[$estate->property_id][$row->option_id])?$options[$estate->property_id][$row->option_id]:'-'?></td>
                                                                    <?php endforeach;?>
                                                                    <!-- End dynamic generated -->
                                                                    <td><?php echo anchor('frontend/viewreservation/'.$lang_code.'/'.$estate->id, '<i class="icon-shopping-cart"></i> '.lang_check('View/Pay'), array('class'=>'btn btn-info'))?></td>
                                                                    <td><?php if($estate->is_confirmed == 0):?><?php echo anchor('frontend/deletereservation/'.$lang_code.'/'.$estate->id, '<i class="icon-remove"></i> '.lang('Delete'), array('onclick' => 'return confirm(\''.lang_check('Are you sure?').'\')', 'class'=>'btn btn-danger'))?><?php endif;?></td>
                                                                </tr>
                                                    <?php endforeach;?>
                                                    <?php else:?>
                                                                <tr>
                                                                    <td colspan="20"><?php echo lang_check('No reservations available');?></td>
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
<script>
    $(document).ready(function(){
        $('body').append('<div id="blueimp-gallery" class="blueimp-gallery">\n\
                            <div class="slides"></div>\n\
                            <h3 class="title"></h3>\n\
                            <a class="prev">&lsaquo;</a>\n\
                            <a class="next">&rsaquo;</a>\n\
                            <a class="close">&times;</a>\n\
                            <a class="play-pause"></a>\n\
                            <ol class="indicator"></ol>\n\
                            </div>')
    })
</script>
</body>
</html>
