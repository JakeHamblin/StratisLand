<?php
    /**
     * File: index.php
     * Author: Jake Hamblin
     * Date: July 4, 2024
     * Description: A PHP site using HTML and CSS that provides a simple landing page with customizable options
    */

    require("config.php");
?><!DOCTYPE html>
<html>
<head>
    <!-- Title -->
    <title><?php echo ((is_null(INFORMATION['meta']['titleTag'])) ? "" : INFORMATION['meta']['titleTag']." - ").INFORMATION['meta']['name'] ?></title>

    <!-- Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#<?php echo INFORMATION['meta']['color'] ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@jekeltor">
    <meta property="og:url" content="<?php echo INFORMATION['meta']['domain'] ?>">
    <meta property="og:title" content="<?php echo ((is_null(INFORMATION['meta']['titleTag'])) ? "" : INFORMATION['meta']['titleTag']." - ").INFORMATION['meta']['name'] ?>">
    <meta property="og:description" content="<?php echo INFORMATION['meta']['description'] ?>">
    <meta property="og:image" content="<?php echo INFORMATION['meta']['logo'] ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/main.css?rnd=1.0">

    <!-- Links -->
    <link rel="icon" type="image/png" href="<?php echo INFORMATION['meta']['logo'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/<?php echo INFORMATION['fontAwesomeKit'] ?>.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        :root {
            --text-color: #<?php echo INFORMATION['colors']['text'] ?>;
            --accent-color: #<?php echo INFORMATION['colors']['accent'] ?>;
            --background-color: #<?php echo INFORMATION['colors']['background'] ?>;
            --foreground-color: #<?php echo INFORMATION['colors']['foreground'] ?>;
            --preloader-color: #<?php echo INFORMATION['colors']['preloader'] ?>;
        }
    </style>
</head>
<body>
    <section class="preloader"></section>
    <section class="author">
        <?php echo !is_null(INFORMATION['author']['logo']['link']) ? "<img class='logo".(INFORMATION['author']['logo']['round'] == TRUE ? " round" : "")."' src='".INFORMATION['author']['logo']['link']."' alt='AUTHOR_LOGO'>" : "" ?>
        <p class="name"><?php echo INFORMATION['author']['name'] ?></p>
        <?php echo !is_null(INFORMATION['author']['description']) ? "<p class='description'>".INFORMATION['author']['description']."</p>" : "" ?>
        <?php
            if(count(INFORMATION['media']) > 0) {
        ?>
        <div class="media">
            <?php
                foreach(INFORMATION['media'] as $media) {
            ?>
            <a class="social" href="<?php echo $media['link'] ?>" target="_blank"><i class="<?php echo $media['tag'] ?>"></i></a> 
            <?php
                }
            ?>
        </div>
        <?php
            }
        ?>
    </section>
    <script src="./js/onload.js"></script>
</body>
</html>