<?php include __DIR__ . "/../qheader.php"; ?>
       </br></br>
    <div class="content-area">
        <div class="page__content">
            <div class="about">
                    <div class="about__nav">
            <?php if($streamers): ?>
            <?php foreach($streamers as $prow):?>            
            <a href="<?php echo $this->url('streamer', 'detail', array('path' => $prow->path))?>" class="about__nav-item">
                <div class="about__nav-item-icon"><img src="/<?php echo $prow->picture?>" alt="" style="display: block; margin-left: auto; margin-right: auto;"></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name"><?php echo $prow->name?></div>
                                            <div class="about__nav-item-desc">Live On <?php echo $prow->platform?> (<b><?php echo $prow->status?></b>)</div>
                                    </div>
            </a>
            <?php endforeach;?>
            <?php endif ?>
            </div>