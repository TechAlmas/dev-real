<!DOCTYPE html>
<html>
<head>
    {template_head}
</head>
<body class="<?php _widget('custom_paletteclass'); ?>">
   <!-- Start Wrapper-->
    <div id="wrapper">
    <?php _widget('header_loginmenu'); ?>
    <?php _widget('header_logo');?>
    <?php _widget('header_mainmenu'); ?>
    <div id="content">
    <?php _widget('top_title'); ?>
    <?php _widget('top_newsfeed'); ?>
    <!--    End News Carousel-->
    <div class="container">
            <div class="row-fluid">
    <div class="span9">
        <div class="panel right-line" id='content-block'>
        <h2 class="main-heading bottom-line type-property-block">{page_title}</h2>
        <div class="box-white right-space">
        <?php if(isset($showroom_image_url)): ?>
        <img class="showroom_logo" src="{showroom_image_url}" />
        <?php endif; ?>
        
        {page_body}
        </div>
        <br style="clear: both;" />
        <h2 class="bottom-line  line-before main-heading">{lang_Locationonmap}</h2>
        <div id="propertyLocation" style="height: 400px;" class="right-space">
        </div>
        <div class="route_suggestion">
        <input id="route_from" class="inputtext w360" type="text" value="" placeholder="{lang_Typeaddress}" name="route_from" />
        <a id="route_from_button" href="#" class="btn">{lang_Suggestroutes}</a>
        </div>

        <?php _widget('center_imagegallery');?>
        
        {has_page_documents}
        <h2 class="main-heading bottom-line  type-property-block">{lang_Filerepository}</h2>
        <ul>
        {page_documents}
        <li>
            <a href="{url}">{filename}</a>
        </li>
        {/page_documents}
        </ul>
        {/has_page_documents}
    </div>
    </div>
            <div class="span3">
                <div class="panel">
                  <h2 class="bottom-line  line-before main-heading">{lang_Overview}</h2>
                  <div class="property_options bottom-line  line-before" style="padding-bottom:15px;">
                    <p class="bottom-border"><strong>
                    {lang_Company}
                    </strong> <span>{page_title}</span>
                    <br style="clear: both;" />
                    </p>
                    <p class="bottom-border"><strong>
                    {lang_Address}
                    </strong> <span>{showroom_data_address}</span>
                    <br style="clear: both;" />
                    </p>
                    <p class="bottom-border"><strong>
                    {lang_Keywords}
                    </strong> <span>{page_keywords}</span>
                    <br style="clear: both;" />
                    </p>
                  </div>

                  <?php if(file_exists(APPPATH.'controllers/admin/ads.php')):?>
                    {has_ads_180x150px}
                    <h2>{lang_Ads}</h2>
                    <div class="sidebar-ads-1">
                        <a href="{random_ads_180x150px_link}" target="_blank"><img src="{random_ads_180x150px_image}" /></a>
                    </div>
                    {/has_ads_180x150px}
                  <?php endif;?>

                  <h2 id="contactForm" class="bottom-line  line-before main-heading">{lang_Enquireform}</h2>
                    <form method="post" action="<?php _che($page_current_url); ?>#contactForm">
                        <?php _che($validation_errors); ?>
                        <?php _che($form_sent_message); ?>
                        <div class="form-group {form_error_firstname}">
                            <label>{lang_FirstLast}</label>
                            <input class="input-block-level" id="firstname" name="firstname" type="text" value="{form_value_firstname}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_email}">
                            <label>{lang_Email}</label>
                            <input class="input-block-level" id="email" name="email" type="text" value="{form_value_email}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_phone}">
                            <label>{lang_Phone}</label>
                            <input class="input-block-level" id="phone" name="phone" type="text" value="{form_value_phone}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_address}">
                            <label>{lang_Address}</label>
                            <input class="input-block-level" id="address" name="address" type="text" value="{form_value_address}" />
                        </div><!-- /.form-group -->

                        <div class="form-group {form_error_message}">
                            <label>{lang_Message}</label>
                            <textarea id="message" name="message" rows="4" class="input-block-level" type="text">{form_value_message}</textarea>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <input type="submit" value="<?php _l('Send'); ?>" class="btn btn-proper ">
                        </div><!-- /.form-group -->
                    </form>
            </div>
            </div>
    </div>
    </div>
    </div>            
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>      
    </div><!-- End Wrapper-->
<?php _widget('custom_javascript'); ?>       <!-- start Footer -->
<script language="javascript">
    $(document).ready(function(){
        
       $("#route_from_button").click(function () { 
            window.open("https://maps.google.hr/maps?saddr="+$("#route_from").val()+"&daddr={showroom_data_address}@{showroom_data_gps}&hl={lang_code}",'_blank');
            return false;
        });

        $('#propertyLocation').gmap3({
         map:{
            options:{
             center: [{showroom_data_gps}],
             zoom: {settings_zoom},
            }
         },
         marker:{
            values:[
                {latLng:[{showroom_data_gps}], options:{icon: "assets/img/marker_blue.png"}, data:"{showroom_data_address}<br />{lang_GPS}: {showroom_data_gps}"},
            ],
         events:{
          mouseover: function(marker, event, context){
            var map = $(this).gmap3("get"),
              infowindow = $(this).gmap3({get:{name:"infowindow"}});
            if (infowindow){
              infowindow.open(map, marker);
              infowindow.setContent('<div style="width:400px;display:inline;">'+context.data+'</div>');
            } else {
              $(this).gmap3({
                infowindow:{
                  anchor:marker,
                  options:{ content: '<div style="width:400px;display:inline;">'+context.data+'</div>'}
                }
              });
            }
          }
        }
         }});
       }); 
    </script>

</body>
</html>
