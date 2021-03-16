<?php
session_start();
include('./db_conn.php');

$_pw = $_POST['pass'];
$_idx = $_GET['rowx'];

$sql = "select * from member_t where id=$_idx";

$result = mysqli_query($conn, $sql);

$re = mysqli_fetch_array($result);

if ($_pw == $re['passwd']){
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>개인정보 수정</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/m_update_form.css">

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
            
                <form method="post" action="m_update.php?idx=<?php echo $re['id']?>">
                    <div class="update_main">
                        <div class="textbox"> 
                            <div class="textbox_cont">
                                <div class="textbox_inner">
                                    <table>
                                        <tr class="update">
                                            <td class="t_title">이름</td>
                                            <td class="t_name"><input type="text" name="userName" placeholder="<?php echo $re['username'] ?>" readonly></td>
                                        <tr class="update">
                                            <td class="t_title">아이디</td>
                                            <td class="t_id"><input type="text" name="userid" placeholder="<?php echo $re['userid'] ?>" readonly></td>
                                        </tr>
                                        <tr class="update">
                                            <td class="t_title">새 비밀번호 입력</td>
                                            <td class="t_pass"><input type="password" name="pass" value="<?php echo $re['passwd'] ?>" onclick="this.value=''"></td>
                                        </tr>
                                        <tr class="update">
                                            <td class="t_title">새 비밀번호 확인</td>
                                            <td class="t_passcheck"><input type="password" name="passcheck" value="<?php echo $re['passwd'] ?>" onclick="this.value=''"></td>
                                        </tr>
                                        <tr class="update">
                                            <td class="t_title">전화번호</td>
                                            <td class="t_phone"><input type="text" name="phone" value="<?php echo $re['tel'] ?>" onclick="this.value=''"></td>
                                        </tr>
                                    </table> 
                                </div>
                                <div class="update_btn">
                                    <button class="check_btn" type="submit"> 수정 완료</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                <form method="post" action="m_delete_form.php?idx=<?php echo $re['id']?>">
                    <div class="container">
                        <div class="delete_main">
                            <h3>회원탈퇴</h3>
                            <div class="delete_box"> 
                                <div class="delete_cont">
                                    <p>회원 탈퇴시 30일간 아모레퍼시픽 통합회원 회원가입 혹은 에뛰드 재가입이 제한됩니다.</p>
                                    <p>유의사항 안내를 확인하신 후 신중하게 진행해 주시기 바랍니다.
                                </div>
                                <div class="delete_next">
                                    <button class="delete_btn" type="submit"> 회원탈퇴 이동</button>
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

<?php
}else{
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.go(-1); </script>";
}
?>