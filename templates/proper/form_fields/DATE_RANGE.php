<?php if(file_exists(APPPATH.'controllers/admin/booking.php')):?>
<div class="control-group-form">
    <div class="control-group half pull-left">
        <label class="control-label"><?php _l('Fromdate'); ?></label>
           <div class="controls">
               <input id="booking_date_from" type="text"  class="form-control input-block-level" placeholder="<?php _l('Fromdate'); ?>" value="<?php echo search_value('date_from'); ?>" />
           </div>
    </div><!-- /.form-group -->
    
    <div class="control-group half text-right pull-right">
        <label class="control-label"><?php _l('Todate'); ?></label>
        <div class="controls">
            <input id="booking_date_to" type="text"  class="form-control input-block-level" placeholder="<?php _l('Todate'); ?>" value="<?php echo search_value('date_to'); ?>" />
        </div>
    </div><!-- /.form-group -->
</div>
<?php endif; ?>