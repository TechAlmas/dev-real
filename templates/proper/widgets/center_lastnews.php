<h2 class="main-heading bottom-line top-line ">
    <span class="main-circle-icon"><i class="icon-book"></i></span> {lang_Latestnews}
</h2>   
<div class=" news right-space">
    <?php foreach($news_module_latest_5 as $key=>$row):?>
    <div class="media box-white">
        <a class="pull-left" href="<?php echo site_url($lang_code.'/'.$row->id); ?>">
            <?php if(isset($row->image_filename)):?>
            <img alt="images" class="media-object" src="<?php echo _simg(base_url('files/thumbnail/'.$row->image_filename),"150x90");?>">
            <?php else:?>
            <img alt="images" class="media-object" src="assets/img/no_image.jpg">
            <?php endif;?>
        </a>
        <div class="media-body">
            <h4 class="media-heading"><?php echo $row->title.', '.date("Y-m-d", strtotime($row->date_publish)); ?></h4>
            <p><?php echo $row->description; ?></p>
            <a href="<?php echo site_url($lang_code.'/'.$row->id); ?>" class="btn-proper btn btn-small "><?php _l('See Detail');?></a>
        </div>
    </div>
    <?php endforeach;?>
</div>