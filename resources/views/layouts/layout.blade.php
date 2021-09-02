<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>관리자 | @yield("title", "main")</title>

    <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/reset.css">
    <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/app.css">
    <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/modal.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/compile/fontawesome.css">

    @stack('scripts')

</head>
<body>
<div id="app">
    <nav id="nav">
        <div class="nav-logo"><a href="/"><img src="../../img/logo.png" alt="로고 이미지"></a></div>
        <ul class="nav-list">
            <li class="">
                <span>일일정보</span>
            </li>
            <li class="">
                <span>노무자 일정보</span>
            </li>
            <li class="">
                <span>일일정보</span>
            </li>
            <li class="">
                <span>노무관리</span>
            </li>
            <li class="">
                <span>거래처관리</span>
            </li>
            <li class="">
                <span>노무자문서</span>
            </li>
            <li class="">
                <span>거래처문서</span>
            </li>
            <li class="">
                <span>문의하기</span>
            </li>
            <li class="">
                <span>공지사항</span>
            </li>
        </ul>
        <!-- end .nav-list -->
    </nav>


    {{--   <ol class="nav-sub-menu">
           <i class="fas fa-minus"></i>
           <li><a href="admin/"></a></li>
       </ol>--}}


    <main id="main">

        <!--head-->
        <header>
            <ul>
                <li>
                    <a href="login" class="logout-btn">로그아웃</a>
                </li>
                <li>
                    <a href="confirm" class="modify-btn">정보수정</a>
                </li>
                <li class="introduce">
                    <span class="">홍길동</span> 님 환영합니다.
                </li>
                <li>
                    이용기간 : 2021-07-01 ~ 2021-07-31
                    <span class="d-day">(D-1)</span>
                    <button class="btn extension">연장</button>
                </li>
            </ul>
        </header>

        <!-- body -->
        <div class="content-body">
            @yield('content')
        </div>
    </main>
    <!-- end main -->

    <footer>
        <div>COPYRIGHT 2021 일가다 ALL RIGHTS RESERVED.</div>
    </footer>
</div>
<script src="http://{{$_SERVER['HTTP_HOST']}}//js/admin.js"></script>
</body>
</html>
