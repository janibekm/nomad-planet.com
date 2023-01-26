<section class="breadcrumbs-area" style="background-image: url('img/banner/breadcrumbs-banner.jpg');">
                <div class="container">
                    <!-- <div class="breadcrumbs-content">
                        <h1>Business</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a> -</li>
                            <li>
                                <a href="#">Business</a> -</li>
                            <li>Single post style_01</li>
                        </ul>
                    </div> -->
                </div>
            </section>
            <section class="bg-body section-space-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 mb-30">
                            <div class="news-details-layout1">
                                <?php if(isset($post['bigpic']) && $post['bigpic']!=""):?>
                                <div class="position-relative mb-30">
                                    <img src="<?=base_url();?><?=$post['bigpic'];?>" alt="news-details" class="img-fluid">
                                    <div class="topic-box-top-sm">
                                        <div class="topic-box-sm color-cinnabar mb-20"><?=$menu['title'];?></div>
                                    </div>
                                </div>
                                <?php endif;?>
                                <h2 class="title-semibold-dark size-c30"><?=$post['title'];?></h2>
                                <ul class="post-info-dark mb-30">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar" aria-hidden="true"></i><?php echo date('d-m-Y', $post['created']);?></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i><?=$post['visited'];?></a>
                                    </li>
                                   
                                </ul>
                               <p>
                                   <?=$post['content'];?>
                               </p>
                            			
                                <div class="post-share-area mb-40 item-shadow-1">
                                    <p>Хуваалцах</p>
                                    <ul class="social-default item-inline">
                                        <li>
                                            <a href="<?=current_url();?>" title="<?=htmlspecialchars($post['title']);?>" data-description="<?=htmlspecialchars($post['description']);?>" data-image="<?=base_url().$post['pic'];?>" class="facebook fbshare fb">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=current_url();?>" title="<?=htmlspecialchars($post['title']);?>" class="twitter twshare tw">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- <div class="row no-gutters divider blog-post-slider">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <a href="#" class="prev-article">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>Previous article</a>
                                        <h3 class="title-medium-dark pr-50">Wonderful Outdoors Experience: Eagle Spotting in Alaska</h3>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                                        <a href="#" class="next-article">Next article
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        <h3 class="title-medium-dark pl-50">The only thing that overcomes hard luck is hard work</h3>
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
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-5">
                                    <div class="topic-box-lg color-cod-gray">Холбоотой мэдээ</div>
                                </div>
                                <div class="row">
                                
                             
                                    <?php foreach($samepost as $same):?>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                        <div class="mt-25 position-relative">
                                            <!-- <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">Model</div>
                                            </div> -->
                                            <a href="<?=base_url();?>d/<?=$same['id'];?>" class="mb-10 display-block img-opacity-hover">
                                                <img src="<?=base_url();?><?=$same['pic'];?>" alt="ad" class="img-fluid m-auto width-100">
                                            </a>
                                            <h3 class="title-medium-dark size-md mb-none" style="height: 63px;overflow: hidden;">
                                                <a href="<?=base_url();?>d/<?=$same['id'];?>"><?=$same['title'];?></a>
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
            </section>