<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../ymenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Export Guild Emblems</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <p>Please select the servers for which you would like to have the guild emblems exported as an archived ZIP file.</p>
<form action="<?php echo $this->url ?>" method="post">
	<input type="hidden" name="post" value="1" />
	<?php foreach ($serverNames as $serverName): ?>
	<p class="emblem-server"><label>
		&raquo;
		<input type="checkbox" name="server[]" checked="checked" value="<?php echo htmlspecialchars($serverName) ?>" />
		<span><?php echo htmlspecialchars($serverName) ?></span>
	</label></p>
	<?php endforeach ?>
	<button type="submit" class="submit_button">Export</button>
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