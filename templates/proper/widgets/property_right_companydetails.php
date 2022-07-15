<?php if(!empty($estate_data_option_67)): ?>

<div class="panel panel-default panel-sidebar-1  bottom-line line-before">
    <div class="panel-heading"><h2><?php echo lang_check('Company details'); ?></h2></div>
    <div class="panel-body text-left">
         <?php if($is_private_listing): ?>
    <div class="purchase_package">
    <a href="{front_login_url}#content">{lang_PurchaseToShow}</a>
    </div>
    <?php else: ?>
    <?php if(is_array($this->session->userdata('contacted_agents'))&&in_array($agent_id, $this->session->userdata('contacted_agents'))): ?>
    <?php else: ?>
    <a class="popup-with-form hidden-agent-details" href="#test-form"><?php echo lang_check('Show agent contact details'); ?></a>
    <?php endif; ?>
    <?php
    if(!empty($estate_data_option_74))
    {
        //Fetch repository
        $rep_id = $estate_data_option_74;
        $file_rep = $this->file_m->get_by(array('repository_id'=>$rep_id));
        $rep_value = '';
        if(count($file_rep))
        {
            echo '<div class="image-company"><img src="'.base_url('files/'.$file_rep[0]->filename).'" alt="'.$estate_data_option_67.'" /></div>';
        }
    }
    ?>
    <?php if(!empty($estate_data_option_67)): ?><div class="name"><a href="{agent_url}#content"><?php echo $estate_data_option_67; ?></a></div><?php endif; ?>
    <?php if(!empty($estate_data_option_68)): ?><div class="phone"><?php echo $estate_data_option_68; ?></div><?php endif; ?>
    <?php if(!empty($estate_data_option_73)): ?><div class="hours"><?php echo lang_check('Office hours'); ?>: <?php echo $estate_data_option_73; ?></div><?php endif; ?>
    <?php if(!empty($estate_data_option_69)): ?><div class="website"><a target="_blank" style="color: blue;" href="<?php echo $estate_data_option_69; ?>"><?php echo lang_check('Website'); ?></a></div><?php endif; ?>
    <div style="padding: 5px;">
        <?php if(!empty($estate_data_option_72)): ?><div class="description"><em><?php echo $estate_data_option_72; ?></em></div><?php endif; ?>
        <?php if(!empty($estate_data_option_70)): ?><a target="_blank" href="<?php echo $estate_data_option_70; ?>"><img src="assets/img/social-facebook-button-blue-icon.png" /></a><?php endif; ?>
        <?php if(!empty($estate_data_option_71)): ?><a target="_blank" href="<?php echo $estate_data_option_71; ?>"><img src="assets/img/social-twitter-button-blue-icon.png" /></a><?php endif; ?>
    </div>

    <?php endif; ?>
        
    </div>
</div>
<?php endif ?>