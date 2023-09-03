<?php

if($msg == "جوین در لینک های ذخیره شده"){
if($userID == $sudo){
if($word["on"] == "on"){
if($word["savelink"] != null){
foreach($word["savelink"] as $link => $true){
	try{
$MadelineProto->messages->importChatInvite([
      'hash' =>str_replace('https://t.me/joinchat/', '', $link),
             ]);
   $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "• ربات در یک لینک ذخیره شده عضو شد",'parse_mode' => 'html']);
             }catch (\danog\MadelineProto\RPCErrorException $e) {
                 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "⟲ ربات محدود شد چند دقیقه دیگه امتحان کنید",'parse_mode' => 'html']);
                 }catch (\danog\MadelineProto\Exception $e2) {
                     $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "›› یک لینک خراب است !",'parse_mode' => 'html']);
                     }
			}
		}}
		}
	}
		if($msg == "پاکسازی لینک های ذخیره شده"){
		if($userID == $sudo){
		if($word["on"] == "on"){
		if($word["savelink"] != null){
		unset($word["savelink"]);
		file_put_contents("word.json",json_encode($word));
		   $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "⇜ تمام لینک های ذخیره شده پاکسازی شدند シ",'parse_mode' => 'html']);}
		else{
		$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "• لینکی تا به حال ذخیره نشده است !",'parse_mode' => 'html']);}
		}
		}
		}
