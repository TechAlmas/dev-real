<style>

/* Browser Resets
*********************************/
.flex-container a:active,
.flexslider-top a:active,
.flex-container a:focus,
.flexslider-top a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;}



/* FlexSlider Necessary Styles
*********************************/
.flexslider-top {margin: 0; padding: 0;}
.flexslider-top .slides > li {display: none; -webkit-backface-visibility: hidden;} /* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider-top .slides img {width: 100%; display: block;}

/* FlexSlider Default Theme
*********************************/
.flexslider-top { margin: 0 0 60px; background: #fff; border: 4px solid #fff; position: relative; -webkit-border-radius: 4px; -moz-border-radius: 4px; -o-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.2); -moz-box-shadow: 0 1px 4px rgba(0,0,0,.2); -o-box-shadow: 0 1px 4px rgba(0,0,0,.2); box-shadow: 0 1px 4px rgba(0,0,0,.2); zoom: 1; }
.flex-viewport { max-height: 2000px; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; transition: all 1s ease; }
.loading .flex-viewport { max-height: 300px; }
.flexslider-top .slides { zoom: 1; }
.carousel li { margin-right: 5px; }

.flexslider-top:hover .flex-prev { opacity: 0.7; left: 10px; }
.flexslider-top:hover .flex-next { opacity: 0.7; right: 10px; }
.flexslider-top:hover .flex-next:hover, .flexslider-top:hover .flex-prev:hover { opacity: 1; }


.map-wrapper.slideshow
{
    margin-top:5px;
}

.map-wrapper.slideshow .flexslider
{
    margin-bottom: 0px;
    border: 0px;
}

.map-wrapper.slideshow .flex-direction-nav a
{
    top: 50%;
}

.map-navigation
{
    top:0px !important;
    position:relative;
    margin-bottom:5px;
}

@media (max-width: 768px) {

}  

@media (min-width: 768px) {

    .map-wrapper.slideshow .col-sm-3
    {
        width:30%;
    }
    
    .map-wrapper.slideshow .col-sm-9
    {
        width:70%;
    }

}

#carousel-example-generic .prev, .next {
     transform: translateY(0); 
     -webkit-transform: translateY(0);  
     padding: 0; 
     background: #141414; 
     top: 0; 
     color: white; 
     text-decoration: none; 
     border: 0; 
     box-shadow: none; 
    -o-box-shadow: none;
     -webkit-box-shadow: none; 
    -moz-box-shadow: none;
}

#carousel-example-generic .carousel-control {
    top:50%;
    margin-top:-23px;
}

.carousel-indicators li {
    cursor:pointer;
}

#carousel-example-generic {
    margin-bottom: 0;
}

</style>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php foreach($slideshow_images as $key=>$file): ?>
    <div class="item <?php echo ($key==0)? 'active':'';?>">
      <img src="<?php echo _simg($file['url'], '1800x600'); ?>" alt="...">
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
   <a class="carousel-control left" href="#carousel-example-generic" role="button" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#carousel-example-generic" role="button" data-slide="next">&rsaquo;</a>
</div>
<script>
$(document).ready(function(){
    $('.carousel-inner .item:first-child').addClass('active')     

    $('.carousel-inner .item').each(function( index, element ){
        $('.carousel .carousel-indicators').append(' <li data-target="#carousel-example-generic" data-slide-to="'+index+'"></li>')
    })

    $('.carousel .carousel-indicators li').first().addClass('active');

    $('.carousel').carousel()
})
    
</script>
