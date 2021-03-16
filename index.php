<html>
    <head>
        <title>강은별 쇼핑몰</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/swiper.css">
        <link rel="stylesheet" href="css/index_style.css">


        <style type="text/css">
        .slider .s1{width:100%; height: 508px;}
        .slider .ss1 {background: url(img/banner1.jpg) no-repeat center center; background-size: cover;}
        .slider .ss2 {background: url(img/banner2.jpg) no-repeat center center; background-size: cover;}
        .slider .ss3 {background: url(img/banner3.jpg) no-repeat center center; background-size: cover;}
        .slider .ss4 {background: url(img/banner4.jpg) no-repeat center center; background-size: cover;}
        .slider .ss5 {background: url(img/banner5.jpg) no-repeat center center; background-size: cover;}
        .slider .ss6 {background: url(img/banner6.jpg) no-repeat center center; background-size: cover;}
        .slider .ss7 {background: url(img/banner7.jpg) no-repeat center center; background-size: cover;}
        </style> 
        

        <!--파비콘 -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header id = "header">
            <div class="container">
                <div class = "header">
                    <nav id="list">
                        <ul>
                            <li>
                            <?php
                            session_start();
                            include('./db_conn.php');

                            if(isset($_SESSION['userid'])){
                                ?><a href="logout.php">로그아웃</a></li>
                           <?php }
                           else{?>
                               <a href="login.php">로그인</a></li>
                           <?php } ?>
                            <li><p>|</p></li>
                            <li>
                            <?php                            
                            if(isset($_SESSION['userid'])){
                                ?><a href="m_update_confirm.php">개인정보수정</a></li>
                            <?php }
                            else{?>
                                <a href="join.html">회원가입</a><li>
                            <?php } ?>
                            <li><p>|</p></li>
                            <li><a href="inventory.php">재고관리</a></li>
                            <li><p>|</p></li>
                            <li><a href="memberlist.php">회원목록</a></li>
                        </ul>
                    </nav>
                    <div class="title">
                        <h1><a href="index.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!--//header-->

        <nav id="category">
            <div class="container">
                <div id="bar">
                    <ul>
                        <li><a href="#"><img src="img/gnb_menu.png" ></a></li>
                        <li><a href="#">이벤트</a></li>
                        <li><a href="#">신상품</a></li>
                        <li><a href="#">베스트</a></li>
                        <li><a href="#">쿠폰/혜택</a></li>
                        <li><a href="#">셀렉샵</a></li>
                        <li><a href="#">컬러팩토리</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class = "banner">
                <div class = "slider" >
                    <div class="swiper-container s1">
                        <div class = "swiper-wrapper">
                            <div class="swiper-slide ss1"></div>
                            <div class="swiper-slide ss2"></div>
                            <div class="swiper-slide ss3"></div>
                            <div class="swiper-slide ss4"></div>
                            <div class="swiper-slide ss5"></div>
                            <div class="swiper-slide ss6"></div>
                            <div class="swiper-slide ss7"></div>
                        </div>
                        <div class="swiper-nav">
                            <button type="button" class="swiper-button-prev" tabindex="0" role="button" aria-laebl="Previous slide"></button>
                            <div class ="swiper-pagination swiper-pagination-fraction">
                                <span class="swiper-pagination-current"></span>
                                /
                                <span class="swiper-pagination-total">7</span>
                            </div>
                            <button type="button" class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></button>
                        </div>
                        <!-- <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div> -->
                    </div>
                </div>
        </section>

        <main>
            <article id="new">
                <div class="container">
                    <h1>신상품</h1>
                    <div class="new_cont">
                        <ul class="new_list">
                            <li class="new_item">
                                <div class="new_inner">
                                    <img src="img/new1.jpg">
                                    <h4>뮬리 로맨스 스페셜 키드</h4>
                                    <h5>21,000원</h5>
                                </div>
                            </li>
                            <li class="new_item">
                                <div class="new_inner">
                                    <img src="img/new2.jpg">
                                    <h4>레더 샵 스페셜 키트</h4>
                                    <h5>21,000원</h5>
                                </div>
                            </li>
                            <li class="new_item">
                                <div class="new_inner">
                                    <img src="img/new3.png">
                                    <h4>글로우 온 베이스 모이스트풀30ml</h4>
                                    <h5>18,000원</h5>
                                </div>
                            </li>
                            <li class="new_item">
                                <div class="new_inner">
                                    <img src="img/new4.gif">
                                    <h4>글리터리 스노우 에어 무스 팔레트</h4>
                                    <h5>12,000원</h5>
                                </div>
                            </li>
                            <li class="new_item">
                                <div class="new_inner">
                                    <img src="img/new5.gif">
                                    <h4>글리터리 스노우 페이스 팔레트</h4>
                                    <h5>15,000원</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
            </article>

            <article id="theme">
                <div class="container">
                    <h1>이달의 테마</h1>
                    <div class="theme_cont">
                        <ul class="theme_list">
                            <li class="theme_item">
                                <div class="theme_inner">
                                    <img src="img/theme1.jpg">
                                </div>
                            </li>
                            <li class="theme_item">
                                <div class="theme_inner">
                                    <img src="img/theme2.jpg">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article id="hot">
                <div class="container">
                    <h1>핫딜</h1>
                    <div class="hot_cont">
                        <ul class="hot_list">
                            <li class="hot_item">
                                <div class="hot_inner">
                                    <a href="#">
                                        <div class="hot_inner_img">
                                            <img src="img/hot1.png">
                                        </div>
                                        <div class="hot_inner_text">
                                            <p class="hot_sale">50% 쿠폰 적용가:1,500원</p>
                                            <p class="hot_brand">에뛰드 하우스</p>
                                            <p class="hot_product">[적용상품]보들 원형 화장솜</p>
                                            <p class="hot_price">3,000원</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="hot_item">
                                <div class="hot_inner">
                                    <a href="#">
                                        <div class="hot_inner_img">
                                            <img src="img/hot2.png">
                                        </div>
                                        <div class="hot_inner_text">
                                            <p class="hot_sale">50% 쿠폰 적용가:4,250원</p>
                                            <p class="hot_brand">에뛰드 하우스</p>
                                            <p class="hot_product">[적용상품]베리 딜리셔스 생크림 블러셔</p>
                                            <p class="hot_price">3,000원</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article id="best">
                <div class="container">
                    <h1>베스트</h1>
                    <div class="best_cont">
                        <ul class="best_list">
                            <li class="best_item">
                                <div class="best_inner">
                                    <p class="rank">1</p>
                                    <a href="#">
                                        <div class="best_inner_img">
                                            <img src="img/best1.png">
                                        </div>
                                    </a>
                                    <p class="tag">#음영섀도우</p>
                                </div>
                            </li>
                            <li class="best_item">
                                <div class="best_inner">
                                    <p class="rank">2</p>
                                    <a href="#">
                                        <div class="best_inner_img">
                                            <img src="img/best2.png">
                                        </div> 
                                    </a>
                                    <p class="tag">#발그레아가볼</p>
                                </div>
                            </li>
                            <li class="best_item">
                                <div class="best_inner">
                                    <p class="rank">3</p>
                                    <a href="#">
                                        <div class="best_inner_img">
                                            <img src="img/best3.png">
                                        </div>
                                    </a>
                                    <p class="tag">#브로우펜슬</p>
                                </div>
                            </li>
                            <li class="best_item">
                                <div class="best_inner">
                                    <p class="rank">4</p>
                                    <a href="#">
                                        <div class="best_inner_img">
                                            <img src="img/best4.png">
                                        </div>
                                    </a>
                                    <p class="tag">#강력픽싱</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article id="insta">
                <div class="container">
                    <h1>#ETUDE_INSTA</h1>
                    <div class="insta_cont">
                        <ul class="insta_list">
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHor6PohISH/" target="_blank">
                                        <img src="img/insta_1.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHmHE3JF9ru/" target="_blank">
                                        <img src="img/insta_2.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHjiSXXMHtJ/" target="_blank">
                                        <img src="img/insta_3.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHg90ZljGio/" target="_blank">
                                        <img src="img/insta_4.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHg90ZljGio/" target="_blank">
                                        <img src="img/insta_5.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHb85f-Dti9/" target="_blank">
                                        <img src="img/insta_6.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHZPbs5js_c/" target="_blank">
                                        <img src="img/insta_7.png">
                                    </a>
                                </div>
                            </li>
                            <li class="insta_item">
                                <div class="item_inner">
                                    <a href="https://www.instagram.com/p/CHWq0CAjAXs/" target="_blank">
                                        <img src="./img/insta_8.png">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>


        </main>

        <footer id="footer">
            <div class="information">
                <div class="information_1">
                    <div class="container">
                        <div id="footer_list">
                            <ul>
                                <li><a href="#">이용약관</a></li>
                                <li><p>|</p></li>
                                <li><a href="#"><b>개인정보처리방침</b></a></li>
                                <li><p>|</p></li>
                                <li><a href="#">영상정보처리기기 운영·관리 방침</a></li>
                                <li><p>|</p></li>
                                <li><a href="#">이메일 무단수집 거부</a></li>
                                <li><p>|</p></li>
                                <li><a href="#">전자공고</a></li>
                                <li><p>|</p></li>
                                <li><a href="#">매장개설문의</a></li>
                                <li><p>|</p></li>
                                <li><a href="#">고객센터</a></li>
                                <li><p>|</p></li>
                                <li><a href="#">ABOUT ETUDE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="last_wrap">
                    <div class="last_top">
                        <div class="sns">
                            <a target="_blank" href="https://www.facebook.com/etudeofficial/" class="facebook">
                                <img src="img/facebook.png">
                            </a>
                        </div>
                        <div class="sns">
                            <a target="_blank" href="https://www.youtube.com/user/etudeblog" class="youtube">
                                <img src="img/youtube.png">
                            </a>
                        </div>
                        <div class="sns">
                            <a target="_blank" href="https://www.instagram.com/etudeofficial/" class="instagram">
                                <img src="img/instagram.png">
                            </a>
                        </div>
                    </div>

                    <div class="container">        
                        <div class="last_mid">
                            <div class="company">
                                <p>(주)에뛰드 | 대표이사:심재완,서울특별시 용산구 한강대로 100(한강로2가)<br>
                                사업자등록번호: 135-81-05033 | 통신판매업신고번호:제2017-서울용산-1292<br>
                                개인정보보호책임자: 신동은 | 호스팅제공자: (주)에뛰드 | etudemall@etude.co.kr<br>
                                고객상담: 1544-5418(쇼핑몰) | 080-022-2285(제품 및 매장 외)<br>
                                </p>
                                <h5>사업자 정보확인 <img src="img/right_btn2.png"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;찾아오시는 길 <img src="img/right_btn2.png"><h5>
                            </div>
                        </div>
                    </div>

                    <div class="container">        
                        <div class="last_bottom">
                            <div class="copyright">
                                <p>ⓒETUDE CORPORATION. ALL RIGHTS RESERVED.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- 자바스크립트 라이브러리  -->
        <script src = "js/swiper.min.js"></script>
        <script src = "js/jquery.min_1.12.4.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src = "js/script.js" type="text/javascript"></script>
        <script>
            var mySwiper = new Swiper('.s1',{ //banner 슬라이드
                speed: 700,
                loop:true,
                //페이지 넘기는 버튼
                navigation:{ 
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                //페이지의 순서를 나타냄
                pagination: {
                    el: '.swiper-pagination',
                    type : 'fraction',
                },
                //자동 재생
                autoplay: {
                    delay: 6000,
                    disableOninteraction: false,
                },
            });

            $(document).ready(function(){

                var category = $('#category').offset();
                $(window).scroll(function(){
                    if($(document).scrollTop() > 95){
                        $('#category').addClass('fixed');
                    }else{
                        $('#category').removeClass('fixed');
                    }
                });
            });
        </script>

        <script>

            var mySwiper2 =new Swiper('.s2', {
    
                slidesPerView : 5, // 동시에 보여줄 슬라이드 갯수
                spaceBetween : 1, // 슬라이드간 간격
                slidesPerGroup : 5, // 그룹으로 묶을 수, slidesPerView 와 같은 값을 지정하는게 좋음
    
                // 그룹수가 맞지 않을 경우 빈칸으로 메우기
                // 3개가 나와야 되는데 1개만 있다면 2개는 빈칸으로 채워서 3개를 만듬
                loopFillGroupWithBlank : true,
    
                speed: 500,
                loop : true, // 무한 반복
    
                pagination : { // 페이징
                clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
                },
                navigation : { // 네비게이션
                nextEl : '.swiper-button-next', // 다음 버튼 클래스명
                prevEl : '.swiper-button-prev', // 이번 버튼 클래스명
                },
            });
    
        </script>

    </body>
</html>