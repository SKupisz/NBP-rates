<?php
$ctable = file_get_contents('http://api.nbp.pl/api/exchangerates/tables/c?format=json');
$json = json_decode($ctable);
$final_rates = array();
for($i = 0 ; $i < count($json[0]->rates); $i++)
{
  $address = $json[0]->rates[$i];
  $final_rates[$i] = [$address->code,$address->bid,$address->ask];
}
$gold = file_get_contents('http://api.nbp.pl/api/cenyzlota?format=json');
$gjson = json_decode($gold);
$final_gold = $gjson[0]->cena;
?>
