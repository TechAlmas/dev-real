<h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-building"></i></span> <?php _l('Recent Properties');?></h2>   
<div class="featured-grid right-space results_conteiner">
    <div class="properties-rows">
        <div class="filter">
            <form class="form-horizontal" method="get" action="?">
                <a style="display:none;" class="view-type " ref="grid" href="#"><img src="assets/img/glyphicons/glyphicons_156_show_thumbnails.png" /></a>
                <a style="display:none;" class="view-type active " ref="list" href="#"><img src="assets/img/glyphicons/glyphicons_157_show_thumbnails_with_lines.png" /></a>

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
        <?php _widget('properties_list');?>
        <div class="pagination pagination-large properties pagination-centered">
        <?php echo $pagination_links; ?>
    </div>
    <!--End Grid Featured-->
</div>
