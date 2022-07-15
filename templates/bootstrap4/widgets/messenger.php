<!DOCTYPE html>
<html lang="en">
<head>
    <?php _widget('head');?>
    <style>
        /*.container {
            width: 1200px;
            max-width: 1200px;
            min-width: 1200px;
        }*/
    </style>
</head>

<body class="<?php _widget('custom_paletteclass');?>">
    <div class="container container-wrapper">
    <header class="header">
        <div class="top-box" data-toggle="sticky-onscroll">
            <div class="container">
                <?php _widget('header_loginmenu');?>
                <?php _widget('header_mainmenu');?>
            </div> 
        </div>
    </header><!-- /.header--> 
    <main class="main main-container section-color-primary" id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if($switch_messenger == TRUE):?>
                    <div class="widget-agent-info">
                        <dl class="list">
                            <dt><?php echo lang_check('Message from');?></dt>
                                <dd><?php echo $speakers[$sel]->name_surname;?></dd><br/>
                            <dt><?php echo lang_check('Email');?></dt>
                                <dd><?php echo $speakers[$sel]->mail;?></dd><br/>
                            <dt><?php echo lang_check('Phone');?></dt>
                                <dd><?php echo $speakers[$sel]->phone;?></dd><br/>
                        </dl>
                    </div>
                    <div class="widget widget-box box-container widget-messenger-a">
                        <!--<div class="widget-header text-uppercase">
                           <?php echo $speakers[$sel]->name_surname;?>
                        </div> -->
                        <div class="widget-content widget-controls"> 
                            <a href="<?php echo site_url('frontend/messenger/');?>" class="btn btn-middle btn-info"><i class="fa fa-arrow-left"></i> <?php echo lang_check('All View')?></a>
                        </div>
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-4 hidden">
                                    <div class="interlocutor-card">
                                        <div class="interlocutor-thumbnail">
                                            <a href="<?php echo $speakers[$sel]->user_url;?>" class="interlocutor img-circle-cover">
                                                <img src="<?php echo $speakers[$sel]->image_url;?>" alt="">
                                            </a>
                                        </div>
                                        <div class="content-top">
                                            <div class="name"><a href="<?php echo $speakers[$sel]->user_url;?>" class="defaul-hover-primary"><?php echo $speakers[$sel]->name_surname;?></a></div>
                                            <div class="phone"><?php echo $speakers[$sel]->phone;?></div>
                                            <div class="mail"><?php echo $speakers[$sel]->mail;?></div>
                                        </div>
                                        <div class="content text-center">
                                            <ul class="clearfix sharing-buttons">
                                                <?php if(!empty($speakers[$sel]->facebook_link)): ?>
                                                    <li><a class="facebook"  href="<?php echo $speakers[$sel]->facebook_link; ?>"><i class="fa fa-facebook facebook"></i></a></li>
                                                <?php endif; ?>
                                                <?php if(!empty($speakers[$sel]->youtube_link)): ?>
                                                    <li><a class="twitter" href="<?php echo $speakers[$sel]->youtube_link; ?>"><i class="fa fa-youtube youtube"></i></a></li>
                                                <?php endif; ?>
                                                <?php if(!empty($speakers[$sel]->gplus_link)): ?>
                                                    <li><a class="google-plus" href="<?php echo $speakers[$sel]->gplus_link; ?>"><i class="fa fa-google-plus google"></i></a></li>
                                                <?php endif; ?>
                                                <?php if(!empty($speakers[$sel]->twitter_link)): ?>
                                                    <li><a class="twitter" href="<?php echo $speakers[$sel]->twitter_link; ?>"><i class="fa fa-twitter twitter"></i></a></li>
                                                <?php endif; ?>
                                                <?php if(!empty($speakers[$sel]->linkedin_link)): ?>
                                                    <li><a class="google-plus" href="<?php echo $speakers[$sel]->linkedin_link; ?>"><i class="fa fa-linkedin linkedin"></i></a></li>
                                                <?php endif; ?>
                                            </ul><!-- /.social-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="dialog-section">
                                        <div class="dialog-box" id="dialog-box" data-latest_date='<?php echo date('Y-m-d H:i:s');?>'>
                                            <ul class="dialog-box-list">
                                                <?php if(count($dialog)): foreach($dialog as $message) :  ?>
                                                    <li class="dialog-box-item <?php echo ($message->from_id==$user_id) ? 'to':''?>" data-message_id="<?php echo $message->id;?>">
                                                        <div class="image-box">
                                                            <a href="<?php echo $speakers[$message->from_id]->user_url;?>" class="interlocutor img-circle-cover">
                                                                <img src="<?php echo $speakers[$message->from_id]->image_url;?>" alt="">
                                                            </a>
                                                            <div class="name"> 
                                                                <a href="<?php echo $speakers[$message->from_id]->user_url;?>" class="defaul-hover-primary">
                                                                    <?php if($message->from_id == $user_id):?>
                                                                        <?php echo lang_check('You');?>
                                                                    <?php else:?>
                                                                        <?php echo $speakers[$message->from_id]->name_surname;?>
                                                                    <?php endif;?>
                                                                </a>
                                                            </div>
                                                            <?php
                                                                $timestamp = strtotime($message->date);
                                                                $m = strtolower(date("F", $timestamp));
                                                                $d = strtolower(date("j", $timestamp));
                                                                $y = strtolower(date("Y", $timestamp));
                                                                $clock = strtolower(date("H:i:s", $timestamp));
                                                            ?>
                                                            <div class="date" title="<?php echo $message->date;?>"><?php echo $d.' '.lang_check('cal_' . $m).' '.$y.'<br/>'.$clock;?></div>
                                                        </div>
                                                        <div class="body">
                                                            <div class="mask-box">
                                                                <div class="message"><?php echo $message->message;?></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach;?>
                                                <?php endif;?>    
                                            </ul>
                                        </div>
                                        <div class="send-box">
                                            <form action="" id="send-message">
                                                <input type="hidden" id="firstname" name='to_id' readonly value="<?php _che($sel);?>">
                                            <div class="form-group form-group from-message">
                                                <textarea id="message" name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group form-group-submit">
                                                <input type="submit" class="btn btn-primary btn-wide color-primary btn-property" value="Send">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> <!-- /. widget-table-->   
                    <?php else:?>
                        <div class="widget widget-box box-container widget-messenger-a">
                            <div class="widget-header text-uppercase">
                               <?php _l('My inbox'); ?>
                            </div>
                            <div class="widget-content messenger-abox">
                                <table class="table table-messages" id="dialogs">
                                    <thead>
                                        <th data-breakpoints="xs" data-type="html"></th>
                                        <th data-type="html"></th>
                                        <th data-type="html"></th>
                                        <th data-type="html"></th>
                                    </thead>
                                    
                                    <?php if(count($all_dialogs)): foreach($all_dialogs as $key => $dialog):?>
                                        <tr data-sel_id="<?php _che($dialog['interlocutor_id']);?>" class="<?php echo !empty($dialog['unreaded']) ? 'is_unreaded': ''; ?>">
                                            <td class="text-center thumbnail">
                                                <a href="<?php _che($dialog['interlocutor_url']);?>" class="interlocutor img-circle-cover">
                                                    <img src="<?php _che($dialog['interlocutor_image_url']);?>" alt="">
                                                    <span class="count focus-color auto-count-dialog <?php echo empty($dialog['unreaded']) ? 'hidden': ''; ?>" data-dialog_key="<?php echo $key;?>">
                                                        <?php echo $dialog['unreaded'];?>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="hidden-md-down">
                                                <span class="name"><?php _che($dialog['interlocutor_name_surname']);?></span>
                                                <br/>
                                                <?php
                                                    $timestamp = strtotime($dialog['date']);
                                                    $m = strtolower(date("F", $timestamp));
                                                    $d = strtolower(date("j", $timestamp));
                                                    $y = strtolower(date("Y", $timestamp));
                                                    $clock = strtolower(date("H:i", $timestamp));
                                                ?>
                                                <span class="date" title="<?php echo $dialog['date'];?>"><?php echo $d.' '.lang_check('cal_' . $m).' '.$y.' '.$clock;?></span></td>
                                            
                                            <td class="body">
                                                <div class="hidden-lg-up name"><?php _che($dialog['interlocutor_name_surname']);?></div>
                                                <?php echo $dialog['message_chlimit'];?>
                                                <div class="hidden-lg-up date"><span class="date" title="<?php echo $dialog['date'];?>"><?php echo $d.' '.lang_check('cal_' . $m).' '.$y.' '.$clock;?></span></div>
                                            </td>
                                        
                                            <td class='cntl'><?php echo anchor('frontend/messenger/?del_dialog='.$dialog['interlocutor_id'], '<i class="fa fa-remove"></i><span class="hidden-md-down"> '.lang('Delete').'<span>', array('onclick' => 'return confirm(\''.lang_check('Are you sure?').'\')', 'class'=>'btn btn-middle btn-danger'))?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    <?php else:?>
                                        <tr>
                                            <td colspan="20"><?php echo lang_check('We could not find any');?></td>
                                        </tr>
                                    <?php endif;?>     
                                </table>
                            </div>
                        </div> <!-- /. widget-table-->  
                    <?php endif;?>
                </div><!-- /.center-content -->
            </div>
        </div>
    </main><!-- /.main-part--> 

    <!-- footer -->
    <?php _widget('custom_footer');?>
    <!-- /.footer --> 
</div>
<?php _widget('custom_palette');?>
<?php _widget('custom_javascript');?>
    
<script>
<?php if($switch_messenger == TRUE):?>
    $('document').ready(function () {
        readed ();
        
        $('#send-message').submit(function(e){
            e.preventDefault();
            var data = $('#send-message').serializeArray();
            $.post("{api_private_url}/save_message/{lang_code}", data, function(data){
                if(data.success) {
                    $('#send-message #message').val('');
                }
            }).success(function(){get_dialog()})
        })
        $('#dialog-box').scrollTop($('#dialog-box .dialog-box-list').height() + 250);
        
        setInterval(function(){ 
            get_dialog(); 
            readed();
    }, 7000);
        
    })
    
    function get_dialog(){
        var latest_date = $('#dialog-box').attr('data-latest_date');
        var data = new Array();
        data.push({name: 'sel_id', value: "<?php _che($sel);?>"});
        data.push({name: 'latest_date', value: latest_date});
        $.post("{api_private_url}/get_dialog/{lang_code}", data, function(data){
            if(data.success){
                var html='';
                $.each(data.dialog, function(index, value){
                var _o = $('#dialog-box ul .dialog-box-item[data-message_id="'+ value.id+'"]');   
                if(_o &&  _o.length) {  
                        _o.find('.date_live').html(value.date_interval)
                    } else {
                          var _cls = '';
                          var name = data.speakers[value.from_id].name_surname;
                  
                        if(value.from_id == '<?php echo $user_id;?>'){
                          _cls='to';
                           name = "<?php echo lang_check('You');?>"; 
                        }
                          

                        var html = '<li class="dialog-box-item '+_cls+'" data-message_id="'+ value.id+'">\n\
                                      <div class="image-box">\n\
                                          <a href="'+data.speakers[value.from_id].user_url+'" class="interlocutor img-circle-cover">\n\
                                              <img src="'+data.speakers[value.from_id].image_url+'" alt="">\n\
                                          </a>\n\
                                         <div class="name">\n\
                                            <a href="'+data.speakers[value.from_id].user_url+'" class="defaul-hover-primary">'+name+'</a>\n\
                                            </div>\n\
                                         <div class="date" title="'+value.date_format+'">'+value.date_format+'</div>\n\
                                      </div>\n\
                                      <div class="body">\n\
                                          <div class="mask-box">\n\
                                              <div class="message">'+ value.message+'</div>\n\
                                          </div>\n\
                                      </div>\n\
                                  </li>';
                          $('#dialog-box ul').append(html);
                          $('#dialog-box').scrollTop($('#dialog-box .dialog-box-list').height() + 250);
                    }
                })
            }
            $('#dialog-box').attr('data-latest_date',data.latest_date);
        }).success(function(){
            /*$('#dialog-box').scrollTop($('#dialog-box .dialog-box-list').height() + 250);*/}
        );
    }
    
    function readed () {
        
        var data = [];
        data.push({name: 'sel_id', value: "<?php _che($sel);?>"});
       
            $.post("{api_private_url}/readed/{lang_code}", data, function(data){
                if(data.success) {
                    
                }
            }).success()
    }
    
    
<?php else:?>   
    $('document').ready(function () {
        $('#dialogs tr').click(function(){
            location.href="<?php echo site_url('frontend/messenger/');?>?sel="+$(this).attr('data-sel_id');
        })
        
        	$('.table-messages').footable({
		"paging": {
			"enabled": true,
                        "size": 7
		}
	});
    })

    /* update dialogas list */
    function get_dialogs () {
        var data = new Array();
        $.post("{api_private_url}/get_dialogs/{lang_code}", data, function(data){
            if(data.success){
                var html='';
                $.each(data.all_dialogs, function(index, value){
                    html += '<tr>\n\
                                <td class="text-center">\n\
                                    <a href="'+value.interlocutor_url+'" class="interlocutor img-circle-cover">\n\
                                        <img src="'+value.interlocutor_image_url+'" alt="'+value.interlocutor_url+'">\n\
                                    </a>\n\
                                </td>\n\
                                <td class="hidden-md-down">'+value.interlocutor_name_surname+'<br/>'+value.date+'</td>\n\
                                <td>'+value.message_chlimit+'</td>\n\
                            </tr>';
                })
                $('#dialogs').html(html);
            }
        });
    }
    
<?php endif;?>   

function DateDiff(date) {
        var _d = new Date(date);
        var now = new Date();
    
        var datediff = now.getTime() - _d.getTime(); //store the getTime diff - or +
        if(now.getTime() == _d.getTime()) return '<?php echo lang_check('now');?>';
        
        datediff = parseInt(datediff/1000);
        /*console.log(datediff)*/
        // %a outputs the total number of days
        if(datediff > 1209600 ){
            $date_interval = date;
        } else if(datediff > 172800 ) {
            $date_interval = parseInt(datediff/(60*60*24))+'<?php echo lang_check('days ago');?>';
        } else if(datediff > 86400 && datediff < 172800 ) {
            $date_interval =  parseInt(datediff/(60*60*24))+' <?php echo lang_check('day ago');?>';
        } else if(datediff > 7200) {
            $date_interval = parseInt(datediff/(60*60))+' <?php echo lang_check('hours ago');?>';
        } else if(datediff > 3600  &&  datediff < 7200) {
            $date_interval = parseInt(datediff/(60*60))+' <?php echo lang_check('hour ago');?>';
        } else if(datediff > 120) {
            $date_interval = parseInt(datediff/60)+' <?php echo lang_check('minutes ago');?>';
        } else if(datediff > 60 && datediff < 120) {
            $date_interval = parseInt(datediff/60)+' <?php echo lang_check('minute ago');?>';
        } else if(datediff < 60 && datediff > 0 ) {
            $date_interval = '<?php echo lang_check('now');?>';
        } else {
            $date_interval = date;
        }
        
        return $date_interval;
    
}
</script>
</body>
</html>
