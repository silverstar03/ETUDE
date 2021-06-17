<html>
    <head>
        <title>로그인 - 에뛰드</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/login.css">


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
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </header>
        <!--//header-->

        <nav id="category">
            <div class="container">
                
                <div id="bar">
                    <ul>
                        <li><a href="#"><img src="img/gnb_menu.png" width="110px" heiht="150px"></a></li>
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

    <div class=main_container>
        <h1>로그인</h1>   
        
        <form method="post" action="sign_ok.php">
            <div id = "login_box">
                <div class="login_header">
                    <h5>아모레퍼시픽 통합계정으로 이용 가능합니다.</h5>
                </div>
                <div class="login_main">
                    <div class="textbox"> 
                        <ul id="input_button">
                            <li id="id_pass">
                                <ul>
                                    <li id="id">
                                        <input type ="text" name="userid" placeholder="아이디">
                                    </li>
                                    <li id="pass">
                                        <input type="password" name="pass" placeholder="비밀번호">
                                    </li>
                                </ul>
                            </li>
                            <li id="login_btn">
                                <button type="submit"> 로그인</button>
                            </li>
                        </ul>   
                    </div>
                </div>
                <div class="no_member">
                    <h3>아직도 회원이 아니세요?</h3>
                    <p>아모레퍼시픽 계열 모든 쇼핑몰을 하나의 아이디로 편리하게,
                        통합멤버십(뷰티 포인트)적립 및 다양한 서비스와 혜택을 누리세요.
                    </p>
                </div>
            </div>
        </form>

        <div class="main_sns">
            <div class="sns_text">
                <h5>※SNS로그인은 개인정보보호를 위해 개인 PC에서만 사용 바랍니다.<br>
                    ※팝업이 차단되어 있을 경우 SNS간편 로그인을 이용할 수 없으므로
                    차단 해체 후 이용 바랍니다.
                </h5>
            </div>
        </div>
    </div>

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
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src = "js/script.js" type="text/javascript"></script>
    <script>
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
</body>
</html>