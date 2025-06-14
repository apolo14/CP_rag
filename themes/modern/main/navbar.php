<?php if (!defined('FLUX_ROOT')) exit; ?>

<style>
a {
	cursor: default;
}
</style>
<header id="header" class="row">
	<div class="header-logo">
		<a href="./"><?php echo Flux::config('SiteTitle'); ?></a>
	</div>
	
	<nav  id="header-nav-wrap">
		<?php if (!$session->isLoggedIn()): ?>
		<ul class="header-main-nav">
			<li class="current"><a class="smoothscroll" href="<?php echo $this->url('main') ?>"><?php echo htmlspecialchars(Flux::message('HomeLabel')) ?></a></li> 
			<li ><a class="smoothscroll" onclick="goToAbout()""><?php echo htmlspecialchars(Flux::message('InformationLabel')) ?></a></li>
			<li ><a class="smoothscroll" href="<?php echo $this->url('servicedesk', 'index') ?>"><?php echo htmlspecialchars(Flux::message('ServiceDeskLabel')) ?></a></li>
			<li ><a class="smoothscroll" href="<?php echo $this->url('main', 'doar') ?>"><?php echo htmlspecialchars(Flux::message('DonateLabel')) ?></a></li>
			<li ><a class="smoothscroll" href="<?php echo $this->url('account', 'create') ?>" title="Criar Conta">Criar Conta</a></li>
			<a href="<?php echo $this->url('account', 'login') ?>" title="sign-up" class="button button-primary cta">Logar</a>
		<?php else: ?>
			<ul class="header-main-nav">
				<li class="current"><a class="smoothscroll" href="<?php echo $this->url('main') ?>"><?php echo htmlspecialchars(Flux::message('HomeLabel')) ?></a></li> 
				<li ><a class="smoothscroll" onclick="goToAbout()""><?php echo htmlspecialchars(Flux::message('InformationLabel')) ?></a></li>
				<li ><a class="smoothscroll" href="<?php echo $this->url('servicedesk', 'index') ?>"><?php echo htmlspecialchars(Flux::message('ServiceDeskLabel')) ?></a></li>
				<li ><a class="smoothscroll" href="<?php echo $this->url('main', 'doar') ?>"><?php echo htmlspecialchars(Flux::message('DonateLabel')) ?></a></li>
			<!-- <li ><a class="smoothscroll" href="<?php echo $this->url('account', 'create') ?>" title="Criar Conta">Criar Conta</a></li> -->
                <?php $adminMenuItems = $this->getAdminMenuItems(); ?>
                <?php if (!empty($adminMenuItems) && Flux::config('AdminMenuGroupLevel')): ?>
				<ul class="header-main-nav">
			<!-- <li ><a class="smoothscroll" href="<?php echo $this->url('account', 'create') ?>" title="Criar Conta">Criar Conta</a></li> -->
                    <li ><a class="smoothscroll" href="<?php echo $this->url('pix') ?>" title="Controlel PIX">Controle PIX</a></li>
                <?php endif ?>
			<a href="<?php echo $this->url('account', 'logout') ?>" title="sign-up" class="button button-primary cta">Sair</a>
		<?php endif ?>
		</ul>
	</nav>
</header>

  <script>
    window.addEventListener('load', function() {
      // Define a função somente após todos os scripts forem carregados
      window.goToAbout = function() {
        // Verifica se a URL já contém o parâmetro 'module=main'
        if (window.location.search.indexOf('module=main') !== -1) {
          const aboutSection = document.querySelector('.row.about-features');
          if (aboutSection) {
            aboutSection.scrollIntoView({ behavior: 'smooth' });
          }
        } else {
          // Redireciona para a URL adicionando 'module=main' e o hash
          window.location.href = '?module=main#about-features';
        }
      };

      // Se a página carregar com ?module=main e #about-features na URL,
      // espera 500ms e faz o scroll até a seção desejada.
      if (window.location.search.indexOf('module=main') !== -1 && window.location.hash === "#about-features") {
        setTimeout(function() {
          const aboutSection = document.querySelector('.row.about-features');
          if (aboutSection) {
            aboutSection.scrollIntoView({ behavior: 'smooth' });
          }
        }, 500);
      }
    });
  </script>




