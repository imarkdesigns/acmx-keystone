<?php
// WP Custom Logo
$customLogoID = get_theme_mod( 'custom_logo' );
$logo         = wp_get_attachment_image_src( $customLogoID, 'full' ); ?>

<div class="uk-position-absolute uk-position-z-index" data-globals="menu">
    <a href="#main" class="skip-to-content-link">Skip to Content</a>

    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-visible@m">
            <ul class="uk-navbar-nav">
                <li class="uk-parent">
                    <a href="#">Services <span uk-icon="icon: chevron-down; ratio: .7"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Loan Servicing</a></li>
                            <li><a href="#">Loan Programs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="uk-parent">
                    <a href="#">Capital Markets <span uk-icon="icon: chevron-down; ratio: .7"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Correspondents</a></li>
                            <li><a href="#">Other Sources</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Transactions</a></li>
                <li><a href="#">REFA</a></li>
            </ul>
        </div>

        <div>
            <a href="<?php echo esc_url( home_url() ); ?>" class="uk-logo">
                <?php echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'">'; ?>
            </a>
        </div>

        <div class="uk-visible@m">
            <ul class="uk-navbar-nav">
                <li><a href="#">Home</a></li>
                <li class="uk-parent">
                    <a href="#">About Us <span uk-icon="icon: chevron-down; ratio: .7"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Executive Bios</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Testmonials</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="uk-hidden@m">
            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
        </div>
    </nav>

</div>