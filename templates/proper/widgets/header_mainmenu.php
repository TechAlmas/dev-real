<!-- start Navigation -->
<div id="navigation">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="brand visible-phone visible-tablet"><?php _l('Navbar');?></span>
                    <!--.nav-collapse -->
                    <div class="nav-collapse collapse">
<?php

if ( ! function_exists('get_menu_custom'))
{
//menu generate function
function get_menu_custom ($array, $child = FALSE, $lang_code)
{
	$CI =& get_instance();
	$str = '';
    
    $is_logged_user = ($CI->user_m->loggedin() == TRUE);
	
	if (count($array)) {
            $str .= $child == FALSE ? '<ul class="nav" id="nav-main" role="navigation">' . PHP_EOL : '<ul class="dropdown-menu">' . PHP_EOL;
				$position = 0;
		foreach ($array as $key=>$item) {
			$position++;
            
            $active = $CI->uri->segment(2) == url_title_cro($item['id'], '-', TRUE) ? TRUE : FALSE;
            
            if($position == 1 && $child == FALSE){
                //$item['navigation_title'] = '<img src="assets/img/home-icon.png" alt="'.$item['navigation_title'].'" />';
                
                if($CI->uri->segment(2) == '')
                    $active = TRUE;
            }
            
            if($item['is_visible'] == '1')
            if(empty($item['is_private']) || $item['is_private'] == '1' && $is_logged_user)
			if (isset($item['children']) && count($item['children'])) {
			 
                $href = slug_url($lang_code.'/'.$item['id'].'/'.url_title_cro($item['navigation_title'], '-', TRUE), 'page_m');
                if(substr($item['keywords'],0,4) == 'http')
                    $href = $item['keywords'];
                    
                if($item['keywords'] == '#')
                    $href = '#';
             
				$str .= $active ? '<li class="dropdown activee">' : '<li class="dropdown">';
				$str .= '<a href="' . $href . '" class="dropdown-toggle" data-toggle="dropdown" >' . $item['navigation_title'];
				$str .= '<b class="caret"></b></a>' . PHP_EOL;
                                
				$str .= get_menu_custom($item['children'], TRUE, $lang_code);
			}
			else {
			 
                $href = slug_url($lang_code.'/'.$item['id'].'/'.url_title_cro($item['navigation_title'], '-', TRUE), 'page_m');
                if(substr($item['keywords'],0,4) == 'http')
                    $href = $item['keywords'];
                    
                if($item['keywords'] == '#')
                    $href = '#';
             
				$str .= $active ? '<li class="active">' : '<li>';
				$str .= '<a href="' . $href . '">' . $item['navigation_title'] . '</a>';
                
			}
			$str .= '</li>' . PHP_EOL;
		}
		
		$str .= '</ul>' . PHP_EOL;
	}
	
	return $str;
}
}

?>

<?php
    $CI =& get_instance();
    echo get_menu_custom($CI->temp_data['menu'], FALSE, $lang_code);
?>
                        <?php if(config_db_item('property_subm_disabled')==FALSE):  ?>
                            <a class="pull-right mylisting" href="<?php _che($front_login_url); ?>#content"><i class=" icon-folder-close-alt"></i> <?php _l('Submit Property'); ?></a>
                        <?php endif;?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end Navigation -->