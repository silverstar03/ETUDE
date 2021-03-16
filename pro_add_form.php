<?php
session_start();
include('./db_conn.php');

// $sql = "select * from member_t where id=$_idx";

// $result = mysqli_query($conn, $sql);

// $re = mysqli_fetch_array($result);

// if ($_pw == $re['passwd']){
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>재고 수정/ 삭제</title>
        <link rel="stylesheet" href="css/reset.css">

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
        <style type="text/css">
       ul,li,ol{list-style:none;}

#header{ height: 100px; width: 100%; text-align:left; }

.container {position:relative; width:1280px; margin:0 auto; z-index:10;}
.container h1{font-size:30px; text-align:center; font-weight:bold;margin:20px 0 20px;}

.header{display:flex; }
.header h1{float:left;}
.header a{display : block;}

#list{display: inline-block; margin-top: 30px; font-weight:bold;}
#list ul li{ float:left; text-align: center; color:#d2d2d2; }
#list ul li a{ padding:19px 5px; text-decoration: none; color:#a3a3a3; display:block;}
#list ul li p{ padding:19px 5px; }

.title{margin-top:10px;}
.title a{ text-decoration: none; float:left; position:absolute; left:570px; top:-25px; vertical-align: top;}
.title h1{ font-size : 60px; line-height:150px; padding-left:10px; margin:0px; }

/*header 끝*/
#category{  z-index:12; width:100%; height:50px; border-top:1px solid #cdcdcd;
            border-bottom:1px solid #cdcdcd; display: inline-block; background-color:#fff;}

.fixed{position: fixed;  top:0px;}

#bar{margin-left:240px;}
#bar ul li{float:left; font-size:17px;  font-family: "Noto Sans CJK KR"; }
#bar ul li a{display:block; margin:12px 20px 12px 20px; color:black;}
#bar ul li img{margin-top:2px; width: 100px; height:23px;}

/* category 끝 */
.textbox_cont{border:6px solid #f5f5f5; padding-top:20px;margin-bottom:30px;}

.product_main{width:500px; margin:0 auto;}
.p_title{font-size:20px; padding:10px 20px 10px 20px; font-weight:600;}

.product input[type="text"]{
    line-height:normal;
    border: 1px solid #d2d2d2;
    border-radius:0;
    outline: 0;
    padding: 0 0 0 10px;
    height:30px;
    width:300px;
}

.product input:hover{
    border:1px solid black;
}

.product_btn{width:120px; margin:0 auto;}
.check_btn{border-radius:35px; border: 2px solid #7993b2; padding:10px 40px 10px 40px; background-color:white; margin-top:30px; margin-bottom:30px;}

footer{ width: 100%; height: 350px; background-color:#f5f5f5; clear:both;}
            .information{width:100%; height: 60px;  border-top:1px solid #cdcdcd; border-bottom:1px solid #cdcdcd;}
            .information_1{width:100%; height:60px; /*background-color:yellow;*/}
            .last_wrap{width:100%; height: 230px; /*background-color:yellow;*/}

            #footer_list{ width: 100%; height:60px; display: inline-block; font-size:13px; }
            #footer_list ul li{ text-align:center;  line-height:30px; float:left; padding :15px 10px 0 10px; }
            #footer_list a{ text-decoration: none; color:#505050; font-family: "Noto Sans CJK KR";  height:60px; display: block;}
            #footer_list b{color:black; font-family: "Noto Sans CJK KR";}
            #footer_list p{ color:#888888; font-family: "Noto Sans CJK KR";}

            .last_top{padding-left:30px; width:100%; height:60px; padding-top:30px; /*background-color:aqua;*/}
            .sns{float: left; opacity: 0.6;}
            .sns img{width:25px; height:25px; margin:0 30px 30px 0;}

            .last_mid{width:100%; height:150px; /*background-color: cadetblue;*/}
            .company{width:600px;}
            .company h5{font-size:13px;}
            .last_mid p{padding-left:30px; color:#686868; line-height: 25px; font-weight: bold; letter-spacing: -1;}
            .last_mid h5{margin-top:10px; padding-left:30px; font-weight: bold; color:black; }
            .last_mid img{width:7px; height:10px;}

            .last_bottom{width:100%; height:60px; /*background-color: chartreuse;*/}
            .copyright{padding:20px 0 30px 30px;}
            .copyright p{font-size:11px; color:#686868;}


    </style> 
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
                    <h1><a href="index.php"><img src="img/logo.png"></a></h1>
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

            <div class="main">
                <div class="container">
                <h1>물품 추가</h1>
            
                <form method="post" action="pro_add.php" enctype="multipart/form-data">
                    <div class="product_main">
                        <div class="textbox"> 
                            <div class="textbox_cont">
                                <div class="textbox_inner">
                                    <table>
                                        <tr class="product">
                                            <td class="p_title">제품명</td>
                                            <td class="p_name"><input type="text" name="p_name"></td>
                                        <tr class="product">
                                            <td class="p_title">가격</td>
                                            <td class="p_price"><input type="text" name="p_price"></td>
                                        </tr>
                                        <tr class="product">
                                            <td class="p_title">제품사진</td>
                                            <td class="p_img"><input type="file" name="userfile" multiple="multiple"></td>
                                        </tr>
                                        <tr class="product">
                                            <td class="p_title">수량</td>
                                            <td class="p_num"><input type="text" name="p_cnt"></td>
                                        </tr>
                                    </table> 
                                </div>
                                <div class="product_btn">
                                    <button class="check_btn" type="submit">완료</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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