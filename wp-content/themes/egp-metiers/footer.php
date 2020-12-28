<div class="info-bulle">
    <div class="icon-round">
        ?
    </div>
    <div class="text-bulle">
        Je souhaite <div class="font-italic">être accompagné</div>
    </div>
</div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <a href="<?php echo get_site_url(); ?>" class="header-logo">
                    <?php lsd_get_template_part('icons','header', 'logo'); ?>
                </a>
            </div>
            <div class="col-sm-3">
                <ul class="nav-footer">
                    <li>
                        <a href="" class="sans-serif small white">
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a href="" class="sans-serif small">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="" class="sans-serif small">
                            Behance
                        </a>
                    </li>
                    <li>
                        <a href="" class="sans-serif small">
                            Dribbble
                        </a>
                    </li>
                    <li>
                        <a href="" class="sans-serif small">
                            Journal
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="nav-footer">
                    <li>
                        <a href="" class="sans-serif small white">
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a href="" class="sans-serif small">
                            Instagram
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 text-right">
                <p class="small">
                    +33.1.23.45.67.89 <br/>
                    contact@enseignegambetta.fr<br/>
                    18b Rue Saint-Florent<br/>
                    75011, Paris<br/>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p>
                    Suivez-nous
                </p>
                <ul class="social-menu-icons">
                    <li>
                        <a href="">
                            <?php lsd_get_template_part('icons','icon', 'facebook'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <?php lsd_get_template_part('icons','icon', 'instagram'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="small">
                    ©2020 Enseigne Gambetta
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="loader-container">
    <div class="text-loader sans-serif small">
        Store Gambetta
    </div>

    <div class="percent-number" id="percent-load">
        0
    </div>

    <div class="masque" id="masque"></div>
</div>



        <?php wp_footer(); ?>

    </body>
</html>
