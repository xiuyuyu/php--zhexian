<?php
$data = array ($_POST ["T1"], $_POST ["T2"], $_POST ["T3"], $_POST ["T4"], $_POST ["T5"], $_POST ["T6"], $_POST ["T7"], $_POST ["T8"], $_POST ["T9"], $_POST ["T10"], $_POST ["T11"], $_POST ["T12"] );
$month = array ("Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec" );
$max = 0;
for($i = 0; $i < 12; $i ++) {
	$max = $max + $data [$i]; //所有网站访问量的累加和
}
header("content-type:image/png");
$im = imagecreate ( 550, 300 ); //创建画布 
$green = imagecolorallocate ( $im, 214, 235, 214 ); //设置颜色值
$black = imagecolorallocate ( $im, 0, 0, 0 );
$red = imagecolorallocate ( $im, 255, 0, 0 );
$blue = imagecolorallocate ( $im, 0, 0, 255 );
imageline ( $im, 30, 230, 520, 230, $blue ); //设置X轴横坐标
imageline ( $im, 30, 5, 30, 230, $blue ); //设置Y轴纵坐标
imagestring ( $im, 3, 520, 222, "X", $black ); //输出字符X
imagestring ( $im, 3, 16, 1, "Y", $black ); //输出字符Y
$l = 190;
$k1 = 30;
$k2 = 510;
for($j = 0; $j < 12; $j ++) {
	imageline ( $im, $k1, $l, $k2, $l, $black ); //设置X轴网格线横坐标
	$l = $l - 40;
}
$f = 70;
$z1 = 20;
$z2 = 228;
for($j = 0; $j < 12; $j ++) {
	imageline ( $im, $f, $z1, $f, $z2, $black ); //设置Y轴网格线纵坐标
	$f = $f + 40;
}
//输出Y轴坐标值
$l = 185;
for($j = 1; $j < 6; $j ++) {
	imagestring ( $im, 2, 2, $l, 20 * $j . "%", $red );
	$l = $l - 40;
}
$x = 20;
$y = 230;
for($i = 1; $i < 12; $i ++) {
	$y_lt = $y - (($data [$i - 1] / $max) * 200); //设置网站访问量的纵坐标值
	$y_ht = $y - (($data [$i] / $max) * 200); //获取每月网站访问量数的纵坐标值
	imageline ( $im, $x * ($i * 2 - 1) + 30, $y_lt, $x * (($i + 1) * 2 - 1) + 30, $y_ht, $red ); //绘制网站访问量折线图
}
for($i = 1; $i < 13; $i ++) {
	$r1 = round ( (($data [$i - 1]) / $max) * 100, 2 );
	imagestring ( $im, 2, $x * ($i - 1) * 2 + 40, $y + 11, $month [$i - 1], $black ); //输出月份的值
	imagestring ( $im, 2, $x * ($i - 1) * 2 + 36, $y + 25, $r1 . "%", $red ); //输出网站访问量的百分比
}
imagepng ( $im );
imagedestroy ( $im ); //释放图像资源
?>
