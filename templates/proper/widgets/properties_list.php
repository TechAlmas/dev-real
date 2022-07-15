<?php foreach($results as $key=>$item): ?>
<div class="property  fea_<?php echo _ch($item['is_featured']); ?>">
    <div class="row-fluid">
        <div class="span4">
            <div class="property-images">
                <a href="<?php echo _ch($item['url']); ?>">
                    <div class="mask">
                        <div class="desc-type for-rent"><?php echo _ch($item['option_4']); ?></div>
                            <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
                            <div class="price">
                            <?php 
                                if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                                if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37
                            ?>
                            </div>
                        <?php endif;; ?>
                    </div>
                    <div class="featured-icon" alt="Featured"></div>
                    <?php if(!empty($item['option_38'])):?>
                        <div class="badget"><img src="assets/img/badgets/<?php echo _ch($item['option_38']); ?>.png" alt="<?php echo _ch($item['option_38']); ?>"/></div>
                    <?php endif; ?>
                    <img style="height:210px;"src="<?php echo _simg($item['thumbnail_url'], '265x210'); ?>" alt=""/>
                </a>
            </div>
        </div>
        <div class="span8">
            <div class="property-details">
                <h3><a href="<?php echo _ch($item['url']); ?>"><?php echo _ch($item['option_10']); ?></a></h3>
                <p><?php echo _ch($item['option_chlimit_8']); ?></p>
                <p>
                    <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo $options_name_19;?> : <?php echo _ch($item['option_19']);?></span>
                    <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo $options_name_20;?> : <?php echo _ch($item['option_20']);?></span>
                    <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo $options_name_58;?> : <?php echo _ch($item['options_58']);?></span>
                </p>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>