<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{page_title}</title>
<meta name="description" content="{page_description}" />
<meta name="keywords" content="{page_keywords}" />
<meta name="author" content="" />
<link rel="shortcut icon" href="<?php echo $website_favicon_url;?>" type="image/png" />
<link rel="image_src" href="assets/img/logo.png" />
<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="assets/css/bootstrap.glyphicon.css" rel="stylesheet" media="screen">
<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/libraries/font-awesome/css/font-awesome.css" media="screen, projection">
<link href="assets/css/style.css" rel="stylesheet" media="screen">
<link href="assets/css/proper.css" rel="stylesheet" media="screen">
<link href="assets/css/custom.css" rel="stylesheet" media="screen">
<link href="assets/js/colorbox/colorbox.css" rel="stylesheet" media="screen">
<link href="assets/css/blueimp-gallery.min.css" rel="stylesheet" media="screen">
<!-- FONTAWESOME STYLE --> 
<link rel="stylesheet" href="assets/css/font/FortAwesome/css/font-awesome.css"/>
<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="assets/js/jquery.js"></script>

{is_rtl}
<link href="assets/css/styles_rtl.css" rel="stylesheet">
{/is_rtl}

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
<!-- cleditor -->
<link href="assets/css/jquery.cleditor.css" rel="stylesheet">
<script src="assets/js/jquery.cleditor.min.js"></script>
<!-- END cleditor -->

<!-- jquery.cookiebar -->
<!-- url -- http://www.primebox.co.uk/projects/jquery-cookiebar/ -->
<script src="assets/js/jquery.cookiebar.js"></script>
<link href="assets/css/jquery.cookiebar.css" rel="stylesheet">
<!--end jquery.cookiebar -->

<?php 
$config_base_url = config_item('base_url');
$url_protocol='http://';
if(!empty($config_base_url)&& strpos( $config_base_url,'https')!== false){
    $url_protocol='https://';
}

$maps_api_key = config_db_item('maps_api_key');
$maps_api_key_prepare='';
if(!empty($maps_api_key)){
    $maps_api_key_prepare='&amp;key='.$maps_api_key;
}

?>

<!-- JS GMAP3  -->
<script src="<?php echo $url_protocol;?>maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing<?php echo $maps_api_key_prepare; ?>&amp;language={lang_code}" type="text/javascript"></script>

<script src='assets/js/gmap3/gmap3.min.js'></script>