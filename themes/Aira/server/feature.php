<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../ymenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Server features</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <?php if($sfeature): ?>   
                                      <?php foreach($sfeature as $prow):?>  
                            <h4><?php echo $prow->title?></h4>
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