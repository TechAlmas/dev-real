<?php if(file_exists(APPPATH.'controllers/admin/ads.php')):?>
       {has_ads_728x90px}
       <div class="wrap-content2" style="padding-top: 15px">
           <div class="ads">
               <a href="{random_ads_728x90px_link}" target="_blank"><img src="{random_ads_728x90px_image}" /></a>
           </div>
       </div>
       {/has_ads_728x90px}
<?php elseif(!empty($settings_adsense728_90)): ?>
       <div class="wrap-content2" style="padding-top: 15px">
           <div class="ads">
               <?php echo $settings_adsense728_90; ?>
           </div>
       </div>
<?php endif;?>