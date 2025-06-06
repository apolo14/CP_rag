<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../npc/index.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Server NPC</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <?php if($npcs2): ?>   
                                      <?php foreach($npcs2 as $prow):?>  
                            <h4><?php echo $prow->title?></h4>
<p><img src="/<?php echo $prow->poster?>" alt="" width="893" height="auto" style="display: block; margin-left: auto; margin-right: auto;"></p>
<p><?php echo $prow->body?></p>
<hr>

<p></p>
<?php endforeach;?>
    <?php endif ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        if($(window).outerWidth() <= 1024){
            $('html, body').animate({
                scrollTop: $('.about__content').offset().top - 80
            }, 800);
        }
    });
</script>		
<?php include __DIR__ . "/../pfooter.php"; ?>