<h3 class="bottom-line  line-before main-heading" id="agents-block"><span class="main-circle-icon"><i class="icon-list"></i></span>  {lang_Agents}</h3>
<div class="list-items ">
    <form class="form-search agents" action="<?php echo current_url().'#agents-block'; ?>" method="get">
        <input name="search-agent" type="text" placeholder="{lang_CityorName}" value="<?php echo $this->input->get('search-agent'); ?>" class="input-medium" />
        <button type="submit" class="btn">{lang_Search}</button>
    </form>
 <?php foreach($paginated_agents as $item): ?>
    <div class="item">
        <div class="img-preview">
            <img src="<?php echo _simg($item['image_url'], '100x80'); ?>" alt="<?php  _che($item['name_surname']);?>" />
        </div>
        <div class="item-desk">
            <div class="title">
                <h3><a href="<?php  _che($item['agent_url']);?>"><?php  _che($item['name_surname']);?></a></h3>
            </div>
            <div class="location"><?php  _che($item['phone']);?></div>
            <a href="<?php  _che($item['agent_url']);?>" class="btn-proper btn-mini btn"><?php _l('Profile_Page');?></a>
        </div>
        <div class="clearfix"></div>
    </div>
 <?php endforeach; ?>
</div>