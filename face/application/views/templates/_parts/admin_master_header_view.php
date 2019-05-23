<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta charset="UTF-8">

        <title><?php echo $page_title;?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/admin/js/moment.js');?>"></script>
        <link href="<?php echo site_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/admin/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
        <?php echo $before_head;?>
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/textext/textext.core.css');?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/textext/textext.plugin.autocomplete.css');?>" type="text/css" />
        <script src="<?php echo site_url('assets/admin/js/textext.core.js');?>" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo site_url('assets/admin/js/textext.plugin.autocomplete.js');?>" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo site_url('assets/admin/js/textext.plugin.filter.js');?>" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo site_url('assets/admin/js/textext.plugin.ajax.js');?>" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/admin/js/tinymce/tinymce.min.js');?>"></script>

        <!-- datagrid  -->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/jsgrid-1.5.3/jsgrid.min.css');?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/jsgrid-1.5.3/jsgrid-theme.min.css');?>" />
        <script type="text/javascript" src="<?php echo site_url('assets/jsgrid-1.5.3/jsgrid.min.js');?>"></script>
        <!-- end datagrid  -->

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <!-- google chart  -->
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <!-- end google chart  -->

        <link type="text/css" rel="stylesheet" href="<?php $rd =rand(1,100000); echo site_url('assets/admin/css/main.css?rd='.$rd);?>" />

        <script type="text/javascript" src="<?php $rd =rand(1,100000); echo site_url('assets/admin/js/main.js?rd='.$rd);?>"></script>

        <script type="text/javascript">
            tinymce.init({
                selector: ".editor",
                theme : 'modern',
                skin : 'light',
                plugins: [
                    "advlist anchor autoresize autolink link image lists charmap print preview hr pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu template paste textcolor"
                ],
                /*content_css: "css/content.css",*/
                menu : { // this is the complete default configuration
                    table  : {title : 'Table' , items : 'inserttable tableprops deletetable | cell row column'},
                    view   : {title : 'View'  , items : 'visualaid'}
                },
                toolbar: "undo redo | paste pastetext | styleselect | bold italic underline strikethrough superscript subscript hr | formats | removeformat | alignleft aligncenter alignright alignjustify | bullist numlist | link image media | forecolor backcolor | more | code",
                setup: function(editor) {
                    editor.addButton('more', {
                        text: 'more...',
                        icon: false,
                        onclick: function() {
                            editor.insertContent('<!--more-->');
                        }
                    });
                },
                <?php
                if(!empty($uploaded_images))
                {
                echo 'image_list: [';
                $the_files = '';
                foreach($uploaded_images as $image)
                {
                $the_files .= '{title: \''.((strlen($image->title)>0) ? $image->title : $image->file).'\', value: \''.site_url('media/'.$image->file).'\'},';
                }
                echo rtrim($the_files,',');
                echo '],';
                }
                ?>
                image_class_list: [
                    {title: 'None', value: ''},
                    {title: 'Responsive', value: 'img-responsive'},
                    {title: 'Rounded', value: 'img-rounded'},
                    {title: 'Circle', value: 'img-circle'},
                    {title: 'Thumbnail', value: 'img-thumbnail'}
                ],
                image_dimensions: false,
                image_advtab: true,
                relative_urls: false,
                convert_urls: false,
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });


            ////////////////////////////////////////////////////////////////////
            //Global JS varialbe
            ///////////////////////////////////////////////////////////////////

            var loading_img_url = "<?php echo site_url('assets/images/ajax-loading.gif');?>";

        </script>





    </head>
<body>


<?php
if($this->ion_auth->logged_in()) {
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href=<?php echo site_url('user'); ?> class="pull-left"> <img style="width:268px;height:50px;" src="<?php echo site_url('assets/images/top_left_logo.png');?>"></a>
                 &nbsp;&nbsp;&nbsp;


            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">


                    <?php

                       //$location_str = base64_decode('ODA0LC0zNzgyNTgwNywxNDUwMzc4NjEsMAo=');
                        if($this->ion_auth->in_group('admin')){

                            // echo "<li id='top_menu_cloud_account'>". anchor('device_management',$this->lang->line('cloud_account'))."</li>";
                            // echo "<li id='top_menu_device_management'>". anchor('device_management',$this->lang->line('control_center'))."</li>";
                            //
                             // echo $current_user_menu;
                             echo "<li id='top_menu_gateway_management'>". anchor('gateway','Gateway')."</li>";

                            //echo "<li id='top_menu_data_service'>". anchor('admin/dataservice',$this->lang->line('data_service'))."</li>";
                            echo "<li id='top_menu_camera_management'>". anchor('camera','Camera')."</li>";
                        }
                        else{
                            // echo "<li id='top_menu_dashboard'>". anchor('admin/dashboard',$this->lang->line('dashboard'))."</li>";
                            // echo "<li id='top_menu_device_management'>". anchor('device_management',$this->lang->line('control_center'))."</li>";

                            //echo "<li id='top_menu_gateway'>". anchor('admin/gateway',$this->lang->line('gateway'))."</li>";
                            //echo "<li id='top_menu_xbee_network'>". anchor('admin/xbee',$this->lang->line('xbee_network'))."</li>";
                            echo "<li id='top_menu_camera_management'>". anchor('camera','Camera')."</li>";
                        }


                    ?>





                </ul>



                <ul class="nav navbar-nav navbar-right">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          <img style="width:24px;height:24px;"  src="<?php echo (site_url('assets/images/').$this->config->item('language').'_round.png');?>">
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="<?php echo current_url().('?lang=english');?>">
                              <img style="width:24px;height:24px;"  src="<?php echo site_url('assets/images/english.png');?>"> English
                            </a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo current_url().('?lang=vietnamese');?>">
                              <img style="width:24px;height:24px;"  src="<?php echo site_url('assets/images/vietnamese.png');?>"> Tiếng Việt
                            </a></li>
                            <!-- <li><a href="<?php echo ($_SERVER['REQUEST_URI'].('/?lang=english'));?>">English</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo ($_SERVER['REQUEST_URI'].('/?lang=vietnamese'));?>">Vietnamese</a></li> -->
                        </ul>
                    </li>
                </ul>



                <ul class="nav navbar-nav navbar-right">


                    <li id="top_menu_profile" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->ion_auth->user()->row()->username;?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('user/profile');?>"><?php echo $this->lang->line('profile_page'); ?></a></li>
                            <!--
                            <?php echo $current_user_menu;?>
                            -->

                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('user/logout');?>"><?php echo $this->lang->line('logout'); ?></a></li>
                        </ul>
                    </li>
                </ul>





            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container" style="padding-top:60px;">
        <?php
        echo $this->postal->get();
        ?>
    </div>
<?php



}
else{
?>
    <div class="row" >
        <div class="container">
        <div class="col-md-12">
            <img style="width:200px;height:200px;"  src="<?php echo site_url('assets/images/logo_chutam.jpg');?>">

             <ul class="nav navbar-nav navbar-right">


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <img style="width:24px;height:24px;"  src="<?php echo ucfirst(site_url('assets/images/').$this->config->item('language').'_round.png');?>">
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo current_url().('?lang=english');?>">
                      <img style="width:24px;height:24px;"  src="<?php echo site_url('assets/images/english.png');?>"> English
                    </a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo current_url().('?lang=vietnamese');?>">
                      <img style="width:24px;height:24px;"  src="<?php echo site_url('assets/images/vietnamese.png');?>"> Tiếng Việt
                    </a></li>
                </ul>
            </li>
        </ul>

        </div>
        </div>



    </div>

<?php
}
?>
