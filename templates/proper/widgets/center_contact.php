<?php if(count($has_settings_email) > 0): ?>
<h3 id="contactForm" class="bottom-line main-heading box-panel"><span class="main-circle-icon"><i class="icon-envelope"></i></span> <?php _l('Contactform');?></h3>
<div class="box-panel box-panel-alert">
    <?php _che($validation_errors); ?>
    <?php _che($form_sent_message); ?>
</div>
<form  method="post" action="<?php _che($page_current_url); ?>#contactForm" class="box">
    <div class="box-panel ">
        <div class="row-fluid">
            <div class="span6">
                <div class="form-group {form_error_firstname}">
                    <label for="firstname">{lang_FirstLast}</label>
                    <input class="input-block-level" id="firstname" name="firstname" type="text" value="{form_value_firstname}" />
                </div><!-- /.form-group -->
            </div>
            <div class="span6">
                <div class="form-group {form_error_email}">
                    <label for="email">{lang_Email}</label>
                    <input class="input-block-level" id="email" name="email" type="text" value="{form_value_email}" />
                </div><!-- /.form-group -->
            </div>
        </div><!-- /.row -->
        <div class="row-fluid">
            <div class="span6">
                <div class="form-group {form_error_phone}">
                    <label for="phone">{lang_Phone}</label>
                    <input  class="input-block-level" id="phone" name="phone" type="text" value="{form_value_phone}" />
                </div><!-- /.form-group -->
            </div>
            <div class="span6">
                <?php if(config_item('captcha_disabled') === FALSE): ?>
                <div class="control-group form-group row-fluid {form_error_captcha}" >
                    <label for="captcha"><?php _l('Antispam'); ?></label>
                    <?php echo $captcha['image']; ?>
                    <input class="captcha span4" style=" margin-bottom: 1px;" id="captcha" name="captcha" type="text" placeholder="{lang_Captcha}" value="" />
                    <input class="hidden" name="captcha_hash" type="text" value="<?php echo $captcha_hash; ?>" />
                </div>
                <?php endif; ?>
                <?php if(config_item('recaptcha_site_key') !== FALSE): ?>
                <div class="control-group form-group" >
                    <label class="control-label captcha"></label>
                    <div class="controls">
                        <?php _recaptcha(true); ?>
                   </div>
                </div>
                <?php endif; ?>
            </div>
        </div><!-- /.row -->
        <div class="form-group {form_error_message}">
            <label for="message">{lang_Message}</label>
            <textarea id="message" name="message" rows="4" class="input-block-level" type="text">{form_value_message}</textarea>
        </div><!-- /.form-group -->
            <br/>
        <button type="submit" class="btn-proper btn " > <?php _l('Send');?>  <i class="icon-arrow-right"></i></button>
    </div>
</form>
<?php endif; ?>  