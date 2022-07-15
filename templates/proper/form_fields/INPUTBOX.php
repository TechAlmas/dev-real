<?php
    $col=6;
    $f_id = $field->id;
    $placeholder = _ch(${'options_name_'.$f_id});
    $direction = $field->direction;
    if($direction == 'NONE'){
        $col=12;
        $direction = '';
    }
    else
    {
        $placeholder = lang_check($direction);
        $direction=strtolower('_'.$direction);
    }
    
    $suf_pre = _ch(${'options_prefix_'.$f_id}, '')._ch(${'options_suffix_'.$f_id}, '');
    if(!empty($suf_pre))
        $suf_pre = ' ('.$suf_pre.')';
        
    $class_add = trim($field->class);
    if(empty($class_add))
        $class_add = ' col-sm-'.$col;
?>

<?php if($class_add=='col-sm-12'):?>
    <label><?php _che(${'options_name_'.$f_id}); ?><?php echo $suf_pre; ?></label>
    <input id="search_option_<?php echo $f_id.$direction; ?>" type="text" class="input-block-level form-control" placeholder="<?php echo $placeholder ?><?php echo $suf_pre; ?>" value="<?php echo search_value($f_id); ?>" />
<?php else: ?>
    <div class="control-group half <?php echo (trim($field->direction)=='TO')?'pull-right ':'pull-left '?>">
        <label class="control-label <?php echo (trim($field->direction)=='TO')?'text-right ':'text-left '?>"><?php _che(${'options_name_'.$f_id}); ?><?php echo $suf_pre; ?></label>
           <div class="controls">
               <input id="search_option_<?php echo $f_id.$direction; ?>" type="text" class="input-block-level form-control" placeholder="<?php echo $placeholder ?><?php echo $suf_pre; ?>" value="<?php echo search_value($f_id); ?>" />
           </div>
    </div><!-- /.form-group -->
<?php endif;?>
