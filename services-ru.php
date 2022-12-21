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
        <div class="center btmspace-80">
                <h1 class="heading uppercase btmspace-30">Услуги</h1>
            </div>
            <div class="group">
                <div class="second">
                    <ul class="nospace group">
                        <li class="one_half first">
                            <h6 class="nospace btmspace-10" align="center"><i class="fa fa-location-arrow"></i>IT-КОНСАЛТИНГ</h6>
                            <p  align="center">Основным направлением работы нашей компании является IT-консалтинг, в ходе которого выявляются "узкие " места в бизнесе компании и определяется необходимость автоматизации. Очень часто можно ограничиться простыми решениями, не требующими больших затрат.
                            </p>
                        </li>
                        <li class="one_half">
                        <h6 class="nospace btmspace-10" align="center"><i class="fa fa-location-arrow"></i>ПОРТАЛЫ И ИНТЕРНЕТ-МАГАЗИНЫ</h6>
                            <p  align="center">Интернет и социальные сети - самый быстрый и эффективный инструмент для роста клиентской базы и выхода на новые рынки. Кроме того, необходимо обеспечить работу своих сотрудников в любом месте и в любое время. Наши услуги по внедрению корпоративной системы управления, созданию интернет-магазинов и CRM систем очень быстро выведут ваш бизнес на новый уровень.
                            </p>
                        </li>
                    </ul>
                    <ul class="nospace group">
                        <li class="one_half first">
                            <h6 class="nospace btmspace-10" align="center"><i class="fa fa-location-arrow"></i>КОМПЬЮТЕРЫ И ОРГТЕХНИКА</h6>
                            <p align="center">Мы осуществляем поставку, монтаж и обслуживание элементов IT-инфраструктуры - от ноутбуков для бизнеса до развертывания корпоративных порталов,подбор, поставку, установку лицензионного программного обеспечения для офисной работы, а также обучение навыкам его эффективного применения.
                            </p>
                        </li>
                        <li class="one_half">
                        <h6 class="nospace btmspace-10" align="center"><i class="fa fa-location-arrow"></i>ЛАБОРАТОРНОЕ ОБОРУДОВАНИЕ</h6>
                            <p align="center">Начинаете или уже в самом разгаре научных исследований? Мы поставим специальное лабораторное оборудования для проведения исследований состояния окружающей средытехнологии оценки антропогенных рисков на производстве лучшего качества и цены.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
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