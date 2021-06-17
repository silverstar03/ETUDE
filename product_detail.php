<?php
    $_productcode = $_GET['productcode'];
    // echo $_productcode;
    session_start(); 
    include "db_conn.php";
?>

<html>
    <head>
        <title>제품 상세보기</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <!-- <link rel="stylesheet" href="css/index_style.css">/ -->
        <link rel="stylesheet" href="css/product_detail.css">


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
        <?php
            $sql = "select * from product where id='$_productcode'";
            $result = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($result)){
        ?>
        <main>
            <article id = "detail">
                <div class = "container">
                    <div class="detail_con">
                        <div class="detail_img">
                            <img src="<?= $data['p_path']?>" alt="상품 대표 썸네일">
                        </div>
                        <div class="detail_text">
                            <h2 class="detail_title">[에뛰드] <?= $data['p_name']?><h2>
                            <h1 class="detail_price"> <?= $data['p_price']?>원<h1>
                            <hr>

                            <div class="detail_chose">
                                <div class="prd_select">
                                    <div class="select_img">
                                        <img src="<?= $data['p_path']?>" alt="상품 사진">
                                    </div>
                                    <div class="select_title">
                                        <p class="chose_title"><?= $data['p_name']?></p>
                                    </div>

                                </div>                                    
                            </div>
                            <div class="prd_btn">
                                <ul>
                                    <li class="cart_btn">
                                        <button type="submit"> 장바구니 </button>
                                    </li>
                                    <li class="sale_btn">
                                        <button type="submit"> 바로구매</button>
                                    </li>
                                <ul>
                                </div>
                        </div>
                    </div>
                </div>            
            </article>
        </main>
        <?php }?>


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
                                <p>(주) Attude | 대표이사:강은별,서울특별시 용산구 한강대로 100(한강로2가)<br>
                                사업자등록번호: 123-45-06789 | 통신판매업신고번호:제2017-서울용산-1292<br>
                                개인정보보호책임자: 강은별 | 호스팅제공자: (주) Attude | s2019s21@e-mirim.hs.kr<br>
                                고객상담: 0304-0421(쇼핑몰) | 010-123-3456(제품 및 매장 외)<br>
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