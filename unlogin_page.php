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
								<a href="inf.php">聯絡我們</a> <span class="divider"></span>
							</li>
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
									<form class="navbar-form navbar-left" role="search">
										<div class="form-group">
											<input type="text" class="form-control" />
										</div> 
										<button type="submit" class="btn btn-default">
											搜尋
										</button>
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
             		  	  <h2>尚未登入! 5秒鐘後自動跳轉登入畫面</h2>
						  <?php
							echo '<meta http-equiv=REFRESH CONTENT=5;url=login.php>';
						  ?>
						  <h3><a href="login.php">點擊此鏈結可立即前往登入畫面</a></h3>
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