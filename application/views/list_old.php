<section class="breadcrumbs-area" style="background-image: url('<?=base_url();?>assets/img/banner/breadcrumbs-banner.jpg');">
                <div class="container">
                    <!-- <div class="breadcrumbs-content">
                        <h1>Post Style_1</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a> -</li>
                            <li>All Posts</li>
                        </ul>
                    </div> -->
                </div>
            </section>
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                   
                    <?php foreach($news as $key=>$new):?>
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="media media-none--lg mb-30">
                            <div class="position-relative width-40">
                                <a href="<?=base_url();?>d/<?=$new['id'];?>" class="img-opacity-hover img-overlay-70">
                                    <img src="<?=base_url();?><?=$new['pic'];?>" alt="news" class="img-fluid" style="width:100%">
                                </a>
                                <div class="topic-box-top-xs">
                                    <style><?php echo ".menucolor".$key."::before{border-top:8px solid ".$menu['color']."}";?></style>
                                    <style><?php echo ".menucolor".$key."::after{background-color:".$menu['color']."}";?></style>
                                    <div class="topic-box-sm color-cod-gray mb-20 <?php echo "menucolor".$key."";?>"><?=$menu['title'];?></div>
                                </div>
                            </div>
                            <div class="media-body p-mb-none-child media-margin30">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span><?php echo date('d-m-Y',$new['created']);?></li>
                                    </ul>
                                </div>
                                <h3 class="title-semibold-dark size-lg mb-15">
                                    <a href="<?=base_url();?>d/<?=$new['id'];?>"><?=$new['title'];?></a>
                                </h3>
                                <p><?=$new['description'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="row mt-20-r mb-30">
                    <div class="col-sm-6 col-12">
                       
                        <div class="pagination-btn-wrapper text-center--xs mb15--xs">
                        <?=$page_nav;?>
                            <!-- <ul> -->
                                <!-- <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-12">
                        <div class="pagination-result text-right pt-10 text-center--xs">
                            <p class="mb-none">Page 1 of 4</p>
                        </div>
                    </div> -->
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
                    <?php if (count($banner) > 0):?>
                        <?php if (count($banner) > 2):?>
                            <?=$banner[2]['content'];?>
                        <?php else:?>
                            <?=$banner[1]['content'];?>
                        <?php endif;?>
                    <?php endif;?>
                        <!-- <a href="#">
                            <img src="<?=base_url();?>assets/img/banner/banner3.jpg" alt="ad" class="img-fluid">
                        </a> -->
                    </div>
                </div>
                <!-- <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Newsletter</div>
                    </div>
                    <div class="newsletter-area bg-primary">
                        <h2 class="title-medium-light size-xl pl-30 pr-30">Subscribe to our mailing list to get the new updates!</h2>
                        <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid m-auto mb-15">
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
                <!-- <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-25">
                        <div class="topic-box-lg color-cod-gray">Tags</div>
                    </div>
                    <ul class="sidebar-tags">
                        <li>
                            <a href="#">Apple</a>
                        </li>
                        <li>
                            <a href="#">Business</a>
                        </li>
                        <li>
                            <a href="#">Architecture</a>
                        </li>
                        <li>
                            <a href="#">Gadgets</a>
                        </li>
                        <li>
                            <a href="#">Software</a>
                        </li>
                        <li>
                            <a href="#">Microsoft</a>
                        </li>
                        <li>
                            <a href="#">Robotic</a>
                        </li>
                        <li>
                            <a href="#">Technology</a>
                        </li>
                        <li>
                            <a href="#">Others</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>