<main id="main" class="main" role="main">

    <section class="uk-section" data-section="preface">
        <div class="uk-container">
            <div uk-grid class="uk-grid-large">
                <div class="uk-width-2-3@m">

                    <h3>Leveraging Relationships, Delivering Results</h3>
                    <article>
                        <h2>Keystone Mortgage Corporation furnishes its clients with a powerful advantage in today's commercial real estate market by providing expert commercial financing advisement and delivering the industry's best rates and service.</h2>
                        <p>As a result, astute commercial real estate investors and developers throughout Southern California – and beyond – depend on Keystone Mortgage Corporation for best-in-class, full-service commercial real estate debt and equity financing.</p>
                        <p>Established in 1957, Keystone Mortgage Corporation has earned a sterling reputation for its five decades of unwavering, results-driven service to clients. With a steadfast yet nimble team of experts, Keystone Mortgage Corporation continues to lead the industry in innovative commercial financing solutions and serves as the keystone our clients require to succeed in commercial real estate.</p>
                        <p><a href="#" class="text-link">Read More</a></p>
                    </article>
                    
                </div>
                <div class="uk-width-1-3@m">

                    <h3>Services</h3>
                    <dl class="uk-description-list">
                        <dt>Loan Programs</dt>
                        <dd>
                            <p>Programs include short- and long-term fixed and floating rate financing, as well as construction, bridge, mezzanine financing.</p>
                            <p><a href="#" class="text-link">Learn More</a></p>
                        </dd>
                        <dt>Loan Servicing</dt>
                        <dd>
                            <p>Customized loan servicing solutions to an investor's needs, while providing superior service in a personal and professional way.</p>
                            <p><a href="#" class="text-link">Learn More</a></p>
                        </dd>
                    </dl>

                </div>
            </div>
        </div>
    </section>

    <section class="uk-section" data-section="presentation">
        <div class="uk-container uk-container-large">

            <div uk-slider class="uk-position-relative">
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-position-relative uk-visible-toggle">
                        <ul class="uk-slider-items uk-child-width-1-1">
                            <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
                            <li>
                                <img src="//placem.at/places?w=1400&h=550&txt=0&random=<?=$i?>" alt="">
                                <div class="uk-card uk-card-default uk-card-body">
                                    <h4>Featured Property Transactions</h4>
                                    <div class="--property-info">
                                        Orange County ANCHORED RETAIL
                                        <span class="uk-text-meta">
                                            Orange County, CA <br> Retail | Correspondent Life Company Lender
                                        </span>
                                        <strong>$60,000,000.00</strong>
                                    </div>
                                    <a href="#" class="text-link">View Portfolio</a>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>                      
                    </div>
                    <div class="uk-visible@l">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>                    
                </div>
                <ul class="uk-slider-nav uk-dotnav"></ul>
            </div>         

        </div>
    </section>

    <section class="uk-section" data-section="testimonials">
        <div class="uk-container uk-container-large">

            <div uk-slider class="uk-box-shadow-small">
                <div class="uk-slider-container uk-position-relative uk-visible-toggle">
                    <ul class="uk-slider-items uk-child-width-1-1">
                        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                        <li>
                            <div uk-grid class="uk-grid-collapse uk-grid-match uk-flex-middle" uk-height-match="target: > div">
                                <div class="uk-width-expand@m">
                                    <div class="--testimonials-item">
                                        <h3>What Other People Say</h3>
                                        <blockquote cite="#">
                                            <p>Curabitur iaculis vel lorem id imperdiet. Integer ultrices viverra condimentum. Aenean feugiat vestibulum scelerisque. Aliquam nec elementum dui. Nulla malesuada a justo at dignissim. Suspendisse pellentesque, libero vitae pharetra porttitor, libero purus volutpat nulla, at aliquam neque enim at quam. Fusce euismod tempor quam, sit amet ornare tortor consequat ut.</p>
                                            <footer>John Doe, President, <cite><a href="#">J-D Corp— 101</a></cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="uk-width-large@m">
                                    <img src="//placem.at/places?w=1400&h=500&txt=0&random=<?=$i?>" alt="">
                                </div>
                            </div>
                        </li>
                        <?php endfor; ?>
                    </ul>

                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                </div>
            </div>

        </div>
    </section>

</main>