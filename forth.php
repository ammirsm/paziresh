<?php
include 'functions.php';
$metafizik = (0*100)/15;
$mosighi = (0*100)/15;
$cinema = (0*100)/30;
$socialnetwork = (0*100)/16;
// give me status here

$r=0;
$rooms=array("metafizik"=>$metafizik,"mosighi"=>$mosighi,"cinema"=>$cinema,"socialnetwork"=>$socialnetwork);
asort($rooms);
  echo '<h3 class="title-bar" style="text-align:center;">بوعلی سینا</h3>';
foreach($rooms as $x=>$x_value)
    {
        if($x=="metafizik"){
            MakingBar("متافیزیک",$x_value);
        }
        elseif($x=="mosighi"){
            MakingBar("موسیقی",$x_value);
        }
        elseif($x=="cinema"){
            MakingBar("سینما",$x_value);
        }
        elseif($x=="socialnetwork"){
            MakingBar("شبکه های اجتماعی",$x_value);
        }
    }

?>