<div id="header-wrapper">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                <div class="span9 logo-box"> 
<a class="brand" href="{homepage_url_lang}" >
     <h1 class="font-caly">
         <img src="<?php echo $website_logo_url; ?>" class="main_logo" alt="{settings_websitetitle}">
         <?php _l('Proper');?> <small class="visible-desktop visible-tablet">{settings_websitetitle}</small>
     </h1>
 </a>
                    </div>
                <div class="span3 form-search-wrapper lang_menu_wrapper">
                   <div class="btn-group pull-right">
                       <?php
                            $lang_array = $this->language_m->get_array_by(array('is_frontend'=>1));
                            if(count($lang_array) > 1):
                        ?>
                        <button type="button" class="btn btn-default"><?php   
                          $flag_icon = '';
                          if(file_exists(FCPATH.'templates/'.$settings_template.'/assets/img/flags/'.$this->data['lang_code'].'.png'))
                          {
                              $flag_icon = '&nbsp; <img src="'.'assets/img/flags/'.$this->data['lang_code'].'.png" alt="" />';
                          }
                          echo $this->data['lang_code'].' '.$flag_icon;

                          ?></button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <?php
                          echo get_lang_menu($this->language_m->get_array_by(array('is_frontend'=>1)), $this->data['lang_code'], 'class="dropdown-menu lang_menu_top" role="menu"');
                        ?>
                        <?php endif;?>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div><!-- End header-wrapper -->              