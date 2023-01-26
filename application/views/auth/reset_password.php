<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Удирдлагын хэсэг</title>
  <meta name="keywords" content="Удирдлагын хэсэг" />
  <meta name="description" content="Бүх эрх хуулиар хамгаалагдсан">
  <meta name="author" content="xainar">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  <script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1429741408,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"c8c5e1d7dbbb4d61d1a55f536f0e2161",petok:"f2f1083f3dd7c3ce2ac65b3103f4c95e8c339d06-1429954978-86400",zone:"admindesigns.com",rocket:"0",apps:{}}];CloudFlare.push({"apps":{"ape":"6764de1c585fd0d54c1bb849ff93e482"}});!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d7e13c32551/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/tools/skin/default_skin/css/theme.css">
  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/tools/admin-tools/admin-forms/css/admin-forms.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?=base_url();?>assets/admin/tools/img/favicon.ico">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>
<body class="external-page sb-l-c sb-r-c">
  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">
    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>
	  
	  
	  <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">

        <div class="admin-form theme-info mw500" style="margin-top: 10%;" id="login">
          <div class="row mb15 table-layout">
           <div class="col-xs-6 pln">
              <a href="dashboard.html" title="Return to Dashboard">
                <img src="<?=base_url();?>assets/admin/tools/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
              </a>
            </div>

            <div class="col-xs-6 va-b">
              <div class="login-links text-right">
                <a href="#" class="" title="False Credentials"><?php echo lang('reset_password_heading');?></a>
              </div>
            </div>
          </div>

          <div class="panel panel-info heading-border br-n">

            <?php echo form_open('auth/reset_password/' . $code);?>
              <div class="panel-body p15 pt25">
				<?php if(isset($message)):?>
                <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="fa fa-info pr10"></i><?php echo $message;?>
                </div>
				<?php endif;?>
				<div class="section">
                  <label for="username" class="field-label text-muted fs18 mb10"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label>
                  <label for="password" class="field prepend-icon">
					<?php echo form_input($new_password);?>
                    <label for="password" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
                <!-- Password Input -->
                <div class="section">
                  <label for="username" class="field-label text-muted fs18 mb10"><?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?></label>
                  <label for="password" class="field prepend-icon">
					<?php echo form_input($new_password_confirm);?>
                    <label for="password" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
				<?php echo form_input($user_id);?>
				<?php echo form_hidden($csrf); ?>
              </div>
              <!-- end .form-body section -->
              <div class="panel-footer p25 pv15">
                <button for="email" type="submit" class="button"><?php echo lang('reset_password_submit_btn');?></button>
              </div>
              <!-- end .form-footer section -->
            <?php echo form_close();?>

          </div>

        </div>

      </section>
	  <!-- End: Content -->
	  

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?=base_url();?>assets/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="<?=base_url();?>assets/admin/vendor/plugins/canvasbg/canvasbg.js"></script>

  <!-- Theme Javascript -->
  <script src="<?=base_url();?>assets/admin/tools/js/utility/utility.js"></script>
  <script src="<?=base_url();?>assets/admin/tools/js/main.js"></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core      
    Core.init();

    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>
</html>