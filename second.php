<?php
include 'functions.php';
//varibles

$nojom= (0*100)/20;
$shimi= (0*100)/25;
$zist= (0*100)/25;


$b=0;
$d=0;
$r=0;
$rooms=array("nojom"=>$nojom,"shimi"=>$shimi,"zist"=>$zist);
asort($rooms);
 echo '<h3 class="title-bar" style="text-align:center;">فارابی</h3>';
foreach($rooms as $x=>$x_value)
    {
        if($x=="zist"){
            MakingBar("آزمایشگاه زیست",$x_value);
        }
        elseif($x=="shimi"){
            MakingBar("شیمی",$x_value);
        }
        elseif($x=="nojom"){
            MakingBar("نجوم",$x_value);
        }

    }
?>