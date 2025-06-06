<?php include __DIR__ . "/../pheader.php"; ?>
        <header class="header ">
    <div class="content-area">
        <a href="/" class="header__logo">
            <img src="/ragfile/core/logo.png" alt="">
        </a>
                    <div class="decor-title header__title">
            <img class="decor-title__top" src="<?php echo $this->themePath('assets/images/bg/title_top_bg.png') ?>" alt="">
            <div class="decor-title__content">
                <h1>Aira - RO</h1>
                <small>Ragnarok Online Private Server</small>
            </div>
            <img class="decor-title__bottom" src="<?php echo $this->themePath('assets/images/bg/title_bottom_bg.png') ?>" alt="">
        </div>
            <a href="/download" class="header__button"><span>Start Game</span></a>
    </div>
</header>
					    <section class="section features">
        <div class="content-area">
            <h2 class="section__title">Project features</h2>
            <div class="features__slider">
                <div class="swiper features__slider-swiper">
                    <div class="swiper-wrapper">
                            <?php if($sfeature): ?>   
                                      <?php foreach($sfeature as $prow):?>  
                                                    <div class="swiper-slide features__slider-item">
                                <h3><?php echo $prow->title?></h3>
                                <p><?php echo $prow->body?></p>
                                                                    <a href="/server/feature" class="btn">
                                        <span>
                                                                                            More                                                                                    </span>
                                    </a>
                                                            </div>
                                                            
                            <?php endforeach;?>
                            <?php endif ?>
                                            </div>
                </div>
            </div>
            <div class="features__thumbs">
                <div class="swiper features__thumbs-swiper">
                    <div class="swiper-wrapper">
                            <?php if($sfeature): ?>   
                                      <?php foreach($sfeature as $prow):?>  
                                                    <div class="swiper-slide features__thumbs-item">
                                <div class="features__thumbs-item-icon">
                                    <img src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <i class="<?php echo $prow->ikon?>"></i>
                                </div>
                            </div>
                            <?php endforeach;?>
                            <?php endif ?>
                                            </div>
                </div>
                <div class="swiper-arrows">
                    <div class="swiper-button-prev features__thumbs-prev">
                        <img src="<?php echo $this->themePath('assets/images/icons/left_icon.png') ?>" alt="">
                    </div>
                    <div class="swiper-button-next features__thumbs-next">
                        <img src="<?php echo $this->themePath('assets/images/icons/right_icon.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </section>

			    <section class="section update">
        <div class="update__slider">
            <div class="swiper update__slider-swiper">
                <div class="swiper-wrapper">
                                            <div class="swiper-slide update__slider-item">
                            <div class="content-area">
                                <h3>Job Class</h3>
                                <h4>Swordman</h4>
                                <p>Swordsman are usually the frontliners of the party and can take huge amount of damage. This holds true especially at higher levels. A swordsman excels in frontline combat whether it be tanking or dealing damage. </p>
                            </div>
                                                            
                                                    </div>
                                            <div class="swiper-slide update__slider-item">
                            <div class="content-area">
                                <h3>Job Class</h3>
                                <h4>Acolyte</h4>
                                <p>Acolyte, a support class, are usually found behind the frontliners keeping them in check. They have support skills like heal, and they can give players a stat boost. It isn't uncommon to find Acolytes travelling with adventurers as they are the most knowledgeable when it comes to supporting.</p>
                            </div>
                                                            
                                                    </div>
                                            <div class="swiper-slide update__slider-item">
                            <div class="content-area">
                                <h3>Job Class</h3>
                                <h4>Merchant</h4>
                                <p>Merchants are the economic experts of Ragnarok Online. Setting out to make a fortune, playing as a Merchant will allow the player to get the most out of every last zeny. Merchants are also handy with items, being able to carry far more than other classes thanks to their Enlarge Weight Limit and Pushcart abilities.</p>
                            </div>
                                                            
                                                    </div>
                                            <div class="swiper-slide update__slider-item">
                            <div class="content-area">
                                <h3>Job Class</h3>
                                <h4>Thief</h4>
                                <p>Thieves are speed demons that are a force to reckon with. Swift and powerful, only few can keep up with their attack speed and power, coupled with their naturally high flee and double attack, thieves are the perfect killing machine.</p>
                            </div>
                                                            
                                                    </div>
                                            <div class="swiper-slide update__slider-item">
                            <div class="content-area">
                                <h3>Job Class</h3>
                                <h4>Archer</h4>
                                <p>Archers are experts at long-range combat with Bows and Arrows. Their range gives them an advantage over stationary or slow monsters. Additionally, arrows have elemental properties which is a huge boost when dealing with monsters. With these advantages, archers can end the battle before it even start.</p>
                            </div>
                                                            
                                                    </div>
                                            <div class="swiper-slide update__slider-item">
                            <div class="content-area">
                                <h3>Job Class</h3>
                                <h4>Mage</h4>
                                <p>Mages rely on their skills as their main source of damage, and such attacks are magically based and only take into account the target's Magical Defense, and not their Physical Defense. Furthermore, all of a Mage's spells are elemental. This means that the correct use of spell is highly important.</p>
                            </div>
                                                            
                                                    </div>
                                    </div>
            </div>
        </div>
        <div class="content-area">
            <div class="update__thumbs">
                <div class="swiper update__thumbs-swiper">
                    <div class="swiper-wrapper">
                                                    <div class="swiper-slide update__thumbs-item">
                                <div class="update__thumbs-item-icon">
                                    <img class="update__thumbs-item-icon-border" src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <img class="update__thumbs-item-icon-img" src="<?php echo $this->themePath('assets/images/job/class_1.webp') ?>" alt="">
                                </div>
                                <div class="update__thumbs-item-text">Swordman</div>
                            </div>
                                                    <div class="swiper-slide update__thumbs-item">
                                <div class="update__thumbs-item-icon">
                                    <img class="update__thumbs-item-icon-border" src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <img class="update__thumbs-item-icon-img" src="<?php echo $this->themePath('assets/images/job/class_6.webp') ?>" alt="">
                                </div>
                                <div class="update__thumbs-item-text">Acolyte</div>
                            </div>
                                                    <div class="swiper-slide update__thumbs-item">
                                <div class="update__thumbs-item-icon">
                                    <img class="update__thumbs-item-icon-border" src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <img class="update__thumbs-item-icon-img" src="<?php echo $this->themePath('assets/images/job/class_3.webp') ?>" alt="">
                                </div>
                                <div class="update__thumbs-item-text">Merchant</div>
                            </div>
                                                    <div class="swiper-slide update__thumbs-item">
                                <div class="update__thumbs-item-icon">
                                    <img class="update__thumbs-item-icon-border" src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <img class="update__thumbs-item-icon-img" src="<?php echo $this->themePath('assets/images/job/class_4.webp') ?>" alt="">
                                </div>
                                <div class="update__thumbs-item-text">Thief</div>
                            </div>
                                                    <div class="swiper-slide update__thumbs-item">
                                <div class="update__thumbs-item-icon">
                                    <img class="update__thumbs-item-icon-border" src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <img class="update__thumbs-item-icon-img" src="<?php echo $this->themePath('assets/images/job/class_5.webp') ?>" alt="">
                                </div>
                                <div class="update__thumbs-item-text">Archer</div>
                            </div>
                                                    <div class="swiper-slide update__thumbs-item">
                                <div class="update__thumbs-item-icon">
                                    <img class="update__thumbs-item-icon-border" src="<?php echo $this->themePath('assets/images/bg/icon_border_bg.png') ?>" alt="">
                                    <img class="update__thumbs-item-icon-img" src="<?php echo $this->themePath('assets/images/job/class_6.webp') ?>" alt="">
                                </div>
                                <div class="update__thumbs-item-text">Magician</div>
                            </div>
                                            </div>
                </div>
                <div class="swiper-arrows">
                    <div class="swiper-button-prev update__thumbs-prev">
                        <img src="<?php echo $this->themePath('assets/images/icons/left_icon.png') ?>" alt="">
                    </div>
                    <div class="swiper-button-next update__thumbs-next">
                        <img src="<?php echo $this->themePath('assets/images/icons/right_icon.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

			<section class="section news">
    <div class="content-area">
        <h2 class="section__title">Project news</h2>
        <div class="news__slider">
            <div class="swiper news__slider-swiper">
                <div class="swiper-wrapper">
                    <?php if($blogs): ?>
                                       <?php foreach($blogs as $prow):?>
                                            <a href="<?php echo $this->url('blog', 'detail', array('path' => $prow->path))?>" class="swiper-slide news__slider-item" data-type="<?php echo $prow->category?>" data-server="<?php echo $prow->category?>">
                            <img src="<?php echo $prow->image?>" alt="" class="news__slider-item-bg">
                            <div class="news__slider-item-badges">
                                                                    <span class="<?php echo $prow->category?>"><?php echo $prow->category?></span>
                                                            </div>
                            <div class="news__slider-item-content">
                                <div class="news__slider-item-info">
                                    <div class="news__slider-item-info-type">
                                        <span>
                                                                                            <?php echo $prow->category?>                                                                                    </span>
                                    </div>
                                    <div class="news__slider-item-info-date"><span><?php echo $prow->created?></span></div>
                                </div>
                                <div class="news__slider-item-title"><?php echo $prow->title?></div>
                                <div class="news__slider-item-text">
                                                                    </div>
                                <div class="btn"><span>More</span></div>
                            </div>
                        </a>
                        <?php endforeach;?>
            <?php endif ?>
                                
                                    </div>
            </div>
            <div class="swiper-arrows">
                <div class="swiper-button-prev news__thumbs-prev">
                    <img src="<?php echo $this->themePath('assets/images/icons/left_icon.png') ?>" alt="">
                </div>
                <div class="swiper-button-next news__thumbs-next">
                    <img src="<?php echo $this->themePath('assets/images/icons/right_icon.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . "/../pfooter.php"; ?>