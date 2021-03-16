<?php
session_start();
include('./db_conn.php');

$u_id = $_SESSION['userid'];
$sql = "select * from member_t where userid = '$u_id'";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_array($result);
$idx = $re['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 탈퇴</title>
    <link rel="stylesheet" href="css/reset.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
    <style type="text/css">
        ul,li,ol{list-style:none;}

        #header{ height: 100px; width: 100%; text-align:left; }

        .container {position:relative; width:1280px; margin:0 auto; z-index:10;}

        .header{display:flex; }
        .header h1{float:left;}
        .header a{display : block;}

        #list{display: inline-block; margin-top: 30px; font-weight:bold;}
        #list ul li{ float:left; text-align: center; color:#d2d2d2; }
        #list ul li a{ padding:19px 5px; text-decoration: none; color:#a3a3a3; display:block;}
        #list ul li p{ padding:19px 5px; }

        .title a{ text-decoration: none; float:left; position:absolute; left:570px; top: -10px;vertical-align: top;}
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


        .container h1{font-size: 40px; text-align: center; font-weight:bold;
        margin-top:40px; margin-bottom:60px;}
        .member_delete_main{width:1200px; margin:0 auto;}

        .textbox{width:100%; height:300px; background-color:white;
        border-top:1px solid black; margin-bottom:70px;}
        .textbox_cont{width:700px; height:200px; margin:auto auto;}
        .textbox_inner{margin-top:50px;}
        .id_pass{height:60px;}
        .t_title{font-size:17px; font-weight:bold; font-family:"Noto Sans CJK KR";}
        .t_id, .t_pass{padding:0 15px 0 30px;}
        input{width:400px; height:25px;}

        .textbox input[type="password"]{
            line-height:normal;
            padding: .8em .5em;
            border: 1px solid #d2d2d2;
            border-radius:0;
            outline: 0;
        }

        .id_pass input:hover{
            border:1px solid black;
        }
        .main_notice{margin-bottom:10px;}
        .main_notice p{color : #747474; font-weight:bold; letter-spacing:-1px; line-height:25px;}
        .text{color:black; font-size:15px; font-weight:bold;}
        .text_id{color:#747474; font-size:15px;}
        .memebr_delete{text-align:center; margin-top:20px; font-size:20px;}
        .delete{background-color:white; color:#7993b2; border:1px solid #7993b2; padding:10px 50px 10px 50px;}
        

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
            <h1>개인정보 수정</h1>
        
            <form method="post" action="m_delete.php?idx=<?php echo $re['id']?>">
                <div class="member_delete_main">
                    <div class="main_notice">
                        <p>·  모든 뷰티포인트 멤버십 서비스 탈퇴 시 잔여 뷰티포인트 마일리지가 모두 소멸되며, 유료회원 (마트 VIP, 아리따움 유료 VIP, 에뛰드 핑크패스 멤버십, 헬로우 캠퍼스 멤버십) 으로서의 혜택도 모두 사라집니다.</p>
                        <p>·  회원탈퇴 후 30일간 재가입이 불가하며 동일 아이디는 사용할 수 없습니다.</p>
                        <p>·  회원님의 잔여 포인트는 탈퇴 후 사용이 불가능하오니 신중하게 결정하시기 바랍니다.</p>
                        <p>·  탈퇴 전, 현재 배송중인 상품 또는 뷰티포인트 교환신청 내역이 없는지 다시 한번 확인 부탁드립니다. 탈퇴 후에는 정보 복구가 불가합니다.</p>
                    </div>
                    <div class="textbox"> 
                        <div class="textbox_cont">
                            <div class="textbox_inner">
                                <table>
                                    <tr class="id_pass">
                                        <td class="t_title">아이디</td>
                                        <td class="t_id"> <strong class="text_id"><?php echo $re['userid'] ?></strong></td>
                                    </tr>
                                    <tr class="id_pass">
                                        <td class="t_title">비밀번호</td>
                                        <td class="t_pass"><input type="password" name="pass" placeholder="본인 확인을 위해 비밀번호를 입력해 주세요."></td>
                                    </tr>
                                </table> 
                            </div>
                            <div class="memebr_delete">
                                <button class="delete" type="submit"> 탈퇴</button>
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