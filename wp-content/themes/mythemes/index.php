<!DOCTYPE html>
<html lang="jp">

<head>
    <?php include("head.php"); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/home.js"></script>
</head>

<body>
    <div id="particles-js">
        <header id="header">
            <nav id="navi">
                <h2 class="nav-title">/Sora Shimada/</h2>
                <ul class="slick-area">
                    <li><a href="" class="home">Home</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/about" class="about">About</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/service" class="service">Service</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/works" class="works">Works</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/contact" class="contact">Contact</a></li>
                </ul>
            </nav>

            <a href="" class="portfolio-title">Origin</a>

            <div class="toggle_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="mask"></div>

        </header>
        <main id="first-pege">
            <div class="myname">
                <span class="name">Sora Shimada</span>
            </div>

            <section class="grid">
                <div class="item item-1"></div>
                <div class="item item-2"></div>
                <div class="item item-3"></div>
                <div class="item item-4"></div>
                <div class="item item-5"></div>
                <div class="item item-6"></div>
                <div class="item item-7"></div>
                <div class="item item-8"></div>
            </section>
        </main>
    </div>
    <?php wp_footer(); ?>
</body>

</html>