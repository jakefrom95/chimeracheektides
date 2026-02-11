<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="logo-text">CHIMERA</span>
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </nav>
                <div class="header-actions">
                    <a href="#all-products" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </header>

    <main id="primary" class="site-main">
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Research-grade peptides.</h1>
                    <p class="subtitle">Lab tested. Third-party verified. Trusted by 2,000+ researchers worldwide.</p>
                    
                    <div class="trust-badges">
                        <div class="badge">
                            <span class="icon">🔬</span>
                            <span>Lab Tested Batches</span>
                        </div>
                        <div class="badge">
                            <span class="icon">🌍</span>
                            <span>Worldwide Shipping</span>
                        </div>
                        <div class="badge">
                            <span class="icon">🔐</span>
                            <span>Secure Crypto Payments</span>
                        </div>
                        <div class="badge">
                            <span class="icon">💬</span>
                            <span>24h Support</span>
                        </div>
                    </div>

                    <div class="payment-methods">
                        <span>We accept:</span>
                        <div class="payment-icons">
                            <span class="crypto-icon">₿ BTC</span>
                            <span class="crypto-icon">₮ USDT</span>
                            <span class="crypto-icon">$ USDC</span>
                        </div>
                    </div>
                    
                    <div class="hero-guarantees">
                        <span class="guarantee">✓ 100% Secure Checkout</span>
                        <span class="guarantee">✓ Reship Guarantee</span>
                    </div>
                </div>
            </div>
        </section>
