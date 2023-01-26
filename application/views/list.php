<main>
            <!-- hero-area start -->
            <!-- <div class="page-banner-area mt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url(assets/img/bg/page-itle.jpg)">
                                <h1>Blog List View</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- hero-area end -->

            <!-- news area -->
            <section class="news-area pt-60 pb-60">
                <!-- trendy news -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <?php foreach($news as $new):?>
                            <div class="postbox mb-40">
                                <div class="postbox__thumb mb-25">
                                    <a href="<?=base_url();?>d/<?=$new['id'];?>">
                                        <img src="<?=base_url();?><?=$new['pic'];?>" alt="image">
                                    </a>
                                </div>
                                <div class="postbox__text">
                                    <div class="postbox__text-meta pb-20">
                                        <ul>
                                            <!-- <li>
                                                <span class="post-cat">
                                                    <a href="<?=base_url();?>/<?=$new['pic'];?>" tabindex="0">lifestyle</a>
                                                </span>
                                            </li> -->
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo date('yy/m/d', $new['created']);?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-eye"></i>
                                                <span><?=$new['visited'];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-30 font-600 pr-0">
                                        <a href="<?=base_url();?>d/<?=$new['id'];?>"><?=$new['title'];?></a>
                                    </h4>
                                    <div class="desc-text mb-20">
                                        <p><?=$new['description'];?></p>
                                    </div>
                                    <a href="<?=base_url();?>d/<?=$new['id'];?>" class="read-more">Унших</a>
                                </div>
                            </div>
                            <?php endforeach;?>
                            
                            
                            
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="widget mb-40">
                                <a href="#">
                                    <!-- <  img src="assets/img/add/add-sidebar.jpg" alt=""> -->
                                    <?php if (count($banner) > 0):?>
                                    <?php if (count($banner) > 2):?>
                                        <?=$banner[2]['content'];?>
                                    <?php else:?>
                                        <?=$banner[1]['content'];?>
                                    <?php endif;?>
                                <?php endif;?>
                                </a>
                            </div>
                            <div class="widget widget-border mb-40">
                                <h3 class="widget-title">Их уншсан</h3>
                                <?php foreach($mostread as $most):?>
                                <div class="post__small mb-30">
                                    <div class="post__small-thumb f-left">
                                        <a href="<?=base_url();?>d/<?=$most['id']?>">
                                            <img src="<?=base_url();?><?=$most['pic']?>" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="post__small-text fix pl-10">
                                        <span class="sm-cat">
                                            <a href="<?=base_url();?>l/<?=$most['menu']?>"><?=$most['menu_title'];?></a>
                                        </span>
                                        <h4 class="title-13 pr-0">
                                            <a href="<?=base_url();?>d/<?=$most['id']?>"><?=$most['title']?></a>
                                        </h4>
                                        <div class="post__small-text-meta">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span><?php echo date('yy/m/d', $most['created']);?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            
                                
                            
                            </div>
                            <!-- <div class="widget widget-border mb-40">
                                <h3 class="widget-title">Subscribe our Newsletter!</h3>
                                <p>Subscribe to our email newsletter to receive useful articles and special offers.</p>
                                <form class="widget-subscribe" action="#">
                                    <input type="email" placeholder="Enter your email :">
                                    <button class="btn">subscribe</button>
                                </form>
                            </div> -->
                            <!-- <div class="widget widget-border mb-40">
                                <h3 class="widget-title">Most visited</h3>
                                <div class="postbox">
                                    <div class="postbox__thumb">
                                        <a href="#">
                                            <img src="assets/img/details/sidebar-post.jpg" alt="hero image">
                                        </a>
                                    </div>
                                    <div class="postbox__text pt-15">
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
                                        <h4 class="title-16 pr-0">
                                            <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial Documents</a>
                                        </h4>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="widget widget-border mb-40">
                                <h3 class="widget-title">Popular Tags</h3>
                                <div class="tagcloud">
                                    <a href="#">Fashion</a>
                                    <a href="#">Politic</a>
                                    <a href="#">Modern</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Nav</a>
                                    <a href="#">Jason</a>
                                    <a href="#">Roster</a>
                                    <a href="#">Boat</a>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="row mt-10">
                        <div class="col-xl-12">
                            <div class="pagination">
                            <?=$page_nav;?>
                            
                     
                                <!-- <ul>
                                    <li>
                                        <a href="#">Prev</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Next</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- trendy news end -->
            </section>
            <!-- news area end -->

        </main>