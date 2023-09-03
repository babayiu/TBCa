<?php

if($msg == "فروارد خودکار روشن" || $msg == "auto forwarn on"){
if($userID == $sudo){
if($word["on"] == "on"){
if($word["autofwd"] != "on"){
$word["autofwd"] = "on";
file_put_contents("word.json",json_encode($word));
$MadelineProto->messages->sendMessage(['peer'=>$chatID,'reply_to_msg_id'=>$msg_id,'message'=>"√ فروارد خودکار روشن شد"]);}
else{
$MadelineProto->messages->sendMessage(['peer'=>$chatID,'reply_to_msg_id'=>$msg_id,'message'=>"⇜ فروارد خودکار از قبل روشن بود !"]);}}}}
if($msg == "فروارد خودکار خاموش" || $msg == "auto forwarn off"){
if($userID == $sudo){
if($word["on"] == "on"){
if($word["autofwd"] != "off"){
$word["autofwd"] = "off";
file_put_contents("word.json",json_encode($word));
$MadelineProto->messages->sendMessage(['peer'=>$chatID,'reply_to_msg_id'=>$msg_id,'message'=>"× فروارد خودکار خاموش شد"]);}
else{
$MadelineProto->messages->sendMessage(['peer'=>$chatID,'reply_to_msg_id'=>$msg_id,'message'=>"⇜ فروارد خودکار از قبل خاموش بود !"]);}}}}
date_default_timezone_set('Asia/Tehran');
$date = date('i');
if(preg_match("/^(تنظیم زمان فروارد خودکار) (.*)$/",$msg)){
if($userID == $sudo){
if($word["on"] == "on"){
preg_match("/^(تنظیم زمان فروارد خودکار) (.*)$/",$msg,$settime);
$time = $settime[2];
$newtime = date('i' , strtotime(date('H:i') . "+$time minutes"));
$word["timefwd"] = "$newtime";
$word["autotime"] = "$time";
$word["ok"] = "no";
file_put_contents("word.json",json_encode($word));
$MadelineProto->messages->sendMessage(['peer'=>$chatID , 'reply_to_msg_id'=>$msg_id , 'message'=>"⇦ زمان فروارد خودکار روی $time دقیقه تنظیم شد !"]);}}}
if(strpos($msg,"تنظیم پست")!==false){
if($userID == $sudo){
if($word["on"] == "on"){
$postt = trim(str_replace("تنظیم پست ","",$msg));
$postt = explode("|",$postt."|||||");
$ch = trim($postt[0]);
$id = trim($postt[1]);
$word["post_id"] = "$id";
$word["channel"] = "$ch";
file_put_contents("word.json",json_encode($word));
$MadelineProto->messages->sendMessage(['peer'=>$chatID , 'reply_to_msg_id'=>$msg_id ,'message'=>"» پست خودکار با موفقیت تنظیم شد"]);}}}
 date_default_timezone_set('Asia/Tehran');
 $date = date('i');
 if($date == $word["timefwd"]){
 if($word["autofwd"] == "on"){
 if($word["on"] == "on"){
 $plustime = $word["autotime"];
$newtime = date('i' , strtotime(date('H:i') . "+$plustime minutes"));
$word["timefwd"] = "$newtime";
file_put_contents("word.json",json_encode($word));
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "chat" || $type3 == "supergroup" || $type3 == "user"){
$pid = $word["post_id"];
 $from = $word["channel"];
 	 $MadelineProto->messages->forwardMessages(['from_peer' => $from, 'to_peer' => $peer, 'id' => [$pid] ]);
 }
 }
 }
 }
 }
