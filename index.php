<?php
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
    <!--<link rel="stylesheet" href="css/login.css">-->

    <!-- Links -->
	<link rel="icon" type="image/png" href="<?php echo INFORMATION['meta']['logo'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


    <!-- Scripts -->
	<script src="https://kit.fontawesome.com/<?php echo $information['fontAwesomeKit'] ?>.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        :root {
            --text-color: #<?php echo INFORMATION['colors']['text'] ?>;
            --accent-color: #<?php echo INFORMATION['colors']['accent'] ?>;
            --background-color: #<?php echo INFORMATION['colors']['background'] ?>;
            --foreground-color: #<?php echo INFORMATION['colors']['foreground'] ?>;
            --preloader-color: #<?php echo INFORMATION['colors']['preloader'] ?>;
        }

        body {
            font-family: "Open Sans", sans-serif;
            display: flex;
            min-height: 100vh;
            width: 100vw;
            margin: 0;
            background-color: var(--background-color);
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--text-color);
        }

        .preloader {
            position: absolute;
            top: 0;
            left: 0;
            visibility: visible;
            opacity: 1;
            height: 100%;
            width: 100%;
            background-color: var(--preloader-color);
            transition: opacity .75s ease, visibility .75s ease;
        }

        .preloader.loaded {
            visibility: hidden;
            opacity: 0;
        }

        .author p {
            margin: 0;
        }

        .author img.logo {
            height: 40vh;
            width: auto;
        }

        .author p.name {
            font-weight: bold;
            font-size: 3.5vh;
            margin-bottom: 1.5vh;
        }
    </style>
</head>
<body>
    <section class="preloader"></section>
    <section class="author">
        <?php echo !is_null(INFORMATION['author']['logo']['link']) ? "<img class='logo' src='".INFORMATION['author']['logo']['link']."' alt='AUTHOR_LOGO'>" : "" ?>
        <p class="name"><?php echo INFORMATION['author']['name'] ?></p>
        <p class="description"><?php echo INFORMATION['author']['description'] ?></p>
        <div class="media">
        </div>
    </section>
    <script>
        window.onload = function() {
            document.querySelector(".preloader").classList.add("loaded");
        }
    </script>
</body>
</html>