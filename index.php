<?php
function getRelative($a , $b)
{
$arr_a = explode(“/” , $a) ;
$brr_b = explode(“/” , $b) ;
$i = 1 ;
while (true) {
if($arr_a[$i] == $brr_b[$i]) {
$i ++ ;
} else {
break ;
}
}

$c = count($brr_b) ;
$d = count($arr_a) ;
$e = ($c>$d)?$c:$d ;
$str1 = ” ;
$str2 = ” ;
for ($j = $i ;$j<$e ;$j++) {
if(isset($arr_a[$j])) {
if($j<($d-1)){
$str1 .= $arr_a[$j] . “/” ;
} else {
$str1 .= $arr_a[$j] ;
}

}

if(isset($brr_b[$j])) {
$str2 .= “../” ;
}
}
return $str2 . $str1 ;
}

$a = “/c/b/c/d/k/h/t/e.php” ;
$b = “/a/b/e/f/h.php” ;
$relative = getRelative($a,$b) ;
var_dump($relative);
?>
