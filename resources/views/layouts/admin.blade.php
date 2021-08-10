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
    <x-sidebar :type="$type"/>

    <main id="main">
        <header>
            <h1 class="main-title">@yield("title", "메인")</h1>
        </header>
    </main>
</div>
<script src="../js/admin.js"></script>
</body>
</html>
