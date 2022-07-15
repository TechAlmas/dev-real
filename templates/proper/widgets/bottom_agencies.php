    <div class="container">
        <h2 class="main-heading bottom-line">{lang_Agencies}</h2>
        <!-- AGENCIES -->
        <div class="property_content_position">
        <div class="row-fluid">
        <?php foreach($all_agents as $agent): ?>
        <?php if(isset($agent['image_sec_url'])): ?>
          <div class="span2"><a href="<?php echo $agent['agent_url']; ?>"><img src="<?php echo $agent['image_sec_url']; ?>" /></a></div>
        <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <br />
        </div>
        <!-- AGENCIES -->
    </div>