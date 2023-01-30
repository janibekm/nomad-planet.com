<main>
            <!-- breaking start -->
            <section class="breaking pt-25 pb-25">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-xl-12">
                            <div class="breaking__meta mb-30">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> <span>Friday, 29 July 2018</span></li>
                                    <li><i class="fas fa-map-marker-alt"></i> <span>New York</span></li>
                                    <li><i class="far fa-clock"></i> <span>5 Minute ago</span></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Breaking News Wrapper Start -->
                            <div class="breaking__wrapper">
                                <!-- Breaking News Title -->
                                <h5 class="breaking__title "><?=$w[3]['w_0'];?></h5>

                                <!-- Breaking Newsticker Start -->
                                <ul class="breaking__ticker-active owl-carousel">
                                <?php foreach($ontslohnews as $onts):?>
                                    
                                    <li>
                                        <a href="<?=base_url();?>d/<?=$onts['id'];?>"><?=$onts['title'];?></a>
                                    </li>
                                    <?php endforeach;?>
                                    
                                </ul>
                                <!-- Breaking Newsticker Start -->
                            </div>
                            <!-- Breaking News Wrapper End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- breaking end -->

            <!-- hero-area start -->
            <section class="hero-area">
                <div class="container">
                    <div class="row">
                        <?php if(count($ontslohnews) > 0) :?>
                        <div class="col-lg-6 col-md-12">
                            <div class="hero pos-relative mb-30">
                                <div class="hero__thumb" data-overlay="dark-gradient">
                                    <a href="<?=base_url();?>d/<?=$ontslohnews[0]["id"];?>"><img src="<?=base_url();?><?=$ontslohnews[0]["pic"];?>" alt="image"></a>
                                </div>
                                <div class="hero__text">
                                    <span class="post-cat mb-10"><a href="<?=base_url();?>l/<?=$ontslohnews[0]["menu"];?>"><?=$ontslohnews[0]["menu_title"];?></a></span>
                                    <h3 class="pr-100"><a href="<?=base_url();?>d/<?=$ontslohnews[0]["id"];?>"><?=$ontslohnews[0]["title"];?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php if(count($ontslohnews) > 1) :?>
                        <div class="col-lg-3 col-md-6">
                            <div class="hero pos-relative mb-30">
                                <div class="hero__thumb" data-overlay="dark-gradient">
                                    <a href="<?=base_url();?>d/<?=$ontslohnews[1]["id"];?>">
                                        <img src="<?=base_url();?><?=$ontslohnews[1]["bigpic"];?>" alt="image">
                                    </a>
                                </div>
                                <div class="hero__text hero__text-small">
                                    <span class="post-cat mb-10">
                                        <a href="<?=base_url();?>l/<?=$ontslohnews[1]["menu"];?>"><?=$ontslohnews[1]["menu_title"];?></a>
                                    </span>
                                    <h3 class="pr-0">
                                        <a href="<?=base_url();?>d/<?=$ontslohnews[1]["id"];?>"><?=$ontslohnews[1]["title"];?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php if(count($ontslohnews) > 2) :?>
                        <div class="col-lg-3 col-md-6">
                            <div class="hero pos-relative mb-30">
                                <div class="hero__thumb" data-overlay="dark-gradient">
                                    <a href="<?=base_url();?>d/<?=$ontslohnews[2]["id"];?>">
                                        <img src="<?=base_url();?><?=$ontslohnews[2]["bigpic"];?>" alt=" image">
                                    </a>
                                </div>
                                <div class="hero__text hero__text-small">
                                    <span class="post-cat mb-10">
                                        <a href="<?=base_url();?>l/<?=$ontslohnews[2]["menu"];?>"><?=$ontslohnews[2]["menu_title"];?></a>
                                    </span>
                                    <h3 class="pr-0">
                                        <a href="<?=base_url();?>d/<?=$ontslohnews[1]["id"];?>"><?=$ontslohnews[2]["title"];?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </section>
            <!-- hero-area end -->

            <!-- news area -->
            <section class="news-area pt-30 pb-30">
                <!-- trendy news -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb-30">
                                <h2><?=$w[4]['w_0'];?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-10">
                        <?php if(count($topnews) > 4) :?>
                        <div class="col-20">
                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?>d/<?=$topnews[2]["id"];?>">
                                        <img src="<?=base_url();?><?=$topnews[2]["pic"];?>" alt="image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-10">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d', $topnews[2]["created"]);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$topnews[2]["visited"];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="pr-0">
                                        <a href="<?=base_url();?>d/<?=$topnews[2]["id"];?>"><?=$topnews[2]["title"];?></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?>d/<?=$topnews[3]["id"];?>">
                                        <img src="<?=base_url();?><?=$topnews[3]["pic"];?>" alt="image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-10">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d', $topnews[3]["created"]);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$topnews[3]["visited"];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="pr-0">
                                        <a href="<?=base_url();?>d/<?=$topnews[3]["id"];?>"><?=$topnews[3]["title"];?></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?>d/<?=$topnews[4]["id"];?>">
                                        <img src="<?=base_url();?><?=$topnews[4]["pic"];?>" alt="image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-10">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d', $topnews[4]["created"]);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$topnews[2]["visited"];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="pr-0">
                                        <a href="<?=base_url();?>d/<?=$topnews[4]["id"];?>"><?=$topnews[4]["title"];?></a>
                                    </h4>
                                </div>
                            </div>
                        
                        </div>
                        <?php endif;?>
                        <?php if(count($topnews) > 2) :?>
                        <div class="col-40">
                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?>d/<?=$topnews[0]["id"];?>">
                                        <img src="<?=base_url();?><?=$topnews[0]["pic"];?>" alt="image">
                                    </a>
                                    <span class="post-cat post-absolute">
                                        <a href="<?=base_url();?>l/<?=$topnews[0]["menu"];?>"><?=$topnews[0]["menu_title"];?></a>
                                    </span>
                                </div>
                                <div class="postbox__text pt-10">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date("yy/m/d",$topnews[0]["created"]);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$topnews[0]["visited"];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-16 pr-0">
                                        <a href="<?=base_url();?>d/<?=$topnews[0]["id"];?>"><?=$topnews[0]["title"];?></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?>d/<?=$topnews[1]["id"];?>">
                                        <img src="<?=base_url();?><?=$topnews[1]["pic"];?>" alt="image">
                                    </a>
                                    <span class="post-cat post-absolute">
                                        <a href="<?=base_url();?>l/<?=$topnews[1]["menu"];?>"><?=$topnews[0]["menu_title"];?></a>
                                    </span>
                                </div>
                                <div class="postbox__text pt-10">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date("yy/m/d",$topnews[1]["created"]);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$topnews[1]["visited"];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-16 pr-0">
                                        <a href="<?=base_url();?>d/<?=$topnews[1]["id"];?>"><?=$topnews[1]["title"];?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    
                        <?php if(count($topnews) > 11) :?>
                        <div class="col-20 d-md-none d-xl-block">
                            <?php $slicedSmall = array_slice($topnews, 5, 6);?>
                            <?php foreach($slicedSmall as $small):?>
                            <div class="post__small mb-30">
                                <div class="post__small-thumb f-left">
                                    <a href="<?=base_url();?>d/<?=$small["id"];?>">
                                        <img src="<?=base_url();?><?=$small["pic"];?>" style="width: 101px;height: 85px;object-fit: cover;"  alt="image">
                                    </a>
                                </div>
                                <div class="post__small-text fix pl-10">
                                    <span class="sm-cat">
                                        <a href="<?=base_url();?>l/<?=$small["menu"];?>"><?=$small["menu_title"];?></a>
                                    </span>
                                    <h4 class="title-13 pr-0" style="height: 55px;overflow: hidden;">
                                        <a href="<?=base_url();?>d/<?=$small["id"];?>"><?=$small["title"];?></a>
                                    </h4>
                                    <div class="post__small-text-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d',$small["created"]);?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                          
                            <!-- <div class="post-btn mb-30">
                               <a href="#" class="btn btn-border">view more</a>
                            </div> -->
                        </div>
                        <?php endif;?>
                   
                        <?php if(count($topnews) > 13) :?>
                        <div class="col-20 ">
                            <?php $slicedLast = array_slice($topnews, 11, 3);?>
                            <?php foreach($slicedLast as $last):?>
                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?>d/<?=$last["id"];?>">
                                        <img src="<?=base_url();?><?=$last["pic"];?>" alt="image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-10">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d', $last["created"]);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$last["visited"];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="pr-0">
                                        <a href="<?=base_url();?>d/<?=$last["id"];?>"><?=$last["title"];?></a>
                                    </h4>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
                <!-- trendy news end -->
            </section>
            <!-- news area end -->

            <!-- video news -->
            <section class="cat-area pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb-30">
                                <h2><?=$w[5]['w_0'];?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <?php foreach($videonews as $video):?>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="postbox mb-25">
                                <div class="postbox__thumb" data-overlay="dark" data-opacity="2">
                                    <a href="<?=base_url();?>d/<?=$video['id'];?>">
                                        <img src="<?=base_url();?><?=$video['pic'];?>" alt="image">
                                    </a>
                                    <div class="video-play">
                                        <a href="<?=base_url();?>d/<?=$video['id'];?>" ><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="postbox__text pt-20">
                                    <h4 class="title-22 pr-0">
                                        <a href="<?=base_url();?>d/<?=$video['id'];?>"><?=$video['title'];?></a>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d',$video['created']);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$video['visited'];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>
            <!-- video news end -->

            <!-- cat news -->
            <!-- <section class="cat-area pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="section-title mb-30">
                                <h2>Science</h2>
                            </div>

                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/cat1.jpg" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-20">
                                    <h4 class="title-18 pr-0">
                                        <a href="#">Mustify Winner Is Rtired Because of Weaths Bads Ankle World Wide.</a>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="cat-sm-post">
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-12.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Hobots or Job Training: Mnutuers Grapple With How to Improve.</a>
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
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-11.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Robots or Job Training: Manutues Grapple With How to Improve..</a>
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
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="section-title mb-30">
                                <h2>travel</h2>
                            </div>

                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/cat2.jpg" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-20">
                                    <h4 class="title-18 pr-0">
                                        <a href="#">Robots or Job Training: Manutues Grapple With How to Improve.</a>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="cat-sm-post">
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-7.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Canadian Shoppers Pay When Visa and MasterCard.</a>
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
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-8.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Who is next football Super Hero. Check the future star</a>
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
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 d-md-none d-lg-block">
                            <div class="section-title mb-30">
                                <h2>lifestyle</h2>
                            </div>

                            <div class="postbox mb-25">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="assets/img/cat3.jpg" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-20">
                                    <h4 class="title-18 pr-0">
                                        <a href="#">Denying passports to Americans along the border throwing their citizens.</a>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="cat-sm-post">
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-10.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Hobots or Job Training: Mnutuers Grapple With How to Improve.</a>
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
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-9.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Robots or Job Training: Manutues Grapple With How to Improve..</a>
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
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- cat news end -->

            <!-- add-area start -->
            <!-- <section class="add-area pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 d-md-none d-xl-block">
                            <div class="section-title mb-30">
                                <h2>advertisement</h2>
                            </div>
                            <div class="add-banner mb-30">
                                <a href="#"><img src="assets/img/add.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-8 col-md-6">
                            <div class="section-title mb-30">
                                <h2>Magazine</h2>
                            </div>
                            <div class="cat-sm-post mb-30">
                                <div class="post__small mb-25">
                                    <div class="post__small-thumb f-left">
                                        <a href="#">
                                            <img src="assets/img/xs-7.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Robots or Job Training: Manuturers Grapple With How to Improve Their Economic Fortunes</a>
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
                                <div class="post__small mb-25">
                                    <div class="post__small-text fix">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Japanese Medical School Accused of With How to Improve Their Economic Fortunes Riggmisions to Keep Women Out world.</a>
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
                                <div class="post__small mb-25">
                                    <div class="post__small-text fix">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Leslie Moonves Speaks on CBS Earnings Cabunsot About Harassment Allegations</a>
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
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="section-title mb-30">
                                <h2>Picture</h2>
                            </div>
                            <div class="cat-sm-post">
                                <div class="post__small mb-25">
                                    <div class="post__small-thumb gallery-active owl-carousel">
                                        <a href="#">
                                            <img src="assets/img/gallery1.jpg" alt="hero image">
                                        </a>
                                        <a href="#">
                                            <img src="assets/img/gallery1.jpg" alt="hero image">
                                        </a>
                                        <a href="#">
                                            <img src="assets/img/gallery1.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text pt-15">
                                        <h4 class="title-16 pr-0 mt-0">
                                            <a href="#">Robots or Job Training: Manuturers Grapple With How to Improve Their Economic Fortunes</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- add-area end -->

            <!-- latest news -->
            <section class="latest-area pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb-30">
                                <h2><?=$w[6]['w_0'];?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                  
                        <?php $busad2 = array_slice($busad, 0, 2);?>    
                        <div class="col-xl-7 col-lg-12">
                            <?php foreach($busad2 as $b2):?>
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="#">
                                                <img src="<?=base_url();?><?=$b2['pic'];?>" alt="image">
                                            </a>
                                            <!-- <span class="post-cat post-absolute">
                                                <a href="<?=base_url();?>d/<?=$b2['id'];?>"><?=$w[6]['w_0'];?></a>
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-6">
                                    <div class="postbox__text mb-30">
                                        <h4 class="title-16 pr-0">
                                            <a href="<?=base_url();?>d/<?=$b2['id'];?>"><?=$b2['title'];?></a>
                                        </h4>
                                        <div class="postbox__text-meta pb-10">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span><?php echo date('yy/m/d', $b2['created']);?></span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-eye"></i>
                                                    <span><?=$b2['visited'];?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="desc-text mb-20">
                                            <p><?=$b2['description'];?></p>
                                        </div>
                                        <a href="<?=base_url();?>d/<?=$b2['id'];?>" class="btn btn-soft">Унших</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                                
                        <div class="col-xl-5">
                            <div class="postbox mb-30">
                                <div class="postbox__thumb">
                                    <a href="<?=base_url();?><?=$busad[count($busad)-1]['id'];?>">
                                        <img class="img-100" src="<?=base_url();?><?=$busad[count($busad)-1]['pic'];?>" alt="hero image">
                                    </a>
                                    <!-- <span class="post-cat post-absolute">
                                        <a href="#">politic</a>
                                    </span> -->
                                </div>
                                <div class="postbox__text pt-25">
                                    <h4 class="title-16 pr-0">
                                        <a href="<?=base_url();?>d/<?=$busad[count($busad)-1]['id'];?>"><?=$busad[count($busad)-1]['title'];?></a>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d', $busad[count($busad)-1]['created']);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$busad[count($busad)-1]['visited'];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc-text mb-20">
                                        <p><?=$busad[count($busad)-1]['description'];?> </p>
                                    </div>
                                    <a href="<?=base_url();?>d/<?=$busad[count($busad)-1]['id'];?>" class="btn btn-soft">Унших</a>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
            </section>
            <!-- latest news end --

        </main>