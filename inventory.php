<?php
session_start();
include('./db_conn.php');

// $u_id = $_SESSION['userid'];
// $sql = "select * from member_t where userid = '$u_id'";
// $result = mysqli_query($conn, $sql);
// $re = mysqli_fetch_array($result);
// $idx = $re['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>재고 관리</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

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

.title{margin-top:10px;}
.title a{ text-decoration: none; float:left; position:absolute; left:570px; top:-25px; vertical-align: top;}
.title h1{ font-size : 60px; line-height:150px; padding-left:10px; margin:0px; }

/*header 끝*/
#category{  z-index:12; width:100%; height:50px; border-top:1px solid #cdcdcd; 
            border-bottom:1px solid #cdcdcd; display: inline-block; background-color:#fff;}

.fixed{position: fixed;  top:0px;}

#bar{margin-left:240px;}
#bar ul li{float:left; font-size:17px;  font-family: "Noto Sans CJK KR"; }
#bar ul li a{display:block; margin:0px 20px 12px 20px; color:black;}
#bar ul li img{margin-top:2px; width: 100px; height:23px;}

/* category 끝 */

.main_container{ width:100; margin:0 auto; margin-bottom:60px;}
.main_container h1{font-size:30px;margin-top:40px; font-weight:bold; text-align:center; font-family: "Noto Sans CJK KR";}
.inventory{border-top: 1px solid black; border-bottom:1px solid black; border-collapse: collapse; margin-left:180px; }
table.inventory tr:nth-child(even) {  
    background-color: #eee;  
}  
table.inventory tr:nth-child(odd) {  
    background-color: #fff;  
}  
table.inventory th {  
    color: white;  
    background-color: pink;
}  
.m_title{ border-bottom: 1px solid black; padding:10px 30px 10px 30px; font-size:20px;}
.inventory td{ padding:0px 20px 0px 20px; font-size:20px;}
.p_button{ margin-top:15px; margin-right:100px;}
.up_del_btn{float:right; background-color:#7993b2; font-size:15px; padding:10px 50px 10px 50px;color:white; text-decoration:none;}

#pagination a {
display:inline-block;
margin-right:5px;
cursor:pointer;
} 
.pagination{margin-left:550px; float:left;}

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

.last_mid{width:100%; height:150px; clear:both;/*background-color: cadetblue;*/}
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
                <h1><a href="./"><img src="img/logo.png"></a></h1>
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

    <div class="container">    
        <div class="main_container">
        <h1>재고 현황</h1>   
            <table class="inventory">
                <thead>
                    <tr>
                        <th class="m_title">#</th>
                        <th class="m_title">제품명</th>
                        <th class="m_title">가격</th>
                        <th class="m_title">제품사진</th>
                        <th class="m_title">수량</th>
                        <th class="m_title">수정</th>
                        <th class="m_title">삭제</th>
                    </tr>
                </thead>

<?php

$sql = "select * from product order by id asc";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

for($i=0; $i<$num; $i++){
    $re = mysqli_fetch_array($result);
    echo "<tr><td>".$re['id']."</td>
    <td>".$re['p_name']."</td>
    <td>".$re['p_price']."</td>
    <td width=150px height=150px><img src='$re[3]'></td>
    <td>".$re['p_cnt']."</td>
    <td><a href='pro_update_form.php?idx=$re[id]'>수정</a>
    <td><a href='pro_delete_form.php?idx=$re[id]'>삭제</a>
    </tr>"."<br>";
}

?>
            </table>
            <ul class="pagination">

            </ul>
            <div class="p_button">
                <button class="up_del_btn" type="button" onclick="location.href='pro_add_form.php'">추가</button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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
        <script>
        function pagination(){
		var req_num_row=5;
		var $tr=jQuery('tbody tr');
		var total_num_row=$tr.length;
		var num_pages=0;
		if(total_num_row % req_num_row ==0){
			num_pages=total_num_row / req_num_row;
		}
		if(total_num_row % req_num_row >=1){
			num_pages=total_num_row / req_num_row;
			num_pages++;
			num_pages=Math.floor(num_pages++);
		}
  
        jQuery('.pagination').append("<li><a class=\"prev\">Previous</a></li>");
  
		for(var i=1; i<=num_pages; i++){
			jQuery('.pagination').append("<li><a>"+i+"</a></li>");
        jQuery('.pagination li:nth-child(2)').addClass("active");
        jQuery('.pagination a').addClass("pagination-link");
		}
  
        jQuery('.pagination').append("<li><a class=\"next\">Next</a></li>");
  
		$tr.each(function(i){
        jQuery(this).hide();
        if(i+1 <= req_num_row){
				$tr.eq(i).show();
			}
		});
  
		jQuery('.pagination a').click('.pagination-link', function(e){
			e.preventDefault();
			$tr.hide();
			var page=jQuery(this).text();
			var temp=page-1;
			var start=temp*req_num_row;
        var current_link = temp;
        
        jQuery('.pagination li').removeClass("active");
			jQuery(this).parent().addClass("active");
    
			for(var i=0; i< req_num_row; i++){
				$tr.eq(start+i).show();
			}
      
        if(temp >= 1){
            jQuery('.pagination li:first-child').removeClass("disabled");
        }
        else {
            jQuery('.pagination li:first-child').addClass("disabled");
        }
            
		});
  
        jQuery('.prev').click(function(e){
            e.preventDefault();
            jQuery('.pagination li:first-child').removeClass("active");
        });

        jQuery('.next').click(function(e){
            e.preventDefault();
            jQuery('.pagination li:last-child').removeClass("active");
        });

        }

        jQuery('document').ready(function(){
            pagination();
        
        jQuery('.pagination li:first-child').addClass("disabled");
        
        });
    </script>
</body>
</html>