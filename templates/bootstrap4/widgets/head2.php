 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="index, follow">
<title>{page_title}</title>
<meta name="description" content="{page_description}" />
<meta name="keywords" content="{page_keywords}" />

<meta property="og:title" content="{page_title}" />
<meta property="og:type" content="{settings_websitetitle}" />
<meta property="og:url" content="{page_current_url}" />
<?php if(isset($page_images) && !empty($page_images)):?>
<meta property="og:image" content="<?php _che($page_images[0]->url);?>" />
<?php else:?>
<meta property="og:image" content="<?php _che($website_logo_url);?>" />
<?php endif;?>

<meta name="author" content="" />
<link rel="shortcut icon" href="<?php echo $website_favicon_url;?>" type="image/png" />


<link rel="stylesheet" href="./templates/bootstrap4/assets2/bootstrap/css/bootstrap.min.css" />
<script src="./templates/bootstrap4/assets2/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- font-awesome -->
 <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--  -->

<link rel="stylesheet" href="./templates/bootstrap4/assets2/slick-1.8.1/slick/slick.css" />
<link rel="stylesheet" href="./templates/bootstrap4/assets2/slick-1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" href="./templates/bootstrap4/assets2/Css/color-combinesion-1.css" />
<link rel="stylesheet" href="./templates/bootstrap4/assets2/Css/style.css" />

<!-- Start Jquery -->
<?php cache_file('big_js_critical.js', 'assets/js/jquery-2.2.1.min.js'); ?>
<?php cache_file('big_js_critical.js', 'assets/libraries/jquery.mobile/jquery.mobile.custom.min.js'); ?>
<!-- End Jquery -->

<?php load_map_api(config_db_item('map_version'));?>

<!-- url https://plugins.jquery.com/magnific-popup/ -->
<?php if(config_item('report_property_enabled') == TRUE): ?>
<?php cache_file('big_js.js', 'assets/libraries/magnific-popup/jquery.magnific-popup.js'); ?>
<?php cache_file('big_css.css', 'assets/libraries/magnific-popup/magnific-popup.css'); ?>
<?php endif;?>
<!--end magnific-popup -->

{is_rtl}
    <link href="assets/css/styles_rtl.css" rel="stylesheet">
{/is_rtl}

<?php

?>
{settings_tracking}