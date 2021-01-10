<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<?php
$page = $GLOBALS['page'];
?>

<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <!-- mengubah ikon di title bar -->
    <link rel="icon" href="images/kopi.jpg" type="image/x-icon" />
</head>

<body id="top">
    <div class="wrapper row0">
        <header id="header" class="hoc clear" style="padding: 10px;">
            <div id="logo" class="one_quarter first">
                <img src="images/logo-unej.png" alt="logo-unej" style="height: 100px;">
                <!-- <h1><a href="index.html"><span>w</span>ave<span>f</span>ire</a></h1> -->
            </div>
            <div class="three_quarter">
                <ul class="nospace clear" style="margin-top: 30px;">
                    <li class="one_third first">
                        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +62 822 5774 6451</span></div>
                    </li>
                    <li class="one_third">
                        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> lidiawildan14@gmail.com</span></div>
                    </li>
                    <li class="one_third">
                        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    <div class="wrapper row1">
        <section class="hoc clear">
            <nav id="mainav">
                <ul class="clear">
                    <li <?php if ($page == "beranda") {
                        ?> class="active" <?php } ?>><a href="index.php">Beranda</a></li>
                    <li><a class="drop" href="#">Halaman</a>
                        <ul>
                            <li><a href="data.php">Data Hilirisasi Produk Kopi Arabika Ijen Raung</a></li>
                            <li><a href="pages/full-width.html">Peta Persebaran Hilirisasi Produk Kopi Arabika Ijen Raung</a></li>
                        </ul>
                    </li>
                    <li <?php if ($page == "petunjuk") {
                        ?> class="active" <?php } ?>><a href="petunjuk.php">Petunjuk Penggunaan</a></li>
                    <li <?php if ($page == "tentang") {
                        ?> class="active" <?php } ?>><a href="tentang.php">Tentang</a></li>
                </ul>
            </nav>
            <!-- <div id="searchform">
                <div>
                    <form action="#" method="post">
                        <fieldset>
                            <legend>Quick Search:</legend>
                            <input type="text" placeholder="Enter search term&hellip;">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div> -->
        </section>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>