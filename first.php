<?php
include 'functions.php';
//physics
$computer= (0*100)/20;
$fizik= (000)/35;
$havafaza= (0*100)/10;


$b=0;
$d=0;
$r=0;
$rooms=array("computer"=>$computer,"fizik"=>$fizik,"havafaza"=>$havafaza);
asort($rooms);
echo '<h3 class="title-bar" style="text-align:center;">خوارزمی</h3>';
foreach($rooms as $x=>$x_value)
    {
        if($x=="computer"){
            MakingBar("کامپیوتر",$x_value);
        }
        elseif($x=="fizik"){
            MakingBar("فیزیک",$x_value);
        }
        elseif($x=="havafaza"){
            MakingBar("هوافضا",$x_value);
        }

    }

?>