<?php
include 'dbcon.php';
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=$_GET['code'];
$c=mysql_query("SELECT user_id FROM users WHERE activation='$code'");

if(mysql_num_rows($c) > 0)
{
$count=mysql_query("SELECT user_id FROM users WHERE activation='$code' and status='0'");

if(mysql_num_rows($count) == 1)
{
mysql_query("update users set status='1' WHERE activation='$code'");
$msg="Your account is activated"; 
}
else
{
$msg ="Your account is already active, no need to activate again";
}

}
else
{
$msg ="Wrong activation code.";
}

}
?>
<?php echo '<div class="activate_email">'.$msg.'</div>'; 
include 'index.php';
?>