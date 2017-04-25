<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" >
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/fb/website#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>알뜰 장보기</title>




<style rel="stylesheet">
body {
background-color:#fcfcfc;}

body * {
  box-sizing: border-box;
}

.header {
  background-color: #327a81;
  color: white;
  font-size: 1.5em;
  padding: 1rem;
  text-align: center;
  text-transform: uppercase;
}

.t1 img {
  border-radius: 50%;
  height: 60px;
  width: 60px;
}

.table-users {
  border: 1px solid #327a81;
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  max-width: calc(100% - 2em);
  margin: 1em auto;
  overflow: hidden;
  width: 800px;
}

table.t1 {
  width: 100%;
}
table.t1 td, table th {
  color: #2b686e;
  padding: 10px;
}
table.t1 td {
  text-align: center;
  vertical-align: middle;
}
table.t1 td:last-child {
  font-size: 0.95em;
  line-height: 1.4;
  text-align: left;
}
table.t1 th {
  background-color: #daeff1;
  font-weight: 300;
}
table.t1 tr:nth-child(2n) {
  background-color: white;
}
table.t1 tr:nth-child(2n+1) {
  background-color: #edf7f8;
}

@media screen and (max-width: 700px) {
  table.t1 , .t1 tr, .t1 td {
    display: block;
  }

  .t1 td:first-child {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    width: 100px;
  }
  .t1 td:not(:first-child) {
    clear: both;
    margin-left: 100px;
    padding: 4px 20px 4px 90px;
    position: relative;
    text-align: left;
  }
  .t1 td:not(:first-child):before {
    color: #91ced4;
    content: '';
    display: block;
    left: 0;
    position: absolute;
  }
  .t1 td:nth-child(2):before {
    content: 'Name:';
  }
  .t1 td:nth-child(3):before {
    content: 'Email:';
  }
  .t1 td:nth-child(4):before {
    content: 'Phone:';
  }
  .t1 td:nth-child(5):before {
    content: 'Comments:';
  }

  .t1 tr {
    padding: 10px 0;
    position: relative;
  }
  .t1 tr:first-child {
    display: none;
  }
}
@media screen and (max-width: 500px) {
  .header {
    background-color: transparent;
    color: white;
    font-size: 2em;
    font-weight: 700;
    padding: 0;
    text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
  }

  .t1 img {
    border: 3px solid;
    border-color: #daeff1;
    height: 100px;
    margin: 0.5rem 0;
    width: 100px;
  }

  .t1 td:first-child {
    background-color: #c8e7ea;
    border-bottom: 1px solid #91ced4;
    border-radius: 10px 10px 0 0;
    position: relative;
    top: 0;
    -webkit-transform: translateY(0);
            transform: translateY(0);
    width: 100%;
  }
  .t1 td:not(:first-child) {
    margin: 0;
    padding: 5px 1em;
    width: 100%;
  }
  .t1 td:not(:first-child):before {
    font-size: .8em;
    padding-top: 0.3em;
    position: relative;
  }
  .t1 td:last-child {
    padding-bottom: 1rem !important;
  }

  .t1 tr {
    background-color: white !important;
    border: 1px solid #6cbec6;
    border-radius: 10px;
    box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
    margin: 0.5rem 0;
    padding: 0;
  }

  .table-users {
    border: none;
    box-shadow: none;
    overflow: visible;
  }
}
</style>



			<!-- 일반 header -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/notosanskr.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/jejumyeongjo.css">


<div id="nav_area" style="width:100%; height:50px; background-color:#ffffff;">
	<div style="width:100%; height:30px; padding:10px 0px; text-align: center; font-family: 'Montserrat',sans-serif;min-width:1160px;">
		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:transparent;">
		<tr>
		<td></td>
		<td align="right" width="30%">
			<a href="/story"><div style="font-family: 'Noto Sans KR',sans-serif; font-size:15px; display:inline-block; width:130px; margin-right:30px; color:#515151;">브랜드소개</div></a>
			<a href="/board/?id=plist"><div style="font-family: 'Noto Sans KR',sans-serif; font-size:15px; display:inline-block; width:130px; color:#515151;">금주의채소</div></a>
		</td>
		<td width="50px"></td>
		<td width="20%">
			<!--<a href="/ver3"><img src="/images/ver3/icon/w_logo_2.png" width="150" style="padding-bottom: 2px;" /></a>-->
		</td>
		<td width="50px"></td>
		<td align="left" width="30%">
			<a href="/board/?id=recipe"><div style="font-family: 'Noto Sans KR',sans-serif; font-size:15px; display:inline-block; width:130px; color:#515151;">레시피</div></a>
				<a href="/new_member/login?return_url=%2Fver3"><div style="font-family: 'Noto Sans KR',sans-serif; font-size:15px; display:inline-block; width:130px; margin-left:30px; color:#515151;">로그인</div></a>
		</td>
		<td></td>
		</tr>
		</table>
	</div>
</div>


<div class="header">알뜰 장보기</div>

   <table class="t1">
      <tr>
         <th width="15%">사진</th>
         <th width="15%">품목명</th>
         <th width="15%">가격</th>
         <th width="15%">시세</th>
         <th>시세 차트</th>
      </tr>

	<?php 
	for ($i = 1; $i <= count($mannabox_price); $i++) {

	$query = $this->db->query("SELECT MAX(dp_price) as dp_price FROM mannabox.fm_daily_price WHERE p_id = ".$i." and c_id != 1;");
	$result = $query->row_array(); //쿼리문입력

	 ?>
      <tr>
        <td><?=$product[$i - 1]->p_img?></td>
	    <td><?=$product[$i - 1]->p_name?></td>
        <td><?=number_format($mannabox_price[$i - 1]->dp_price)?></td>
        <td><?=number_format($result["dp_price"])?></td>
        <td></td>
      </tr>
    <?php } ?>
   </table>
</div>

<style type="text/css">
.footer{ width:100%; margin:0 auto;clear:both; background-color: #fcfcfc; padding-top:15px; text-align:right; font-size:9px; color:#888888; line-height:13px; margin-bottom:10px; }
.footer .sns_icons{ margin:0 auto;height: 22px;margin-top:10px; }
.footer .services { text-align:center; }
.footer .services .links a{ margin-left:20px; letter-spacing:1px; font-family:'Montserrat',sans-serif;color: #888888; }
.footer .cs_center { margin:0 auto;font-size:8px;font-family:'Montserrat', sans-serif; }
.footer .infos{ text-align:center;height:26px; font-weight:lighter;}
</style>

<div class="footer">
	<div class="sns_icons">
		<table border="0" cellspacint="0" cellpadding="0" align="center">
			<tr>
				<td width="28" align="center"><a href="https://www.instagram.com/mannabox/" target="_blank"><img src="http://mannabox.co.kr/images/plus/main/icon_instagram.png" width="15" height="15"></a></td>
				<td width="28" align="center"><a href="https://story.kakao.com/ch/mannabox" target="_blank"><img src="http://mannabox.co.kr/images/plus/main/icon_kakao_3.png" width="15" height="15"></a></td>
				<td width="28" align="center"><a href="https://www.facebook.com/mannaboxcorp" target="_blank"><img src="http://mannabox.co.kr/images/plus/main/icon_facebook.png" width="15" height="15"></a></td>
				<td width="28" align="center"><a href="https://www.youtube.com/channel/UCUqCNASQaudqk4Mae2jyz0Q" target="_blank"><img src="http://mannabox.co.kr/images/plus/main/icon_youtube.png" width="15" height="15"></a></td>
			</tr>
		</table>
	</div>
	<div class="services">
		<span class="links"><a href="http://mannabox.co.kr/service/agreement">AGREEMENT</a></span>
		<span class="links"><a href="http://mannabox.co.kr/service/privacy">PRIVACY POLICY</a></span>
		<span class="links"><a href="http://mannabox.co.kr/service/guide">GUIDE</a></span>
		<span class="links"><a href="http://plus.kakao.com/home/@만나박스" target="_blank">CS CENTER</a></span>
	</div>
	<div style="text-align:center;margin:0 auto;font-size:8px;font-family:'Noto Sans KR', sans-serif;">제휴 및 광고 문의 : marketing@mannacea.com</div>
	<div class="cs_center">
		<div style="text-align:center;">
			<span class="cs_center">MON - FRI</span>
			<span class="cs_center">8:30 - 18:00 (LUNCH 12:00 - 13:00 / OFF)</span>
			<span class="cs_center">SAT/SUN/HOLIDAY</span>
			<span class="cs_center">OFF</span>
			<span style="text-align:center;font-family:'Noto Sans KR', sans-serif;">카카오톡 ID '만나박스'로 문의사항을 보내주세요</span>
		</div>
	</div>
	<div class="infos">
		상호: 농업회사법인만나씨이에이주식회사 대표: 전태병, Aaron Park 사업자등록번호:314-86-45628 <a href="http://ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2015367010630200335&area1=&area2=&currpage=1&searchKey=04&searchVal=3148645628&stdate=&enddate=" target="_blank">[확인]</a> 통신판매업신고:제2016-충북진천-0046호<br>
		충북 진천군 이월면 진광로 702-10 T. 043.535.6720 info@mannabox.co.kr 개인정보관리자:전태병 ©2015 MANNABOX ALL RIGHTS RESERVED.
	</div>
</div>

</body>
</html>