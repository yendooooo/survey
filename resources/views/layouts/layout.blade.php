<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>태영이 | @yield("title", "main")</title>
   
 
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
  
</head>
<body>



@if (session()->get("msg") != "")
    <script>
        alert('{{session()->get('msg')}}');
    </script>
@endif

@if (session()->get("error") != "")
    <script>
        alert('{{session()->get('error')}}');
    </script>
@endif

<div id="header">
    <div class="container__wr_1200">
        <div class="hd-nav">
            <div class="hd-logo">
                <a href="/"><img src="" alt=""></a>
            </div>

            <ul class="hd-menu">
                <li><a href="www.naver.com">ggg</a></li>
            </ul>
 
        @yield("content")
 



</div>
</div>
</div>
    <script src="/js/app.js"></script>

</body>
</html>
