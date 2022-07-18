<!doctyple html>
<head>
</head>
<body>
     <table>
<tr><th>Subject</th>
<th>Marks</th></tr>
<?php $total=0;
$assoc=array("math"=>"20","eng"=>"30","che"=>"50","bio"=>"60","phy"=>"60");
foreach($assoc as $subject=>$value){?>
<tr><td><?php echo $subject;?></td>
<td><?php echo $value;?></td></tr>
<?php $total +=$value;}?>
<tr><td>total</td><td><?php echo $total;?></td></tr>