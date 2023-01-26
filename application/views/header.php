<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Yam.mn - Тунгалаг төрийн төлөө!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <?php if(isset($post)):?>
        <title><?=htmlspecialchars($post['title']);?></title>
    	<!-- SOCIAL MEDIA META -->
    	<meta property="og:description" content="Yam MN">
    	<meta property="og:image" content="<?=base_url().htmlspecialchars($post['pic']);?>">
    	<meta property="og:site_name" content="yam.mn">
    	<meta property="og:title" content="<?=htmlspecialchars($post['title']);?>">
    	<meta property="og:type" content="website">
    	<meta property="og:url" content="<?=current_url();?>">
        <meta property="fb:app_id" content="821044639064174" />
    	<!-- TWITTER META -->
    	<meta name="twitter:card" content="yammn">
    	<meta name="twitter:site" content="@yammn">
    	<meta name="twitter:creator" content="@yammn">
    	<meta name="twitter:title" content="<?=htmlspecialchars($post['title']);?>">
    	<meta name="twitter:description" content="<?=htmlspecialchars($post['description']);?>">
    	<meta name="twitter:image" content="<?=base_url().$post['pic'];?>">
        <meta name="description" content="<?=htmlspecialchars($post['description']);?>">
        <?php else:?>
        <title>Yam.mn</title>
    	<!-- SOCIAL MEDIA META -->
    	<meta property="og:description" content="Тунгалаг төрийн төлөө">
    	<meta property="og:image" content="<?=base_url();?>assets/img/logo.jpg">
    	<meta property="og:site_name" content="Yam.mn">
    	<meta property="og:title" content="Yam MN">
    	<meta property="og:type" content="website">
    	<meta property="og:url" content="<?=current_url();?>">
    
    	<!-- TWITTER META -->
    	<meta name="twitter:card" content="summary">
    	<meta name="twitter:site" content="@Yam MN">
    	<meta name="twitter:creator" content="@yammn">
    	<meta name="twitter:title" content="Yam MN">
    	<meta name="twitter:description" content="Ya, MN">
    	<meta name="twitter:image" content="<?=base_url();?>assets/img/logo.jpg">
        <meta name="description" content="Yam MN">
	    <?php endif;?>
		<!-- CSS here -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/slick.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="header__top-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="header__top-menu">
                                <ul>
                                    <li><a   id="current_date" href="#">Friday, 29 July 2018</a></li>
                                    <li><a href="#">Улаанбаатар</a></li>
                                    <!-- <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Contact Us</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="header__social text-center text-md-right mt-10">
                                <a href="<?=$w[0]['w_0'];?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?=$w[1]['w_0'];?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?=$w[2]['w_0'];?>"><i class="fab fa-linkedin-in"></i></a>
                                <!-- <a href="#"><i class="fab fa-google-plus-g"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__middle pt-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 d-flex align-items-center justify-content-md-start justify-content-center">
                            <div class="header__logo text-center text-md-left mb-20">
                                <a href="<?=base_url();?>"><img src="<?=base_url();?>assets/img/logo.png" alt="Header Logo" style="height: 72px;" ></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-9">
                            <div class="header__add text-center text-md-right mb-20">
                            <?php if (count($banner) > 0):?>
                                <?php if (count($banner) > 1):?>
                                    <?=$banner[0]['content'];?>
                                <?php endif;?>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__menu-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header__right-icon f-right mt-17">
                                <!-- <a href="#" data-toggle="modal" data-target="#search-modal">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a class="info-bar" href="javascript:void(0)">
                                    <i class="fas fa-bars"></i>
                                </a> -->
                            </div>
                            <div class="header__menu f-left">
                                <nav id="mobile-menu">
                                    <ul>
                                     
                                        <li class="<?php if(!$selected && $selected == 0){echo "active";};?>"><a href="<?=base_url();?>">Нүүр</a></li>
                                        <?php foreach($menus as $key=>$menu):?>
                                                <li 
                                                    class ="<?php if($menu['id'] == $selected){echo 'active';};?>
                                                
                                                ">
                                                    <a href="<?=base_url();?>l/<?=$menu["id"];?>"><?=$menu['title'];?></a>
                                                </li>
                                                <?php endforeach;?>
                                        <!-- <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="lifestyle.html">Lifestyle</a>
                                                </li>
                                                <li><a href="politic.html">Politic</a></li>
                                                <li><a href="tech.html">Technology</a></li>
                                                <li><a href="post-details.html">Post Details</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="extra-info">
                <div class="close-icon">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="header__logo">
                    <a href="index.html">
                        <img src="<?=base_url();?>assets/img/footer-logo.png" alt="Header Logo">
                    </a>
                </div>
                <div class="social-icon-right mt-30 mb-50">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="side-menu mb-30">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Features</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Tech</a>
                        </li>
                        <li>
                            <a href="#">Enterteinment</a>
                        </li>
                        <li>
                            <a href="#">Lifestyle</a>
                        </li>
                        <li>
                            <a href="#">Review</a>
                        </li>
                    </ul>
                </div>

                <div class="side-post">
                    <h3>Popular Post</h3>
                    <div class="post__small mb-20">
                        <div class="post__small-thumb f-left">
                            <a href="#">
                                <img src="<?=base_url();?>assets/img/xs-1.jpg" alt="hero image">
                            </a>
                        </div>
                        <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <a href="#">Fashion</a>
                            </span>
                            <h4 class="title-13 pr-0">
                                <a href="#">Storm in aw ame home away.</a>
                            </h4>
                            <div class="post__small-text-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>01 Sep 2018</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post__small mb-20">
                        <div class="post__small-thumb f-left">
                            <a href="#">
                                <img src="<?=base_url();?>assets/img/xs-2.jpg" alt="hero image">
                            </a>
                        </div>
                        <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <a href="#">Fashion</a>
                            </span>
                            <h4 class="title-13 pr-0">
                                <a href="#">Good ridre urants bid farewell.</a>
                            </h4>
                            <div class="post__small-text-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>01 Sep 2018</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post__small mb-20">
                        <div class="post__small-thumb f-left">
                            <a href="#">
                                <img src="<?=base_url();?>assets/img/xs-3.jpg" alt="hero image">
                            </a>
                        </div>
                        <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <a href="#">Fashion</a>
                            </span>
                            <h4 class="title-13 pr-0">
                                <a href="#">Nahan dow plays Lieral lership..</a>
                            </h4>
                            <div class="post__small-text-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>01 Sep 2018</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post__small mb-20">
                        <div class="post__small-thumb f-left">
                            <a href="#">
                                <img src="<?=base_url();?>assets/img/xs-4.jpg" alt="hero image">
                            </a>
                        </div>
                        <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <a href="#">Travel</a>
                            </span>
                            <h4 class="title-13 pr-0">
                                <a href="#">Weinstein pushs for dismissal.</a>
                            </h4>
                            <div class="post__small-text-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>01 Sep 2018</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button>
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
