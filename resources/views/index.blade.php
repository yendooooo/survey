@extends("layouts/layout")

@section("title")
    메인
@endsection

@section("content")
    <div class="main-contents">
        <div class="content-left">

            <!-- start 인원수 -->
            <div class="quantity">
                <div></div>
                <div></div>
            </div>
            <!-- end 인원수-->

            <div class="daily-box">
                <h3>일일정보 조회</h3>
                <table>
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>번호</th>
                        <th>작업일</th>
                        <th>노무자이름</th>
                        <th>거래처명</th>
                        <th>총노임</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0; $i < 4; $i++)
                    <tr>
                        <td><input type="checkbox" data-id=""></td>
                        <td>30</td>
                        <td>21-01-01</td>
                        <td>홍길동</td>
                        <td>삼성건설</td>
                        <td>총노임</td>
                    </tr>
                    @endfor
                    </tbody>
                </table>
            </div>

            <!-- end 일일 정보 조회 -->

            <div class="bill-down-box">
                <img src="../img/main_group.png" alt="">
            </div>

            <div class="daily-box">
                <h3>일일정보 조회</h3>
                <table>
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>번호</th>
                        <th>작업일</th>
                        <th>노무자이름</th>
                        <th>거래처명</th>
                        <th>총노임</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0; $i < 4; $i++)
                        <tr>
                            <td><input type="checkbox" data-id=""></td>
                            <td>30</td>
                            <td>21-01-01</td>
                            <td>홍길동</td>
                            <td>삼성건설</td>
                            <td>총노임</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>

        </div>
        <!-- end content-left -->

        <div class="content-right">
            2
        </div>
    </div>
@endsection
