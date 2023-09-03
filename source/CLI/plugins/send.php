<?php

if ($msg == "فروارد به همه" || $msg == "forward to all"){
	if($userID == $sudo){
$idmsg=  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "chat" || $type3 == "supergroup" || $type3 == "user"){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$idmsg], ]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id'=>$msg_id ,'message' =>'↜ پیام شما با موفقیت فرواد شد シ']);
}}
if(preg_match("/^(ارسال به همه) (.*)$/", $msg)){
	if($userID == $sudo){
preg_match("/^(ارسال به همه) (.*)$/", $msg, $msg2);
$text = $msg2[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "supergroup" ||$type3 == "user"||$type3 == "chat"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id'=>$msg_id , 'message' =>'↜ پیام شما با موفقیت ارسال شد シ','parse_mode' => "markdown"]);		
}
	}
	if(preg_match("/^(ارسال به پیوی ها) (.*)$/", $msg)){
	if($userID == $sudo){
preg_match("/^(ارسال به پیوی ها) (.*)$/", $msg, $msg2);
$text = $msg2[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "user"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id'=>$msg_id , 'message' =>'›› پیام شما به پیوی ها ارسال شد シ','parse_mode' => "markdown"]);		
}
	}
	if(preg_match("/^(ارسال به گروه ها) (.*)$/", $msg)){
	if($userID == $sudo){
preg_match("/^(ارسال به گروه ها) (.*)$/", $msg, $msg2);
$text = $msg2[2];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "supergroup" || $type3 == "chat"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id'=>$msg_id , 'message' =>'›› پیام شما به گروه ها ارسال شد シ','parse_mode' => "markdown"]);		
}
	}
	if ($msg == "فروارد به پیوی ها" || $msg == "forward to pv"){
	if($userID == $sudo){
$idmsg=  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "user"){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$idmsg], ]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id'=>$msg_id ,'message' =>'↚ پیام شما به پیوی ها فروارد شد シ']);
}}
if ($msg == "فروارد به گروه ها" || $msg == "forward to group"){
	if($userID == $sudo){
$idmsg=  $update['update']['message']['reply_to_msg_id'];
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $peer) {
$type = $MadelineProto->get_info($peer);
$type3 = $type['type'];
if($type3 == "chat" || $type3 == "supergroup"){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$idmsg], ]); 
}
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id'=>$msg_id ,'message' =>'↚ پیام شما به گروه ها فروارد شد シ']);
}}
