<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>DREAMPLAY</title>
    <base href="/">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content=''>
    <meta property="og:url" content="">
    <meta property="og:image" content="" />
    <meta property="al:web:url" content="">
    <link rel="canonical" href="">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR:400,500,600,700,900" rel="stylesheet">
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
    <!--===============================================================================================-->
    <link href="/stylesheet/jquery.bxslider.css" rel="stylesheet" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="stylesheet/stylemm4.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.cycle2.js"></script>

    <script>
        $(document).ready(function() {
            $('.bxslider').bxSlider({
                mode: 'fade',
                speed: 500,
                auto: true
            });
        });
    </script>

    <script>
        // 메뉴 호출 및 숨기기
        function openMENU() {
            document.getElementById("menu-hide").style.display = "block";
            document.getElementById("openBTN").style.display = "none";
            document.getElementById("closeBTN").style.display = "block";
        }

        function closeMENU() {
            document.getElementById("menu-hide").style.display = "none";
            document.getElementById("openBTN").style.display = "block";
            document.getElementById("closeBTN").style.display = "none";
        }

        function openShare() {
            document.getElementById("share-hide").style.display = "flex";
            document.getElementById("menu-hide").style.display = "none";
            document.getElementById("openBTN").style.display = "block";
        }

        function closeShare() {
            document.getElementById("share-hide").style.display = "none";
            // document.getElementById("openSBTN").style.display = "block";
            // document.getElementById("closeSBTN").style.display = "none";
        }
    </script>


</head>

<body>

    <?php include("head.php"); ?>

    <div class="col-12 heightA flex center" id="god">

    </div>

</body>

</html>