 <div class="container agent-panel agents-list widget-center-agents">
    <?php foreach($paginated_agents as $key=>$item): ?>
    <div class="item-agent panel ">
        <div class="row-fluid">
            <div class="span3 bottom-line line-after left-hight-agent">
                <div class="panel">
                    <h3 class="main-heading bottom-line line-after"><span class="main-circle-icon"><i class="icon-user"></i></span> <?php _che($item['name_surname']); ?></h3>
                    <a href="<?php _che($item['agent_url']); ?>" class="agent-image">
                        <img src="<?php _che($item['image_url']); ?>" class="img-circle" alt="agent">
                    </a>
                </div>
            </div>
            <div class="span9 right-hight-agent">
                <div class="panel left-line bottom-line desc-agent-preview">
                    <h3 class="line-before bottom-line main-heading"><span class="main-circle-icon"><i class="icon-circle-arrow-down"></i></span> <?php _che($item['name_surname']); ?> <?php _l('Details');?></h3>
                    <p><?php _che($item['description']); ?>"</p>
                    <ul class="unstyled">
                        <li><i class="icon-phone"></i> <?php _che($item['phone']); ?> </li>
                        <li><i class="icon-envelope"></i> <a href="mailto:<?php _che($item['mail']); ?>?subject={lang_Estateinqueryfor}: {page_title}"><?php _che($item['mail']); ?></a></li>
                    </ul>
                    <div class="agent-image-properties files files-list ui-sortable content-images image-gallery-agents"  data-target="#modal-gallery" data-toggle="modal-gallery">
                    <?php 
                        $CI =& get_instance();
                        $file_rep = $CI->file_m->get_by(array('repository_id'=>$item['agent_profile']['repository_id']));
                        if(count($file_rep)){
                            foreach($file_rep as $k=>$file_r)
                            {
                                if($k<3) continue;
                                if(file_exists(FCPATH.'/files/thumbnail/'.$file_r->filename))
                                {?>
                                   <a href="<?php echo base_url('files/'.$file_r->filename);?>" class="post-picture-target" data-gallery="gallery" download="<?php echo base_url('files/'.$file_r->filename);?>"><img src="<?php echo _simg(base_url('files/'.$file_r->filename), '110x90'); ?>" class="img-polaroid tootip" data-toggle="tooltip" data-placement="bottom" title=" <?php _che($item['name_surname']); ?>" alt="033 Centra"/></a>
                               <?php  }
                            }
                        }
                    ?>
                    <?php _widget('center_imagegallery'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
    <!-- Start Pagination    -->
    <div class="pagination pagination-large properties">
        <?php echo $agents_pagination; ?>
    </div><!-- end Pagination    -->
</div>
<script>
function calc_agent_height() {
    if(parseInt($('.item-agent .left-hight-agent').outerHeight())>parseInt($('.item-agent .right-hight-agent .desc-agent-preview').outerHeight())) {
        $('.item-agent .right-hight-agent .desc-agent-preview').outerHeight($('.item-agent .left-hight-agent').outerHeight())
    } else {
        $('.item-agent .left-hight-agent').outerHeight($('.item-agent .right-hight-agent .desc-agent-preview').outerHeight())
    }
}

$(document).ready(function(){
     calc_agent_height()
})
</script>

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
