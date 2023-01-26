<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.jpg">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/vendor/OwlCarousel/owl.theme.default.min.css">
        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/meanmenu.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/magnific-popup.css">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/hover-min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
        <!-- For IE -->
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/ie-only.css" />
        <!-- Modernizr Js -->
        <script src="<?=base_url();?>assets/js/modernizr-2.8.3.min.js"></script>
        <?php if(isset($post)):?>
        <title><?=htmlspecialchars($post['title']);?></title>
    	<!-- SOCIAL MEDIA META -->
    	<meta property="og:description" content="Power MN">
    	<meta property="og:image" content="<?=base_url().htmlspecialchars($post['pic']);?>">
    	<meta property="og:site_name" content="power.mn">
    	<meta property="og:title" content="<?=htmlspecialchars($post['title']);?>">
    	<meta property="og:type" content="website">
    	<meta property="og:url" content="<?=current_url();?>">
        <meta property="fb:app_id" content="142960496790771" />
    	<!-- TWITTER META -->
    	<meta name="twitter:card" content="powermn">
    	<meta name="twitter:site" content="@powermn">
    	<meta name="twitter:creator" content="@powermn">
    	<meta name="twitter:title" content="<?=htmlspecialchars($post['title']);?>">
    	<meta name="twitter:description" content="<?=htmlspecialchars($post['description']);?>">
    	<meta name="twitter:image" content="<?=base_url().$post['pic'];?>">
        <meta name="description" content="<?=htmlspecialchars($post['description']);?>">
        <?php else:?>
        <title>Power.mn</title>
    	<!-- SOCIAL MEDIA META -->
    	<meta property="og:description" content="Зөвхөн үнэнийг өгүүлнэ">
    	<meta property="og:image" content="<?=base_url();?>assets/img/logo.jpg">
    	<meta property="og:site_name" content="Power.mn">
    	<meta property="og:title" content="Power MN">
    	<meta property="og:type" content="website">
    	<meta property="og:url" content="<?=current_url();?>">
    
    	<!-- TWITTER META -->
    	<meta name="twitter:card" content="summary">
    	<meta name="twitter:site" content="@Power MN">
    	<meta name="twitter:creator" content="@powermn">
    	<meta name="twitter:title" content="Power MN">
    	<meta name="twitter:description" content="Power MN">
    	<meta name="twitter:image" content="<?=base_url();?>assets/img/logo.jpg">
        <meta name="description" content="Power MN">
	<?php endif;?>
    </head>

    <body>
        <!-- <div id="preloader"></div> -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div id="header-layout2" class="header-style2">
                    <div class="header-top-bar">
                        <div class="top-bar-top bg-accent border-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <ul class="news-info-list text-center--md">
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>Улаанбаатар</li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span></li>
                                            <li>
                                                <!-- <i class="fa fa-clock-o" aria-hidden="true"></i>Сүүлд 11.30 am</li> -->
                                            <li>
                                                <!-- <i class="fa fa-cloud" aria-hidden="true"></i>29&#8451; Sydney, Australia</li> -->
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <ul class="header-social">
                                            <li>
                                                <a href="#" title="facebook">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="google-plus">
                                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="linkedin">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a href="#" title="pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="rss">
                                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="vimeo">
                                                    <i class="fa fa-vimeo" aria-hidden="true"></i>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-bar-bottom bg-body pt-20 d-none d-lg-block">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="logo-area">
                                            <a href="<?=base_url();?>" class="img-fluid">
                                                <img src="<?=base_url();?>assets/img/logo.png" alt="logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="ne-banner-layout1 pull-right">
                                        <?php if (count($banner) > 0):?>
                                            <?=$banner[0]['content'];?>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-area bg-body" id="sticker">
                        <div class="container">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-10 position-static d-none d-lg-block">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li class="active">
                                                    <a href="<?=base_url();?>">Нүүр</a>
                                                </li>
                                                <?php foreach($menus as $key=>$menu):?>
                                                <li>
                                                    <a href="<?=base_url();?>l/<?=$menu["id"];?>"><?=$menu['title'];?></a>
                                                </li>
                                                <?php endforeach;?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 text-right position-static">
                                    <div class="header-action-item on-mobile-fixed">
                                        <ul>
                                            <!-- <li>
                                                <form id="top-search-form" class="header-search-light">
                                                    <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                    <button class="search-button">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <li class="d-none d-sm-block d-md-block d-lg-none">
                                                <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-user" aria-hidden="true"></i>Sign in
                                                </button>
                                            </li> -->
                                            <!-- <li>
                                                <div id="side-menu-trigger" class="offcanvas-menu-btn offcanvas-btn-repoint">
                                                    <a href="#" class="menu-bar">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </a>
                                                    <a href="#" class="menu-times close">
                                                        <span></span>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header Area End Here -->