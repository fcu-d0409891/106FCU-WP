<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php require('Byet_Host_MySQL.php'); ?>
<?php
$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "select * from b32_21081456_guest.user where userAccount = '$id'";
$result = mysql_query($sql);
$rs=mysql_fetch_assoc($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id == null){
	 echo '請輸入帳號!';
     echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
}
elseif($pw == null){
	 echo '請輸入密碼!';
     echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
}
elseif(strcmp($rs['userAccount'],$id) == 0 && strcmp($rs['userPassWord'],$pw) == 0)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $rs['userName'];
        header("location:loginsuccess_page.php");
}
else
{
        header("location:loginfail_page.php");
}
?>