<?php 
if(isset($_GET['slug']) && !empty($_GET['slug'])) {
    $slug = $_GET['slug'];
    include 'config/db.php';
    include 'inc/helpers.php';
    $page_Data = getPageData($conn, $slug);

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Metamorphosis | <?php echo isset($page_Data['title']) ? $page_Data['title'] : 'Home'; ?></title>
    
    <meta name="title" content="<?php echo isset($page_Data['meta_title']) ? $page_Data['meta_title'] : 'Metamorphosis Clinic'; ?>">
    
    <meta name="description" content="<?php echo isset($page_Data['meta_description']) ? $page_Data['meta_description'] : 'Metamorphosis Clinic'; ?>">
    
    <meta property="og:image" content="<?php echo home_url(); ?>/<?php echo $page_Data['og_image']; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo home_url(); ?>/assets/images/global/favicon.ico">

    <!-- Preconnect (Fonts Performance Boost) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts (with display swap) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS (keep for layout) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" >

    <!-- Swiper CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <script>
        window.submitConfig = {
            submitUrl: '<?php echo home_url(); ?>/inc/submit.php'
        };
    </script>

    <link rel="stylesheet" href="<?php echo home_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo home_url(); ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo home_url(); ?>/assets/css/responsive.css">

    <!-- Fallback for no-JS -->
    <noscript>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    </noscript>
    <!-- assets/images/global/site-logo.webp -->

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PLFVDDM');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLFVDDM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

