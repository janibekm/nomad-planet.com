
            <!-- News Feed Area Start Here -->
            
            <section class="bg-accent add-top-margin">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="topic-box mt-10 mb-10">Онцлох</div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                            <div class="feeding-text-dark">
                                <ol id="sample" class="ticker">
                                    <?php foreach($ontslohnews as $onts):?>
                                    <li>
                                        <a href="<?=base_url();?>d/<?=$onts['id'];?>"><?=$onts['title'];?></a>
                                    </li>
                                    <?php endforeach;?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- News Feed Area End Here -->
            <!-- News Slider Area Start Here -->
            <section class="bg-accent section-space-bottom-less4">
                <div class="container">
                    <div class="row tab-space2">

                        <div class="col-md-8 col-sm-12 mb-4">
                            <div class="img-overlay-70 img-scale-animate" style="height: 440px;">
                                <img src="<?=base_url();?><?=$ontslohnews[0]["bigpic"];?>" alt="news" class="img-fluid width-100">
                                <div class="mask-content-lg">
                                    <style>.menucolor0::before{border-top: 8px solid <?=$ontslohnews[0]["menu_color"];?>;};</style>
                                    <style>.menucolor0::after{background-color: <?=$ontslohnews[0]["menu_color"];?>};</style>
                                    <div class="topic-box-sm color-cinnabar mb-20 menucolor0"><?=$ontslohnews[0]["menu_title"];?></div>
                                    <div class="post-date-light">
                                        <ul>
                                            <!-- <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li> -->
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span><?php echo date("d-m-Y",$ontslohnews[0]["created"]);?></li>
                                        </ul>
                                    </div>
                                    <h1 class="title-medium-light d-none d-sm-block">
                                        <a href="<?=base_url();?>d/<?=$ontslohnews[0]["id"];?>"><?=$ontslohnews[0]["title"];?></a>
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <?php if(count($ontslohnews) > 1) :?>
                            <div class="img-overlay-70 img-scale-animate mb-4" style="height:217px">
                                <div class="mask-content-sm">
                                <!-- <style>.color-cinnabar::before{border-top: 8px solid <?=$ontslohnews[1]["menu_color"];?>;};</style>
                                    <style>.topic-box-sm::after{background-color: <?=$ontslohnews[1]["menu_color"];?>};</style> -->
                                    <style>.menucolor1::before{border-top: 8px solid <?=$ontslohnews[1]["menu_color"];?>;};</style>
                                    <style>.menucolor1::after{background-color: <?=$ontslohnews[1]["menu_color"];?>};</style>
                                    <div class="topic-box-sm color-razzmatazz mb-10 menucolor1"><?=$ontslohnews[1]["menu_title"];?></div>
                                    <h3 class="title-medium-light">
                                        <a href="<?=base_url();?>d/<?=$ontslohnews[1]["id"];?>"><?=$ontslohnews[1]["title"];?></a>
                                    </h3>
                                </div>
                                <img src="<?=base_url();?><?=$ontslohnews[1]["bigpic"];?>" alt="news" class="img-fluid width-100">
                            </div>
                            <?php endif;?>
                            <?php if(count($ontslohnews) > 2):?>
                            <div class="img-overlay-70 img-scale-animate mb-4"  style="height:217px">
                                <div class="mask-content-sm">
                                <style>.menucolor2::before{border-top: 8px solid <?=$ontslohnews[2]["menu_color"];?>;};</style>
                                    <style>.menucolor2::after{background-color: <?=$ontslohnews[2]["menu_color"];?>};</style>
                                    <div class="topic-box-sm color-apple mb-10 menucolor2"><?=$ontslohnews[2]["menu_title"];?></div>
                                    <h3 class="title-medium-light">
                                        <a href="<?=base_url();?>d/<?=$ontslohnews[2]["id"];?>"><?=$ontslohnews[2]["title"];?></a>
                                    </h3>
                                </div>
                                <img src="<?=base_url();?><?=$ontslohnews[2]["bigpic"];?>" alt="news" class="img-fluid width-100">
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bg-accent section-space-bottom-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="topic-border color-persian-green mb-30">
                                <div class="topic-box-lg color-persian-green">Шинэ мэдээ</div>
                            </div>
                            <div class="row">
                                <?php foreach($topnews as $key=>$top):?>
                                <?php if ($key==0):?>
                                <div class="col-md-6 col-sm-12 mb-30">
                                    <div class="img-overlay-70 img-scale-animate">
                                        <img src="<?=base_url();?><?=$top['pic'];?>" alt="news" class="img-fluid width-100">
                                    </div>
                                    <ul class="item-box-light-mix item-shadow-gray" style="height: 137px;overflow: hidden;">
                                        <li>
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span><?php echo date('d-m-Y', $top['created']);?></li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark">
                                                <a href="<?=base_url();?>d/<?=$top['id'];?>"><?=$top['title'];?></a>
                                            </h3>
                                        </li>
                                    </ul>
                                </div>
                                <?php endif;?>
                                
                                <?php endforeach;?>
                                <div class="col-md-6 col-sm-12">
                                    <?php foreach($topnews as $key=>$top1):?>
                                    <?php if ($key > 0 && $key < 4):?>
                                    <div class="media bg-body item-shadow-gray mb-30" style="height:108px;">
                                        <a class="img-opacity-hover width34-lg width30-md" style="height:108px" href="<?=base_url();?>d/<?=$top1['id'];?>">
                                            <img style="object-fit: cover;flex-shrink: 0;width: 108px;height: 108px;"src="<?=base_url();?><?=$top1['pic'];?>" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span><?php echo date('d-m-Y', $top1['created']);?></li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none" style="height: 50px;overflow: hidden;">
                                                <a href="<?=base_url();?>d/<?=$top1['id'];?>"><?=$top1['title'];?></a>
                                            </h3>
                                        </div>
                                    </div>

                                    <?php endif;?>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Сошиал холбоос</div>
                                </div>
                                <ul class="stay-connected-light overflow-hidden">
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/power.mnm/">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <div class="connection-quantity"><?=$w[0]['w_0'];?></div>
                                            <p><?=$w[4]['w_0'];?></p>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <div class="connection-quantity"><?=$w[3]['w_0'];?></div>
                                            <p><?=$w[5]['w_0'];?></p>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="https://www.linkedin.com/">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            <div class="connection-quantity"><?=$w[2]['w_0'];?></div>
                                            <p><?=$w[6]['w_0'];?></p>
                                        </a>
                                    </li>
                                    <li class="ytube">
                                        <a href="https://www.youtube.com/">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            <div class="connection-quantity"><?=$w[1]['w_0'];?></div>
                                            <p><?=$w[7]['w_0'];?></p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-box">
                                <div class="ne-banner-layout1 text-center">
                                    <!-- <a href="#">
                                        <img src="<?=base_url();?>assets/img/banner/banner11.jpg" alt="ad" class="img-fluid">
                                    </a> -->
                                    <?php if (count($banner) > 0):?>
                                        <?php if (count($banner) > 1):?>
                                            <?=$banner[1]['content'];?>
                                        <?php endif;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- International Story Area End Here -->
            <!-- Latest News Area Start Here -->
            <section class="bg-secondary-accent section-space-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="topic-border color-scampi mb-30 width-100">
                                <div class="topic-box-lg color-scampi">Видео </div>
                            </div>
                        </div>
                    </div>
                    <div class="ne-carousel nav-control-top2 color-scampi" data-loop="true" data-items="4" data-margin="20" data-autoplay="true"
                        data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false"
                        data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                        data-r-medium-nav="true" data-r-medium-dots="false" data-r-Large="4" data-r-Large-nav="true" data-r-Large-dots="false">
                       <?php foreach($videonews as $key=>$vide):?>
                        <div class="hover-show-play-btn item-shadow-gray mb-30">
                            <div class="img-overlay-70">
                                <img src="<?=base_url();?><?=$vide['pic'];?>" alt="news" class="img-fluid width-100">
                                <div class="text-center">
                                    <a class="play-btn" href="<?=base_url();?>d/<?=$vide['id'];?>">
                                        <img src="<?=base_url();?>assets/img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="box-padding30 bg-body item-shadow-gray">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span><?php echo date('d-m-Y', $vide['created']);?></li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark" style="height: 64px;overflow: hidden;">
                                    <a href="<?=base_url();?>d/<?=$vide['id'];?>"><?=$vide['title'];?></a>
                                </h3>
                            </div>
                        </div>
                       <?php endforeach;?>
                    </div>
                </div>
            </section>

        
            <!-- Video Area End Here -->
            <!-- More News Area Start Here -->
            <section class="bg-accent section-space-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="ne-isotope">
                                <div class="topic-border color-azure-radiance mb-30">
                                    <div class="topic-box-lg color-azure-radiance">Бусад </div>
                                    <!-- <div class="isotope-classes-tab isotop-btn">
                                        <a href="#" data-filter=".football" class="current">Football</a>
                                        <a href="#" data-filter=".cricket">Cricket</a>
                                        <a href="#" data-filter=".tenies">Tenies</a>
                                        <a href="#" data-filter=".cycling">Cycling</a>
                                        <a href="#" data-filter=".gadget">Gadget</a>
                                    </div>
                                    <div class="more-info-link">
                                        <a href="post-style-1.html">More
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div> -->
                                </div>
                                <div class="featuredContainer">
                                    <div class="gadget">
                                        <div class="row">
                                            <?php foreach($topnews as $key=>$top2):?>
                                            <?php if ($key>4):?>
                                            <div class="col-md-12 col-sm-6 col-12 mb-30">
                                                <div class="media item-shadow-gray bg-body media-none--sm">
                                                    <div class="position-relative width-36 width43-lg">
                                                        <a href="<?=base_url();?>d/<?=$top2['id'];?>" class="img-opacity-hover img-overlay-70">
                                                            <img src="<?=base_url();?><?=$top2['pic'];?>" alt="news" class="img-fluid">
                                                        </a>
                                                        <div class="topic-box-top-xs">
                                                        <style><?php echo ".menucolor".$key."::before{border-top:8px solid ".$top2['menu_color']."}";?></style>
                                                        <style><?php echo ".menucolor".$key."::after{background-color:".$top2['menu_color']."}";?></style>
                                                        <!-- <style>.menucolor2::before{border-top: 8px solid <?=$ontslohnews[2]["menu_color"];?>;};</style>
                                                        <style>.menucolor2::after{background-color: <?=$ontslohnews[2]["menu_color"];?>};</style> -->
                                                            <div class="topic-box-sm color-cod-gray mb-20 <?php echo "menucolor".$key."";?>"><?=$top2['menu_title'];?></div>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-padding30 p-mb-none-child">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                              
                                                                <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span><?php echo date('d-m-Y',$top2['created']);?></li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-semibold-dark size-lg mb-15">
                                                            <a href="<?=base_url();?>d/<?=$top2['id'];?>"><?=$top2['title'];?></a>
                                                        </h3>
                                                        <p><?=$top2['description'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Хамгийн их уншсан</div>
                                </div>
                                <div class="d-inline-block">
                                    <?php foreach($mostread as $most):?>
                                    <div class="media mb30-list bg-body" style="height: 108px;">
                                        <a class="img-opacity-hover" href="<?=base_url();?>d/<?=$most['id'];?>">
                                            <img style="object-fit: cover;flex-shrink: 0;width: 108px;height: 108px;" src="<?=base_url();?><?=$most['pic'];?>" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body media-padding15">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span><?php echo date('d-m-Y',$most['created']);?></li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark mb-none" style="height: 68px;overflow: hidden;">
                                                <a href="<?=base_url();?>d/<?=$most['id']?>"><?=$most['title'];?></a>
                                            </h3>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <!-- <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Newsletter</div>
                                </div>
                                <div class="newsletter-area bg-primary">
                                    <h2 class="title-medium-light size-xl line-height-custom">Subscribe to our mailing list to get the new updates!</h2>
                                    <img src="<?=base_url();?>assets/img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-10">
                                    <p>Subscribe our newsletter to stay updated</p>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your mail" class="form-control">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

