<?php
echo 'pak bambang memiliki air dengan volume 98 ;
echo "<br>" ;
echo 'kondisi apakah air tersebut akan pas,tumpah,atau kurang akan muncul di bawah ini sesuai input' ;
$p = 7 ;
$l = 2 ;
$t = 7 ;
$v = $p*$l*$t ;
if ($v == 98){
  echo 'pas';
}elseif($v > 98){
  echo 'tumpah';
}else{
  echo 'sisa';
}
?>
