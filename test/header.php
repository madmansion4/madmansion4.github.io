<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>header</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/earlyaccess/notosanskr.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylesheets/stylemm4.css">
    <link rel="stylesheet" href="stylesheets/style_new.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <script>
        function openMENU() {
            document.getElementById("menu-hide").style.display = "flex";
            document.getElementById("openBTN").style.display = "none";
        }
        function closeMENU() {
            document.getElementById("menu-hide").style.display = "none";
            document.getElementById("openBTN").style.display = "flex";
        }
        function fnApps() {
            var offset = $("#app").offset();
            $('html, body').animate({ scrollTop: offset.top }, 200);
            $("#hamburger").show();
            $("#mobile-menu").hide();
            $("#close").hide();
        }
        $(document).ready(function () {
            $("#mobile-menu").hide();
            $("#close").hide();
            $("#hamburger").click(function () {
                $("#mobile-menu").show();
                $("#hamburger").hide();
                $("#close").show();
                $('body').scroll = 0;
            });

            $("#close").click(function () {
                $("#mobile-menu").hide();
                $("#hamburger").show();
                $("#close").hide();
            });

            $("#bg-close").click(function () {
                $("#mobile-menu").hide();
                $("#hamburger").show();
                $("#close").hide();
            });
        });

    </script>

</head>

<body>
    <header class="fixed flex center vt-center col-12 height6 bg-white z10000">
        <div class="flex between vt-center col-12-8rem">
            <a class="flex vt-center height6 f0" href="/">
                <h1 class="h1-title">FILMLIKE</h1>
                <!-- <h2 class="h2-title ml-1">FILMLIKE</h2> -->
            </a>
            <nav class="col-4" id="pc-menu">
                <ul class="flex right vt-center" id="menu_ul">
                    <!-- <div onClick="fnApps()">
                        <li class="mr-4 li_apps">Apps</li>
                    </div> -->
                    <a href="/#app">
                        <li class="mr-4 li_apps">Apps</li>
                    </a>
                    <a href="/news.html">
                        <li class="mr-4 li_news">News</li>
                    </a>
                    <a href="/contact.html">
                        <li class="mr-4 li_contact">Contact</li>
                    </a>
                    <a class="f0" href="https://instagram.com/filmlike_me" target="_blank">
                        <img class="width25 height25" src="imgs/icon_insta.svg">
                    </a>
                </ul>
            </nav>
            <div class="pointer f0" id="mobile-btn">
                <img class="width25 height25" src="imgs/btn_menu.svg" id="hamburger">
                <img class="width25 height20" src="imgs/btn_close2.svg" id="close">
            </div>
        </div>

        <!-- 모바일 메뉴 -->
        <div class="absol col-12 heightA top-0 mt-6" id="mobile-menu">
            <nav class="col-12 bg-white">
                <ul class="flex vt vt-center" id="m_menu_ul">
                    <a class="col-12 mt-2" onClick="fnApps()">
                        <li class="li_apps">Apps</li>
                    </a>
                    <a class="col-12" href="/news.html">
                        <li class="li_news">News</li>
                    </a>
                    <a class="col-12" href="/contact.html">
                        <li class="li_contact">Contact</li>
                    </a>
                    <a class="col-12 mb-3" href="https://instagram.com/filmlike_me" target="_blank">
                        <li class="">Instagram</li>
                    </a>
                </ul>
            </nav>
            <div class="fixed col-12 heightvh bg-bb op-07" id="bg-close"></div>
        </div>


    </header>
</body>

</html>