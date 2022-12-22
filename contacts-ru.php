<?php 
session_start();
include('./db/dbConnect.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ecomeken - экологичные экономичные IT-технологии и решения</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
    <?php include('./partials/header-ru.php'); ?>
    <div class="wrapper row3">
        <main class="container clear">
            <div class="group">
                <div class="two_third first"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2502.913051515097!2d71.36783191612895!3d51.14695447957741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424586595262e7e9%3A0xef9e9fddc0eb35fb!2z0JrQvtGA0LPQsNC70LbQuNC90YHQutC-0LUg0YguIDIxLCDQkNGB0YLQsNC90LAgMDIwMDAw!5e0!3m2!1sru!2skz!4v1671710373915!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div class="one_third">
                    <h2 class="heading" align="center">Связаться с нами</h2>
                    <p align="justify">
                    Республика Казахстан, <br>г. Астана<br>
                    Шоссе Коргалжын, 21/1,<br>
                    Офис 7 (?)<br>
                    </p>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>
    <script data-b24-form="inline/4/zw0nnx" data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://cdn-ru.bitrix24.ru/b18363022/crm/form/loader_4.js');</script>
    <?php include('./partials/footer-ru.php'); ?>

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>