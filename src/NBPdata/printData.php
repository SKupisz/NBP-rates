<section class = "rates-row description">
  <div class = "row">
  <div class = "curr">
    Code
  </div>
  <div class = "code">
    Bid
  </div>
  <div class = "rate">
    Ask
  </div>
</div>
</section>
<?php
for($i = 0 ; $i < count($final_rates); $i++)
{
  ?><section class = "rates-row">
    <div class = "row">
    <div class = "curr">
      <?php echo $final_rates[$i][0];?>
    </div>
    <div class = "code">
      <?php echo round($final_rates[$i][1],2);?>
    </div>
    <div class = "rate">
      <?php echo round($final_rates[$i][2],2);?>
    </div>
  </div>
  </section><?php
}
?>
