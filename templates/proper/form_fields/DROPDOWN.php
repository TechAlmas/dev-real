<?php
    $col=6;

    $direction = $field->direction;
    if($direction == 'NONE'){
        $col=12;
        $direction = '';
    }
    
    $f_id = $field->id;
    $class_add = $field->class;
    if(empty($class_add))
        $class_add = ' col-sm-12';
    
?>
<label><?php _che(${'options_name_'.$f_id}); ?></label>

<select name="" id="search_option_<?php echo $f_id; ?>" class="input-block-level">
    <?php _che(${'options_values_'.$f_id}); ?>
</select>