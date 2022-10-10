<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
        <link rel="manifest" href="/img/manifest.json"> 
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZinPoi</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <style>

        h2 {
            padding: 245px;
            font-size: 50px;
            border: 1px solid #303136;
            background-color: #303136;
            margin: 0;
            border-collapse: collapse;
            animation: intro1 2s;
            background-image: url('unknown.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #title1 {
            color: #4169e1;
        }

        h2 {
            color: white;
        }
        #title_desc1,#title_desc2 {
            font-size: 20px;
        }
         body{
            background-color: #303136; 
            margin: 0;
        } 
        h3{
            padding: 245px;
            border: 1px solid white;
            background-color: white;
            color: black;
            margin: 0;
            font-size: 50px;
            border-collapse: collapse;            
        }
        /* @keyframes intro1{
            from{

                opacity: 0;
            }to{

                opacity: 1;
            }
        }
        @keyframes intro2{
            from{
                opacity: 0;
            }to{
                font-size: 20px;
            }
        }
        @keyframes intro3{
            from{
                opacity: 0;
            }to{
                opacity: 1;
            }
        } */
        #title_desc2,#title_h3,#img_1{
            animation-fill-mode: forwards;
        }
        #invite_btn{
            padding: 15px;
            background-color: #4169e1;
            color: white;
            border-radius: 5px;
            border: 1px solid #4169e1;
        }
        #invite_btn:hover{
            transform: translateY(2px);
        }
        #title_desc2,#title_h3{
            display: inline;   
        }
        #menu{
            width: 20px;
            height: 20px;
        }
        ol{
            color: white;
            border-right: 1px solid white;
            width: 120px;
            margin: none;
            display: none;
            margin: 0;
        }
        #option_1{
            font-size: 15px;
            text-decoration: none;
            color: white;
            transform: translateY(2px);
        }
        #icon{
            height: 33px;
            padding-left: 50px;
        }
        #title_1{
            text-decoration: none;
            color: white;
        }
        #server_btn{
            padding: 15px;
            background-color: #4169e1;
            color: white;
            border-radius: 5px;
            border: 1px solid #4169e1;
        }
        #invite_btn2{
            padding: 15px;
            background-color: #4169e1;
            color: white;
            border-radius: 5px;
            border: 1px solid #4169e1;
        }
        #server_btn:hover,#invite_btn2:hover{
            transform: translateY(2px);
        }
        h4{
            text-align: center;
            color: gainsboro;
        }
        #desc2{
            text-align: center;
            color: gainsboro;
        }
        .nav-container{
            display: flex;
            flex-direction: row;
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: white;
            list-style-type: none;
            position: fixed;
            top: 0;
        }
        .nav-item {
            padding: 15px;
            cursor : pointer;
            line-height: 20px;
        }
        .nav-item-now {
            padding: 15px;
            cursor : pointer;
            line-height: 20px;
        }
        .nav-item-now a {
            text-align: center;
            text-decoration: none;
            color: black;
        }
        .nav-item a {
            text-align: center;
            text-decoration: none;
            color: #b0b0c2;
        }
        .nav-item1 {
            padding: 15px;
            cursor : pointer;
            line-height: 20px;
        }
        .nav-item:hover {
            background-color: gray;
        }  
        .nav-item-now:hover {
            background-color: gray;
        }
        @media (max-width:926px) {
            h3{
                padding: 0;
                text-align: center;
                animation: none;
                padding-top: 35px;
                padding-bottom: 35px;
            }
            #title_desc2,#title_h3,#img_1{
                animation: none;
                opacity: 1;
            }
            h2{
                padding: 0;
                padding-top: 35px;
                padding-bottom: 35px;
                text-align: center;
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <script>
        console.log(
            '%c잠깐만요!', 
            'color:RED; font-size:35px;'
        );
        console.log('지금 뭘 하려는진 모르겠지만.. 그대로 X버튼을 눌러주세요')
        // function doSomething() {
        //     $('#title_desc2').css({
        //         'animation':'intro3 2s',
        //         'animation-fill-mode': 'forwards'
        //     })
        //     $('#title_h3').css({
        //         'animation':'intro3 2s',
        //         'animation-fill-mode': 'forwards'
        //     })
        //     $('#img_1').css({
        //         'animation':'intro3 2s',
        //         'animation-fill-mode': 'forwards'
        //     })
        //     $('#invite_btn').css({
        //         'animation':'intro3 2s',
        //         'animation-fill-mode': 'forwards'
        //     })
        //     $('#server_btn').css({
        //         'animation':'intro3 2s',
        //         'animation-fill-mode': 'forwards'
        //     })
        // }
         
        // $(function () {
         
        //     $(window).scroll( function() {
        //         doSomething(); 
        //     });
         
        // });
        function home(){
            window.location.href = "https://zinpoi.tk"
        }
        function blog(){
            window.location.href = "https://blog.zinpoi.tk"
        }
        function server_btn(){
            window.location.href = "https://discord.gg/HgefkNed24"
        }
        </script>
        <nav class="nav-container">
            <li class="nav-item1">ZinPoi</li>
            <li cless="new=item"><a href="/engine/License">라이선스</a></li>
            <li class="nav-item-now"><a href="/">메인 페이지</a></li>
            <li cless="nav-item"><a href="/en_index.php">Engish</a></li>
            <li class="nav-item"><button id="server_btn" onclick="blog()">블로그</button></li>
            <li class="nav-item"><button id="server_btn" onclick="server_btn()">ZinPoi 디스코드 서버</button></li>
        </nav>
    <h2>안녕하세요. <div id="title1">ZinPoi 입니다.</div>
        
        <div id="title_desc1">저는 평범한 학생 개발자이며<br>게임하는걸 좋아하는 인간입니다!<br><button id="invite_btn2" onclick="invite_btn2()">안녕이 서버 참가</button></div>
    </h2>
    <a href="https://github.com/zinpoi" class="outlink-link"><img src="/img/github.svg" alt="깃허브" title="깃허브" class="outlinks-image"><span class="outlinks-text">깃허브</span></a><br><img src="/img/discord.svg" alt="Discord" title="Discord" class="outlinks-image"> zinpoi#4626</br>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
    ?>
</body>

</html>
