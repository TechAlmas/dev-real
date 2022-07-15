<?php
$col_md = '4';
if(isset($columns) && $columns == 4)
{
    $col_md = '3';
}
?>

<div class="item  fea_<?php echo _ch($item['is_featured']); ?>">
    <a href="<?php echo _ch($item['url']); ?>" class="with-hover">
        <div class="for_estate_banner"><?php echo _ch($item['option_4']); ?></div>
        <div class="featured-icon" alt="Featured"></div>
        <?php if(!empty($item['option_38'])):?>
            <div class="badget"><img src="assets/img/badgets/<?php echo _ch($item['option_38']); ?>.png" alt="<?php echo _ch($item['option_38']); ?>"/></div>
        <?php endif; ?>
        <img alt='' src="<?php echo _simg($item['thumbnail_url'], '260x220'); ?>" class="full"/><span class="mask_hover"></span>
    </a>
    <h4 class=" "><?php echo _ch($item['option_10']); ?></h4>
    <div class="preview-properties ">
        <div class="box-detail"> 
            <p class="text-center short-detail">
                <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo $options_name_19; ?> : <?php echo _ch($item['option_19']); ?></span>
                <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo $options_name_58; ?> : <?php echo _ch($item['option_58']); ?></span>
                <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo $options_name_33;?> :  <i class="<?php echo (!empty($item['option_33'])) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></i></span>
                <span class="price">
                <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
                    <?php 
                        if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                        if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37
                    ?>
                <?php else: ?>
                -
                <?php endif; ?>
                </span>
            </p>
            <div class="clearfix">
                <a href="<?php echo _ch($item['url']); ?>" class="btn btn-proper  btn-small pull-left"><?php _l('See Detail');?></a>
                <!--<a href="<?php echo _ch($item['url']); ?>" class="btn-proper btn btn-small pull-right">Compare</a> -->
            </div>
        </div>
    </div>
</div>