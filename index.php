<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$TheSunAlsoRisesbyErnestHemingway = $array[0];
$MiddlemarchbyGeorgeEliot = $array[1];

if ($vote == 0) {
  $TheSunAlsoRisesbyErnestHemingway = $TheSunAlsoRisesbyErnestHemingway + 1;
}
if ($vote == 1) {
  $MiddlemarchbyGeorgeEliot = $MiddlemarchbyGeorgeEliot + 1;
}

//insert votes to txt file
$insertvote = $TheSunAlsoRisesbyErnestHemingway."||".$MiddlemarchbyGeorgeEliot;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>TheSunAlsoRisesbyErnestHemingway:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($TheSunAlsoRisesbyErnestHemingway/($MiddlemarchbyGeorgeEliot+$TheSunAlsoRisesbyErnestHemingway),2)); ?>'
height='20'>
<?php echo(100*round($TheSunAlsoRisesbyErnestHemingway/($MiddlemarchbyGeorgeEliot+$TheSunAlsoRisesbyErnestHemingway),2)); ?>%
</td>
</tr>
<tr>
<td>MiddlemarchbyGeorgeEliot:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($MiddlemarchbyGeorgeEliot/($MiddlemarchbyGeorgeEliot+$TheSunAlsoRisesbyErnestHemingway),2)); ?>'
height='20'>
<?php echo(100*round($MiddlemarchbyGeorgeEliot/($MiddlemarchbyGeorgeEliot+$TheSunAlsoRisesbyErnestHemingway),2)); ?>%
</td>
</tr>
</table>