<?php
$vote = $_REQUEST['vote'];

//code modified from w3 school's https://www.w3schools.com/php/php_ajax_poll.asp

$filename = "poll_result.txt";
$content = file($filename);

$array = explode("||", $content[0]);
$Hemingway = $array[0];
$Eliot = $array[1];

if ($vote == 0) {
  $Hemingway = $Hemingway + 1;
}
if ($vote == 1) {
  $Eliot = $Eliot + 1;
}

$insertvote = $Hemingway."||".$Eliot;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Results:</h2>
<table>
<tr>
<td>Hemingway:</td>
<td>
<img src="poll.gif" width='<?php echo(100*round($Hemingway/($Eliot+ $Hemingway),2)); ?>' height='20'>
<?php echo(100*round($Hemingway/($Eliot+$Hemingway),2)); ?>%
</td>
</tr>
<tr>
<td>Eliot:</td>
<td>
<img src="poll.gif" width='<?php echo(100*round($Eliot/($Eliot+$Hemingway),2)); ?>' height='20'>
<?php echo(100*round($Eliot/($Eliot+$Hemingway),2)); ?>%
</td>
</tr>
</table>