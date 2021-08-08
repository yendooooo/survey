<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>관리자 | @yield("title", "main")</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/compile/fontawesome.css">

</head>
<body>
<div id="app">
    <nav id="nav">
        <div class="nav-logo">
            <img src="../img/bee.png" alt="">
            <span>태영이</span>
        </div>

        <ul class="nav-list">
            <li class="nav-info">
                <span>사이트 관리</span>
                <i class="fas fa-plus arrow"></i>
            </li>
            <li class="active">
                <i class="fas fa-th-list"></i>
                <span>대시보드</span>
                <i class="fas fa-caret-up arrow"></i>
            </li>
            <li>
                <i class="fas fa-user-alt"></i>
                <span>사용자 관리</span>
                <i class="fas fa-caret-up arrow"></i>
            </li>
            <li>
                <i class="fas fa-poll"></i>
                <span>설문</span>
                <i class="fas fa-caret-up arrow"></i>
            </li>
            <ol class="{{}}">
                <li><a href="admin/category">분류등록</a></li>
                <li>설문등록</li>
            </ol>
            <li>
                <i class="fas fa-cog"></i>
                <span>환경설정</span>
                <i class="fas fa-caret-up arrow"></i>
            </li>
        </ul>
    </nav>

    <main id="main">
        <header>
            <h1 class="main-title">@yield("title", "메인")</h1>
        </header>
    </main>

</div>

<script src="js/admin.js"></script>
</body>
</html>
