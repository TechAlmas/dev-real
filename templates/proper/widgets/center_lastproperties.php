<h2 class="main-heading bottom-line">{lang_Lastaddedproperties}</h2>     
<div class="box-white right-space">
    <div class="new-list grid-item grid-style-properties" id="showroom">  
    <?php foreach($last_estates as $key=>$item): ?>
    <?php
        if($key==0)echo '<div class="row-properties">';
    ?>
        <?php _generate_results_item(array('key'=>$key, 'item'=>$item)); ?>
    <?php
        if( ($key+1)%3==0 )
        {
            echo '</div><div class="row-properties">';
        }
        if( ($key+1)==count($last_estates) ) echo '</div>';
        endforeach;
    ?>
    </div>
</div>  
<br class="clear">