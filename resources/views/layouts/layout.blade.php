<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>태영이 | @yield("title", "main")</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="/css/compile/fontawesome.css">

</head>
<body>

<div class="header_event">
</div>

<div>
    <nav class="header">
        <div class="header_navi">
            <ul class="navi_list">
                <li class="list-item"><a href=""><span>Logo</span></a></li>
                <li class="list-item"><a href="" class="current"><span>컨설팅</span></a></li>
                <li class="list-item"><a href=""><span>정보마당</span></a></li>
                <li class="list-item"><a href=""><span>MY비즈니스</span></a></li>
                <li class="list-item"><a href=""><span>기업홍보관</span></a></li>
                <li class="list-item"><a href="javascript:void(0)"><span><i class="fas fa-cog"></i></span></a></li>
            </ul>
        </div>

        <div class="header_menu">
            
        </div>
    </nav>



    @if($_SERVER['REQUEST_URI'] != '/')
    <nav class="sub-header">
        <div class="sub-header_text">
            <span><strong>글로벌 창업</strong>스타기업의</span>
            <span><strong>든든한 길잡이</strong>가 되겠습니다</span>
        </div>
    </nav>
    @endif

@yield("content")

</div>

    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
