<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require('Byet_Host_MySQL.php'); ?>
<?php 
    $sql = "select * from b32_21081456_guest.guest order by guestTime desc"; //修改成你要的 SQL 語法
    $result = mysql_query($sql) or die("Error");

    $data_nums = mysql_num_rows($result); //統計總比數
    $per = 5; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
    $result = mysql_query($sql.' LIMIT '.$start.', '.$per) or die("Error");
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
		#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#customers td, #customers th {
			border: 1px solid #fff;
			padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #FF88C2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #7700BB;
			color: white;
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
								<a href="inf.php">聯絡我們</a> <span class="divider"></span>
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
							<center><img alt="Bootstrap Image Preview" src="https://imgur.com/n1SabPj.png" width="60%"></center>
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
											<a href="question.php">帳號申請</a>
											</li>
											<li>
												<a href="question.php">發文流程</a>
											</li>
											<li>
												<a href="question.php">留言流程</a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="inf.php">站務資訊</a>
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
						<h2>文章列表</h2>
							<table id="customers" >
							<tr align="center">
									<th width="5%"> 分類 </th><th width="45%"> 標題 </th><th width="10%"> 作者 </th><th width="20%"> 發文日期 </th>
							</tr>
             		  	  <?php
							for($i=1;$i<=mysql_num_rows($result);$i++){
							 $rs=mysql_fetch_assoc($result);
							 if($rs['guestType']==1){
								 $type = '募款';
							 }
							 elseif($rs['guestType']==2){
								 $type = '募物';
							 }
							 elseif($rs['guestType']==3){
								 $type = '募人';
							 }
							?>
								
								<tr align="center" >
								  <td width="5%"> <?php echo $type?> </td><td width="45%"><a href="content.php?id=<?php echo $rs['guestID'] ?>"><?php echo $rs['guestSubject']?></a> </td><td width="10%"> <?php echo $rs['guestName']?> </td><td width="20%"> <?php echo $rs['guestTime']?> </td>
								</tr>
							<?php } ?>
							</table>
							<br><br>
							<div style="font-size: 200%">
							<?php
								//分頁頁碼
								echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
								echo "<br /><a href=?page=1>首頁</a> ";
								echo "第 ";
								for( $i=1 ; $i<=$pages ; $i++ ) {
									if ( $page-3 < $i && $i < $page+3 ) {
										echo "<a href=?page=".$i.">".$i."</a> ";
									}
								} 
								echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
							?>
							</div>
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
				<a href="inf.php">聯絡我們</a> <br>
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
    				