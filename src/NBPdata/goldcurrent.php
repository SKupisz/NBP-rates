<?php
$gold30 = file_get_contents('http://api.nbp.pl/api/cenyzlota/last/30?format=json');
$g30json = json_decode($gold30);
$now = 0.9;
?>
<script>
var can = document.getElementById("gold-canvas");
var ctx = can.getContext("2d");
ctx.lineWidth = 3;
ctx.strokeStyle = "#ff0000";
var lt = can.width;
<?php
for($i = 0 ; $i < 30; $i++)
{
  $g30data = $g30json[$i]->cena;
  if($i == 0)
  {
    ?>ctx.moveTo(<?php echo $now;?>,<?php echo 200-$g30data;?>);<?php
  }

  if($i > 0)
  {
    ?>ctx.lineTo((lt/30)*<?php echo $now; ?>,<?php echo 200-$g30data;?>);<?php
  }
  $now+=1;
}
?>
ctx.stroke();
</script>
