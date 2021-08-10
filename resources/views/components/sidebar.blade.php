<?php $type = $attributes['type']; ?>

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
        <li class="{{$type == 'dashBoard'? 'active':''}}">
            <i class="fas fa-th-list"></i>
            <span>대시보드</span>
            <i class="fas fa-caret-{{$type == 'dashBoard'? 'down':'up'}} arrow"></i>
        </li>
        <ol class="{{$type == 'dashBoard'? 'on':''}} nav-sub-menu">
            <li><a href="/">메인</a></li>
        </ol>

        <li>
            <i class="fas fa-user-alt"></i>
            <span>사용자 관리</span>
            <i class="fas fa-caret-up arrow"></i>
        </li>
        <li class="{{$type == 'category'? 'active':''}}">
            <i class="fas fa-poll"></i>
            <span>설문</span>
            <i class="fas fa-caret-{{$type == 'category'? 'down':'up'}} arrow"></i>
        </li>
        <ol class="{{$type == 'category'? 'on':''}} nav-sub-menu">
            <li><a href="category">분류등록</a></li>
            <li>설문등록</li>
        </ol>
        <li>
            <i class="fas fa-cog"></i>
            <span>환경설정</span>
            <i class="fas fa-caret-up arrow"></i>
        </li>
    </ul>
</nav>
