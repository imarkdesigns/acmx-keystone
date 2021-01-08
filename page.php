<?php get_header();

    global $post;

    switch ( $post->ID ) {

        case '8':  $page = 'about'; break;
        case '10': $page = 'team'; break;
        case '12': $page = 'testimonials'; break;
        case '14': $page = 'news'; break;        
        case '32': $page = 'acquisitions'; break;
        case '38': $page = 'cases'; break;
        case '40': $page = 'careers'; break;
        case '42': $page = 'contact'; break;
        case '46': $page = 'sitemap'; break;

        // Pre-Filtered Map
        case '16': // Properties
        case '18': // for Sale
        case '20': // for Lease
        case '22': // Featured
            $page = 'portfolio'; break;

        // Tenants
        case '24': // Major
        case '26': // Municipal
            $page = 'tenants'; break;

        // Amenities & Renovations
        case '28': // Gallery
        case '30': // Map
            $page = 'features'; break;

        // Ground Lease
        case '34': // Ground
        case '36': // Map
            $page = 'lease'; break;

        // Legal Info
        case '3': // Privacy
        case '44': // Terms
            $page = 'legal'; break;

        default:
            $page = 'home';
            break;

    }

    if ( ! post_password_required() ) :

        get_template_part( _page.$page );

    else :

        $post_access .= '<main class="main" role="main">';
            $post_access .= '<section class="uk-section uk-section-muted">';
                $post_access .= '<div class="uk-container uk-container-small uk-height-meidum uk-flex uk-flex-middle uk-flex-center uk-text-center">';
                    $post_access .= '<article>';
                        $post_access .= '<span uk-icon="icon: lock; ratio: 5"></span>';
                        $post_access .= '<hr class="uk-divider-small uk-margin-auto">';
                        $post_access .= get_the_content();
                    $post_access .= '</article>';
                $post_access .= '</div>';
            $post_access .= '</section>';
        $post_access .= '</main> ';

        echo $post_access;

    endif;

get_footer();