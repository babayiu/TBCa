<?php

$sudo = [ADMIN];// ایدی عددی ادمین
$pluginslist = [
"tabchi",
"join",
"send",
"autofwd",
"savelink",
];
$word = json_decode(file_get_contents("word.json"),true);
if(!file_exists("word.json")){
$word["on"] = "on";
$word["autotime"] = "20";
$word["autofwd"] = "off";
$word["autojoin"] = "off";
$word["join"] = "off";
$word["autospeak"] = "on";
$word["word"]["سلام"] = "سلام عشقم";
file_put_contents("word.json",json_encode($word));}

$pl= count($pluginslist) - 1;
for($a=0;$a<=$pl;$a++){
  $listplug = "plugins/".$pluginslist[$a].".php";
  include($listplug);
  }
