<?php if (!defined('FLUX_ROOT')) exit; ?>
<div class="sidebar-container position-fixed start-0 z-3">
    <nav class="sidebar-nav navbar-dark bg-purple-transparent">
        <div class="container-fluid flex-column">
            
            <!-- Menu Items -->
            <ul class="navbar-nav w-100 diamond-menu">
                <!-- Home -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('main') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-house-door"></i>
                            <span class="diamond-text">Home</span>
                        </div>
                    </a>
                </li>

                <!-- Account -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('account') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-person-circle"></i>
                            <span class="diamond-text">Account</span>
                        </div>
                    </a>
                </li>

                <!-- Market -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('market') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-cart4"></i>
                            <span class="diamond-text">Market</span>
                        </div>
                    </a>
                </li>

                <!-- Vote -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('vote') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-check2-square"></i>
                            <span class="diamond-text">Vote</span>
                        </div>
                    </a>
                </li>

                <!-- RMT -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('rmt') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-currency-exchange"></i>
                            <span class="diamond-text">RMT</span>
                        </div>
                    </a>
                </li>

                <!-- Donations -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('donations') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-gift"></i>
                            <span class="diamond-text">Donations</span>
                        </div>
                    </a>
                </li>

                <!-- Wiki -->
                <li class="nav-item text-center diamond-container">
                    <a class="nav-link diamond p-3" href="<?php echo $this->url('wiki') ?>">
                        <div class="diamond-content">
                            <i class="bi bi-book"></i>
                            <span class="diamond-text">Wiki</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>