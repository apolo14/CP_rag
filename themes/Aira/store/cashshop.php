<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../smenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Cash Shop</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <?php if($cashshops): ?>   
                                      <?php foreach($cashshops as $prow):?>  
<div class="spoiler">
<div class="spoiler__title"><img src="/<?php echo $prow->image?>"><?php echo $prow->title?> |<?php echo $prow->position?>|<span style="color: #ffcb00;"><?php echo $prow->price?> <?php echo $prow->currency?></span></div>
<div class="spoiler__content">
<p><?php echo $prow->body?></p>
</div>
</div>
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