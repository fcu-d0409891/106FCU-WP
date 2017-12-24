<?php
	session_start();
	$file=fopen("num_of_people.txt","r");
	$num=fgets($file);
	fclose($file);
	if($_SESSION['come']!='v'){
		 $num++;
		 $file=fopen("num_of_people.txt","w");
		 fwrite($file,$num);
		 fclose($file);
		 $_SESSION['come']='v';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FCU_WP_DEMO</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li>
							<a href="index.php">首頁</a> <span class="divider"></span>
						</li>
						<li>
							<a href="#">粉絲頁</a> <span class="divider"></span>
						</li>
						<li>
							<a href="#">聯絡我們</a> <span class="divider"></span>
						</li>
						<ul class="nav navbar-nav navbar-right">
						<?php
							if($_SESSION['username'] == null)
							{
								echo '哈囉!&nbsp;&nbsp;&nbsp;遊客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">註冊</a>&nbsp;<a href="login.php">登入</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
							}
							else
							{
								$name = $_SESSION['username'];
								echo '哈囉!&nbsp;&nbsp;&nbsp;'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">登出</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
							}
						?>
						</ul>
					</ul>
					
					<div class="title">
						<center><img alt="Bootstrap Image Preview" src="image/title.png"></center>
					</div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="index.php">新聞</a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="post.php">刊登文章</a>
								</li>
								<li>
									<a href="show.php">文章資訊</a>
								</li>
								<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown">常見問題<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">帳號申請</a>
										</li>
										<li>
											<a href="#">求助流程</a>
										</li>
										<li>
											<a href="#">援助流程</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">站務資訊</a>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left" role="search" action="javascript:location.href='http://lmgtfy.com/?q='+document.getElementById('search').value">
									<div class="form-group">
										<input type="text" id="search" class="form-control" placeholder="google..">
									</div> 
									<input type ="button" class="btn btn-default" onclick="javascript:location.href='http://lmgtfy.com/?q='+document.getElementById('search').value" value="搜尋"></input>
								</form>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="carousel slide" id="carousel-858790">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-858790">
							</li>
							<li data-slide-to="1" data-target="#carousel-858790">
							</li>
							<li data-slide-to="2" data-target="#carousel-858790">
							</li>
							<li data-slide-to="3" data-target="#carousel-858790">
							</li>
							<li data-slide-to="4" data-target="#carousel-858790">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="Carousel Bootstrap First" src="https://imgur.com/RTx0ZGY.jpg">
								<div class="carousel-caption">
									<h4>
										現代「小阿信」
									</h4>
									<p>
										調查指出 26%偏鄉童常覺肚子餓 9.8%無法天天有晚餐
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Second" src="https://imgur.com/Pdl0vdL.jpg">
								<div class="carousel-caption">
									<h4>
										謝謝聖誕老公公﹗
									</h4>
									<p>
										坤泰文教基金會發起「2011幸福上山-聖誕心願卡認養」活動
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="https://imgur.com/yB0CvEE.jpg">
								<div class="carousel-caption">
									<h4>
										愛心鞋襪幸福列車
									</h4>
									<p>
										台灣聖心文教基金會與義大利運動品牌DIADORA迪亞多那的兒童節禮物
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="https://imgur.com/Ic1swek.jpg">
								<div class="carousel-caption">
									<h4>
										關懷偏鄉兒童BMW員工齊動員
									</h4>
									<p>
										BMW總代理汎德公司與兒童福利聯盟攜手合作，為偏鄉兒童帶來更多教育資源及關懷。
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="https://imgur.com/0hajd2l.jpg">
								<div class="carousel-caption">
									<h4>
										孤單、窮忙、偏鄉留守兒的困苦童年
									</h4>
									<p>
										臺灣偏鄉兒童生活樣貌調查報告發表記者會
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-858790" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-858790" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>

						<h1>為什麼要關心偏鄉弱勢學習貧窮的孩子？</h1>
						<p>許多偏鄉弱勢兒童吃苦耐勞、認真學習、體貼家人，雖然家庭沒辦法給他們更多支持，但他們仍認真努力地生活著。M型化社會的發展下，孩子們的生活和學習似乎也呈現兩極化發展的樣貌。根據「2013台灣偏鄉弱勢學童學習貧窮分析報告」發現，偏鄉弱勢孩子不僅吃不好、穿不暖，學習貧窮的狀況更令人擔心。<br>	偏鄉弱勢學童家中的教育資源不足比例71.5%，與優勢學童相比相差16倍以上，偏鄉弱勢學童和優勢學童也存在明顯的數位和閱讀資源的落差，也缺乏文化刺激的機會；教育資源的落差也實際反映在孩子的學習能力上，僅半數偏鄉弱勢學童能答對基本學力題目，與優勢學童相差近三成，也有近二成的偏鄉弱勢學童反應平常上課大多聽不懂；除此之外愈來愈受重視的英文能力，偏鄉弱勢學童更是明顯差一大截，調查發現幾乎全部偏鄉弱勢學童(94.9%)沒有接觸任何英文雜誌、超過四分之一(25.2%)偏鄉弱勢學童甚至無法寫完26個英文字母。面對即將上路的十二年國教，超額比序的制度設計比得是學才藝、上台比賽、拿獎狀等，對弱勢學童來說更是拉大了他們和優勢孩子的差距(最高相差兩成左右)，讓偏鄉弱勢孩子更欠缺靠「教育」翻身的機會。</p>
						<hr>
						<h1>偏鄉弱勢學童學習貧窮議題幫助了誰？</h1>
						<p>過去偏鄉或是經濟較為貧窮的孩子，只要認真苦讀就有機會念好高中、上好大學，但十二年國教上路之後，不僅比的是要會唸書、還要會很多才藝、社團活動經驗，甚至需要比賽得獎，對有心向學但資源卻相對貧瘠的偏鄉弱勢學童而言，家庭生活都有困難了，更不可能有多餘的費用投資在孩子身上。長期處在學習貧窮的困境中，也難怪偏鄉弱勢和一般學童相比，偏鄉弱勢學童普遍對未來生活感到悲觀，認為自己比不上別人(44.7%)、很渺小(23.3%)、甚至覺得自己未來沒有希望(17.6%)。</p>
						<hr>
						<h1>偏鄉弱勢學習貧窮的孩子需要什麼資源？</h1>
						<p>偏鄉弱勢孩子經常面臨家庭破碎或家境貧困的困境，家庭無法給予孩子更多的支持，所以學校是孩子們另外一個溫暖的依靠。很多有愛心的偏鄉師長花很多的時間、心力幫助弱勢孩子，不僅在課業上加強輔導，更負擔起照顧孩子三餐的重任。然而，學校的資源及力量非常有限，孩子們需要更長期的資助，也需要更多團體、企業以及個人的陪伴與支持。</p>
					<div class="row">
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									金援<br> <small>錢不是萬能，但沒有錢萬萬不能!</small>
								</h1>
							</div>
							<p>
								需要募款的人可以點選<strong> <a href="#">刊登文章</a> </strong>刊登相關募款資訊，包括募款目的、聯絡資訊、募款金額等相關資訊。<br>
								想做愛心的人可以點選<strong> <a href="#">文章資訊</a> </strong>瀏覽所有需要幫忙的文章。
							</p>
						</div>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									人力<br> <small>偏鄉人口外流，人力資源嚴重缺乏!</small>
								</h1>
							</div>
							<p>
								需要招募人力的人可以點選<strong> <a href="#">刊登文章 </a></strong>刊登相關招募資訊，包括招募目的、聯絡資訊、薪水等相關資訊。<br>
								想做愛心的人可以點選<strong> <a href="#">文章資訊 </a></strong>瀏覽所有需要幫忙的文章。
							</p>
						</div>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									物資<br> <small>捐助多餘的物資，物盡其用做好事!</small>
								</h1>
							</div>
							<p>
								有多餘物資的人可以點選<strong> <a href="#">刊登文章 </a></strong>刊登相關物資資訊，包括物資數量、聯絡資訊等相關資訊。<br>
								有需要物資的人可以點選<strong> <a href="#">文章資訊 </a></strong>瀏覽所有捐贈物資的文章。
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<h4>累計瀏覽人數: <?php 
										$string=strlen($num);
										for($i=0;$i<$string;$i++){
											/* $n=substr($num,$i,1);*/
											 echo '<img src=image/num/'.substr($num,$i,1).'.png width=20 height=20 />';
										}
										?>
					</h4>
					<hr>
					<h2>其他愛心網站</h2>
					<a href="https://lecoin.cc/News" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/WM8vx4w.png"></a><br><br>
					<a href="https://www.104.com.tw/area/volunteer/index.cfm" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/Lxxbxq8.png"></a><br><br>
					<a href="http://www.igoods.tw/News/News_Info.aspx?ID=87" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/8nAEaIZ.png"></a><br><br>
					<a href="http://www.npo.org.tw/index.asp" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/DttGZ5E.png"></a><br><br>
					<a href="http://www.17885.com.tw/" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/Al3xTZC.png"></a><br><br>
					<a href="https://www.children.org.tw/" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/Dd7Rrw0.png"></a><br><br>
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style = "font-size: 30px">
			<hr>
			<center>
				<a href="index.php">首頁</a>
				<a href="post.php">發布文章</a>
				<a href="show.php">瀏覽文章</a> 
				<a href="#">粉絲頁</a> 
				<a href="#">聯絡我們</a> <br>
				<img src="https://imgur.com/V7bG9Wb.png">
				<h3>Huang © 2017 Just for FCU_Demo</h3><br><br>
			</center>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>