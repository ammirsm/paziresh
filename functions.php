<?php

function StatusMaker($fname)
{
if ($fname<"40"){
  echo "progress-bar-success";
}
else if($fname>="40" && $fname<"60"){
  echo "";
}
else if($fname>="60" && $fname<"80"){
  echo "progress-bar-warning";
}
else if($fname>="80" && $fname<="100"){
  echo "progress-bar-danger";
}
else{
 echo " "; 
}
}
function MakingBar($name,$percent)
{
echo '<h3 class="title-bar">';
echo $name;
echo '</h3><div class="progress">';
echo '<div class="progress-bar ';
StatusMaker($percent);
echo '" style="width: ';
echo $percent;
echo '%;"></div>';
echo '</div>';


}
?>