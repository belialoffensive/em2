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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
    <style type="text/css">
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            filter: alpha(opacity=70);
            -moz-opacity: 0.7;
            -khtml-opacity: 0.7;
            opacity: 0.7;
            z-index: 100;
            display: none;
        }

        .cnt223 a {
            text-decoration: none;
        }

        .popup {
            width: 100%;
            margin: 0 auto;
            display: none;
            position: fixed;
            z-index: 101;
        }

        .cnt223 {
            min-width: 600px;
            width: 600px;
            min-height: 150px;
            margin: 100px auto;
            background: #f3f3f3;
            position: relative;
            z-index: 103;
            padding: 15px 35px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #000;
        }

        .cnt223 p {
            clear: both;
            color: #555555;
            /* text-align: justify; */
            font-size: 20px;
            font-family: sans-serif;
        }

        .cnt223 p a {
            color: #d91900;
            font-weight: bold;
        }

        .cnt223 .x {
            float: right;
            height: 35px;
            left: 22px;
            position: relative;
            top: -25px;
            width: 34px;
        }

        .cnt223 .x:hover {
            cursor: pointer;
        }
    </style>
    <script type='text/javascript'>
        $(function () {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.close').click(function () {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
            $('.x').click(function () {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    </script>
    <div class='popup'>
        <div class='cnt223'>
            <h1 align="center">Важное уведомление!</h1>
            <p align="center">
            В Битрикс24 теплые скидки до 30% при покупке на год! Успей приобрести!
                <br />
                <br />
                <a href='' class='close' align="center">Ок</a>
            </p>
        </div>
    </div>
</head>

<body id="top">
    <?php include('./partials/header-ru.php'); ?>
    <!-- <div class="popup-box" id="hid" style="display: block; visibility: hidden">
        <div class="transparent-layer"></div>
        <div class="popup-inner" style="">
        <button id="close">&times;</button>
            <div class="popup-msg">В Битрикс24 теплые скидки до 30% при покупке на год! Успей приобрести!
            </div>

            <button class="next-step-btn" onclick="location.href = 'b24-ru.php';">Узнать подробнее</button>
        </div>
    </div> -->
    <div class="wrapper row3">
        <main class="container clear">
            <div class="content">
                <div id="gallery">
                    <figure>
                        <header class="heading" align="center">НОВОСТИ ПОРТАЛА</header>
                        <ul align="center" class="nospace clear">
                            <!-- тут новости
                                <li class="one_third first"><a href="#"><img
                                        src="../images/demo/gallery/podbor_oborudovaniya_na_sayt_1x.jpg" alt=""></a>
                            </li>
                            <li class="one_third"><a href="#"><img
                                        src="../images/demo/gallery/dlya_sayta_ekomeken_1x.jpg" alt=""></a></li>
                            <li class="one_third"><a href="#"><img src="../images/demo/gallery/dlya_sayta_podbor_1x.jpg"
                                        alt=""></a></li> -->
                        </ul>
                    </figure>
                </div>
            </div>
            <div class="clear"></div>
        </main>
    </div>

    <div class="wrapper row3">
        <main class="container clear">
            <div class="content">
                <!-- ################################################################################################ -->
                <div id="gallery">
                    <figure>
                        <header class="heading" align="center">НАШИ ПАРТНЕРЫ</header>
                        <ul align="center" class="nospace clear">
                            <li class="one_third first"><a href="https://centereco.kz/"><img
                                        src="../images/demo/gallery/pavlodaro_1x.png" alt=""></a></li>
                            <li class="one_third"><a href="https://qso.kz"><img src="../images/demo/gallery/qso3.png"
                                        alt=""></a></li>
                            <li class="one_third"><a href="https://ecolomist.kz/"><img
                                        src="../images/demo/gallery/ecolomist_1x.png" alt=""></a></li>
                        </ul>
                        <ul align="center" class="nospace clear">
                            <li class="one_third first"><a href="https://ca-ace.org"><img
                                        src="../images/demo/gallery/logo.jpg" alt=""></a></li>
                            <li class="one_third"><a href="https://eabw.org/"><img
                                        src="../images/demo/gallery/logo_EABW_2x_1x.jpeg" alt=""></a>
                            </li>
                            <li class="one_third"><a href="https://ipm2.bitrix24.site/"><img
                                        src="../images/demo/gallery/logo_1x.png" alt=""></a>
                            </li>
                        </ul>
                    </figure>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>

    <div class="wrapper row3">
        <main class="container clear">
            <div class="content">
                <!-- ################################################################################################ -->
                <div id="gallery">
                    <figure>
                        <header class="heading" align="center">ПОСЕЩЕНИЕ ПРЕДПРИЯТИЙ И ДЕЛОВЫЕ ВИЗИТЫ В ГЕРМАНИЮ
                        </header>
                        <ul align="center" class="nospace clear">
                            <li class="one_third first"><a href="#"><img
                                        src="../images/demo/gallery/podbor_oborudovaniya_na_sayt_1x.jpg" alt=""></a>
                            </li>
                            <li class="one_third"><a href="#"><img
                                        src="../images/demo/gallery/dlya_sayta_ekomeken_1x.jpg" alt=""></a></li>
                            <li class="one_third"><a href="#"><img src="../images/demo/gallery/dlya_sayta_podbor_1x.jpg"
                                        alt=""></a></li>
                        </ul>
                    </figure>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>

    <script data-b24-form="inline/4/zw0nnx"
        data-skip-moving="true">(function (w, d, u) { var s = d.createElement('script'); s.async = true; s.src = u + '?' + (Date.now() / 180000 | 0); var h = d.getElementsByTagName('script')[0]; h.parentNode.insertBefore(s, h); })(window, document, 'https://cdn-ru.bitrix24.ru/b18363022/crm/form/loader_4.js');</script>

    <?php include('./partials/footer-ru.php'); ?>

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>

</html>