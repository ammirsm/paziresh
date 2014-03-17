<?php
include 'functions.php';
//varibles
$riazi = (0*100)/30;
$zist = (0*100)/15;
$saze = (0*100)/15;
$ekhteraat1 = (0*100)/20;
$ekhteraat2 = (0*100)/20;
// give me status here

$r=0;
$rooms=array("riazi"=>$riazi,"zist"=>$zist,"saze"=>$saze,"ekhteraat1"=>$ekhteraat1,"ekhteraat2"=>$ekhteraat2);
asort($rooms);
echo '<h3 class="title-bar" style="text-align:center;">خیام</h3>';
foreach($rooms as $x=>$x_value)
    {
        if($x=="riazi"){
            MakingBar("ریاضی",$x_value);
        }
        elseif($x=="zist"){
            MakingBar("زیست",$x_value);
        }
        elseif($x=="saze"){
            MakingBar("سازه ماکارونی",$x_value);
        }
        elseif($x=="ekhteraat1"){
            MakingBar("اختراعات راست",$x_value);
        }
        elseif($x=="ekhteraat2"){
            MakingBar("اختراعات چپ",$x_value);
        }
    }

?>