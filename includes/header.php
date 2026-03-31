<!DOCTYPE html>
<html>
<?php
$site = "Unspecialist";
$brief = "A home for curious minds building across art, code, design, and ideas.";
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<head>
    <title><?= $title ?? $site ?></title>
    <meta name="description" content="<?= $description ?? $brief ?>">

    <meta property="og:title" content="<?= $title ?? $site ?>">
    <meta property="og:description" content="<?= $og_description ?? $brief ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://unspecialist.com">
    <meta property="og:image" content="https://unspecialist.com/og-image.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?? $site ?>">
    <meta name="twitter:description" content="<?= $og_description ?? $brief ?>">
    <meta name="twitter:image" content="https://unspecialist.com/og-image.jpg">

    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Unspecialist" />
    <link rel="manifest" href="/site.webmanifest" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= getenv('GTAG') ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-WNKSZ9W702');
    </script>
</head>

<body>
    <header class="container flex nav">
        <a href="/" class="un-logo">
            <h3>Unspecialist</h3>
            <span>The World Wants You Small. Don’t Listen.</span>
        </a>
        <button class="hamburger" id="hamburger">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="/about" class="<?= $currentPath === '/about' ? 'active' : '' ?>">About</a>
            <a href="/manifesto" class="<?= $currentPath === '/manifesto' ? 'active' : '' ?>">Manifesto</a>
            <a href="https://newsletter.unspecialist.com" target="_blank">Newsletter</a>
            <a href="https://www.youtube.com/@imunspecialist" target="_blank">YouTube</a>
        </nav>
    </header>
    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
    </script>