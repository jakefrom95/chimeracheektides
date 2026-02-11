<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <div class="promotional-banner">
        🚀 FREE SHIPPING ON ORDERS OVER $200 | USE CODE "CHIMERA" FOR 10% OFF 🚀
    </div>
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-container">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="logo-text">CHIMERA</span>
                    </a>
                </div>
                
                <div class="header-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search research compounds...">
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>
                
                <div class="header-actions">
                    <a href="#all-products" class="btn btn-pill active">Shop Now</a>
                </div>
            </div>
        </div>
    </header>

    <main id="primary" class="site-main">
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-logo">
                        <span class="logo-icon">🦅</span>
                    </div>
                    <h1>CHIMERA PEPTIDES</h1>
                    <p class="subtitle">Research-grade peptides. Lab tested. Third-party verified.</p>
                    <p class="trusted-by">Trusted by 2,000+ researchers worldwide.</p>
                    
                    <div class="shipping-toggles">
                        <a href="#" class="btn-shipping active">
                            <span class="icon">🌍</span>
                            International (7-14 days)
                        </a>
                        <a href="#" class="btn-shipping outline">
                            <span class="icon">🏠</span>
                            US Domestic (3-5 days)
                        </a>
                    </div>

                    <div class="nav-pills">
                        <a href="#most-popular" class="btn-pill active">Best Sellers</a>
                        <a href="#shop-by-goal" class="btn-pill">Shop by Goal</a>
                        <a href="#all-products" class="btn-pill">Browse All Products</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="trust-bar">
            <div class="container">
                <div class="trust-badges">
                    <div class="badge">
                        <span class="icon">🛡️</span>
                        <span>Lab Tested Batches</span>
                    </div>
                    <div class="badge">
                        <span class="icon">🚚</span>
                        <span>Worldwide Shipping</span>
                    </div>
                    <div class="badge">
                        <span class="icon">💳</span>
                        <span>Secure Crypto Payments</span>
                    </div>
                    <div class="badge">
                        <span class="icon">🎧</span>
                        <span>24h Support</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="info-bar-section">
            <div class="container">
                <div class="info-bar">
                    <div class="payment-methods">
                        <span>We accept:</span>
                        <div class="crypto-capsule">₿ BTC</div>
                        <div class="crypto-capsule">₮ USDT</div>
                        <div class="crypto-capsule">$ USDC</div>
                    </div>
                    
                    <div class="guarantees">
                        <span class="guarantee">🛡️ 100% Secure Checkout</span>
                        <span class="guarantee">🔄 Reship Guarantee</span>
                    </div>
                </div>
            </div>
        </section>
