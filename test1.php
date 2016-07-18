<html>
<title>
test
</title>
<body>
<h1>
猜猜你的ua是什么<p>
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>

<p>常量练习 <br>
打印常量 lalala:
<?php define("lalala","常量练习1");
echo lalala; ?>


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



}?>
<p>
超全局变量练习

</p>

<php? >
</p>
</h1></body>
</html>