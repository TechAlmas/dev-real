<h2 class="bottom-line  line-before main-heading"><?php _l('Recent Properties'); ?></h2>

<div class="properties-small-list">
    <?php foreach($last_estates as $item): ?>
    <div class="property-small clearfix">
        <div class="property-small-picture span4">
            <div class="property-small-picture-inner">
                <a href="<?php echo $item['url']; ?>" class="property-small-picture-target">
                    <img src="<?php echo _simg($item['thumbnail_url'], '520x500'); ?>" alt="">
                </a>
            </div><!-- /.property-small-picture -->
        </div><!-- /.property-small-picture -->

        <div class="property-small-content span8">
            <h3 class="property-small-title"><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['option_10']); ?></a></h3><!-- /.property-small-title -->
            <h4 class="property-small-subtitle"><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['address']); ?></a></h4>
            <div class="property-small-price">
            <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
                <?php 
                    if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                    if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37
                ?>
            <?php else: ?>
            -
            <?php endif; ?>
            </div><!-- /.property-small-price -->
        </div><!-- /.property-small-content -->
    </div><!-- /.property-small -->
    <?php endforeach; ?>

</div><!-- /.properties-small-list -->