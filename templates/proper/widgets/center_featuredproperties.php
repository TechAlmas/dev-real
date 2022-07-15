<div class="box-white">
    <div class="new-list grid-item grid-style-properties" id="showroom">  
        <?php foreach($featured_properties as $key=>$item): ?>
        <?php
            if($key==0)echo '<div class="row-properties">';
        ?>
            <?php _generate_results_item(array('key'=>$key, 'item'=>$item)); ?>
        <?php
            if( ($key+1)%4==0 )
            {
                echo '</div><div class="row-properties">';
            }
            if( ($key+1)==count($featured_properties) ) echo '</div>';
            endforeach;
        ?>
    </div>
</div>