<?php include __DIR__ . "/../qheader.php"; ?>
					<section class="page">
<?php include __DIR__ . "/../streamer/index.php"; ?>
                <div class="about__content">
                    <div class="about__content-title"><h2>Player Streamers</h2></div>
                    <div class="about__content-info">
                        <div class="text-area">
                            <?php if($streamers2): ?>   
                                      <?php foreach($streamers2 as $prow):?>  
                            <h4><?php echo $prow->name?></h4>
<p><?php echo $prow->embed?> </p>
<p>
                                    <table>
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Character</th>
                                            <th>Platform</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td><img src="/<?php echo $prow->picture?>" alt="" width="150" style="display: block; margin-left: auto; margin-right: auto; border: 2px transparent; border-radius: 50px;">              </td>
                                            <td><?php echo $prow->charname?>              </td>
                                            <td><?php echo $prow->platform?>              </td>
                                            <td><?php echo $prow->status?></td>
                                            <td><a href="<?php echo $prow->link?>">Visit</a></td>
                                        </tr>
                                    </tbody>
                                </table>
</p>
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