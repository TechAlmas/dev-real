<?php if(isset($category_options_21) && $category_options_count_21>0): ?>
<div class="widget widget-box box-container">
    <div class="widget-header text-uppercase">
       {options_name_21}
    </div>
    <ul class="amenities clearfix">
        {category_options_21}
        {is_checkbox}
        <li>
        <i class="icon2-checked"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
        </li>
        {/is_checkbox}
        {/category_options_21}
    </ul>
</div> <!-- /. widget-amenities -->    
<?php endif; ?>