<?php 

if(strpos($msg,"تنظیم جواب")!==false){
if($word["on"] == "on"){
if($userID == $sudo){
$wordt = trim(str_replace("تنظیم جواب ","",$msg));
$wordt = explode("|",$wordt."|||||");
$txt = trim($wordt[0]);
$ans = trim($wordt[1]);
if(!isset($word["word"]["$txt"])){
$word["word"]["$txt"] = "$ans";
file_put_contents("word.json",json_encode($word));
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• از این پس ربات در جواب ( $txt ) کلمه ( $ans ) را خواهد گفت 😉\n\n@Source_Home" , 'parse_mode' => 'html']);}}}}
 if(strpos($msg,"حذف جواب")!==false){
	if($word["on"] == "on"){
if($userID == $sudo){
$wordt = trim(str_replace("حذف جواب ","",$msg));
$wordt = explode("|",$wordt."|||||");
$txt = trim($wordt[0]);
$ans = trim($wordt[1]);
if(isset($word["word"]["$txt"])){
unset($word["word"]["$txt"]);
file_put_contents("word.json",json_encode($word));
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• کلمه ( $txt ) با موفقیت از لیست حذف شد 😄\n\n@Source_Home" , 'parse_mode' => 'html']);}}}}
if($msg == "لیست کلمات" || $msg == "word list"){
   if($word["on"] == "on"){
if($userID == $sudo){
	if($word["word"] != null){
	$num =1;
	foreach($word["word"] as $txt => $ans){
		$list = $list."**$num** - کلمه : **$txt** ›› جواب : **$ans** \n";
  $num++; }
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• لیست کلمات و پاسخ هایی که در ربات ذخیره شده است\n\n$list\n\n• create : @Source_Home" , 'parse_mode' => 'markdown']);}
else{
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• کلمه ای در لیست موجود نیست !\n• برای دریافت راهنمای ربات ، کلمه ' راهنما ' را ارسال کنید\n\n@Source_Home" , 'parse_mode' => 'html']);}}}}

if($msg == "راهنما" || $msg == "help"){
	if($word["on"] == "on"){
if($userID == $sudo){
	$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"
⟲ راهنمای تبچی
﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏
⇜ روشن و خاموش کردن ربات :
• ربات (روشن|خاموش)

⇜ روشن و خاموش کردن جوین :
• جوین (روشن|خاموش)

⇜ روشن و خاموش کردن جوین خودکار :
• جوین خودکار (روشن|خاموش)

⇜ دستور جوین در لینک هایی که ذخیره شده :
• جوین در لینک های ذخیره شده

⇜ دستور پاک کردن تمام لینک های ذخیره شده :
• پاکسازی لینک های ذخیره شده

⇜ روشن و خاموش کردن فروارد خودکار :
• فروارد خودکار (روشن|خاموش)

⇜ تنظیم زمان بین هر فروارد به دقیقه [ مثال : 02 ] :
• تنظیم زمان فروارد خودکار (time)

⇜ تنظیم پست فروارد خودکار [ مثال -123456789 | 123 ] :
• تنظیم پست (آیدی عددی چنل) | (آیدی پست)

⇜ دستور زیر برای خروج ربات از گروه :
• لفت بده

⇜ روشن و خاموش کردن پاسخگویی خودکار :
• پاسخگویی خودکار (روشن|خاموش)

⇜ افزودن کلمه و جواب :
• تنظیم جواب (کلمه) | (پاسخ)

⇜ حذف کلمه و جواب :
• حذف جواب (کلمه) | (پاسخ)

⇜ دریافت لیست کلمات و پاسخ ها :
• لیست کلمات

⇜ دریافت وضعیت ربات :
• آمار

⇜ ارسال پیام :
• ارسال به همه (text)
• ارسال به پیوی ها (text)
• ارسال به گروه ها (text)

⇜ فروراد پیام :
• فروارد به همه (reply)
• فروارد به پیوی ها (reply)
• فروارد به گروه ها (reply)
﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏
↜ ربات سازنده ⇦ @Source_Home
" , 'parse_mode' => 'markdown']);}}}
	if($msg == "ربات روشن" || $msg == "bot on"){
		if($userID == $sudo){
			if($word["on"] != "on"){
				$word["on"] = "on";
				file_put_contents("word.json",json_encode($word));
				$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• ربات با موفقیت روشن شد" , 'parse_mode' => 'html']);}
				else{
                $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• ربات از قبل روشن بود !" , 'parse_mode' => 'html']);}}}
     if($msg == "ربات خاموش" || $msg == "bot off"){
         if($userID == $sudo){
         	if($word["on"] != "off"){
         	$word["on"] = "off";
               file_put_contents("word.json",json_encode($word));
				$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• ربات با موفقیت خاموش شد" , 'parse_mode' => 'html']);}
               else{
                $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"• ربات از قبل خاموش بود !" , 'parse_mode' => 'html']);}}}
if($msg == "پاسخگویی خودکار روشن" || $msg == "auto speak on"){
		if($userID == $sudo){
			if($word["autospeak"] != "on"){
				$word["autospeak"] = "on";
				file_put_contents("word.json",json_encode($word));
				$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"√ پاسخگویی خودکار روشن شد" , 'parse_mode' => 'html']);}
				else{
                $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"⟲ پاسخگویی خودکار از قبل روشن بود" , 'parse_mode' => 'html']);}}}
     if($msg == "پاسخگویی خودکار خاموش" || $msg == "auto speak off"){
         if($userID == $sudo){
         	if($word["autospeak"] != "off"){
         	$word["autospeak"] = "off";
               file_put_contents("word.json",json_encode($word));
				$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"√ پاسخگویی خودکار خاموش شد" , 'parse_mode' => 'html']);}
               else{
                $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"⟲ پاسخگویی خودکار از قبل خاموش بود" , 'parse_mode' => 'html']);}}}
               if(isset($word["word"]["$msg"])){
               	if($word["autospeak"] == "on"){
               	if($word["on"] == "on"){
               	$answer = $word["word"]["$msg"];
               $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"$answer" , 'parse_mode' => 'html']);}}}
if($msg == "ربات" or $msg == "bot"){
	if($userID == $sudo){
	if($word["on"] == "on"){
		$ans = array("جونم ؟","من کجام به ربات میخوره :/","چیه |:");
		$rand = rand(0,2);
		$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"$ans[$rand]", 'parse_mode' => 'html']);}}}
		if($msg == "لفت بده"){
			if($word["on"] == "on"){
				if($userID == $sudo){
					$MadelineProto->messages->sendMessage(['peer' => $chatID , 'reply_to_msg_id' => $msg_id , 'message' => "♡ لفت بای", 'parse_mode'=>'html']);
					$MadelineProto->channels->leaveChannel(['channel' => $chatID, ]);
					}
					}
				}
				if($msg == "آمار" || $msg == "state"){
					if($userID == $sudo){
$pv = 0;$group = 0;
$dialogs = $MadelineProto->get_dialogs();
foreach ($dialogs as $k=>$v) {
if($v["_"] == "peerUser")
$pv ++;
if($v["_"] == "peerChannel")
$group ++;
}
$join = $word["join"];
$autojoin = $word["autojoin"];
$bot_on = $word["on"];
$autofwd = $word["autofwd"];
$autotime = $word["autotime"];
$autosp = $word["autospeak"];
$txtstate = "⇜ آمار ربات تبچی\n﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏\n» تعداد پیوی ها : **$pv**\n» تعداد گروه ها : **$group**\n﹍﹍﹍﹍﹍﹍﹍﹍﹍﹍﹍﹍﹍\n⇜ وضعیت ربات : **$bot_on**\n⇜ جوین : **$join**\n⇜ جوین خودکار : **$autojoin**\n⇜ فروارد خودکار : **$autofwd**\n⇜ پاسخ گویی خودکار : **$autosp**\n⇜ زمان فروارد خودکار : **هر $autotime دقیقه**\n﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏﹏\n• create : @Source_Home";
$state = str_replace(["on","off"],["فعال | √","خاموش | ×"],$txtstate);
$MadelineProto->messages->sendMessage(['peer' =>$chatID,'reply_to_msg_id' =>$msg_id,'message' => "$state",'parse_mode'=>'markdown']);
}
}

if($msg == "پاکسازی لیست کلمات"){
    	if($userID == $sudo){
         	if($word["on"] == "on"){
                	if($word["linkdoni"] != null){
                	unset($word["word"]);
                file_put_contents("word.json",json_encode($word));
                $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"⟲ لیست کلمات با موفقیت پاکسازی شد" , 'parse_mode' => 'html']);}
				else{
                $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id , 'message' =>"↢ لیست کلمات خالی است !" , 'parse_mode' => 'html']);}}}}

?>