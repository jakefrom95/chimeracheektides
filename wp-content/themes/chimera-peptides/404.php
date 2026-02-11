<?php get_header(); ?>

<div class="container section">
    <div class="section-header">
        <h1>404 - Page Not Found</h1>
        <p>The page you are looking for does not exist.</p>
    </div>
    <div style="text-align: center;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Return Home</a>
    </div>
</div>

<?php get_footer(); ?>
