<!-- start breadcrumb -->
<div id="breadcrumb-wrapper">
    <div class="container">
        <?php 
        if ( ! function_exists('_getdate'))
        {
        function _getdate(){
             //$date = date("l, M j Y");
             $date = date("l,M");
             $date = explode( ',', $date, 2);
             $date = array_map(function($val){
                $r_val= trim(strtolower($val));
                if(lang( 'cal_'.$r_val)){
                    $val = lang( 'cal_'.$r_val);
                }
                return $val;
             }, $date);
             return implode(', ', $date).date(" j Y");
            }
        }
        ?>
        <div class="pull-left"><?php echo _getdate();?> </div>
        
<div class="pull-right">
{not_logged}
  <span><i class="icon-phone icon-white"></i> {settings_phone}</span>
  <a href="mailto:{settings_email}"><i class="icon-envelope icon-white"></i> {settings_email}</a>
  <?php if(config_db_item('property_subm_disabled')==FALSE):  ?>
  <a href="{front_login_url}#content"><i class="icon-user icon-white"></i> {lang_Login}</a>
  <?php endif;?>
{/not_logged}

{is_logged_user}
<?php if(file_exists(APPPATH.'controllers/admin/booking.php')):?>
  <a href="{myreservations_url}#content"><i class="icon-shopping-cart icon-white"></i> {lang_Myreservations}</a>
<?php endif; ?>
  <a href="{myproperties_url}#content"><i class="icon-list icon-white"></i> {lang_Myproperties}</a>
<?php if(file_exists(APPPATH.'controllers/admin/savesearch.php')): ?>
 <a href="{myresearch_url}#content-main"><i class="icon-filter icon-white"></i> {lang_Myresearch}</a> 
<?php endif; ?>
<?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
  <a href="{myfavorites_url}#content"><i class="icon-star icon-white"></i> {lang_Myfavorites}</a>
<?php endif; ?>
  <a href="<?php _che($mymessages_url); ?>#content"><i class="icon-envelope icon-white"></i> <?php _l('My messages'); ?></a>
  <a href="{myprofile_url}#content"><i class="icon-user icon-white"></i> {lang_Myprofile}</a>
  <a href="{logout_url}"><i class="icon-off icon-white"></i> {lang_Logout}</a>
{/is_logged_user}

{is_logged_other}
  <a href="{login_url}"><i class="icon-wrench icon-white"></i> {lang_Admininterface}</a>
  <a href="{logout_url}"><i class="icon-off icon-white"></i> {lang_Logout}</a>
{/is_logged_other}

</div>
    </div>
</div><!-- end breadcrumb -->
<!-- start header-wrapper -->

