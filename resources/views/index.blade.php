@extends("layouts/layout")

@section("title")
    메인
@endsection

@push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
@endpush

@section("content")
    <div class="main-contents">
        <div class="content-left">

            <!-- start 인원수 -->
            <div class="quantity-box">
                <div>
                    <div>
                        <img src="../img/main_user.png" alt="">
                        신규 노무자 수
                    </div>
                    <div class="quantity--personnel">
                        <span>14 </span>명
                    </div>
                </div>
                <!-- end 신규 노무자 수 -->

                <div>
                    <div>
                        <div>
                            <img src="../img/main_company.png" alt="">
                            신규 거래처 수
                        </div>
                        <div class="quantity--personnel">
                            <span>20 </span>명
                        </div>
                    </div>
                </div>
                <!-- end 신규 거래처 수 -->
            </div>
            <!-- end 인원수(quantity-box) -->

            <div class="daily-box">
                <h3>일일정보 조회</h3>
                <table class="table">
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
                <h3>노무자 일정보</h3>
                <table class="table">
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

            <!-- start graph -->
            <div id="graph"></div>
            <!-- end graph -->

            <!-- start laborer-box -->
            <div class="laborer-box">
                <a href="javascript:swal('아직안되지롱')">
                    <img src="../img/main_money.png" alt="">
                    <span>노무비 청구서</span>
                </a>

                <a href="javascript:swal('아직안되지롱')">
                    <img src="../img/main_tong.png" alt="">
                    <span>노무비 노임대장</span>
                </a>

                <a href="javascript:swal('아직안되지롱')">
                    <img src="../img/main_tax.png" alt="">
                    <span>노무자 위임장</span>
                </a>
            </div>
            <!-- end laborer-box -->

            <div class="account-box">
                <h3>거래처 일정보</h3>
                <table class="table">
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

    </div>
    <!-- end main-contents -->

    <div class="popup-container">
        <div id="popup-wrap" class="popup-wrap">
            <div class="wrap-box">

                <!-- start box-head -->
                <div class="box-head">
                    <span class="head-title">연장신청</span>
                    <img src="../img/popup_close.png" class="close_btn">
                </div>
                <!-- end box-head -->

                <div class="box-section">
                    <h3>기간선택</h3>
                    <div class="section-term">
                        <input type="radio" id="month_1" class="term">
                        <label for="month_1">1개월</label>

                        <input type="radio" id="month_3" class="term">
                        <label for="month_3">3개월</label>

                        <input type="radio" id="month_6" class="term">
                        <label for="month_6">6개월</label>

                        <input type="radio" id="month_9" class="term">
                        <label for="month_9">9개월</label>

                        <input type="radio" id="year_1" class="term">
                        <label for="month_1">1년</label>

                        <input type="radio" id="year_3" class="term">
                        <label for="month_3">3년</label>

                        <input type="radio" id="year_6" class="term">
                        <label for="month_6">6년</label>

                        <input type="radio" id="year_9" class="term">
                        <label for="month_9">9년</label>

                        <input type="radio" id="infinite" class="term">
                        <label for="infinite">기간 제한 없음</label>
                    </div>

                    <div>
                        <h3>결제수단</h3>
                        <div class="section-term">
                        </div>
                    </div>
                </div>
                <!-- end box-section -->

                <div class="btn_wrap">
                    <button type="button" class="modal_close_btn ms_confirm_btn">확인</button>
                </div>
            </div>
        </div><!-- .adm-popup-1 end -->
    </div><!-- #popup-wrap.popup-wrap end -->
    </div>

    <script>
        Highcharts.chart('graph', {
            chart: {
                type: 'area'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'John',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Jane',
                data: [2, -2, -3, 2, 1]
            }, {
                name: 'Joe',
                data: [3, 4, 4, -2, 5]
            }]
        });
    </script>
@endsection
