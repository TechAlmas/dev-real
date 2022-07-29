<?php if(!empty($featured_properties)){ ?>
    <div class="cards-wrepper properties-cards-wrepper">
    <?php foreach($featured_properties as $propKey => $propVal){ ?>
        <div class="card">
            <a href="<?php echo !empty($propVal['url']) ? $propVal['url'] : ''; ?>">
                <img src="<?php echo !empty($propVal['thumbnail_url']) ? $propVal['thumbnail_url'] : ''; ?>" alt="" />
            </a>
            <div class="properties-detailes-wrepper">
                <div class="properties-dealer-link">
                <a href="<?php echo !empty($propVal['url']) ? $propVal['url'] : ''; ?>"> <?php echo !empty($propVal['option_10']) ? $propVal['option_10'] : 'N/A'; ?> </a>
                </div>
                <p class="properties-address"><?php echo !empty($propVal['address']) ? $propVal['address'] : 'N/A'; ?></p>
                <p class="price"><?php echo !empty($propVal['custom_price']) ? $propVal['custom_price'] : 'N/A'; ?></p>
                <div class="properties-detailes-link">
                <a href="<?php echo !empty($propVal['url']) ? $propVal['url'] : ''; ?>"> <?php echo !empty($propVal['option_54']) ? $propVal['option_54'] : 'N/A'; ?> </a>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- card -->
    <!-- <div class="card">
        <a href="#">
        <img src="./templates/bootstrap4/assets2/Images/properties-1.jpg" alt="" />
        </a>
        <div class="properties-detailes-wrepper">
        <div class="properties-dealer-link">
            <a href="#"> Kerkstraat 11 </a>
        </div>
        <p class="properties-address">8102 EA Raalte</p>
        <p class="price">$ 915,000 k.k.</p>
        <div class="properties-detailes-link">
            <a href="#"> Hannink Makelaars </a>
        </div>
        </div>
    </div> -->
    <!-- card -->
    </div>
    <?php }  ?>