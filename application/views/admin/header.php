<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>УДИРДЛАГЫН ХЭСЭГ</title>
  <meta name="keywords" content="Удирдлагын хэсэг" />
  <meta name="description" content="Бүх эрх хуулиар хамгаалагдсан">
  <meta name="author" content="xainar">
  <meta name="copyright" content="&copy;2015 xainar"/>
  <meta content='xainarbek@gmail.com' name='email'/>
  <meta name="robots" content="NONE"/>
  <meta name="GOOGLEBOT" content="NOARCHIVE"/>
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="pragma" content="no-cache"/>
  <meta http-equiv="expires" content="-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/magnific/magnific-popup.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/admin/vendor/plugins/dropzone/css/dropzone.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/tools/skin/default_skin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/tools/admin-tools/admin-forms/css/admin-forms.min.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/admin/tools/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/summernote/summernote.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/tagmanager/tagmanager.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/select2/css/core.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">
  <!--<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/cropper/crop-avatar/css/main.css">-->
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/cropper/cropper.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/nestable/nestable.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
  <script src="<?=base_url();?>assets/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?=base_url();?>assets/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body class="dashboard-page">
 <div id="main">
    <header class="navbar navbar-fixed-top navbar-shadow bg-primary">
      <div class="navbar-branding">
        <a class="navbar-brand" href="<?=base_url();?>admin"><b>Удирдлагын</b> Хэсэг</a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
          	<img src="<?=base_url();?>assets/admin/tools/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
          	<span class="hidden-xs pl15"> <?php $user = $this->ion_auth->user()->row(); echo $user->first_name.' '.$user->last_name;?> </span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
			<?php if($this->ion_auth->is_admin()):?>
		    <li class="list-group-item">
				<a href="<?=base_url();?>auth" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span>Тохиргоо</a>
            </li>
			<?php endif;?>
			<li class="list-group-item">
				<a href="<?=base_url();?>auth/change_password" class="animated animated-short fadeInUp">
                <span class="fa fa-lock"></span>Нууц үг солих</a>
            </li>
            <li class="dropdown-footer">
              <a href="<?=base_url();?>auth/logout" class="">
              <span class="fa fa-power-off pr5"></span> Гарах </a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <aside id="sidebar_left" class="nano nano-light affix">
      <div class="sidebar-left-content nano-content">
        <header class="sidebar-header">
		 <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Хайх...">
            </div>
          </div>
        </header>
        <ul class="nav sidebar-menu">
		  <li class="active">
          <a href="<?=base_url();?>admin">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Эхлэл</span>
          </a>
        </li>
      <li class="sidebar-label pt20">Language</li>
		  <li>
			<a href="<?=base_url();?>admin/lang_list">
				<span class="glyphicon glyphicon-text-size"></span>
				<span class="sidebar-title">Хэл</span>
			</a>
		  </li>
		  <li class="sidebar-label pt20">Tours</li>
		 
		  <li>
        <a href="<?=base_url();?>admin/post_add">
          <span class="glyphicon glyphicon-pencil"></span>
          <span class="sidebar-title">Tour add</span>
        </a>
		  </li>
		  <li>
			  <a href="<?=base_url();?>admin/post_list">
				<span class="glyphicon glyphicon-duplicate"></span>
				<span class="sidebar-title">Tour list</span>
			</a>
		  </li>
      <li>
			<a href="<?=base_url();?>admin/post_list_mostread">
				<span class="glyphicon glyphicon-duplicate"></span>
				<span class="sidebar-title">Highlited tours</span>
			</a>
		  </li>
		  <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-tags"></span>
              <span class="sidebar-title">Tour menu</span>
              <span class="caret"></span>
            </a>
            
            <ul class="nav sub-nav">
              <li>
				<a href="<?=base_url();?>admin/menu_add">
                <span class="glyphicon glyphicon-plus-sign"></span>Add</a>
              </li>
              <li>
                <a href="<?=base_url();?>admin/menu_list">
                <span class="glyphicon glyphicon-list"></span>List</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-bars"></span>
              <span class="sidebar-title">About Mongolia</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
				<li>
					<a href="<?=base_url();?>admin/project_add">
					  <span class="glyphicon glyphicon-plus-sign"></span>Add </a>
				</li>
				<li>
					<a href="<?=base_url();?>admin/project_list">
					  <span class="glyphicon glyphicon-list"></span>List</a>
				</li>
            </ul>
          </li>
          <li class="sidebar-label pt20">Slider</li>
		  <li>
			<a href="<?=base_url();?>admin/slider_add">
				<span class="fa fa-picture-o"></span>
				<span class="sidebar-title">Slider Add</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/slider_list">
				<span class="fa fa-desktop"></span>
				<span class="sidebar-title">Slider List</span>
			</a>
		  </li>
      <li class="sidebar-label pt20">Testimonials</li>
		  <li>
			<a href="<?=base_url();?>admin/testiminol_add">
				<span class="fa fa-comment"></span>
				<span class="sidebar-title">Add</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/testiminol_list">
				<span class="fa fa-comments"></span>
				<span class="sidebar-title">List</span>
			</a>
		  </li>
      <li class="sidebar-label pt20">Menu</li>
		  <li>
			<a href="<?=base_url();?>admin/menu_add">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<span class="sidebar-title">Menu add</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/menu_list">
				<span class="fa fa-tags"></span>
				<span class="sidebar-title">Menu list</span>
			</a>
		  </li>
		  <li class="sidebar-label pt20">Events</li>
		  <li>
			<a href="<?=base_url();?>admin/event_add">
				<span class="glyphicon glyphicon-pencil"></span>
				<span class="sidebar-title">Event add</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/event_list">
				<span class="glyphicon glyphicon-duplicate"></span>
				<span class="sidebar-title">Event list</span>
			</a>
		  </li>
		  <li> 
		  <!-- <li class="sidebar-label pt20">Slider</li>
		  <li>
			<a href="<?=base_url();?>admin/slider_add">
				<span class="glyphicon glyphicon-pencil"></span>
				<span class="sidebar-title">Slider нэмэх</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/slider_list">
				<span class="glyphicon glyphicon-duplicate"></span>
				<span class="sidebar-title">Slider жагсаалт</span>
			</a>
		  </li>
		  <li>
		 -->
		  
		   <!--<li class="sidebar-label pt20">Project</li>
		  <li>
			<a href="<?=base_url();?>admin/project_add">
				<span class="glyphicon glyphicon-pencil"></span>
				<span class="sidebar-title">Project нэмэх</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/project_list">
				<span class="glyphicon glyphicon-duplicate"></span>
				<span class="sidebar-title">Project жагсаалт</span>
			</a>
		  </li>
		  <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-tags"></span>
              <span class="sidebar-title">Project ангилал</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
				<a href="<?=base_url();?>admin/menu_add1">
                <span class="glyphicon glyphicon-plus-sign"></span>Нэмэх</a>
              </li>
              <li>
                <a href="<?=base_url();?>admin/menu_list1">
                <span class="glyphicon glyphicon-list"></span>Жагсаалт</a>
              </li>
            </ul>
          </li>-->
		  <li class="sidebar-label pt20">Banner</li>
		  <li>
			<a href="<?=base_url();?>admin/banner_add">
				<span class="glyphicon glyphicon-film"></span>
				<span class="sidebar-title">Add</span>
			</a>
		  </li>
		  <li>
			<a href="<?=base_url();?>admin/banner_list">
				<span class="glyphicon glyphicon-duplicate"></span>
				<span class="sidebar-title">List</span>
			</a>
		  </li>
      <li>
			<a href="<?=base_url();?>admin/words">
				<span class="fa fa-font"></span>
				<span class="sidebar-title">Words</span>
			</a>
		  </li>
      </ul>
          <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
      </div>
    </aside>
    <section id="content_wrapper">