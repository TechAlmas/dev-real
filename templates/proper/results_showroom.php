<?php foreach($showroom_module_all as $key=>$row):?> 
    <div class="item panel">
        <h2 class="title-heading"><?php echo $row->title; ?></h2>
        <?php if(isset($row->image_filename)):?>
        <img src="<?php echo _simg('files/'.$row->image_filename, '870x290'); ?>" />
        <?php else:?>
            <img src="assets/proper_theme/images/news/n4.jpg" alt="new-image">
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
            <a href="<?php echo site_url('showroom/'.$row->id.'/'.$lang_code); ?>#content-position" class="btn-mini btn btn-proper">{lang_Details}</a>
        </div>
    </div>
<?php endforeach;?>  
<div class="pagination pagination-large panel">
       <?php echo $showroom_pagination; ?>
</div>