<?php if (!empty($featured_properties)) :?>
<div class="span4">
    <div class="panel">
        <h4><i class="icon-suitcase"> </i><?php _l('Featuredproperties'); ?></h4>
        <ul class="unstyled list-link">
            <?php foreach($featured_properties as $key=>$item): ?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['option_10']); ?></a></li>
            <?php  endforeach; ?>
        </ul>
    </div>
</div>
<?php else: ?>

<?php 

$CI =& get_instance();
$where = array('language_id'=>$lang_id);
$featured_properties = array();

$options_name = $this->option_m->get_lang(NULL, FALSE, $lang_id);

$featured_estates = $CI->estate_m->get_by(array_merge($where, array('is_featured'=>1)));
$CI->generate_results_array($featured_estates, $featured_properties, $options_name);
?>

<div class="span4">
    <div class="panel">
        <h4><i class="icon-suitcase"> </i><?php _l('Featuredproperties'); ?></h4>
        <ul class="unstyled list-link">
            <?php foreach($featured_properties as $key=>$item): ?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['option_10']); ?></a></li>
            <?php  endforeach; ?>
        </ul>
    </div>
</div>


<?php endif;?>