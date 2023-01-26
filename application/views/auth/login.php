<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Удирдлагын хэсэг</title>
  <meta name="keywords" content="Удирдлагын хэсэг" />
  <meta name="description" content="Бүх эрх хуулиар хамгаалагдсан">
  <meta name="author" content="xainar">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/tools/skin/default_skin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/tools/admin-tools/admin-forms/css/admin-forms.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/admin/tools/img/favicon.ico">
</head>
<body class="external-page sb-l-c sb-r-c">
  <div id="main" class="animated fadeIn">
    <section id="content_wrapper">
      <div id="canvas-wrapper"><canvas id="demo-canvas"></canvas></div>
      <section id="content">
        <div class="admin-form theme-info mw500" id="login">
          <div class="row mb15 table-layout">
           <div class="col-xs-6 pln">
              <a href="<?=base_url();?>admin" title="Return to Login">
                <img src="<?=base_url();?>assets/admin/tools/img/logos/logo_white.png" title="Logo" class="img-responsive w250">
              </a>
            </div>
            <div class="col-xs-6 va-b">
              <div class="login-links text-right"><a href="#" class="" title="Login errors"><?php echo lang('login_heading');?></a></div>
            </div>
          </div>
          <div class="panel mt30 mb25">
            <?php echo form_open("auth/login");?>
              <div class="panel-body bg-light p25 pb15">
                <div class="section row">
                    <h4 class="text-center"><?php echo lang('login_subheading');?></h4>
				<?php if(isset($message)):?>
					<div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					  <i class="fa fa-info pr10"></i><?php echo $message;?>
					</div>
				<?php endif;?>
                </div>
                <div class="section-divider mv30"><span><i class="fa fa-chevron-down"></i></span></div>
                <div class="section">
                  <label for="username" class="field-label text-muted fs18 mb10"><?php echo lang('login_identity_label', 'identity');?></label>
                  <label for="username" class="field prepend-icon">
					<?php echo form_input($identity);?>
                    <label for="username" class="field-icon">
                      <i class="fa fa-user"></i>
                    </label>
                  </label>
                </div>
                <div class="section">
                  <label for="username" class="field-label text-muted fs18 mb10"><?php echo lang('login_password_label', 'password');?></label>
                  <label for="password" class="field prepend-icon">
					<?php echo form_input($password);?>
                    <label for="password" class="field-icon"><i class="fa fa-lock"></i></label>
                  </label>
                </div>
              </div>
              <div class="panel-footer clearfix">
                <button type="submit" class="button btn-primary mr10 pull-right"><?php echo lang('login_submit_btn');?></button>
                <label class="switch ib switch-primary mt10">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember" data-on="<?php echo lang('login_remember_label1');?>" data-off="<?php echo lang('login_remember_label0');?>"></label>
                  <span><?php echo lang('login_remember_label', 'remember');?></span>
                </label>
              </div>
            <?php echo form_close();?>  
          </div>
          <div class="login-links">
            <p><a href="forgot_password" class="active" title="Sign In"><?php echo lang('login_forgot_password');?></a></p>
          </div>
        </div>
      </section>
    </section>
  </div>
  <script src="<?=base_url();?>assets/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/plugins/canvasbg/canvasbg.js"></script>
  <script src="<?=base_url();?>assets/admin/tools/js/utility/utility.js"></script>
  <script src="<?=base_url();?>assets/admin/tools/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    Core.init();
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });
  });
  </script>
</body>
</html>