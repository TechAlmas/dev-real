<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{page_title}</title>
<meta name="description" content="{page_description}" />
<meta name="keywords" content="{page_keywords}" />
<meta name="author" content="" />
<link rel="shortcut icon" href="<?php echo $website_favicon_url;?>" type="image/png" />
<link rel="image_src" href="assets/img/logo.png" />
<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="all">
<link href="assets/css/bootstrap.glyphicon.css" rel="stylesheet" media="all">
<link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="assets/libraries/font-awesome/css/font-awesome.css">
<link href="assets/css/print.css" rel="stylesheet" media="all">
<link href="assets/css/proper.css" rel="stylesheet" media="all">
<link href="assets/css/custom.css" rel="stylesheet" media="all">
<link href="assets/js/colorbox/colorbox.css" rel="stylesheet" media="all">
<link href="assets/css/blueimp-gallery.min.css" rel="stylesheet" media="all">
<!-- FONTAWESOME STYLE --> 
<link rel="stylesheet" href="assets/css/font/FortAwesome/css/font-awesome.css"/>
<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="assets/js/jquery.js"></script>

<!-- fileupload -->
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fileupload-ui.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fileupload-ui-noscript.css">
<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/load-image.js"></script>
<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script> <!-- jQuery UI -->
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="assets/js/fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="assets/js/fileupload/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -->
<script src="assets/js/fileupload/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -->
<script src="assets/js/fileupload/jquery.fileupload-ui.js"></script>

<!-- end fileupload -->

<!-- JS GMAP3  -->
<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;sensor=false" type="text/javascript"></script>
<script src='assets/js/gmap3/gmap3.min.js'></script>
    
    <style type="text/css">
        body {
            background: transparent;
            overflow: auto;
        }
        
        .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
            width: 1170px !important;
        }
        

        @media screen {

        }

        @media print {
          .print_hidden{
              display:none;
          }
          
          .property-detail-overview-inner > div {
              border: 1px solid #eee;
          }
          
          .property-detail-overview  {
              border:0 ;
          }
          
          .main-heading,h3 {
              font-weight:400;
          }
          
          ul, img,.clearfix, .no-page-break {
                page-break-inside: avoid;
            }
          
        }
        
        
    a[href]:after {
        content: " ";
      }
      abbr[title]:after {
        content: "";
      }
      .ir a:after,
      a[href^="javascript:"]:after,
      a[href^="#"]:after {
        content: "";
      }
        @media print and (color) {
            * {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            
        }
            
            
    </style>
</head>
<body class="">
       <!-- Start Wrapper-->
        <div id="wrapper">
<div id="content">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <div class="panel right-line">
                    <h2 class="main-heading bottom-line"><span class="main-circle-icon print_hidden"><i class="icon-building"></i></span><?php _che($estate_data_address); ?> </h2>   
                  <!-- START DETAIL-->
                    <div class="detail-properties right-space">
                        <!-- START SLIDER -->
                        <?php if(isset($slideshow_property_images[0])): ?>
                        <div class="big-image text-center">
                            <div class="preloader"></div>
                            <img src="<?php echo _simg($slideshow_property_images[0]['url'], '840x500');?>" id="big-image-preview" alt="big-image-preview">
                        </div>
                        <?php endif; ?>
                        <!-- END SLIDER -->
                       
                        <h3 class="bottom-line main-heading">{options_name_1}</h3>
                        <div class="property-detail-overview">
                            <div class="property-detail-overview-inner  clearfix">
                            {category_options_1}
                            {is_text}
                            <div class="property-detail-overview-item span4">
                                <strong>{option_name}:</strong>
                                <span>{option_prefix} {option_value} {option_suffix}</span>
                            </div><!-- /.property-detail-overview-item -->
                            {/is_text}
                            {is_dropdown}
                            <div class="property-detail-overview-item span4">
                                <strong>{option_name}:</strong>
                                <span class="label label-success">&nbsp;&nbsp;{option_value}&nbsp;&nbsp;</span>
                            </div><!-- /.property-detail-overview-item -->
                            {/is_dropdown}
                            {is_checkbox}
                            <div class="property-detail-overview-item span4">
                                <strong>{option_name}:</strong>
                                <span><img src="assets/img/checkbox_{option_value}.png" alt="{option_value}" /></span>
                            </div><!-- /.property-detail-overview-item -->
                            {/is_checkbox}
                            {/category_options_1}
                            </div><!-- /.property-detail-overview-inner -->
                        </div><!-- /.property-detail-overview -->
                        <h3>{lang_Description}</h3>
                        <p>{page_body}</p>                        
                        
                        <?php if(isset($category_options_21) && $category_options_count_21>0): ?>
                        <div class="no-page-break">
                        <h3>{options_name_21}</h3>
                        <div class="clearfix">
                         <ul class="property-detail-amenities  clearfix">
                        {category_options_21}
                        {is_checkbox}
                        <li class="span3">
                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                        </li>
                        {/is_checkbox}
                        {/category_options_21}
                            </ul>
                        </div><!-- /.row -->
                        <hr>
                        </div>
                        <?php endif; ?>

                        <?php if(isset($category_options_52) && $category_options_count_52>0): ?>
                        <div class="no-page-break">
                        <h3>{options_name_52}</h3>
                        <div class="clearfix">
                         <ul class="property-detail-amenities  clearfix">
                        {category_options_52}
                        {is_checkbox}
                        <li class="span3">
                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                        </li>
                        {/is_checkbox}
                        {/category_options_52}
                            </ul>
                        </div><!-- /.row -->
                        <hr>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($category_options_43) && $category_options_count_43>0): ?>
                        <div class="no-page-break">
                        <h3>{options_name_43}</h3>
                        <div class="clearfix">
                         <ul class="property-detail-amenities  clearfix">
                        {category_options_43}
                        {is_text}
                        <li class="span3">
                        <i class="fa fa-check ok"></i> {icon} {option_name}:&nbsp;&nbsp;{option_prefix}{option_value}{option_suffix}
                        </li>
                        {/is_text}
                        {/category_options_43}
                            </ul>
                        </div><!-- /.row -->
                        <hr>
                        </div>
                        <?php endif; ?>

                     {has_page_images}
                    <div class="no-page-break">
                        <h2  class="bottom-line main-heading" >{lang_Imagegallery}</h2>
                        <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="files files-list ui-sortable content-images">  
                            <?php foreach ($page_images as $val):?>
                            <li class="template-download fade in">
                                <a data-gallery="gallery" href="<?php _che($val->url);?>" title="<?php _che($val->filename);?>" download="<?php _che($val->url);?>" class="preview show-icon">
                                    <img src="assets/img/preview-icon.png" class="" alt="<?php _che($val->alt);?>"/>
                                </a>
                                <div class="preview-img"><img src="<?php echo _simg($val->thumbnail_url, '215x150');?>" data-src="<?php _che($val->url);?>" alt="<?php _che($val->filename);?>" class="" /></div>
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <br style="clear: both;" />
                         <br style="clear: both;" />
                        {/has_page_images}   
                    </div>
                    </div>
                   <!-- END DETAIL-->
                    <div class="wrap-bottom-print">
                        <div class="container">
                          <div class="row-fluid">
                            <div class="span3">
                                <table>
                                    <tr>
                                        <td><i class="print_hidden icon-map-marker"></i></td>
                                        <td>
                                            {settings_address_footer}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="span3 no-page-break">
                                <table>
                                    <tr>
                                        <td><i class="icon-phone"></i></td>
                                        <td>{settings_phone}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon-print"></i></td>
                                        <td>{settings_fax}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon-envelope"></i></td>
                                        <td>{settings_email}</td>
                                    </tr>
                                </table>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span3">
                <div class="panel no-padding ">
                    {has_agent}
                    <!-- Detail Agent -->
                    <h3 class="main-heading bottom-line line-before"><span class="print_hidden main-circle-icon"><i class="icon-user"></i></span> {lang_Agent}</h3>
                    <div class="agent-panel bottom-line line-before">
                        <a href="{agent_url}#content" class="agent-image ">
                            <img src="{agent_image_url}" class="img-polaroid" alt="agent">
                        </a>
                        <ul class="unstyled margin20">
                            <li><i class="icon-phone"></i> {agent_phone} </li>
                            <li><i class="icon-envelope"></i> {agent_mail}</li>
                            <!--<li><i class="icon-facebook"></i> angel</li>
                            <li><i class="icon-twitter"></i> @angel</li>-->
                        </ul>
                    </div><!-- END Detail Agent -->
                    {/has_agent}
                    <div class="print_hidden" style="text-align:center; padding: 25px ;">
                        <button class="print_hidden" onclick="myFunction()"><?php echo lang_check('Print'); ?></button> <script> function myFunction() { window.print(); } </script>
                    </div>
                    <!-- MAP LOCATION-->
                    <h3 class="main-heading bottom-line line-before"><span class="print_hidden main-circle-icon"><i class="icon-map-marker"></i></span>  <?php _l('Location');?></h3>    
                    <div class="bottom-line line-before" style="padding-bottom:15px;">
                        <div id="map-property-2" style="height:400px;"></div><!-- /.map-property -->   
                    </div><!-- END MAP LOCATION -->
                    
                        
                    </div>
                    <?php _widget('property_right_companydetails');?>
                    <?php _widget('property_right_qrcode');?>
                </div>
            </div>
        </div>
</div><!--EndContent-->  
</div><!-- End Wrapper-->
<script type="text/javascript">

$(document).ready(function() {
     <?php if(!empty($estate_data_gps)): ?>
    /***********************************************************
     * PROPERTY MAP 2
     ***********************************************************/
    if ($('#map-property-2').length !== 0) {
             if ($('#map-property-2').length !== 0) {
          $(function(){
       var map= $("#map-property-2").gmap3({
            map:{
                // CENTRAL MAP DEFAULT
                /*address:"JAKARTA, INDONESIA",*/
                options:{
                    zoom:{settings_zoom},
                     center: {
                          latLng: [{estate_data_gps}],
                    },
                    scaleControl: false,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                    },
                   
                }
            },
            marker:{
                // DATA LOCATION
                values:[
                {
                    latLng:  [{estate_data_gps}],
                    options:{
                        icon: 'assets/img/markers/<?php echo (file_exists('templates/'.$settings_template.'/assets/img/markers/'.  strtolower($estate_data_option_6).'.png')) ? $estate_data_option_6 : 'house'; ?>.png'
                    }
                },
                ],
                events:{
                    mouseover: function(marker, event, context){
                        $(this).gmap3(
                        {
                            clear:"overlay"
                        },

                        {
                            overlay:{
                                latLng: marker.getPosition(),
                            }
                        });
                    }
                    
                }
            }
			
        });
    });

    } 
    }
    <?php endif; ?>
});
</script>
    </body>
</html>
