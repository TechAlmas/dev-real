<div class="control-group-form">
    <div class="control-group half pull-left">
        <label class="control-label"><?php _l('Location'); ?></label>
        <div class="controls">
        <input id="search_option_smart" value="<?php _che($search_query); ?>" type="text"  class="input-block-level" placeholder="<?php _l('City'); ?>" />
        </div>
    </div><!-- /.form-group -->
    <div class="control-group half text-right pull-right">
        <label class="control-label"><?php _l('Radius'); ?></label>

        <div class="controls">
            <select id="search_radius" name="search_radius" class="input-block-level">
                <option value="0">0<?php _l('km'); ?></option>
                <option value="50">50<?php _l('km'); ?></option>
                <option value="100">100<?php _l('km'); ?></option>
                <option value="200">200<?php _l('km'); ?></option>
                <option value="500">500<?php _l('km'); ?></option>
            </select>
        </div><!-- /.select-wrapper -->

    </div><!-- /.form-group -->
</div>
