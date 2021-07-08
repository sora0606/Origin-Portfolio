<!DOCTYPE html>
<html lang="jp">
<style>

    .fixed{
    position:fixed;
    top: 0;
    width: 100%;
    height: 13rem;
    transition: all .8s;
    z-index: 40;
    }

    #header{
        display: flex;
        align-items: center;
    }

</style>
<body>
<div class="fixed">
    <header id="header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="portfolio-title">Origin</a>
        <nav id="navi">
            <h2 class="nav-title">/Sora Shimada/</h2>
            <ul class="slick-area">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">Home</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/about" class="about">About</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/service" class="service">Service</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/works" class="works">Works</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/contact" class="contact">Contact</a></li>
            </ul>
        </nav>

            <div class="toggle_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="mask"></div>


    </header>
</div>

<script>
    // スクロール時のイベント
    $(window).scroll(function(){
    if($(window).scrollTop()){
        $(".fixed").css("background-color" , "#0e0d20");
    }else{
        $(".fixed").css("background-color" , "transparent");
    }
    });
</script>

</body>
</html>