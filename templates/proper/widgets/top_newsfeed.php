<?php if (!empty($news_module_latest_5)) :?>
<div class="news-carousel-wrapper">
    <dl id="news-carousel" class="news-carousel-style">
        <?php if(isset($news_module_latest_5)): ?>
        <?php foreach($news_module_latest_5 as $key=>$row):?>
        <dt><a href="<?php echo site_url($lang_code.'/'.$row->id); ?>"><?php echo $row->title; ?></a></dt>
        <dd><?php echo $row->description; ?></dd>
        <?php endforeach; ?>
        <?php endif; ?>
    </dl>
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

<div class="news-carousel-wrapper">
    <dl id="news-carousel" class="news-carousel-style">
        <?php if(isset($news_module_latest_5)): ?>
        <?php foreach($news_module_latest_5 as $key=>$row):?>
        <dt><a href="<?php echo site_url($lang_code.'/'.$row->id); ?>"><?php echo $row->title; ?></a></dt>
        <dd><?php echo $row->description; ?></dd>
        <?php endforeach; ?>
        <?php endif; ?>
    </dl>
</div>

<?php endif;?>
