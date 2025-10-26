<?php
require_once __DIR__ . '/../config/db.php';

$user_ip = $_SERVER['REMOTE_ADDR'];
$page = 'home';

// Check if IP already exists
$stmt = $pdo->prepare("SELECT visitorip FROM traffic WHERE page = ? AND visitorip = ?");
$stmt->execute([$page, $user_ip]);

if ($stmt->rowCount() === 0) {
    // New visitor – insert
    $insert = $pdo->prepare("INSERT INTO traffic (page, visitorip) VALUES (?, ?)");
    $insert->execute([$page, $user_ip]);
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="google-site-verification" content="OBfZzmfRCYv38ZBwNMZZQ1h2vpQCXpap5wzO9LZrCYM" />
    
    <meta name="description" content="BlinksCore is a trusted financial company based in Lagos, Nigeria, specializing in providing Proof of Funds and Employment Salary History services. We offer reliable documentation solutions for individuals and businesses to meet financial and compliance requirements.">
    <meta property="og:url" content="https://blinkscore.ng/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="BlinksCore&trade; :: Financial Proof You Can Trust"/>
    <meta name="og:description" content="BlinksCore is a trusted financial company based in Lagos, Nigeria, specializing in providing Proof of Funds and Employment Salary History services. We offer reliable documentation solutions for individuals and businesses to meet financial and compliance requirements.">
    <meta name="keywords" content="Proof of Funds, Employment Salary History, Financial Services, Lagos Nigeria, Proof of Employment, Financial Documentation, Salary Verification, BlinksCore, Nigeria Financial Solutions, Compliance Services">

    <title>BlinksCore&trade; :: Financial Proof You Can Trust</title>

    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon_light.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bexon-icons.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
  <div class="body-overlay"></div>

    <!-- Preloader Start -->
    <div class="tj-preloader is-loading">
        <div class="tj-preloader-inner">
            <div class="tj-preloader-ball-wrap">
                <div class="tj-preloader-ball-inner-wrap">
                    <div class="tj-preloader-ball-inner">
                        <div class="tj-preloader-ball"></div>
                    </div>
                    <div class="tj-preloader-ball-shadow"></div>
                </div>
                <div id="tj-weave-anim" class="tj-preloader-text">Loading...</div>
            </div>
        </div>
        <div class="tj-preloader-overlay"></div>
    </div>

    <!-- back to top start -->
    <div id="tj-back-to-top"><span id="tj-back-to-top-percentage"></span></div>
    <!-- back to top end -->