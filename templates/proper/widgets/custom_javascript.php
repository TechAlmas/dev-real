<!-- Defaut Js Bootsrap
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="assets/js/bootstrap-transition.js"></script>
<script src="assets/js/bootstrap-alert.js"></script>
<script src="assets/js/bootstrap-modal.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script src="assets/js/bootstrap-scrollspy.js"></script>
<script src="assets/js/bootstrap-tab.js"></script>
<script src="assets/js/bootstrap-tooltip.js"></script>
<script src="assets/js/bootstrap-popover.js"></script>
<script src="assets/js/bootstrap-button.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
<script src="assets/js/bootstrap-carousel.js"></script>
<script src="assets/js/bootstrap-typeahead.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/blueimp-gallery.min.js"></script>


<!-- Grid -->
<script src="assets/js/Grid-A-Licious-master/jquery.grid-a-licious.min.js"></script>

<!-- Slider -->
<script src="assets/js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- optionally include helper plugins carouFredSel -->
<script src="assets/js/carouFredSel-6.2.1/helper-plugins/jquery.mousewheel.min.js"></script>
<script src="assets/js/carouFredSel-6.2.1/helper-plugins/jquery.touchSwipe.min.js"></script>
<script src="assets/js/carouFredSel-6.2.1/helper-plugins/jquery.transit.min.js"></script>
<script src="assets/js/carouFredSel-6.2.1/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>

<script src="assets/js/colorbox/jquery.colorbox-min.js"></script>
<script src="assets/js/proper.js"></script>

<script type="text/javascript" src="assets/js/jquery.helpers.js"></script>
<script type="text/javascript" src="assets/js/jquery.number.js"></script>
<script type="text/javascript" src="assets/js/jquery.h5validate.js"></script>

<!-- jquery.cookiebar -->
<!-- url -- http://www.primebox.co.uk/projects/jquery-cookiebar/ -->
<?php if(config_item('cookie_warning_enabled') === TRUE): ?>
<script type="text/javascript">
 $('document').ready(function(){
    $.cookieBar({
    declineButton: true,
    message: "<p><?php _l('Accept cookiebar');?></p><br>",
    acceptText: "<?php _l('I Agree');?>",
    declineText: "<?php _l('I dont agree');?>",
});
}) 

</script>
<?php endif;?>
<!--end jquery.cookiebar -->

<script type="text/javascript">
$(document).ready(function() {
	//'use strict';
    

});
</script>


<!--  proper.js  -->
<script>
//standart load
$( document ).ready(function() {
    /*tooltip*/
    init_tooltip();
    /*tab*/
    init_tabs();
    /*link back to top animation*/
    init_back_to_top();
    /*google map Config*/
    init_gmap3();
    /*backgroung Config*/
    /*init_bgswitch();*/
    /*light box Config*/
    init_color_box();
    /*Slider Config*/
    init_slider();
    /*Grid Config*/
    init_grid();
});


function init_tooltip(){
    $('.tootip').tooltip();
}

function init_color_box(){
    $(".ajax-demo").colorbox({
        width: 260,
        scrolling:false,
        fixed:true,
        height: 225,
        opacity:0.1,
        onComplete: function(){
            $('#bg-switcher img').each(function(){
            $(this).attr('src', '{homepage_url_lang}'+$(this).attr('data-src'));
            })
            
            <?php if($this->session->userdata('type') == 'ADMIN'): ?>
                 $('#main').html('<button id="design-save" type="button" class="btn btn-primary btn-inversed btn-block">&nbsp;&nbsp;Save&nbsp;&nbsp</button>');
            <?php endif; ?>
            
            $('#design-save').click(function() {
                    //console.log($('body').attr('class'));

                    var data = { design_parameters: $('body', window.parent.document).attr('class'), css_variant: '' };

                    var load_indicator = $(this).find('.load-indicator');
                    load_indicator.css('display', 'inline-block');
                    $.post("{api_private_url}/design_save/{lang_code}", data, 
                           function(data){

                        ShowStatus.show(data.message);

                        load_indicator.css('display', 'none');
                    });

                    return false;
            });
        }
    });
}

function init_bgswitch(){
    var bg_pattern = getCookie('bg_pattern');
    if (bg_pattern != null){
        $("body").css('background-image', 'url("'+bg_pattern+'")');
    }
}

function init_back_to_top(){
    $('#back-to-top a').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}


function init_gmap3(){
    $(function(){
        var icon_villa = "assets/img/markers/hostel_0star.png"
        var icon_hotel = "assets/img/markers/villa.png"
        var img_p = "assets/img/properties/p1.jpg"
        
          // Cluster config start //
            clusterConfig = {
              radius: 60,
              // This style will be used for clusters with more than 2 markers
//              2: {
//                content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
//                width: 53,
//                height: 52
//              },
              // This style will be used for clusters with more than 5 markers
              5: {
                content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
                width: 53,
                height: 52
              },
              // This style will be used for clusters with more than 20 markers
              20: {
                content: "<div class='cluster cluster-2'>CLUSTER_COUNT</div>",
                width: 56,
                height: 55
              },
              // This style will be used for clusters with more than 50 markers
              50: {
                content: "<div class='cluster cluster-3'>CLUSTER_COUNT</div>",
                width: 66,
                height: 65
              },
              events: {
                click:function(cluster, event, object) {
                    try {
                        var same_address = true;
                        var adr = '';
                        $.each(object.data.markers, function(item) {
                            
                            if(adr == '')
                                adr = object.data.markers[item].latLng;
                            
                            if(adr != object.data.markers[item].latLng)
                                same_address = false;
                        });
                        
                        if(same_address)
                        {
                            cluster.main.map.panTo(object.data.latLng);
                            cluster.main.map.setZoom(19);
                        }
                        else
                        {
                            cluster.main.map.panTo(object.data.latLng);
                            cluster.main.map.setZoom(cluster.main.map.getZoom()+2);
                        }
                    }
                    catch(err) {
                        cluster.main.map.panTo(object.data.latLng);
                        cluster.main.map.setZoom(cluster.main.map.getZoom()+2);
                    }
                }
              }
            };
            // Cluster config end //
        
        $("#googleMap").gmap3({
            map:{
                // CENTRAL MAP DEFAULT
                /*address:"JAKARTA, INDONESIA",*/
                options:{
                    zoom:{settings_zoom},
                    <?php if(config_item('custom_map_center') === FALSE): ?>
                         center: [{all_estates_center}],
                    <?php else: ?>
                         center: [<?php echo config_item('custom_map_center'); ?>],
                    <?php endif; ?>
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
                <?php foreach($all_estates as $estate): if(!empty($estate['gps'])): ?>
                {
                    latLng: [<?php _che($estate['gps']); ?>],
                    data:{
                        content:"<?php echo _generate_popup($estate, true); ?>"
                    }, 
                    options:{
                        icon: "<?php _che($estate['icon']); ?>"
                    }
                },
                <?php endif; endforeach; ?>
                ],
                cluster: clusterConfig,	
                events:{
                    mouseover: function(marker, event, context){
                        $(this).gmap3(
                        {
                            clear:"overlay"
                        },

                        {
                            overlay:{
                                latLng: marker.getPosition(),
                                options:{
                                    content:   context.data.content,
                                    offset: {
                                        x:-46,
                                        y:-73
                                    }
                                }
                            }
                        });
                    }
                    
                }
            },
		
        });
    });
}


function init_slider(){
    //	Responsive layout, resizing the items
    if ($('#fluid-slider').length){
        $('#fluid-slider').carouFredSel({
            responsive: true,
            width: '100%',
            prev: '#fluid-slider-prev',
            next: '#fluid-slider-next',
            scroll: 1,
            mousewheel: true,
            swipe: {
                onMouse: true,
                onTouch: true
            },
            auto: {
                pauseOnHover: 'resume',
                timeoutDuration : 6000
            
            },
            items: {
                width: 400,
                //	height: '30%',	//	optionally resize item-height
                height: "75%",
                visible: {
                    min: 2,
                    max: 6
                }
            }
        });
    }
    
    if ($('#news-carousel').length){
        var _scroll = {
            delay: 1000,
            easing: 'linear',
            items: 1,
            duration: 0.07,
            timeoutDuration: 0,
            pauseOnHover: 'immediate'
        };
        $('#news-carousel').carouFredSel({
            width: '100%',
        
            align: false,
            items: {
                width: 'variable',
                height: 55,
                visible: 1
            },
            scroll: _scroll
        });
    }
    if ($('#carousel').length){
        $('#carousel').carouFredSel({
            width: '100%',
            responsive: true,
            items: {
                width: 300,
                height: "23%",
                visible: {
                    min: 1,
                    max: 1
                }
            },
            scroll: {
                pauseOnHover: 'resume',
                fx: 'fade',
                easing: 'linear',
                items: 1,
                duration: 1000,
                timeoutDuration: 6000
            },
            mousewheel: true,
            swipe: {
                onMouse: true,
                onTouch: true
            },
            prev: '#prev',
            next: '#next',
            pagination: {
                container: '#pager',
                deviation: 1
            }
        });
    }
    
    
    if ($('#list_images_property').length){
        $('#list_images_property').carouFredSel({
            auto: false,
            responsive: true,
            width: '100%',
            prev: '#prev2',
            next: '#next2',
             align       : "center",

            mousewheel: true,
            swipe: {
                onMouse: true,
                onTouch: true
            },
            scroll: 2,
            items: {
                height: 128,
                /*height:500,*/
                
                //	height: '30%',	//	optionally resize item-height
                visible: {
                    min: 5,
                    max: 5
                }
            }
        });
        $('#list_images_property a').click(function(){
            $('.preloader').show(0).delay(4000).fadeOut("slow");
            var bigImage = $(this).data("bigimage");
            var bigTitle = $(this).data("title");
            var bigDesc = $(this).data("desc");
            $(".big-image .desc-image h3").text(bigTitle);
            $(".big-image .desc-image p").text(bigDesc);
            $("#big-image-preview").attr('src', bigImage) 
            return false; 
        });
    }
    
}


function init_grid(){
    $(".grid-item .row-properties").gridalicious({
        width: 250,
        gutter: 10,
        animate: true,
        effect: 'fadeInOnAppear'
    }); 
    
    $(".grid-galeries").gridalicious({
        width: 240,
        gutter: 10,
        animate: true,
        effect: 'fadeInOnAppear'
    });
}



function init_tabs(){
    $('.bot-tab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
}


//================================
//function SetCookie 
//================================
function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}

function getCookie(c_name)
{
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1)
    {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1)
    {
        c_value = null;
    }
    else
    {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1)
        {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}



</script>



<script type="text/javascript">

function calc_side_height() {
    if(parseInt($('.container>.row-fluid>.span9>.right-line').outerHeight())<parseInt($('.container>.row-fluid>.span3').outerHeight())) {
        $('.container>.row-fluid>.span9>.right-line').outerHeight($('.container>.row-fluid>.span3').outerHeight())
    } else {
    }
}

$(document).ready(function(){
     calc_side_height()
})

$('body iframe').ready(function(){
     setTimeout('calc_side_height()', 1000);
})

var mapRefresh = true;
var map_main;
var styles;
var timerMap;
var firstSet = false;
var selectorResults = '.results_conteiner';

$(window).load(function() {
    /***********************************************************
     * ISOTOPE
     ***********************************************************/
   /* var isotope_works = $('.properties-items');
    isotope_works.isotope({
        'itemSelector': '.property-item'
    });

    $('.properties-filter a').click(function() {
        $(this).parent().parent().find('li').removeClass('selected');
        $(this).parent().addClass('selected');

        var selector = $(this).attr('data-filter');
        isotope_works.isotope({ filter: selector });
        return false;
    });*/
});

$(document).ready(function() {
	//'use strict';
    

    
    /***********************************************************
     * blueimp gallery
     ***********************************************************/
    $('div.image-gallery a.post-picture-target').bind("click touchstart", function(event)
    {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        
        $('div.image-gallery a.post-picture-target').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;

            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex};
        
        blueimp.Gallery(myLinks, options);
        
        return false;
    });
    
    /***********************************************************
     * blueimp gallery2
     ***********************************************************/
    $('div.image-gallery-agents a.post-picture-target').bind("click touchstart", function(event)
    {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        
        $(this).parent().find('a.post-picture-target').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;

            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex};
        
        blueimp.Gallery(myLinks, options);
        
        return false;
    });

    /***********************************************************
     * FLEXSLIDER
     ***********************************************************/
    /*$('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
    
    $('.flexslider-top').flexslider({
        animation: "slide"
    });
    */
    $(window).on('resize', function(){
        //$('#wrapper, #main-wrapper').css('display', 'block');
        //$('#wrapper, #main-wrapper').css('display', 'table');
    });
    
    //Typeahead
    $('#search_option_smart').typeahead({
        minLength: 1,
        source: function(query, process) {
            $.post('{typeahead_url}/smart', { q: query, limit: 8 }, function(data) {
                process(JSON.parse(data));
            });
        }
    });
    
    //main-wrapper

    /***********************************************************
     * CHAINED SELECT BOXES
     ***********************************************************/
    //$('#select-location').chained('#select-country');
    //$('#select-sublocation').chained('#select-location');

    /***********************************************************
     * BXSLIDER
     ***********************************************************/
	/*$('.bxslider').bxSlider({
  		minSlides: 1,
  		maxSlides: 6,
  		slideWidth: 170,
  		slideMargin: 30,
        responsive: false
	});*/

    /***********************************************************
     * ACCORDION
     ***********************************************************/
    $('.panel-heading a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });

    /***********************************************************
     * MAP
     ***********************************************************/
    var locations = new Array();
    var contents = new Array();
    var types = new Array();
    var images = new Array();

    // various map styles
    styles = new Array(
        [{"featureType":"landscape","stylers":[{"hue":"#FFA800"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#53FF00"},{"saturation":-73},{"lightness":40},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FBFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#00FFFD"},{"saturation":0},{"lightness":30},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00BFFF"},{"saturation":6},{"lightness":8},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#679714"},{"saturation":33.4},{"lightness":-25.4},{"gamma":1}]}],
        [{"stylers":[{"visibility":"off"}]},{"featureType":"road","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road.arterial","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"landscape","stylers":[{"visibility":"on"},{"color":"#f3f4f4"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#7fc8ed"}]},{},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#83cead"}]},{"elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"weight":0.9},{"visibility":"off"}]}],
        [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]}],
        [{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}],
        [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]},{},{"featureType":"road.highway","stylers":[{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road"},{},{"featureType":"landscape","stylers":[{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]}],
        [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}],
        [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
        [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}],
        [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
    );

    function get_gps_ranges(center_lat, center_lng, range_level_lat, range_level_lng) {
        var lat = center_lat + (Math.random() * (range_level_lat + range_level_lat) - range_level_lat);
        var lng = center_lng + (Math.random() * (range_level_lng + range_level_lng) - range_level_lng);
        return Array(lat, lng);
    }
    //var icons = new Array('apartment', 'building-area', 'condo', 'cottage', 'family-house', 'flatblocks', 'flatblocks2', 'house', 'single-home', 'villa');

    // generate random content for properties map
//    for (var i=0; i < 50; i++) {
//        var icon_name = icons[Math.floor(Math.random()*icons.length)];
//        locations.push(get_gps_ranges(40.67, -73.94, 0.08, 0.60));
//        contents.push('<div class="infobox"><div class="infobox-header"><h3 class="infobox-title"><a href="#">30 Miller Pl Apt 3</a></h3><h4 class="infobox-subtitle"><a href="#">San Francisco, CA</a></h4></div><div class="infobox-picture"><a href="#"><img src="assets/img/tmp/properties/medium/'+Math.floor((Math.random()*10)+1) +'.jpg" alt=""></a><div class="infobox-price">$ 13,000</div></div></div>');
//        types.push('apartment');
//        images.push('<img src="assets/img/icons/' + icon_name + '.png" alt="">');
//    }
/*
    <?php foreach($all_estates as $item): ?>
        <?php
            if(!isset($item['gps']))break;
        ?>
        locations.push(new google.maps.LatLng(<?php _che($item['gps']); ?>));
        contents.push("<?php echo _generate_popup($item, true); ?>");
        
        //console.log('<?php _che($item['gps']); ?>');
        types.push('<?php _che($item['option_6']); ?>');
        images.push('<img src="assets/img/icons/<?php _che($item['option_6']); ?>.png" alt="">');
    <?php endforeach; ?>


    if ($('#map').length !== 0) {
        map_main = $('#map').aviators_map({
            locations: locations,
            contents: contents,
            types: types,
            images: images,
            transparentMarkerImage: 'assets/img/marker-transparent.png',
            transparentClusterImage:  'assets/img/clusterer-transparent.png',
            zoom: {settings_zoom},
            <?php if(config_item('custom_map_center') === FALSE): ?>
            center: new google.maps.LatLng({all_estates_center}),
            <?php else: ?>
            center: new google.maps.LatLng(<?php echo config_item('custom_map_center'); ?>),
            <?php endif; ?>
            enableGeolocation: false,
            styles: styles[$('#map').data('style')]
        });
    }
    */
    {has_settings_gps}
    /***********************************************************
     * PROPERTY MAP
     ***********************************************************/
    if ($('#map-property').length !== 0) {
       var map= $("#map-property").gmap3({
            map:{
                // CENTRAL MAP DEFAULT
                /*address:"JAKARTA, INDONESIA",*/
                options:{
                    zoom:{settings_zoom},
                     center: {
                          latLng: [{settings_gps}],
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
                    latLng:  [{settings_gps}],
                    options:{
                        icon: 'assets/img/markers/house.png'
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

    }
    {/has_settings_gps}
    
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

<?php if(config_db_item('app_type') == 'demo' || $this->session->userdata('type') == 'ADMIN'): ?>
    /***********************************************************
     * PALETTE
     ***********************************************************/
    $('.palette-colors a').click(function(e) {
        e.preventDefault();
        var newCSSHref = $(this).attr('href');
        $('#css-main').attr('href', newCSSHref);
    });
    // close the palette on click
    $('.palette-toggle').click(function() {
        $('.palette-wrapper').toggleClass('palette-closed');
    });

    // change page layout from palette
    $('.palette-layout').change(function() {
        $('body').removeClass('layout-wide').removeClass('layout-boxed');
        $('body').addClass($(this).find(":selected").attr('value'));
    });

    // change page header style from palette
    $('.palette-header').change(function() {
        $('body').removeClass('header-light').removeClass('header-dark');
        $('body').addClass($(this).find(":selected").attr('value'));
    });

    // change page footer style from palette
    $('.palette-footer').change(function() {
        $('body').removeClass('footer-light').removeClass('footer-dark');
        $('body').addClass($(this).find(":selected").attr('value'));
    });

    // change navigation style from palette
    $('.palette-map-navigation').change(function() {
        $('body').removeClass('map-navigation-light').removeClass('map-navigation-dark');
        $('body').addClass($(this).find(":selected").attr('value'));
    });

    // select a background pattern from palette
    $('.palette-patterns a').click(function() {
        var activePattern = $('.palette-patterns a.active');
        $('body').removeClass(activePattern.attr('class'));
        activePattern.removeClass('active');

        $('body').addClass($(this).attr("class"));
        $(this).addClass('active');
    });
    
    // define default
    if($('body').hasClass('layout-boxed'))
    {
        $('select.palette-layout').val('layout-boxed');
    }
    
    if($('body').hasClass('header-dark'))
    {
        $('select.palette-header').val('header-dark');
    }
    
    if($('body').hasClass('footer-light'))
    {
        $('select.palette-footer').val('footer-light');
    }
    
    if($('body').hasClass('map-navigation-light'))
    {
        $('select.palette-map-navigation').val('map-navigation-light');
    }
    
    $('.palette-patterns a').each(function() {
        $(this).removeClass('active');

        if($('body').hasClass($(this).attr("class")))
        {
            $(this).addClass('active');
        }

    });
    
<?php endif; ?>
    
    
        // [START] Save search //  
        
        $("#search-save").click(function(){
            manualSearch(0, '#content-block', true);
            
            return false;
        });
        
        // [END] Save search //
    
            /* Search start */

            $('.menu-onmap li a').click(function () { 
              if(!$(this).parent().hasClass('list-property-button'))
              {
                  $(this).parent().parent().find('li').removeClass("active");
                  $(this).parent().addClass("active");
                  
                  if(loadOnTab) manualSearch(0);
                  return false;
              }
            });
            
            <?php if(config_item('all_results_default') !== TRUE): ?>
            if($('.menu-onmap li.active').length == 0)
            {
                if(!$('.menu-onmap li:first').hasClass('list-property-button'))
                    $('.menu-onmap li:first').addClass('active');
            }
            <?php else: ?>
            if($('.menu-onmap li.active').length == 0)
            {
                $('.menu-onmap li.all-button').addClass('active');
            }
            <?php endif; ?>
            
            $('#search-start').click(function () { 
              manualSearch(0);
              return false;
            });
            /* Search end */
            
            <?php $dates_list = ''; if(isset($available_dates) && file_exists(APPPATH.'controllers/admin/booking.php')): ?>
            var dates_list = [];
            <?php foreach($available_dates as $date_format => $unix_format): ?>
            <?php
                $dates_list.='"'.$date_format.'", ';
            ?>
            <?php endforeach; ?>
            <?php
                if($dates_list != '')
                    $dates_list = substr($dates_list, 0, -2);
            ?>dates_list = [<?php echo $dates_list; ?>];
            <?php endif; ?>
            
            /* Date picker */
            var nowTemp = new Date();
            
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            $('.datetimepicker_standard').datepicker().on('changeDate', function(ev) {
                $(this).datepicker('hide');
            });

            var checkin = $('#datetimepicker1').datepicker({
                onRender: function(date) {
                    
                    //console.log(date.valueOf());
                    //console.log(date.toString());
                    //console.log(now.valueOf());
                    
                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() < now.valueOf()) // Just for performance
                    {
                        return 'disabled';
                    }
                    <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                    else if(dates_list.indexOf(today_formated )>= 0)
                    {
                        return '';
                    }
                    
                    return 'disabled red';
                    <?php else: ?>
                    return '';
                    <?php endif;?>
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 7);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#datetimepicker2')[0].focus();
            }).data('datepicker');
                var checkout = $('#datetimepicker2').datepicker({
                onRender: function(date) {

                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() <= checkin.date.valueOf()) // Just for performance
                    {
                        return 'disabled';
                    }                    
                    <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                    else if(dates_list.indexOf(today_formated )>= 0)
                    {
                        return '';
                    }
                    
                    return 'disabled red';
                    <?php else: ?>
                    return '';
                    <?php endif;?>
            }
            }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datepicker');
            
            <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
            /* Search booking form */
            
            var checkin_booking = $('#booking_date_from').datepicker({
                onRender: function(date) {
                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() < now.valueOf())
                    {
                        return 'disabled';
                    }
                    
                    return '';
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout_booking.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 7);
                    checkout_booking.setValue(newDate);
                }
                checkin_booking.hide();
                $('#booking_date_to')[0].focus();
            }).data('datepicker');
                var checkout_booking = $('#booking_date_to').datepicker({
                onRender: function(date) {

                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() <= checkin_booking.date.valueOf())
                    {
                        return 'disabled';
                    }
                    
                    return '';
            }
            }).on('changeDate', function(ev) {
                checkout_booking.hide();
            }).data('datepicker');
            <?php endif;?>
            
            $('a.available.selectable').click(function(){
                $('#datetimepicker1').val($(this).attr('ref'));
                $('#datetimepicker2').val($(this).attr('ref_to'));
                $('div.property-form form input:first').focus();
                
                var nowTemp = new Date($(this).attr('ref'));
                var date_from = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                
                
                checkin.setValue(date_from);
                date_from.setDate(date_from.getDate() + 7);
                checkout.setValue(date_from);
            });
            
            
            /* Date picker end */

            {has_extra_js}
            loadjQueryUpload();

            $(".cleditor").cleditor({
                width: "400px",
                height: "auto"
            });
            
            $('.tabbable li.rtab a').click(function () { 
                var tab_width = 0;
                var tab_width_real = 0;
                $('.tab-content').find('div.cleditorToolbar:first .cleditorGroup').each(function (i) {
                    tab_width += $(this).width();
                });
                
                tab_width_real = $('.tab-content').find('div.cleditorToolbar').width();
                var rows = parseInt(tab_width/tab_width_real+1)
                
                $('.tab-content').find('div.cleditorToolbar').height(rows*27);
                
                try {
                    $('.tab-content').find('.cleditor').refresh();
                }
                catch(err) {
                    // console.log(err.message);
                    // $(...).find(...).refresh is not a function
                }
                
            });
            
            $('.zoom-button').bind("click touchstart", function()
            {
                var myLinks = new Array();
                var current = $(this).attr('href');
                var curIndex = 0;
                
                $('.files-list-u .zoom-button').each(function (i) {
                    var img_href = $(this).attr('href');
                    myLinks[i] = img_href;
                    if(current == img_href)
                        curIndex = i;
                });
    
                options = {index: curIndex}
                
                blueimp.Gallery(myLinks, options);
                
                return false;
            });
            
            /* [Edit property] */
            
    
            // If alredy selected
            if($('#inputGps').length && $('#inputGps').val() != '')
            {
                savedGpsData = $('#inputGps').val().split(", ");
                
                $("#mapsAddress").gmap3({
                    map:{
                      options:{
                        center: [parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])],
                        zoom: 14
                      }
                    },
                    marker:{
                    values:[
                      {latLng:[parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])]},
                    ],
                    options:{
                      draggable: true
                    },
                    events:{
                        dragend: function(marker){
                          if($("#inputAddress").attr("readonly"))
                          {
                            alert('<?php _l('Location change disabled'); ?>');
                            return false;
                          }
                          else
                          {
                            $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                          }
                        }
                  }}});
                
                firstSet = true;
            }
            else
            {
                $("#mapsAddress").gmap3({
                    map:{
                      options:{
                        center: [{settings_gps}],
                        zoom: 12
                      },
                    },
                marker:{
                    values:[
                      {latLng:[{settings_gps}]},
                    ],
                    options:{
                      draggable: true
                    },
                    events:{
                        dragend: function(marker){
                          if($("#inputAddress").attr("readonly"))
                          {
                            alert('<?php _l('Location change disabled'); ?>');
                            return false;
                          }
                          else
                          {
                            $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                          }
                        }
                  }}
                  });
                  
                  firstSet = true;
            }
                
            $('#inputAddress').keyup(function (e) {
                clearTimeout(timerMap);
                timerMap = setTimeout(function () {
                    
                    $("#mapsAddress").gmap3({
                      getlatlng:{
                        address:  $('#inputAddress').val(),
                        callback: function(results){
                          if ( !results ){
                            ShowStatus.show('<?php echo str_replace("'", "\'", lang_check('Address not found!')); ?>');
                            return;
                          } 
                          
                            if(firstSet){
                                $(this).gmap3({
                                    clear: {
                                      name:["marker"],
                                      last: true
                                    }
                                });
                            }
                          
                          // Add marker
                          $(this).gmap3({
                            marker:{
                              latLng:results[0].geometry.location,
                               options: {
                                  id:'searchMarker',
                                  draggable: true
                              },
                              events: {
                                dragend: function(marker){
                                  if($("#inputAddress").attr("readonly"))
                                  {
                                    alert('<?php _l('Location change disabled'); ?>');
                                    return false;
                                  }
                                  else
                                  {
                                    $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                                  }
                                }
                              }
                            }
                          });
                          
                          // Center map
                          $(this).gmap3('get').setCenter( results[0].geometry.location );
                          
                          $('#inputGps').val(results[0].geometry.location.lat()+', '+results[0].geometry.location.lng());
                          
                          firstSet = true;
    
                        }
                      }
                    });
                }, 2000);
                
            });
            /* [/Edit property] */
            
            {/has_extra_js}

     reloadElements();

});

        function manualSearch(v_pagenum, scroll_enabled, onlysave)
        {
            if (typeof scroll_enabled === 'undefined') scroll_enabled = "#content-block";
            if (typeof onlysave === 'undefined') onlysave = false;
            
            // Order ASC/DESC
            var v_order = $('.selectpicker-small').val();
            
            // View List/Grid
            var v_view = $('.view-type.active').attr('ref');          
            
            //Define default data values for search
            var data = {
                order: v_order,
                view: v_view,
                page_num: v_pagenum
            };
            
            if($('#booking_date_from').length > 0)
            {
                if($('#booking_date_from').val() != '')
                    data['v_booking_date_from'] = $('#booking_date_from').val();
            }
            
            if($('#booking_date_to').length > 0)
            {
                if($('#booking_date_to').val() != '')
                    data['v_booking_date_to'] = $('#booking_date_to').val();
            }
            
            // Purpose, "for custom tabbed selector"
            /*
            if($('#search_option_4 .active a').length > 0)
            {
                data['v_search_option_4'] = $('#search_option_4 .active a').html();
            }
            */
            
            // Improved tabbed selector code
//            $(".tabbed-selector").each(function() {
//              var selected_text = $(this).find(".active:not(.all-button) a").html();
//              data['v_'+$(this).attr('id')] = selected_text;
//            });
            
            // Add custom data values, automatically by fields inside search-form
            $('.search-form  input, .search-form  select').each(function (i) {
                if($(this).attr('type') == 'checkbox')
                {
                    if ($(this)[0].checked)
                    {
                        data['v_'+$(this).attr('id')] = $(this).val();
                    }
                }
                else if($(this).attr('type') == 'radio')
                {   
                    if ($(this)[0].checked)
                    {
                        //console.log($(this));
                        data['v_'+$(this).attr('name')] = $(this).attr('rel');
                    }
                }
                else if($(this).hasClass('tree-input'))
                {
                    if($(this).val() != '')
                    {
                        var tre_id_split = $(this).attr('id').split('_');
                        //console.log($(this).find("option:selected").attr('value'));
                        //console.log(tre_id_split);
                        if(data['v_search_option_'+tre_id_split[2]] == undefined)
                            data['v_search_option_'+tre_id_split[2]] = '';
                        
                        data['v_search_option_'+tre_id_split[2]]+= $(this).find("option:selected").text()+' - ';
                    }
                }
                else
                {
                    data['v_'+$(this).attr('id')] = $(this).val();
                }
            });
            
            //console.log(data);
            
            // Custom tags filter Start
            if($('#tags-filters').length > 0)
            {
                var tags_html = '';
                
                // Add custom data values, automatically by fields inside search-form
                $('.search-form form input, .search-form form select').each(function (i) {
                    if($(this).attr('type') == 'checkbox')
                    {
                        if ($(this).attr('checked'))
                        {
                            data['v_'+$(this).attr('id')] = $(this).val();
                            
                            var option_name = '';
                            //var attr = $(this).attr('placeholder');
                            var attr = $(this).attr('value').substring(4);
                            if(typeof attr !== 'undefined' && attr !== false)
                            {
                                option_name = attr;
                            }
                            
                            if($(this).val() != '')
                                tags_html+='<button class="btn btn-small btn-warning filter-tag ck" rel="'+$(this).attr('id')+'" type="button"><span class="icon-remove icon-white"></span> '+option_name+'</button>&nbsp;';
                        
                        }
                    }
                    else if($(this).hasClass('tree-input'))
                    {
                        // different way
                    }
                    else
                    {
                        data['v_'+$(this).attr('id')] = $(this).val();
                        
                        var option_name = '';
                        var attr = $(this).attr('placeholder');
                        if(typeof attr !== 'undefined' && attr !== false)
                        {
                            option_name = attr+': ';
                        }
                        
                        if($(this).val() != '')
                            tags_html+='<button class="btn btn-small btn-primary filter-tag" rel="'+$(this).attr('id')+'" type="button"><span class="icon-remove icon-white"></span> '+option_name+$(this).val()+'</button>&nbsp;';
                    
                    }
                });
                
                if(typeof data['v_search_option_4'] != 'undefined')
                if(data['v_search_option_4'].length > 0)
                    tags_html+='<button class="btn btn-small btn-danger filter-tag" rel="4" type="button"><span class="icon-remove icon-white"></span> '+data['v_search_option_4']+'</button>&nbsp;';
                
                if(tags_html != '')
                {
                    $("#tags-filters").css('display', 'block');
                    
                    $("#tags-filters").html(tags_html);
                    
                    $(".filter-tag").click(function(){
                        var m_id = $(this).attr('rel').substring(14);
                        
                        if($(this).hasClass('ck'))
                        {
                            $('#'+$(this).attr('rel')).prop('checked', false);
                        }
                        else
                        {
                            $("input.id_"+m_id).val('');
                            $("input#"+$(this).attr('rel')).val('');
                            
                            $("select#"+$(this).attr('rel')).val('');
                            $("select.id_"+m_id).val('');
                            $("select#"+$(this).attr('rel')+".selectpicker").selectpicker('render');
                            $("select.id_"+m_id+".selectpicker").selectpicker('render');
                        }
                        
                        $(this).remove();
                        
                        
                        if($(this).attr('rel') == '4')
                        {
                            $('#search_option_4 .active').removeClass('active');
                        }
                        
                        if($(this).hasClass('ck'))
                        {
                            $("input.checkbox_am[option_id='"+m_id+"']").prop('checked', false);
                        }
                        
                        manualSearch(0);
                    });
                }
                else
                {
                    $("#tags-filters").css('display', 'none');
                }
            }
            // Custom tags filter End
            
            $("#ajax-indicator-1").show();
            
            if(onlysave == true)
            {
                $.post("{api_private_url}/save_search/{lang_code}", data, 
                       function(data){
                    //console.log(data);
                    //console.log(data.message);
                    
                    ShowStatus.show(data.message);
                                    
                    $("#ajax-indicator-1").hide();
                });
                
                return;
            }
            
            $.post("{ajax_load_url}/"+v_pagenum, data,
            function(data){
             $("#googleMap").gmap3({
                        clear: {
                            name:["marker"]
                        }
                    });
                if(mapRefresh && $('#googleMap').length > 0)
                {
                    //Remove all markers
                   /* map_main.aviators_map('removeMarkers');*/
                    var icon_villa = "assets/img/markers/hostel_0star.png"
                    var icon_hotel = "assets/img/markers/villa.png"
                    var img_p = "assets/img/properties/p1.jpg"
                    if(data.results.length > 0)
                    {
                 
                 var markers = new Array();
                                 $.each(data.results, function( index, listing ) {
                   markers.push( {
                        latLng:[listing.latLng[0], listing.latLng[1]],
                        data:{
                            img_preview: listing.options.icon, 
                            properties_name:"023 Central Park [Rent]", 
                            properties_desc:"Lorem Ipsum Go Green",
                            properties_link:"#", 
                            zip:001233, 
                            city:"Jakarta",
                            content:listing.data
                        }, 
                        options:{
                            icon: listing.options.icon
                        },
                    });
                });
                 
            $("#googleMap").gmap3({
                       map:{
                // CENTRAL MAP DEFAULT
                options:{
                    center: {lat:data.results_center[0], lng: data.results_center[1]},
                }
            },
            marker:{
                // DATA LOCATION
                values:markers,
                cluster: clusterConfig,	
                events:{
                    mouseover: function(marker, event, context){
                        $(this).gmap3(
                        {
                            clear:"overlay"
                        },

                        {
                                overlay:{
                                latLng: marker.getPosition(),
                                options:{
                                    content:   context.data.content,
                                    offset: {
                                        x:-46,
                                        y:-73
                                    }
                                }
                            }
                        });
                    }
                    
                }
            }
			
        });
    
                    }
                }
                
                /* add row count */
                
                if($('#count_row').length>0){
                     $('#count_row').html(data.total_rows);
                 }
                /* end add row count */
                
                $(selectorResults).html(data.print);
                
                reloadElements();
                
                $("#ajax-indicator-1").hide();
                $(document).scrollTop( $(scroll_enabled).offset().top );
                
//                $(selectorResults).hide(1000,function(){
//                    $(selectorResults).html(data.print);
//                    reloadElements();
//                    $(selectorResults).show(1000);
//                });
                init_grid()
            }, "json");
            return false;
        }
        
    $.fn.startLoading = function(data){
        //$('#saveAll, #add-new-page, ol.sortable button, #saveRevision').button('loading');
    }
    
    $.fn.endLoading = function(data){
        //$('#saveAll, #add-new-page, ol.sortable button, #saveRevision').button('reset');       
        <?php if(config_item('app_type') == 'demo'):?>
            ShowStatus.show('<?php echo str_replace("'", "\'", lang('Data editing disabled in demo')); ?>');
        <?php else:?>
            //ShowStatus.show('<?php echo lang('data_saved')?>');
        <?php endif;?>
    }

        function reloadElements()
        {          

            $('.selectpicker-small').change(function() {
                manualSearch(0);
                return false;
            });

            $('.view-type').click(function () { 
              $(this).parent().find('.view-type').removeClass("active");
              $(this).addClass("active");
              manualSearch(0);
              return false;
            });
            
            $('.pagination.properties a').click(function () { 
              var page_num = $(this).attr('href');
              var n = page_num.lastIndexOf("/"); 
              page_num = page_num.substr(n+1);
              
              manualSearch(page_num);
              return false;
            });
            
            $('.pagination.news a').click(function () { 
                var page_num = $(this).attr('href');
                var n = page_num.lastIndexOf("/"); 
                page_num = page_num.substr(n+1);
                
                $.post($(this).attr('href'), {search: $('#search_showroom').val()}, function(data){
                    $('.property_content_position').html(data.print);
                    
                    reloadElements();
                }, "json");
                
                return false;
            });
            
            //InitChosen();
        }
        
    {has_extra_js}
    function loadjQueryUpload()
    {
        $('form.fileupload').each(function () {
            $(this).fileupload({
            <?php if(config_item('app_type') != 'demo'):?>
            autoUpload: true,
            <?php endif;?>
            // The maximum width of the preview images:
            previewMaxWidth: 160,
            // The maximum height of the preview images:
            previewMaxHeight: 120,
            uploadTemplateId: null,
            downloadTemplateId: null,
            uploadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    /*
                    var row = $('<li class="img-rounded template-upload">' +
                        '<div class="preview"><span class="fade"></span></div>' +
                        '<div class="filename"><code>'+file.name+'</code></div>'+
                        '<div class="options-container">' +
                        '<span class="cancel"><button  class="btn btn-mini btn-warning"><i class="icon-ban-circle icon-white"></i></button></span></div>' +
                        (file.error ? '<div class="error"></div>' :
                                '<div class="progress">' +
                                    '<div class="bar" style="width:0%;"></div></div></div>'
                        )+'</li>');
                    row.find('.name').text(file.name);
                    row.find('.size').text(o.formatFileSize(file.size));
                    if (file.error) {
                        row.find('.error').text(
                            locale.fileupload.errors[file.error] || file.error
                        );
                    }
                    */
                    var row = $('<div> </div>');
                    rows = rows.add(row);
                });
                return rows;
            },
            downloadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    var row = $('<li class="img-rounded template-download fade">' +
                        '<div class="preview"><span class="fade"></span></div>' +
                        '<div class="filename"><code>'+file.short_name+'</code></div>'+
                        '<div class="options-container">' +
                        (file.zoom_enabled?
                            '<a data-gallery="gallery" class="zoom-button btn btn-mini btn-success" download="'+file.name+'"><i class="icon-search icon-white"></i></a>'
                            : '<a target="_blank" class="btn btn-mini btn-success" download="'+file.name+'"><i class="icon-search icon-white"></i></a>') +
                        ' <span class="delete"><button class="btn btn-mini btn-danger" data-type="'+file.delete_type+'" data-url="'+file.delete_url+'"><i class="icon-trash icon-white"></i></button>' +
                        ' <input type="checkbox" value="1" name="delete"></span>' +
                        '</div>' +
                        (file.error ? '<div class="error"></div>' : '')+'</li>');
                    
                    var added=false;
                    
                    if (file.error) {
                        ShowStatus.show(file.error);
                        
//                        row.find('.name').text(file.name);
//                        row.find('.error').text(
//                            file.error
//                        );
                    } else {
                        added=true;
                        row.find('.name a').text(file.name);
                        if (file.thumbnail_url) {
                            row.find('.preview').html('<img class="img-rounded" alt="'+file.name+'" data-src="'+file.thumbnail_url+'" src="'+file.thumbnail_url+'">');  
                        }
                        row.find('a').prop('href', file.url);
                        row.find('a').prop('title', file.name);
                        row.find('.delete button')
                            .attr('data-type', file.delete_type)
                            .attr('data-url', file.delete_url);
                    }
                    if(added)
                        rows = rows.add(row);
                });
                
                return rows;
            },
            destroyed: function (e, data) {
                $.fn.endLoading();
                <?php if(config_item('app_type') != 'demo'):?>
                if(data.success)
                {
                }
                else
                {
                    ShowStatus.show('<?php echo lang_check('Unsuccessful, possible permission problems or file not exists'); ?>');
                }
                <?php endif;?>
                return false;
            },
            <?php if(config_item('app_type') == 'demo'):?>
            added: function (e, data) {
                $.fn.endLoading();
                return false;
            },
            <?php endif;?>
            finished: function (e, data) {
                $('.zoom-button').unbind('click touchstart');
                $('.zoom-button').bind("click touchstart", function()
                {
                    var myLinks = new Array();
                    var current = $(this).attr('href');
                    var curIndex = 0;
                    
                    $('.files-list-u .zoom-button').each(function (i) {
                        var img_href = $(this).attr('href');
                        myLinks[i] = img_href;
                        if(current == img_href)
                            curIndex = i;
                    });
            
                    options = {index: curIndex}
            
                    blueimp.Gallery(myLinks, options);
                    
                    return false;
                });
            },
            dropZone: $(this)
        });
        });       
        
        $("ul.files").each(function (i) {
            $(this).sortable({
                update: saveFilesOrder
            });
            $(this).disableSelection();
        });
    
    }
    
    function filesOrderToArray(container)
    {
        var data = {};

        container.find('li').each(function (i) {
            var filename = $(this).find('.options-container a:first').attr('download');
            data[i+1] = filename;
        });
        
        return data;
    }
    
    function saveFilesOrder( event, ui )
    {
        var filesOrder = filesOrderToArray($(this));
        var pageId = $(this).parent().parent().parent().attr('id').substring(11);
        var modelName = $(this).parent().parent().parent().attr('rel');
        
        $.fn.startLoading();
		$.post('<?php echo site_url('files/order'); ?>/'+pageId+'/'+modelName, 
        { 'page_id': pageId, 'order': filesOrder }, 
        function(data){
            $.fn.endLoading();
		}, "json");
    }
    
    {/has_extra_js}
        
        /* [START] NumericFields */
        
        $(function() {
            <?php if(config_db_item('swiss_number_format') == TRUE): ?>
            
            $('input.DECIMAL').number( true, 2, '.', '\'' );
            $('input.INTEGER').number( true, 0, '.', '\'' );
             
            <?php else: ?>
            
            $('input.DECIMAL').number( true, 2 );
            $('input.INTEGER').number( true, 0 );
            
            <?php endif; ?>
        });
    
        /* [END] NumericFields */
        
        /* [START] ValidateFields */
        
        $(function() {
            $('form.form-estate').h5Validate();
        });
        
        /* [END] ValidateFields */

$('document').ready(function(){
  reloadPaginationUniversal();
 }) 
            function reloadPaginationUniversal()
        {
                 
            $('.pagination-ajax-results a').click(function () { 
                var page_num = $(this).attr('href');
                var n = page_num.lastIndexOf("/"); 
                page_num = page_num.substr(n+1);
                
                var results_dom_id = '#ajax_results';
                
                $.post($(this).attr('href'), {'page_num':page_num}, function(data){
                    $(results_dom_id).html(data.print);
                    init_grid()
                    reloadPaginationUniversal();
                }, "json");
                
                return false;
            });
        }       
</script>

<?php if(config_db_item('app_type') == 'demo' || $this->session->userdata('type') == 'ADMIN'): ?>
    <a href='{homepage_url_lang}templates/proper/custum-bg.html' class="ajax-demo"><i class="  icon-cogs"></i></a>
<?php endif;?>
    
{settings_tracking}