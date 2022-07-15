  <div class="widget widget-box box-container widget-overview">
    <div class="widget-header text-uppercase">
       {lang_Overview}
    </div>
    <ul class="list-overview">
        <li>
            <span class="list-overview-option">{lang_Address}:</span>
            <span class="list-overview-value" title="{estate_data_address}">{estate_data_address}</span>
        </li>
        {category_options_1}
        {is_text}
        <li>
            <span class="list-overview-option">{option_name}: </span>
            <span class="list-overview-value" title="{option_prefix} {option_value} {option_suffix}">{option_prefix} {option_value} {option_suffix}</span>
        </li>
        {/is_text}
        
        {is_dropdown}
        <li>
            <span class="list-overview-option">{option_name}:   </span>
            <span class="list-overview-value"><span class="label label-default label-tag-primary" title="{option_value}">{option_value}</span></span>
        </li>
        {/is_dropdown}
        
        {is_checkbox}
        <li>
            <span class="list-overview-option">{option_name}: </span>
            <span class="list-overview-value" title="{option_value}"><img src="assets/img/checkbox_{option_value}.png" alt="{option_value}" /></span>
        </li>
        {/is_checkbox}
        {/category_options_1}
        <?php if(!empty($estate_data_option_64) && isset($this->treefield_m)): ?>
        <li>
                <span class="list-overview-option"><?php echo $options_name_64; ?>:</span>
                <span class="list-overview-value">
                <?php
                    $nice_path = $estate_data_option_64;
                    $link_defined = false;
                    // Get treefield with language data
                    $treefield_id = $this->treefield_m->id_by_path(64, $lang_id, $nice_path);
                    if(is_numeric($treefield_id))
                    {
                        $treefield_data = $this->treefield_m->get_lang($treefield_id, TRUE, $lang_id);

                        // If no content defined then no link, just span
                        if(!empty($treefield_data->{"body_$lang_id"}))
                        {
                            // If slug then define slug link
                            $href = slug_url('treefield/'.$lang_code.'/'.$treefield_id.'/'.url_title_cro($treefield_data->{"value_$lang_id"}), 'treefield_m');
                            echo '<a href="'.$href.'" title="'.$nice_path.'">'.$nice_path.'</a>';
                            $link_defined=true;
                        }
                    }
                    if(!$link_defined) echo $nice_path;
                ?>
                </span>
        </li>
        <?php endif;?>
        <?php
            foreach($category_options_1 as $key=>$row)
            {
                if($row['option_type'] == 'UPLOAD')
                {
                    if(!empty($row['option_value']) && is_numeric($row['option_value']))
                    {
                        //Fetch repository
                        $rep_id = $row['option_value'];
                        $file_rep = $this->file_m->get_by(array('repository_id'=>$rep_id));
                        $rep_value = '';
                        if(count($file_rep))
                        {
                            $rep_value.= '<ul>';
                            foreach($file_rep as $file_r)
                            {
                                $rep_value.= "<li><a target=\"_blank\" href=\"".base_url('files/'.$file_r->filename)."\">$file_r->filename</a></li>";
                            }
                            $rep_value.= '</ul>';

                            echo ' <li><span class="list-overview-option">'.$row['option_name'].':</span></li>';
                            echo $rep_value;
                        }
                    }
                }

            }
        ?>
        
        <?php if(!empty($estate_data_counter_views)): ?>
        <li>
            <span class="list-overview-option">{lang_ViewsCounter}: 	 </span>
            <span class="list-overview-value" title="{estate_data_counter_views}">{estate_data_counter_views}</span>
        </li>
        <?php endif;?>
        
        <?php if(!empty($estate_data_option_56)): ?>
        <li>
            <span class="list-overview-option">{lang_Pro}:</span>
            <span class="list-overview-value" title="<?php _che($estate_data_option_56);?>">
                <?php for($i=0; $i<$estate_data_option_56; $i++):?>
                <i class="icon2-star"></i>
                <?php endfor;?>
            </span>
        </li>
        <?php endif;?>
        <?php if(!empty($avarage_stars) && file_exists(APPPATH.'controllers/admin/reviews.php') && $settings_reviews_enabled): ?>
        <li>
            <span class="list-overview-option">{lang_Users}:</span>
            <span class="list-overview-value" title="<?php _che($avarage_stars);?>">
                <?php for($i=0; $i<$avarage_stars; $i++):?>
                <i class="icon2-star"></i>
                <?php endfor;?>
            </span>
        </li>
        <?php endif;?>
    </ul>
</div><!-- /. widget-OVERVIEW -->   