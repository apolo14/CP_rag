    <div class="content-area">
        </br></br>
        <div class="page__content">
            <div class="about">
                    <div class="about__nav">
                        <?php $adminMenuItems = $this->getAdminMenuItems();
            $menuItems = $this->getMenuItems();
            if( $params->get('module') != 'main' ): ?>
            <?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
	        <?php $mItems = array(); foreach ($adminMenuItems as $menuItem) $mItems[] = sprintf('<a href="%s">%s</a>', $menuItem['url'], $menuItem['name']) ?>
                    <a href="/account/" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Account List</div>
                                            <div class="about__nav-item-desc">List Account Player.</div>
                                    </div>
            </a>
            
            <a href="/character/" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Char List</div>
                                            <div class="about__nav-item-desc">List Character Player.</div>
                                    </div>
            </a>
            <?php endif ?>
            <?php endif ?>
                    <a href="/account/view" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">View Account</div>
                                            <div class="about__nav-item-desc">View your account</div>
                                    </div>
            </a>
                    <a href="/account/changemail" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Change Mail</div>
                                            <div class="about__nav-item-desc">Change your mail information.</div>
                                    </div>
            </a>
                    <a href="/account/changepass" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Change Pass</div>
                                            <div class="about__nav-item-desc">Change your password information</div>
                                    </div>
            </a>
                    <a href="/account/changesex" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Change Sex</div>
                                            <div class="about__nav-item-desc">Change your gender information</div>
                                    </div>
            </a>
            <a href="/account/cart" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Cart</div>
                                            <div class="about__nav-item-desc">Your cart information</div>
                                    </div>
            </a>
            <a href="/account/logout" class="about__nav-item">
                <div class="about__nav-item-icon"><i class="ra ra-crossed-swords"></i></div>
                <div class="about__nav-item-info">
                    <div class="about__nav-item-name">Log out</div>
                                            <div class="about__nav-item-desc">Logout account</div>
                                    </div>
            </a>
            </div>