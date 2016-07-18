<html>
<title>
test
</title>
<body>
<p>
猜猜你的ua是什么<p>
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
<hr>

<p>常量练习 <br>
打印常量 lalala:
<?php define("lalala","常量练习1");
echo lalala; ?>

<hr>

<p>数组练习 <br>
打印数组 lols:<br>
<?php $lols=array("xiaomi","coolpad","samsung","vivo","huawei","zte","one+");
sort($lols);
$lols_length=count($lols);

echo "lols 长度：",$lols_length,"<br>全部打印：<br>";
for($i=0;$i<$lols_length;$i++){
echo "<",$i,">","		",$lols[$i],"<br>";
};
echo "关联数组LOL_special<br>";
$LOL_special=array("one"=>"1","two"=>"2","three"=>"3");
arsort($LOL_special);
foreach ($LOL_special as $x=>$x_value){
echo "key=".$x."			value=",$x_value,"<br>"; 



}?><hr>

<p>
超全局变量练习
<?php
echo $_SERVER['PHP_SELF'],"<br>",$_SERVER['SERVER_NAME'],"<br>",$_SERVER['REMOTE_ADDR'],"<br>";
echo $_SERVER['REMOTE_ADDR'];

?><hr>

</p>
<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
post练习 <input type="text" name="fname">
<input type="submit">
</form>
<?php 
if(isset($_REQUEST['fname'])){
$name = $_REQUEST['fname']; 
echo $name; 
}
?>
</p>
<hr>
</p></body>
</html>