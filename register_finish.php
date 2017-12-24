<?php require('Byet_Host_MySQL.php'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$id = $_GET["id"];
$pw = $_GET["pw"];
$pw2 = $_GET["pw2"];
$nickname = $_GET["nickname"];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id == null){
	echo '沒有輸入帳號! 註冊失敗!請重新註冊一次! 3秒後返回註冊畫面';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
}
elseif($pw == null){
	echo '沒有輸入密碼! 註冊失敗!請重新註冊一次! 3秒後返回註冊畫面';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
}
elseif($pw2 == null){
	echo '沒有輸入確認密碼! 註冊失敗!請重新註冊一次! 3秒後返回註冊畫面';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
}
elseif($pw != $pw2){
	echo '確認密碼不一致! 註冊失敗!請重新註冊一次! 3秒後返回註冊畫面';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
}
elseif($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
	mysql_query("set names 'utf8'");
	$sql = "insert into b32_21081456_guest.user(userID,userAccount,userPassWord,userName)value('','$id','$pw','$nickname')";
	if(mysql_query($sql))
	{
			echo '註冊成功! 3秒後返回首頁!';
			echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
	}
	else
	{
			echo '伺服器不穩! 註冊失敗!請重新註冊一次! 3秒後返回註冊畫面';
			echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
	}
}
else
{
        echo '伺服器不穩! 註冊失敗!請重新註冊一次! 3秒後返回註冊畫面';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
}
?>		