<?php
/*
Widget-title: Default content widget
Widget-preview-image: /assets/img/widgets_preview/.jpg
*/
?>
<?php if(isset($page_body) && !empty($page_body)):?>
<div class="widget widget-box widget-section box-container widget-contact-info">
    <div class="widget-header text-uppercase">
        {page_title}
    </div>
    <p>
        {page_body}
    </p>
</div>
<?php endif;?>