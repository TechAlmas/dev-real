<?php if (!empty($news_module_latest_5)) :?>
<div class="span4">
    <div class="panel">
        <h4><i class="icon-trophy"></i> {lang_Latestnews}</h4>
        <ul class="unstyled list-link">
            <?php foreach($news_module_latest_5 as $key=>$row):?>
            <li><a href="<?php echo site_url($lang_code.'/'.$row->id); ?>"><?php echo $row->title; ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<?php else: ?>

<?php

$CI =& get_instance();

if(file_exists(APPPATH.'controllers/admin/news.php'))
{
    $news_module_latest_5 = $CI->page_m->get_lang(NULL, FALSE, $lang_id, 
                                                      array('type'=>'MODULE_NEWS_POST'), 
                                                      5, 0, 'date_publish DESC');
}
else
{
    $news_module_latest_5 = $CI->page_m->get_lang(NULL, FALSE, $lang_id, 
                                                      array('type'=>'ARTICLE'), 
                                                      5, 0, 'date DESC');
}

?>

<div class="span4">
    <div class="panel">
        <h4><i class="icon-trophy"></i> {lang_Latestnews}</h4>
        <ul class="unstyled list-link">
            <?php foreach($news_module_latest_5 as $key=>$row):?>
            <li><a href="<?php echo site_url($lang_code.'/'.$row->id); ?>"><?php echo $row->title; ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

<?php endif;?>