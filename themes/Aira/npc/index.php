<?php include __DIR__ . "/../qheader.php"; ?>
       </br></br>
    <div class="content-area">
        <div class="page__content">
            <div class="about">
                    <div class="about__nav">
            <?php if($npcs): ?>
            <?php foreach($npcs as $prow):?>            
            <a href="<?php echo $this->url('npc', 'detail', array('path' => $prow->path))?>" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name"><?php echo $prow->title?></div>
                                            <div class="about__nav-item-desc"><?php echo $prow->category?></div>
                                    </div>
            </a>
            <?php endforeach;?>
            <?php endif ?>
            </div>