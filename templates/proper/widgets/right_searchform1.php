<!--Start Form Search Properties-->
<h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-search"></i></span>  <?php _l('Find Properties');?></h3>    
<div class="search-conteiner bottom-line line-before">
    <form class=" search-form">
        <?php _search_form_primary(1); ?>
        <button type="submit" id="search-start" class="input-block-level btn-proper btn-large"> {lang_Search}</button>
       
        <?php if(file_exists(APPPATH.'controllers/admin/savesearch.php')): ?>
            <div class='row'>
            <button id="search-save" type="button" class="btn btn-info"><i class="icon-bookmark"></i>{lang_SaveResearch}</button>
            </div>
        <?php endif; ?>
        
    </form>
   
</div>
<!--End Form Search Properties-->