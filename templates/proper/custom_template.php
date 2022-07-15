<!DOCTYPE html>
<html>
    <head>
        {template_head}
    </head>
    <body class="<?php _widget('custom_paletteclass'); ?>">
        <!-- Start Wrapper-->
        <div id="wrapper">
            <?php 
                foreach($widgets_order->header as $widget_filename){
                    _widget($widget_filename);
                } 
            ?>
                
            <!-- start Content -->
            <div id="content">
                <?php 
                
                $conflict_widgets = array( 'top_map'=>1);
                $conflict_active=false;
                
                foreach($widgets_order->top as $widget_filename){
                    if(!$conflict_active || !isset($conflict_widgets[$widget_filename]))
                        _widget($widget_filename);
                        
                    if(isset($conflict_widgets[$widget_filename]))
                    {
                        $conflict_active=true;
                    }
                } 
                ?>
                <div class="container">
                    <div class="row-fluid bottom-line">
                        <div class="span9">
                            <div class="panel right-line" id='content-block'>
                                <?php 
                                    $conflict_widgets = array( 'center_recentproperties'=>1, 'center_propertieslist'=>1);
                                        $conflict_active=false;
                                        foreach($widgets_order->center as $widget_filename){
                                            if(!$conflict_active || !isset($conflict_widgets[$widget_filename]))
                                                _widget($widget_filename);

                                            if(isset($conflict_widgets[$widget_filename]))
                                            {
                                                $conflict_active=true;
                                            }
                                        } 
                                    ?> 
                            </div>
                        </div>
                        <div class="span3">
                            <div class="panel">
                                <?php 
                                foreach($widgets_order->right as $widget_filename){
                                    _widget($widget_filename);
                                } 
                                ?>  
                            </div>
                        </div>
                    </div>
                    <?php 
                        foreach($widgets_order->bottom as $widget_filename){
                            _widget($widget_filename);
                        } 
                        ?> 
                </div>
            </div>
            <!-- start Footer -->
            <div id="footer-wrapper">
                <!-- start footer-ribon -->
                <div class="container" >
                    <div class="footer-ribon">
                        <span><?php _l('Get in Touch');?></span>
                    </div>
                </div><!-- end footer-ribon -->
                <div id="footer-top">
                    <div class="container">
                        <div class="row-fluid">
                            <?php 
                            foreach($widgets_order->footer as $widget_filename){
                                _widget($widget_filename);
                            } 
                            ?> 
                        </div>
                    </div>
                    <div id="back-to-top" class="text-center"><a href="#"><i class="icon-angle-up"></i></a></div>
                </div>
                <div id="footer-twit" class="text-center">
                    <div class="container" style="margin-top: 15px;">
                        <div class="panel">
                            <p><i class="icon-quote-left qoute"></i> <?php _l('footer_slogan'); ?><i class="icon-quote-right qoute"></i></p>
                        </div>
                    </div>
                </div>
                <div id="footer" class="text-center">
                    <div class="panel">
                        <p><?php _l('All Right reserved'); ?></p>
                    </div>
                </div>
            </div><!-- end  Footer -->
        </div><!-- End Wrapper-->
        <!-- Just For Demo You can Remove it if unnecessary-->
        <?php _widget('custom_javascript'); ?>
    </body>
</html>
