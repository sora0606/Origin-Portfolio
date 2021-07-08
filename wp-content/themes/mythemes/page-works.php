<!DOCTYPE html>
<html lang="jp">
<head>
    <?php include("head.php") ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/works.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/works.js"></script>
</head>
<body>
    <?php get_header(); ?>
    <div class="mainvisual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/work.jpg" alt="">
        <h1 class="page-title">Works</h1>
        <a href="#">Scroll</a>
    </div>
    <div id="particles-js">
        <main class="page-works">
            <div class="work work-1">
                <div class="work-mask">
                    <span class="line-1">
                        <span class="line">
                            <div class="work-text">
                                <h3 class="content-title">jQueryとCSSを用いたサイトのコーディング</h3>
                                <p class="skill">HTML/CSS/jQuery</p>
                                <a href="https://mosyasaito2.herokuapp.com/">https://mosyasaito2.herokuapp.com/</a>
                            </div>
                        </span>
                    </span>
                </div>
            </div>
            <div class="work work-2">
                <div class="work-mask">
                    <span class="line-1">
                        <span class="line">
                            <div class="work-text">
                                <h3 class="content-title">ポートフォリオの模写コーディング</h3>
                                <p class="skill">HTML/CSS</p>
                                <a href="https://sora-portfolio-1.herokuapp.com/">https://sora-portfolio-1.herokuapp.com/</a>
                            </div>
                        </span>
                    </span>
                </div>
            </div>
            <div class="work work-3">
                <div class="work-mask">
                    <span class="line-1">
                        <span class="line">
                            <div class="work-text">
                                <h3 class="content-title">カフェのお店をイメージしてコーディング</h3>
                                <p class="skill">HTML/CSS</p>
                                <a href="https://sora-coffee.herokuapp.com/">https://sora-coffee.herokuapp.com/</a>
                            </div>
                        </span>
                    </span>
                </div>
            </div>
            <div class="work work-4">
                <div class="work-mask">
                <span class="line-1">
                    <span class="line">
                        <div class="work-text">
                            <h3 class="content-title">ホームページの模写コーディング</h3>
                            <p class="skill">HTML/CSS</p>
                            <a href="https://sora-profile.herokuapp.com/">https://sora-profile.herokuapp.com/</a>
                        </div>
                    </span>
                </span>
                </div>
            </div>
        </main>
        <?php get_footer(); ?>
    </div>
</body>
</html>