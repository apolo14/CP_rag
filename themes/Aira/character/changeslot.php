<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../pmenu.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Change Slot</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            
                            <?php if (!empty($errorMessage)): ?>
<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<input type="hidden" name="changeslot" value="1" />
	<table class="generic-form-table">
		<tr>
			<th><label>Character Name</label></th>
			<td><div><?php echo htmlspecialchars($char->name) ?></div></td>
			<td></td>
		</tr>
		<tr>
			<th><label for="slot">Slot Number</label></th>
			<td><input type="text" name="slot" id="slot"
					size="<?php echo strlen($server->maxCharSlots) * 2 ?>"
					value="<?php echo (int)$char->char_num + 1 ?>"
					maxlength="<?php echo strlen($server->maxCharSlots) ?>" /></td>
			<td><p>You may input a slot number between 1 and <?php echo (int)$server->maxCharSlots ?>.</p></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" value="Change Slot" /></td>
			<td></td>
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