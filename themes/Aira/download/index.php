<?php include __DIR__ . "/../qheader.php"; ?>
</br></br>
    <section class="page">
        <div class="content-area">
            <h2 class="page__title">Start Game</h2>
            <div class="page__content">

                <div class="htc">
                    <div class="htc__box">
                        <div class="htc__box-title">DOWNLOAD CLIENT FILES</div>
                        <div class="htc__box-content">
                            <div class="htc__box-content-col">
                                <div class="htc__box-content-title">Full client</div>
                                <div class="htc__box-content-buttons">
                                       <?php if($fullclient): ?>   
                                       <?php foreach($fullclient as $prow):?>
                                       <a href="<?php echo $prow->link?>" class="btn"><span><?php echo $prow->title?></span></a>
                                    <?php endforeach;?>
                                    <?php endif ?>
                                                                                                             </div>
                            </div>
                            <div class="htc__box-content-col">
                                <div class="htc__box-content-title">Lite client</div>
                                <div class="htc__box-content-buttons">
                                       <?php if($liteclient): ?>   
                                       <?php foreach($liteclient as $prow):?>   
                                       <a href="<?php echo $prow->link?>" class="btn"><span><?php echo $prow->title?></span></a>
                                                   
                                    <?php endforeach;?>
                                    <?php endif ?>                                                                                                   </div>
                            </div>
                            <div class="htc__box-content-col">
                                <div class="htc__box-content-title">Extra File</div>
                                <div class="htc__box-content-buttons">
                                                                          
                                       <?php if($extrafile): ?>   
                                       <?php foreach($extrafile as $prow):?>   
                                       <a href="<?php echo $prow->link?>" class="btn"><span><?php echo $prow->title?></span></a>
                                                   
                                    <?php endforeach;?>
                                    <?php endif ?>        
                                                                                                                                                      </div>
                            </div>
                        </div>
                    </div>
                      <div class="htc__box">
                        <div class="htc__box-title">Important information</div>
                                                      <div class="htc__box-content">
                            <div class="htc__box-content-text"> By downloading, installing, registering, accessing and any other way of using the loadmw.com Service, you fully accept the terms of this Policy and express your consent to the processing of your data. If you do not agree with this Policy, please do not download, install or otherwise use the Service.<br> This file content is provided for informational and testing purposes only. All rights to this content belong to NCSoft. This file content is not an official source of information about the game and is intended for informational purposes only.</div>
                                                  </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include __DIR__ . "/../qfooter.php"; ?>