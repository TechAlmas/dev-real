<div class="properties-rows">
<div class="filter">
    <form class="form-horizontal" method="get" action="?">
        <a style="display:none;" class="view-type <?php _che($view_grid_selected); ?>" ref="grid" href="#"><img src="assets/img/glyphicons/glyphicons_156_show_thumbnails.png" /></a>
        <a style="display:none;" class="view-type <?php _che($view_list_selected); ?>" ref="list" href="#"><img src="assets/img/glyphicons/glyphicons_157_show_thumbnails_with_lines.png" /></a>

        <div class="control-group options">
            <label for="inputSortBy" class="control-label">{lang_OrderBy}</label>
            <div class="controls">
                <select class="form-control pull-right selectpicker-small" placeholder="{lang_Sort}">
                    <option value="id ASC" {order_dateASC_selected}>{lang_DateASC}</option>
                    <option value="id DESC" {order_dateDESC_selected}>{lang_DateDESC}</option>
                    <option value="price ASC" {order_priceASC_selected}>{lang_PriceASC}</option>
                    <option value="price DESC" {order_priceDESC_selected}>{lang_PriceDESC}</option>
                </select>
            </div><!-- /.controls -->
        </div><!-- /.control-group -->
    </form>
</div><!-- /.filter -->
</div>
{has_view_grid}
   {has_no_results}
   <div class="row-fluid">
    <div class="span12 result-answer">
        <div class="alert alert-success">
            {lang_Noestates}
        </div>
    </div>
    </div>
       
    {/has_no_results}
<?php if(count($results)>0):?>
<div class="box-white">
 
    <div class="grid-item grid-style-properties">

    <?php foreach($results as $key=>$item): ?>
    <?php
        if($key==0)echo '<div class="row-properties">';
    ?>
        <?php _generate_results_item(array('key'=>$key, 'item'=>$item)); ?>
    <?php
        if( ($key+1)%3==0 )
        {
            echo '</div><div class="row-properties">';
        }
        if( ($key+1)==count($results) ) echo '</div>';
        endforeach;
    ?>
    </div>
</div>
<?php endif;?>
{/has_view_grid}

{has_view_list} 
<?php _widget('properties_list');?>
{/has_view_list} 

<div class="pagination pagination-large properties pagination-centered">
    <?php echo $pagination_links; ?>
</div>
