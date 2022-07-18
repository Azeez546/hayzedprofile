<!doctype html>
<head>
</head>
<body>
</body>


<?php
$array= array("math"=>"35","eng"=>"37","che"=>"40","bio"=>"41","phy"=>"43");

?>
<center><h2>Result</h2></center>
<table width="100%">
<th>Subject</th>
<th>Score</th>
<?php
 $mark=array_keys($array);
 $marks=count($array);
 for($i=0;$i < $marks;++$i){
    // echo $marks[$1].''.$array[$mark[$1]]."\n";
    echo "<tr>";
    echo "<td>".$mark[$i]. "</td>\n<td>".$array[$mark[$i]] . "</td>";
    echo "<td>".array_sum($array)."</td>";
    echo "</tr>";
    
 }
 if($array>=150){
    echo "very good";
    }else{
        echo "fail";
    }
 ?>
 </table>
 </body>