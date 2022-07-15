<?php foreach($agent_estates as $key=>$item): ?>
<?php
    if($key==0)echo '<div class="row-properties">';
?>
    <?php _generate_results_item(array('key'=>$key, 'item'=>$item)); ?>
<?php
    if( ($key+1)%3==0 )
    {
        echo '</div><div class="row-properties">';
    }
    if( ($key+1)==count($agent_estates) ) echo '</div>';
endforeach;
?>  
<div class="pagination pagination-large pagination-ajax-results pagination-centered">
    <?php echo $pagination_links_agent; ?>
</div>