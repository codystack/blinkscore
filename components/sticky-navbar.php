    <header class="header-area header-2 header-duplicate header-sticky section-gap-x">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">
                        
                        <div class="site_logo">
                            <a class="logo" href="./">
                                <img src="./assets/images/logo-dark.svg" width="200" alt="logo">
                            </a>
                        </div>

                        <div class="menu-area d-none d-lg-inline-flex align-items-center">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="<?= ($currentPage === './') ? 'current-menu-item' : '' ?>"><a href="./">Home</a></li>

                                    <li class="<?= ($currentPage === 'about') ? 'current-menu-item' : '' ?>"><a href="about">About us</a></li>
                                    
                                    <li class="has-dropdown"><a href="#">Services</a>
                                        <ul class="sub-menu mega-menu-service">
                                            <li>
                                                <a class="mega-menu-service-single" href="proof-of-fund">
                                                    <span class="mega-menu-service-icon">
                                                        <i class="tji-service-1"></i>
                                                    </span>
                                                    <span class="mega-menu-service-title">Proof of Funds (POF)</span>
                                                    <span class="mega-menu-service-nav">
                                                        <i class="tji-arrow-right-long"></i>
                                                        <i class="tji-arrow-right-long"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-menu-service-single" href="salary-history">
                                                    <span class="mega-menu-service-icon">
                                                        <i class="tji-service-2"></i>
                                                    </span>
                                                    <span class="mega-menu-service-title">Employment Salary History</span> 
                                                    <span class="mega-menu-service-nav">
                                                        <i class="tji-arrow-right-long"></i>
                                                        <i class="tji-arrow-right-long"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="<?= ($currentPage === 'faq') ? 'current-menu-item' : '' ?>"><a href="faq">FAQ's</a></li>

                                    <li class="<?= ($currentPage === 'contact') ? 'current-menu-item' : '' ?>"><a href="contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header-right-item d-none d-lg-inline-flex">
                            <div class="header-button">
                                <a class="tj-primary-btn" href="https://app.blinkscore.ng" target="_blank">
                                    <span class="btn-text"><span>Get Started</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>

                        <div class="menu_bar mobile_menu_bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>