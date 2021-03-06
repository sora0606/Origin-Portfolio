<!DOCTYPE html>
<html lang="jp">
<head>
    <?php include("head.php") ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
</head>
<body>
    <?php get_header(); ?>
    <div class="mainvisual">
        <h1 class="page-title">Contact</h1>
        <a href="#">Scroll</a>
    </div>
    <div id="particles-js">
        <main class="page-contact">
            <form action="<?php echo get_template_directory_uri(); ?>/contact-mail.php" method="post">
                <div class="flex">
                    <div class="input">
                        <label for="name">お名前</label>
                        <input type="text" placeholder="name" id="name" name="name" required>
                        <label for="mail">メールアドレス</label>
                        <input type="text" placeholder="mail" id="mail" name="mail" required>
                        <label for="title">題名</label>
                        <input type="text" placeholder="title" id="title" name="title">
                    </div>
                    <div class="textarea">
                        <label for="comment">お問い合わせ内容</label>
                        <textarea name="comment" id="comment" placeholder="contact us" rows="5"></textarea>
                    </div>
                </div>
                <span class="subbtn"><input  name="btn" class="btn" type="submit" value="Submit"></span>
            </form>
        </main>
        <?php get_footer(); ?>
    </div>
</body>
</html>