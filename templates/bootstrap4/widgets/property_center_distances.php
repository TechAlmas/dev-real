<?php if(isset($category_options_43) && $category_options_count_43>0): ?>
<div class="widget widget-box box-container">
    <div class="widget-header text-uppercase">
       {options_name_43}
    </div>
    <ul class="amenities clearfix">
        {category_options_43}
        {is_text}
        <li>
          {icon} {option_name}:&nbsp;&nbsp;{option_prefix}{option_value}{option_suffix}
        </li>
        {/is_text}
        {/category_options_43}
    </ul>
</div> <!-- /. widget-amenities -->    
<?php endif; ?>
