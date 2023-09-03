<?php

if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msg)) {
				if($word["join"] == "on"){
				if($userID == $sudo){
					if($word["on"] == "on"){
		preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msg,$a);  
          $user=$a[0];
		try {
            $MadelineProto->messages->importChatInvite([
      'hash' =>str_replace('https://t.me/joinchat/', '', $user),
             ]);
             $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "⇜ با موفقیت جوین شدم シ",'parse_mode' => 'html']);
             }catch (\danog\MadelineProto\RPCErrorException $e) {
             		$word["savelink"]["$user"] = "true";
             file_put_contents("word.json",json_encode($word));
                 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "» ربات محدود شد و لینک شما در ربات ذخیره شد",'parse_mode' => 'html']);
                 }catch (\danog\MadelineProto\Exception $e2) {
                     $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "⇦ لینک خرابه !",'parse_mode' => 'html']);
                     }
			}
		
		}}}
		if($msg == "جوین روشن" || $msg == "join on"){
			if($userID == $sudo){
					if($word["on"] == "on"){
						if($word["join"] != "on"){
		$word["join"] = "on";
		file_put_contents("word.json",json_encode($word));
		$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "⟲ جوین با موفقیت روشن شد シ", 'parse_mode'=>'html']);}
		else{
			$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "↜ جوین از قبل روشن بود !", 'parse_mode'=>'html']);}}}}
		if($msg == "جوین خاموش" || $msg == "join off"){
			if($userID == $sudo){
					if($word["on"] == "on"){
						if($word["join"] != "off"){
		$word["join"] = "off";
		file_put_contents("word.json",json_encode($word));
		$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "⟲ جوین با موفقیت خاموش شد シ", 'parse_mode'=>'html']);}
		else{
			$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "↜ جوین از قبل خاموش بود !", 'parse_mode'=>'html']);}}}}
		if($msg == "جوین خودکار روشن" || $msg == "auto join on"){
			if($userID == $sudo){
					if($word["on"] == "on"){
						if($word["autojoin"] != "on"){
		$word["autojoin"] = "on";
		file_put_contents("word.json",json_encode($word));
		$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "⟲ جوین خودکار با موفقیت روشن شد シ", 'parse_mode'=>'html']);}
		else{
			$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "↜ جوین خودکار از قبل روشن بود !", 'parse_mode'=>'html']);}}}}
		if($msg == "جوین خودکار خاموش" || $msg == "auto join off"){
			if($userID == $sudo){
					if($word["on"] == "on"){
						if($word["autojoin"] != "off"){
		$word["autojoin"] = "off";
		file_put_contents("word.json",json_encode($word));
		$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "⟲ جوین خودکار با موفقیت خاموش شد シ", 'parse_mode'=>'html']);}
		else{
			$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "↜ جوین خودکار از قبل خاموش بود !", 'parse_mode'=>'html']);}}}}
			if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msg)) {
				if($word["autojoin"] == "on"){
					if($word["on"] == "on"){
		preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msg,$a);  
          $user=$a[0];
            $MadelineProto->messages->importChatInvite([
      'hash' =>str_replace('https://t.me/joinchat/', '', $user),
             ]);
             $MadelineProto->messages->sendMessage(['peer' => $sudo , 'message' => "√ ربات در یک لینک عضو شد", 'parse_mode'=>'html']);
                     }
			}
		
		}
