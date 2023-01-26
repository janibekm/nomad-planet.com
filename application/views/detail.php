<main>


<section class="post-details-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                 <!-- post-details -->
                <div class="post-details">
                    <h2 class="details-title mb-15"><?=$post['title'];?></h2>

                    <!-- meta -->
                    <div class="postbox__text-meta pb-30">
                        <ul>
                            <!-- <li>
                                <i class="far fa-user-circle"></i>
                                <span>Admin</span>
                            </li> -->
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span><?php echo date('yy/m/d', $post['created']);?></span>
                            </li>
                            <li>
                                <i class="fa fa-eye"></i>
                                <span><?=$post['visited'];?></span>
                            </li>
                        </ul>
                    </div>

                     <!-- share-post-link -->
                    <div class="share-post-link mb-30">
                                 
                    
                        <a class="facebook fbshare" href="<?=current_url();?>" title="<?=htmlspecialchars($post['title']);?>" data-description="<?=htmlspecialchars($post['description']);?>" data-image="<?=base_url().$post['pic'];?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="twitter twshare" ref="<?=current_url();?>" title="<?=htmlspecialchars($post['title']);?>" >
                            <i class="fab fa-twitter"></i>
                        </a>
                            <!-- <a class="instagram" href="#">
                                <i class="fab fa-instagram"></i>
                            </a> -->
                        <!-- <a class="dribbble" href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a class="pinterest" href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a class="google-plus" href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a class="pinterest" href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a> -->
                    </div>

                     <!-- post-thumb -->
                    <div class="post-thumb mb-25">
                        <img  style = "width:100%"src="<?=base_url();?><?=$post['pic'];?>" alt="">
                    </div>

                    <!-- post-content -->
                    <div class="post-content">
                            <?=$post['content'];?>
                    </div>

                    <!-- content__tags -->
                    <!-- <div class="content__tags mt-30">
                        <span>Post Tags:</span>
                        <span class="content__tags-list">
                            <a href="#0">orci</a>
                            <a href="#0">lectus</a>
                            <a href="#0">varius</a>
                            <a href="#0">turpis</a>
                        </span>
                    </div> -->

                     <!-- author-meta -->
                    <!-- <div class="author-meta  mt-60">
                        <div class="media flex-column flex-md-row">
                            <div class="media-left">
                                <a href="#"><img src="assets/img/user/user-03.jpg" alt=""> </a>
                            </div>
                            <div class="media-body">
                                <span class="media-heading">
                                    <a href="#">Richard</a>
                                </span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiu smod tempor ut laboredolore magna aliqua. Ut enim ad
                                    minim doing veniam, quis nostrud exerci tation ullamco laboris nisi. </p>
                                <div class="social">
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://plus.google.com/discover" target="_blank">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                     <!-- s-content__pagenav -->
                    <!-- <div class="s-content__pagenav mt-60">
                        <div class="s-content__nav">
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="s-content__prev mb-30">
                                        <a href="#0" rel="prev">
                                            <span>Өмнөх</span>
                                             Farmers plead for bullets to put down emaciated stock
                                        </a>
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="s-content__next mb-30 text-left text-md-right">
                                        <a href="#0" rel="next">
                                            <span>Дараагийн</span>
                                             Nahan downplays Liberal lership tensions after white ant
                                        </a>
                                    </div>
                               </div>
                           </div>
                        </div>
                    </div> -->

                     <!-- also-like -->
                    <div class="also-like mt-30">
                        <div class="section-title mb-30">
                            <h2>Ойрлцоо мэдээ</h2>
                        </div>
                        <div class="row">
                            <?php foreach($samepost as $same):?>
                            <div class="col-lg-4 col-md-4">
                                <div class="postbox mb-30">
                                    <div class="postbox__thumb">
                                        <a href="<?=base_url();?>d/<?=$same['id'];?>">
                                            <img class="img-100" src="<?=base_url();?><?=$same['pic'];?>" alt="image">
                                        </a>
                                    </div>
                                    <div class="postbox__text pt-10">
                                        <div class="postbox__text-meta pb-10">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span><?php echo date('yy/m/d', $same['created']);?></span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-eye"></i>
                                                    <span><?=$same['visited'];?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="pr-0">
                                            <a href="<?=base_url();?>d/<?=$same['id'];?>"><?=$same['title'];?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            
                        </div>
                    </div>

                     <!-- post-comments -->
                    


                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="widget mb-40">
                    <!-- <a href="#"><img src="assets/img/add/add-sidebar.jpg" alt=""></a> -->
                    <?php if (count($banner) > 0):?>
                    <?php if (count($banner) > 2):?>
                        <?=$banner[2]['content'];?>
                    <?php else:?>
                        <?=$banner[1]['content'];?>
                    <?php endif;?>
                <?php endif;?>
                </div>
                <div class="widget widget-border mb-40">
                    <h3 class="widget-title">Их уншсан</h3>

                    <?php foreach($mostread as $most):?>
                    <div class="post__small mb-30">
                        <div class="post__small-thumb f-left">
                            <a href="<?=base_url();?>d/<?=$most['pic'];?>">
                                <img src="<?=base_url();?><?=$most['pic'];?>" alt="image">
                            </a>
                        </div>
                        <div class="post__small-text fix pl-10">
                            <span class="sm-cat">
                                <a href="<?=base_url();?>l/<?=$most['menu'];?>"><?=$most['menu_title'];?></a>
                            </span>
                            <h4 class="title-13 pr-0">
                                <a href="<?=base_url();?>d/<?=$most['id'];?>"><?=$most['title'];?></a>
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
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                        <li><a href="#">Business <span>02</span></a></li>
                        <li><a href="#">Politic <span>05</span></a></li>
                        <li><a href="#">Fashion <span>01</span></a></li>
                        <li><a href="#">Corporate <span>03</span></a></li>
                        <li><a href="#">Football <span>07</span></a></li>
                        <li><a href="#">Magazine <span>06</span></a></li>
                    </ul>
                </div> -->
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
                </div>
                <div class="widget widget-border mb-40">
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
    </div>
</section>

</main>