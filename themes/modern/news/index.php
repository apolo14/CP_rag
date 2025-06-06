<?php 
if (!defined('FLUX_ROOT')) exit;
?>           

<?php if($newstype == '1'):?>
  <?php if($news): ?>
    <!-- Slick Carrossel -->
    <div class="slick-carousel mt-5">
      <?php foreach($news as $nrow): ?>
        <div>
          <div class="card text-center mx-auto" style="max-width: 500px;">
            <?php if($nrow->link): ?>
              <?php $imagemFile = $this->themePath('img/') . $nrow->link; ?>
              <img src="<?php echo $imagemFile ?>" class="card-img-top" alt="Imagem da notícia">
            <?php endif; ?>
            <div class="card-body" style="background: rgba(106, 17, 203, 0.1);">
              <h5 class="card-title"><?php echo htmlspecialchars($nrow->title) ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($nrow->body) ?></p>
             <!-- <span class="newsDate"><small>by <?php echo htmlspecialchars($nrow->author) ?> on <?php echo date(Flux::config('DateFormat'), strtotime($nrow->created)) ?></small></span> -->
              
              <?php if($nrow->author): ?>
                <a href="<?php echo htmlspecialchars($nrow->author) ?>" class="btn btn-primary">Wiki</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

      <?php else: ?>
    <p class="text-center mt-4">
      <?php echo htmlspecialchars(Flux::message('CMSNewsEmpty')) ?><br/><br/>
    </p>
  <?php endif; ?>
<?php endif; ?>

			
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      $(document).ready(function(){
          $('.slick-carousel').slick({
              centerMode: true,
              centerPadding: '5px',
              slidesToShow: 4,
              arrows: true,
              prevArrow: $('.slick-prev'),
              nextArrow: $('.slick-next'),
            responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1
      }
    }
  ]
 });
});


    </script>

