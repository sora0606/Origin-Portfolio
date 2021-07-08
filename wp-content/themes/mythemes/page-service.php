<!DOCTYPE html>
<html lang="jp">
<head>
    <?php include("head.php"); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/service.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    <main class="page-service">
            <?php get_header(); ?>
            <div class="scroll">
                <section class="content content-img">
                    <h1 class="page-title">Service</h1>
                    <a href="#">Scroll</a>
                </section>
                <section class="content">
                    <div class="text">
                        <h3 class="content-title">Direction</h3>
                        <p class="content-text">クライアント様のご希望に応じて、全体の設計をさせていただきます。基点であり、重要な部分です。<br>夢のあるWedサイトを共に作っていきます。</p>
                    </div>
                </section>

                <section class="content">
                    <div class="text">
                        <h3 class="content-title">Design</h3>
                        <p class="content-text">クライアント様のご要望を基に、デザインを作成させて頂きます。デザインとは、個性。ユーザー目線を意識しつつ、デザイン案をご提示させて頂きます。</p>
                    </div>
                </section>

                <section class="content">
                    <div class="text">
                        <h3 class="content-title">Coding</h3>
                        <p class="content-text">デザインを基にコーティングをさせて頂きます。動きのあるサイト、レスポンシブ対応サイト、など様々なサイトのコーディングを行っています。</p>
                    </div>
                </section>
                <section class="content">
                    <?php get_footer(); ?>
                </section>
            </div>
    </main>
</body>
</html>