<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$Hemingway = $array[0];
$Eliot = $array[1];

if ($vote == 0) {
  $Hemingway = $Hemingway + 1;
}
if ($vote == 1) {
  $Eliot = $Eliot + 1;
}

//insert votes to txt file
$insertvote = $Hemingway."||".$Eliot;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Hemingway:</td>
<td>
<?php echo(100*round($Hemingway/($Eliot+$Hemingway),2)); ?>%
</td>
</tr>
<tr>
<td>Eliot:</td>
<td>
<?php echo(100*round($Eliot/($Eliot+$Hemingway),2)); ?>%
</td>
</tr>
</table>