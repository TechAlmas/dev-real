<!--Start Form Search Properties-->
<h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-search"></i></span> <?php _l('Find Properties');?></h3>    
<div class="search-conteiner bottom-line line-before">
    <form class=" search-form">
        <div class="control-group-form form-proper-filter">
        <?php _che($options_values_radio_4); ?>
            <div class="clearfix"></div>
        </div>
        <label><?php _che(${'options_name_2'}); ?></label>
        <select name="" id="search_option_2" class="input-block-level">
            <?php _che(${'options_values_2'}); ?>
        </select>
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
        <button type="submit" id="search-start" class="input-block-level btn-proper btn-large"> {lang_Search}</button>
    </form>
    <?php if(file_exists(APPPATH.'controllers/admin/savesearch.php')): ?>
    <button id="search-save" type="button" class="btn btn-info"><i class="icon-bookmark"></i>{lang_SaveResearch}</button>
    <?php endif; ?>
</div>
<!--End Form Search Properties-->