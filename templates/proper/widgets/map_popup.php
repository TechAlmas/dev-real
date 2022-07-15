
<div class='info-location'>
    <div class='text'>
        <h4 style="max-height: 22px;overflow: hidden;"><?php _che($option_10, ''); ?></h4>
        <img src='<?php echo _simg($thumbnail_url, '90x71'); ?>' width=90>   
        
        <?php if(!empty($option_36)): /* price */ ?>
        <?php _che($options_prefix_36, ''); ?><?php _che($option_36, ''); ?>
        <br/>
        <?php endif;?> 
        
        <?php _che($address, ''); ?>
        <br/><a href='<?php _che($url, ''); ?>' class='btn btn-proper btn-small'><?php _l('See Detail'); ?></a>
    </div>
</div>
<div class='arrow-location'></div>