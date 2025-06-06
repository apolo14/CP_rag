<?php if (!defined('FLUX_ROOT')) exit; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand" href="./"><?php echo Flux::config('SiteTitle'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php $menuItems = $this->getMenuItems(); ?>
                <?php if (!empty($menuItems)): ?>
                    <?php foreach ($menuItems as $menuCategory => $menus): ?>
                        <?php if (!empty($menus)): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-<?php echo htmlspecialchars($menuCategory) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo htmlspecialchars(Flux::message($menuCategory)) ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown-<?php echo htmlspecialchars($menuCategory) ?>">
                                    <?php foreach ($menus as $menuItem): ?>
                                        <li><a class="dropdown-item" href="<?php echo $menuItem['url'] ?>"><?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>

                <?php $adminMenuItems = $this->getAdminMenuItems(); ?>
                <?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown-admin">
                            <?php foreach ($adminMenuItems as $menuItem): ?>
                                <li><a class="dropdown-item" href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"><?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar {
    background-color: rgba(0, 0, 0, 0.3) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    transition: background-color 0.3s ease;
}

.navbar:hover {
    background-color: rgba(0, 0, 0, 0.5) !important;
}

.dropdown-menu {
    background-color: rgba(0, 0, 0, 0.7);
    border: none;
}

.dropdown-item {
    color: rgba(255, 255, 255, 0.8);
}

.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}
</style>