<?php include __DIR__ . "/../qheader.php"; ?>
            <!-- Main Container -->
            </br></br>
        <section class="page">
            <div class="content-area">
                <h2 class="page__title">
                                            News - <span>Diamond</span>
                                    </h2>
                <div class="page__content">
                                            <div class="news-switch">
    <div class="news-switch__item active" data-type="all"><span>All</span></div>
    <div class="news-switch__item" data-type="News"><span>News</span></div>
    <div class="news-switch__item" data-type="Events"><span>Events</span></div>
    <div class="news-switch__item" data-type="Updates"><span>Updates</span></div>
    <div class="news-switch__item" data-type="Promotions"><span>Promotions</span></div>
</div>
<div class="news-list">
                                       <?php if($blogs): ?>
                                       <?php foreach($blogs as $prow):?>
                                       <a href="<?php echo $this->url('blog', 'detail', array('path' => $prow->path))?>" class="news-list__item" data-type="<?php echo $prow->category?>" data-server="<?php echo $prow->category?>">
                <img src="/<?php echo $prow->image?>" alt="" class="news-list__item-bg">
                <div class="news-list__item-badges">
                                            <span class="green"><?php echo $prow->category?></span>
                                    </div>
                <div class="news-list__item-content">
                    <div class="news-list__item-info">
                        <div class="news-list__item-info-type">
                            <span>
                                                                    <?php echo $prow->category?>                                                            </span>
                        </div>
                        <div class="news-list__item-info-date"><span><?php echo $prow->created?></span></div>
                    </div>
                    <div class="news-list__item-title"><?php echo $prow->title?></div>
                    <div class="news-list__item-text">
                                            </div>
                    <div class="btn"><span>More</span></div>
                </div>
            </a>
            <?php endforeach;?>
            <?php endif ?>
                                    </div>                                    </div>
            </div>
        </section>
<?php include __DIR__ . "/../pfooter.php"; ?>