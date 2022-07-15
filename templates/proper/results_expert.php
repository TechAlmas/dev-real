<div class="accordion-group">
<?php foreach($expert_module_all as $key=>$row):?>
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" href="#question<?php echo $key;?>">
            <h4><?php echo $row->question; ?></h4>
        </a>
    </div>
    <div id="question<?php echo $key;?>" class="accordion-body collapse <?php echo ($key==0) ? 'in' : '' ;?>">
        <div class="accordion-inner">
            <p><?php echo $row->answer; ?></p>
        </div>
    </div>
<?php endforeach; ?>
</div>