<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../pmenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2><?php echo htmlspecialchars(Flux::message('DivorceHeading')) ?></h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<input type="hidden" name="divorce" value="1" />
	<table class="generic-form-table">
		<tr>
			<td>
				<p>
				<?php echo htmlspecialchars(sprintf(Flux::message('DivorceText1'), $char->name)) ?>
				<?php if (!Flux::config('DivorceKeepChild')) echo htmlspecialchars(sprintf(Flux::message('DivorceText2'), $char->name)) ?>
				<?php if (!Flux::config('DivorceKeepRings')) echo htmlspecialchars(Flux::message('DivorceText3')) ?>
				</p>
			</td>
		</tr>
		<tr>
			<td><button type="submit"><strong><?php echo htmlspecialchars(Flux::message('DivorceButton')) ?></strong></button></td>
		</tr>
	</table>
</form>

                            
                             </div>
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