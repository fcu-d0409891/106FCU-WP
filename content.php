<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require('Byet_Host_MySQL.php'); ?>
<?php 
$id=$_GET['id'];
$data=mysql_query("select * from b32_21081456_guest.guest where guestID = '$id' order by guestTime desc");//讓資料由最新呈現到最舊
$reply=mysql_query("select * from b32_21081456_guest.reply where replyWritingID = '$id' order by replyTime desc");
?>
<?php
$replyUserName=$_SESSION['username'];
$replyWritingID=$id;
$replyContent=$_POST['replyContent'];
$replyTime = date("Y:m:d H:i:s",time()+28800);
if(isset($replyContent)){
	$sql = "insert into b32_21081456_guest.reply(replyUserName,replyWritingID,replyTime,replyContent)value('$replyUserName','$replyWritingID','$replyTime','$replyContent')";
	mysql_query($sql) or die(mysql_error());
	echo "<script language=JavaScript> location.replace(location.href);</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<style>
		 .CSSTableGenerator {
		 margin:auto;
		 padding:0px;
		 width:60vw;
		 }
		 .CSSTableGenerator table{
			border-collapse: collapse;
			border-spacing: 0;
		 width:100%;
		 margin:0px;padding:0px;
		}.CSSTableGenerator tr:last-child td:last-child {
		 -moz-border-radius-bottomright:9px;
		 -webkit-border-bottom-right-radius:9px;
		 border-bottom-right-radius:9px;
		}
		.CSSTableGenerator table tr:first-child td:first-child {
		 -moz-border-radius-topleft:9px;
		 -webkit-border-top-left-radius:9px;
		 border-top-left-radius:9px;
		}
		.CSSTableGenerator table tr:first-child td:last-child {
		 -moz-border-radius-topright:9px;
		 -webkit-border-top-right-radius:9px;
		 border-top-right-radius:9px;
		 
		}.CSSTableGenerator tr:last-child td:first-child{
		 -moz-border-radius-bottomleft:9px;
		 -webkit-border-bottom-left-radius:9px;
		 border-bottom-left-radius:9px;
		 
		}.CSSTableGenerator tr:hover td{
		 background-color:#005fbf;
		 color:white;
		}
		.CSSTableGenerator td{
		 vertical-align:middle;
		 background-color:#e5e5e5;
		 border:1px solid #999999;
		 border-width:0px 1px 1px 0px;
		 text-align:left;
		 padding:8px;
		 font-size:16px;
		 font-family:Arial,微軟正黑體;
		 font-weight:normal;
		 color:#000000;
		}.CSSTableGenerator tr:last-child td{
		 border-width:0px 1px 0px 0px;
		}.CSSTableGenerator tr td:last-child{
		 border-width:0px 0px 1px 0px;
		}.CSSTableGenerator tr:last-child td:last-child{
		 border-width:0px 0px 0px 0px;
		}
		.CSSTableGenerator tr:first-child td{
		  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
		  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
		  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
		  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
		  background: -o-linear-gradient(top,#005fbf,005fbf);
		  background-color:#005fbf;
		  text-align:center;
		  font-size:20px;
		  font-family:Arial, 微軟正黑體;
		  font-weight:bold;
		  color:#ffffff;
		}
		.CSSTableGenerator tr:first-child:hover td{
		  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
		  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
		  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
		  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
		  background: -o-linear-gradient(top,#005fbf,005fbf);
		  background-color:#005fbf;
		}
	</style>
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
										echo '哈囉!&nbsp;&nbsp;&nbsp;遊客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">登入</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
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
			</div>
			<div class="col-md-2">
			</div>
		</div>
            <div class="row">
            	<div class="col-md-2">
				</div>
					<div class="col-md-8">
            			<center style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:5px;">
						<h2>文章內容</h2>
						<?php
							for($i=1;$i<=mysql_num_rows($data);$i++){
							 $rs=mysql_fetch_assoc($data);
							 if($rs['guestType']==1){
								 $type = '募款';
							 }
							 elseif($rs['guestType']==2){
								 $type = '募物';
							 }
							 elseif($rs['guestType']==3){
								 $type = '募人';
							 }
							}
						?>
						<div class="CSSTableGenerator">
							<table align="center">
								<tr>
								  <td><?php echo $rs['guestSubject']?></td>
								</tr>
								<tr>
								  <td width="15%">暱稱</td>
								  <td width="85%" colspan="2"><?php echo $rs['guestName']?></td>
								</tr>
								<tr>
								  <td>聯絡方式</td>
								  <td colspan="2"><?php echo $rs['guestContact']?></td>
								</tr>
								<tr>
								  <td>分類</td>
								  <td colspan="2"><?php echo $type?></td>
								</tr>
								<tr>
								  <td>文章內容</td>
								  <td colspan="2"><?php echo $rs['guestContent']?></td>
								</tr>
								<tr>
								  <td colspan="3"  style='text-align: center;'>留言</td>
								</tr>
								<?php 
									for($i=1;$i<=mysql_num_rows($reply);$i++){
										$reply_rs=mysql_fetch_assoc($reply);
								?>
								<tr>
								  <td><?php echo $reply_rs['replyUserName']?>:</td> <td width="50%"><?php echo $reply_rs['replyContent']?></td> <td width="25%"><?php echo $reply_rs['replyTime']?></td>
								</tr>
								<?php } ?>
							</table>
							<br><br>
							</div>
							<?php
								if($_SESSION['username'] != null){
									echo '<form id="form" name="form" method="post">';
									echo '<p><textarea name="replyContent" id="replyContent" cols="60" rows="5" placeholder="留言內容...."></textarea></p>';
									echo '<p><input type="submit" name="button" id="button" value="留言" /></p>';
									echo '</form>';
								}
								else{
									echo'<h2><a href="login.php">登入後才能留言(按此登入)</a></h2>';
								}
							?>
							<br><br>
                		</center>
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
    