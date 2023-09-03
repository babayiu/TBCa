<?php

include "jdf.php";
ob_start();
error_reporting(0);
date_default_timezone_set('Asia/Tehran');
define('API_KEY','[TOKEN]');
$sudo = [ADMIN];
function bot($method,$data){
  
  $url = "https://api.telegram.org/bot".API_KEY."/".$method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
 }
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$textmassage = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
//------------------------------------------------------------------------
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
@$titleee=$update->message->chat->title;
@$tcc=$update->callback_query->message->chat->type;
//------------------------------------------------------------------------
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
///=================================time
@$Fdate=jdate("Y/m/d");
@$Ftime=jdate("H:i:s");
@$Edate=date("Y/m/d");
@$Etime=date("H:i:s");
@$Ltime=jdate("H:i");
$Ee=date("I");
$com = file_get_contents("com.txt");
@$dataa = json_decode(file_get_contents("data.json"),true);
///=================================time
$admins=$dataa['data']['admin'];
$baners_sh=$dataa['data']['baners_sh'];
$baners_ab=$dataa['data']['baners_ab'];
$userz=$dataa['data']['userz'];
$gapz=$dataa['data']['gapz'];
$banerm_a1_lock =$dataa['data']['banerm_a1_lock'];
$banerm_a2_lock =$dataa['data']['banerm_a2_lock'];
$banerm_a3_lock =$dataa['data']['banerm_a3_lock'];
$banerm_a4_lock =$dataa['data']['banerm_a4_lock'];
$banerm_a5_lock =$dataa['data']['banerm_a5_lock'];
$banerm_s1_lock =$dataa['data']['banerm_s1_lock'];
$banerm_s2_lock =$dataa['data']['banerm_s2_lock'];
$banerm_s3_lock =$dataa['data']['banerm_s3_lock'];
$banerm_s4_lock =$dataa['data']['banerm_s4_lock'];
$banerm_s5_lock =$dataa['data']['banerm_s5_lock'];
$baners_a1_lock =$dataa['data']['baners_a1_lock'];
$baners_a2_lock =$dataa['data']['baners_a2_lock'];
$baners_a3_lock =$dataa['data']['baners_a3_lock'];
$baners_a4_lock =$dataa['data']['baners_a4_lock'];
$baners_a5_lock =$dataa['data']['baners_a5_lock'];
$baners_s1_lock =$dataa['data']['baners_s1_lock'];
$baners_s2_lock =$dataa['data']['baners_s2_lock'];
$baners_s3_lock =$dataa['data']['baners_s3_lock'];
$baners_s4_lock =$dataa['data']['baners_s4_lock'];
$baners_s5_lock =$dataa['data']['baners_s5_lock'];
$admin_lock_set_admin=$dataa['data']['admin_lock_set_admin'];
$admin_lock_del_admin=$dataa['data']['admin_lock_del_admin'];
$admin_lock_see_admin=$dataa['data']['admin_lock_see_admin'];
$admin_lock_stin_admin=$dataa['data']['admin_lock_stin_admin'];
$admin_lock_add_baner=$dataa['data']['admin_lock_add_baner'];
$admin_lock_del_baner=$dataa['data']['admin_lock_del_baner'];
$admin_lock_see_baner=$dataa['data']['admin_lock_see_baner'];
$admin_lock_reset_bot=$dataa['data']['admin_lock_reset_bot'];
$admin_lock_setting_panel=$dataa['data']['admin_lock_setting_panel'];
$admin_lock_see_panel=$dataa['data']['admin_lock_see_panel'];
$admin_lock_tab_panel=$dataa['data']['admin_lock_tab_panel'];
$send_repit=$dataa['data']['send_repit'];
$send_pv=$dataa['data']['send_pv'];
$send_gp=$dataa['data']['send_gp'];
$send_bs=$dataa['data']['send_bs'];
$send_ba=$dataa['data']['send_ba'];
$state=$dataa['data']['state'];
$user = file_get_contents("user.txt");
$gap = file_get_contents("gap.txt");
$m_user = explode("\n",$user);
$m_gap = explode("\n",$gap);
///=================================time
$k_start =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"⚠️ ریست کردن",'callback_data'=>'reser'],['text'=>"📚 آمـــــار",'callback_data'=>'amaar']],
[['text'=>"⚙ تنظیمات پنـــل ⚙",'callback_data'=>'settings']],
[['text'=>"💠 بنر های شیشه ای",'callback_data'=>'baners_panel'],['text'=>"💠 بنر های عادی",'callback_data'=>'banera_panel']],
[['text'=>"👥 مدیریت ادمین ها 👥",'callback_data'=>'admins_panel']],
]]);
$k_amar =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"📝 لیست گروه ها",'callback_data'=>'list_gapz'],['text'=>"📝 لیست کاربران",'callback_data'=>'list_userz']],
[['text'=>"📍 فوروارد به گپ ها",'callback_data'=>'f_gapz'],['text'=>"📍 فوروارد به کاربران",'callback_data'=>'f_userz']],
[['text'=>"📌 فوروارد همگانی 📌",'callback_data'=>'f_all']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_admins_panel = json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"افزودن ادمین ➕",'callback_data'=>'add_admin'],['text'=>"حذف ادمین ➖",'callback_data'=>'del_admin']],
[['text'=>"📝 لیست ادمین ها",'callback_data'=>'list_admins'],['text'=>"🖇 تنظیم دسترسی",'callback_data'=>'setting_admins']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_setting_panel =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"$send_pv",'callback_data'=>'send_pv'],['text'=>"🔏 ارسال پیوی",'callback_data'=>'ccc']],
[['text'=>"$send_gp",'callback_data'=>'send_gp'],['text'=>"🔏 ارسال گروه",'callback_data'=>'ccccc']],
[['text'=>"$send_repit",'callback_data'=>'send_repit'],['text'=>"🔏 ارسال رگباری",'callback_data'=>'DATA']],
[['text'=>"$send_ba",'callback_data'=>'send_ba'],['text'=>"🔏 ارسال بنر عادی",'callback_data'=>'DATA']],
[['text'=>"$send_bs",'callback_data'=>'send_bs'],['text'=>"🔏 ارسال بنرشیشه ای",'callback_data'=>'DATA']],
[['text'=>"$state",'callback_data'=>'state'],['text'=>"📍 ربـــات",'callback_data'=>'DATA']],
[['text'=>"➣صفحه بعد (تنظیم بنرهای ارسالی)",'callback_data'=>'setting_baners']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_setting_baners =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"👇🏻 بنـــر های عـــادی  👇🏻",'callback_data'=>'DATA']],
[['text'=>"$baners_a1_lock",'callback_data'=>'baners_a1_lock'],['text'=>"🇩🇪 بنر عادی 1",'callback_data'=>'DATA']],
[['text'=>"$baners_a2_lock",'callback_data'=>'baners_a2_lock'],['text'=>"🇩🇪 بنر عادی 2",'callback_data'=>'DATA']],
[['text'=>"$baners_a3_lock",'callback_data'=>'baners_a3_lock'],['text'=>"🇩🇪 بنر عادی 3",'callback_data'=>'DATA']],
[['text'=>"$baners_a4_lock",'callback_data'=>'baners_a4_lock'],['text'=>"🇩🇪 بنر عادی 4",'callback_data'=>'DATA']],
[['text'=>"$baners_a5_lock",'callback_data'=>'baners_a5_lock'],['text'=>"🇩🇪 بنر عادی 5",'callback_data'=>'DATA']],
[['text'=>"👇🏻 بنـــر های شیشــه ای  👇🏻",'callback_data'=>'DATA']],
[['text'=>"$baners_s1_lock",'callback_data'=>'baners_s1_lock'],['text'=>"💠 بنرشیشه ای 1",'callback_data'=>'DATA']],
[['text'=>"$baners_s2_lock",'callback_data'=>'baners_s2_lock'],['text'=>"💠 بنرشیشه ای 2",'callback_data'=>'DATA']],
[['text'=>"$baners_s3_lock",'callback_data'=>'baners_s3_lock'],['text'=>"💠 بنرشیشه ای 3",'callback_data'=>'DATA']],
[['text'=>"$baners_s4_lock",'callback_data'=>'baners_s4_lock'],['text'=>"💠 بنرشیشه ای 4",'callback_data'=>'DATA']],
[['text'=>"$baners_s5_lock",'callback_data'=>'baners_s5_lock'],['text'=>"💠 بنرشیشه ای 5",'callback_data'=>'DATA']],
[['text'=>"➣ صفحه قبل (تنظیمات پنل)",'callback_data'=>'settings']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_baner_sh_panel =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"$banerm_s1_lock",'callback_data'=>'banerm_s1_lock'],['text'=>"💠 بنرشیشه ای 1",'callback_data'=>'DATA']],
[['text'=>"$banerm_s2_lock",'callback_data'=>'banerm_s2_lock'],['text'=>"💠 بنرشیشه ای 2",'callback_data'=>'DATA']],
[['text'=>"$banerm_s3_lock",'callback_data'=>'banerm_s3_lock'],['text'=>"💠 بنرشیشه ای 3",'callback_data'=>'DATA']],
[['text'=>"$banerm_s4_lock",'callback_data'=>'banerm_s4_lock'],['text'=>"💠 بنرشیشه ای 4",'callback_data'=>'DATA']],
[['text'=>"$banerm_s5_lock",'callback_data'=>'banerm_s5_lock'],['text'=>"💠 بنرشیشه ای 5",'callback_data'=>'DATA']],
[['text'=>"🚫 ریست کردن لیست بنر ها 🚫",'callback_data'=>'reset_bs_panel']],
[['text'=>"♻️ دریافت لیست بنر ها ♻️",'callback_data'=>'get_blist']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_baner_ab_panel =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"$banerm_a1_lock",'callback_data'=>'banerm_a1_lock'],['text'=>"🇩🇪 بنر عادی 1",'callback_data'=>'DATA']],
[['text'=>"$banerm_a2_lock",'callback_data'=>'banerm_a2_lock'],['text'=>"🇩🇪 بنر عادی 2",'callback_data'=>'DATA']],
[['text'=>"$banerm_a3_lock",'callback_data'=>'banerm_a3_lock'],['text'=>"🇩🇪 بنر عادی 3",'callback_data'=>'DATA']],
[['text'=>"$banerm_a4_lock",'callback_data'=>'banerm_a4_lock'],['text'=>"🇩🇪 بنر عادی 4",'callback_data'=>'DATA']],
[['text'=>"$banerm_a5_lock",'callback_data'=>'banerm_a5_lock'],['text'=>"🇩🇪 بنر عادی 5",'callback_data'=>'DATA']],
[['text'=>"🚫 ریست کردن لیست بنر ها 🚫",'callback_data'=>'reset_ab_panel']],
[['text'=>"♻️ دریافت لیست بنر ها ♻️",'callback_data'=>'get_blist']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_admin_setting=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"$admin_lock_set_admin",'callback_data'=>'admin_lock_set_admin'],['text'=>"🔓 افزودن ادمین",'callback_data'=>'admin_lock_set_admin']],
[['text'=>"$admin_lock_del_admin",'callback_data'=>'admin_lock_del_admin'],['text'=>"🔓 حذف ادمین",'callback_data'=>'admin_lock_del_admin']],
[['text'=>"$admin_lock_see_admin",'callback_data'=>'admin_lock_see_admin'],['text'=>"🔓دیدن لیست ادمین",'callback_data'=>'admin_lock_see_admin']],
[['text'=>"$admin_lock_stin_admin",'callback_data'=>'admin_lock_stin_admin'],['text'=>"🔓 تنظیم دسترسی",'callback_data'=>'admin_lock_stin_admin']],
[['text'=>"$admin_lock_add_baner",'callback_data'=>'admin_lock_add_baner'],['text'=>"🇩🇪 افزودن بنر",'callback_data'=>'admin_lock_add_baner']],
[['text'=>"$admin_lock_del_baner",'callback_data'=>'admin_lock_del_baner'],['text'=>"🇩🇪 حذف بنر",'callback_data'=>'admin_lock_del_baner']],
[['text'=>"$admin_lock_see_baner",'callback_data'=>'admin_lock_see_baner'],['text'=>"🇩🇪 دیدن لیست بنر",'callback_data'=>'admin_lock_see_baner']],
[['text'=>"$admin_lock_reset_bot",'callback_data'=>'admin_lock_reset_bot'],['text'=>"🛑 ریست کردن",'callback_data'=>'admin_lock_reset_bot']],
[['text'=>"$admin_lock_setting_panel",'callback_data'=>'admin_lock_setting_panel'],['text'=>"🛑 تنظیمات پنل",'callback_data'=>'admin_lock_setting_panel']],
[['text'=>"$admin_lock_see_panel",'callback_data'=>'admin_lock_see_panel'],['text'=>"📝 دیدن آمار",'callback_data'=>'admin_lock_see_panel']],
[['text'=>"$admin_lock_tab_panel",'callback_data'=>'admin_lock_tab_panel'],['text'=>"📝 ارسال همگانی",'callback_data'=>'admin_lock_tab_panel']],
[['text'=>"⏪ بازگشت",'callback_data'=>'admins_panel']],
]]);
$k_reset_1=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"بله میخوام",'callback_data'=>'reset_yes_1'],['text'=>"نخیر اشتباه شد",'callback_data'=>'start']],
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
$k_c_tab=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"⏪ بازگشت",'callback_data'=>'c_tab']],
]]);
$k_c_admin =json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"⏪ بازگشت",'callback_data'=>'c_admin']],
]]);
$k_c_baner=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"⏪ بازگشت",'callback_data'=>'c_baner']],
]]);
$k_back_amar=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"⏪ بازگشت",'callback_data'=>'c_amar']],
]]);
$k_c_reset=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"⏪ بازگشت",'callback_data'=>'start']],
]]);
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
function save($filename,$TXTdata)
	{
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
function smk($chat_id, $text , $replyid,$Key ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$text,
        'reply_to_message_id'=>$replyid,
        'reply_markup'=> $Key,
        'parse_mode'=>"html"
    ]);
}
function sm1k($chat_id, $text ,$Key ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$text,

        'reply_markup'=> $Key,
        'parse_mode'=>"html"
    ]);
}
function Editk($chatid,$text,$messageid,$Key){
	
	$admins=$dataa['data']['admin'];
$baners_sh=$dataa['data']['baners_sh'];
$baners_ad=$dataa['data']['baners_ab'];
$userz=$dataa['data']['userz'];
$gapz=$dataa['data']['gapz'];
$banerm_a1_lock =$dataa['data']['banerm_a1_lock'];
$banerm_a2_lock =$dataa['data']['banerm_a2_lock'];
$banerm_a3_lock =$dataa['data']['banerm_a3_lock'];
$banerm_a4_lock =$dataa['data']['banerm_a4_lock'];
$banerm_a5_lock =$dataa['data']['banerm_a5_lock'];
$banerm_s1_lock =$dataa['data']['banerm_s1_lock'];
$banerm_s2_lock =$dataa['data']['banerm_s2_lock'];
$banerm_s3_lock =$dataa['data']['banerm_s3_lock'];
$banerm_s4_lock =$dataa['data']['banerm_s4_lock'];
$banerm_s5_lock =$dataa['data']['banerm_s5_lock'];
$baners_a1_lock =$dataa['data']['baners_a1_lock'];
$baners_a2_lock =$dataa['data']['baners_a2_lock'];
$baners_a3_lock =$dataa['data']['baners_a3_lock'];
$baners_a4_lock =$dataa['data']['baners_a4_lock'];
$baners_a5_lock =$dataa['data']['baners_a5_lock'];
$baners_s1_lock =$dataa['data']['baners_s1_lock'];
$baners_s2_lock =$dataa['data']['baners_s2_lock'];
$baners_s3_lock =$dataa['data']['baners_s3_lock'];
$baners_s4_lock =$dataa['data']['baners_s4_lock'];
$baners_s5_lock =$dataa['data']['baners_s5_lock'];
$admin_lock_set_admin=$dataa['data']['admin_lock_set_admin'];
$admin_lock_del_admin=$dataa['data']['admin_lock_del_admin'];
$admin_lock_see_admin=$dataa['data']['admin_lock_see_admin'];
$admin_lock_stin_admin=$dataa['data']['admin_lock_stin_admin'];
$admin_lock_add_baner=$dataa['data']['admin_lock_add_baner'];
$admin_lock_del_baner=$dataa['data']['admin_lock_del_baner'];
$admin_lock_see_baner=$dataa['data']['admin_lock_see_baner'];
$admin_lock_reset_bot=$dataa['data']['admin_lock_reset_bot'];
$admin_lock_setting_panel=$dataa['data']['admin_lock_setting_panel'];
$admin_lock_see_panel=$dataa['data']['admin_lock_see_panel'];
$admin_lock_tab_panel=$dataa['data']['admin_lock_tab_panel'];
$send_repit=$dataa['data']['send_repit'];
$send_pv=$dataa['data']['send_pv'];
$send_gp=$dataa['data']['send_gp'];
$send_bs=$dataa['data']['send_bs'];
$send_ba=$dataa['data']['send_ba'];
$state=$dataa['data']['state'];

	bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>$text,
  'reply_markup'=>$Key,
          'parse_mode'=>"html"
	    ]);
	
	}
function sendAction($chat_id, $action){
    bot('sendChataction',[
        'chat_id'=>$chat_id,
        'action'=>$action
    ]);
}
function answerQ($membercall , $text){
bot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>$text,
]);
}
if(!isset($dataa['data']['state'])){
$dataa['data']['banerm_a1_lock']="افزودن ➕";
$dataa['data']['banerm_a2_lock']="افزودن ➕";
$dataa['data']['banerm_a3_lock']="افزودن ➕";
$dataa['data']['banerm_a4_lock']="افزودن ➕";
$dataa['data']['banerm_a5_lock']="افزودن ➕";
$dataa['data']['banerm_s1_lock']="افزودن ➕";
$dataa['data']['banerm_s2_lock']="افزودن ➕";
$dataa['data']['banerm_s3_lock']="افزودن ➕";
$dataa['data']['banerm_s4_lock']="افزودن ➕";
$dataa['data']['banerm_s5_lock']="افزودن ➕";
$dataa['data']['baners_a1_lock']="ارسال نشود ❌";
$dataa['data']['baners_a2_lock']="ارسال نشود ❌";
$dataa['data']['baners_a3_lock']="ارسال نشود ❌";
$dataa['data']['baners_a4_lock']="ارسال نشود ❌";
$dataa['data']['baners_a5_lock']="ارسال نشود ❌";
$dataa['data']['baners_s1_lock']="ارسال نشود ❌";
$dataa['data']['baners_s2_lock']="ارسال نشود ❌";
$dataa['data']['baners_s3_lock']="ارسال نشود ❌";
$dataa['data']['baners_s4_lock']="ارسال نشود ❌";
$dataa['data']['baners_s5_lock']="ارسال نشود ❌";
$dataa['data']['admin_lock_set_admin']="خیر ❌";
$dataa['data']['admin_lock_del_admin']="خیر ❌";
$dataa['data']['admin_lock_see_admin']="خیر ❌";
$dataa['data']['admin_lock_stin_admin']="بله ✅";
$dataa['data']['admin_lock_add_baner']="بله ✅";
$dataa['data']['admin_lock_del_baner']="خیر ❌";
$dataa['data']['admin_lock_see_baner']="بله ✅";
$dataa['data']['admin_lock_reset_bot']="خیر ❌";
$dataa['data']['admin_lock_setting_panel']="خیر ❌";
$dataa['data']['admin_lock_see_panel']="بله ✅";
$dataa['data']['admin_lock_tab_panel']="خیر ❌";
$dataa['data']['send_repit']="خاموش ❌";
$dataa['data']['send_pv']="خاموش ❌";
$dataa['data']['send_gp']="خاموش ❌";
$dataa['data']['send_bs']="خاموش ❌";
$dataa['data']['send_ba']="خاموش ❌";
$dataa['data']['state']="روشن ✅";
file_put_contents("data.json",json_encode($dataa));
	}
if($tc =='supergroup' or $tc =='group' and !isset($dataa['data']['gapz'][$chat_id])){
	$dataa['data']['gapz'][$chat_id]=$titleee;
	file_put_contents("data.json",json_encode($dataa));
	}else if($tc== 'private' and !isset($dataa['data']['userz'][$chat_id])){
		$dataa['data']['userz'][$chat_id]=$first_name;
	    file_put_contents("data.json",json_encode($dataa));
		}
if($tc =='supergroup' or $tc =='group' and !in_array($chat_id,$m_gap)){
	$add_user = file_get_contents('gap.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('gap.txt',$add_user);
	}else if($tc== 'private' and !in_array($chat_id,$m_user)){
		$add_user = file_get_contents('user.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('user.txt',$add_user);
		}
		$start_tttt =['/start'=>1,'panel'=>1,'/panel'=>1,'start'=>1,'Start'=>1,'/Start'=>1,'پنل'=>1,'مدیریت'=>1,'فورچی'=>1,'سلام'];
if($tc== 'private'){

if($textmassage=="/start" || $textmassage=="panel" || $textmassage=="/panel" || $textmassage=="start" || $textmassage=="Start" || $textmassage=="/Start" || $textmassage=="پنل" || $textmassage=="مدیریت" || $textmassage=="فورچی"   || $textmassage=="سلام" and $from_id ===$sudo or isset($dataa['data']['admin'][$from_id])){
	sendAction($chat_id, "typing");
	$t_t_start="🌺 سلام <a href='tg://user?id=$from_id'>$first_name</a>\nبه پنل مدیریت فورچی خوش آمدید 🌺\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
	smk($chat_id, $t_t_start , $message_id,$k_start );
	}
}



if($tcc== 'private' and $fromid ===$sudo){
	switch ($data) {
		case 'admins_panel':
											$t_ttt_1="🔰 بخش مدیریت ادمین ها 🔰\n\n";
											$cccca=1;
											foreach($dataa['data']['admin']as $k => $ans){
												$t_ttt_1.= "👤 Admin $cccca ➣ <a href='tg://user?id=$k'>$k</a> \n";
												$cccca++;
												}
												$t_ttt_1.= "\n\n ➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
												sendAction($chatid, "typing");
												Editk($chatid,$t_ttt_1,$messageid,$k_admins_panel);
										
						break;
		case 'settings':
											sendAction($chatid, "typing");
											$Ttt344="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$Ttt344,$messageid,$k_setting_panel);
										
										
						break;
		case 'baners_panel':
											sendAction($chatid, "typing");
											$ttt12="🇩🇪 لیست بنر های شیشه ای 🇩🇪\n\n\n🚫 این لیست برای اضافه کردن بنر است * برای حذف کردن بنر مورد نظر بر رویه کلید #لیست_بنرها کلیک کنید 🚫\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$ttt12,$messageid,$k_baner_sh_panel);
										
										
						break;
		case 'banera_panel':
											sendAction($chatid, "typing");
											$Tttt43 = "🇩🇪 لیست بنر های عادی 🇩🇪\n\n\n🚫 این لیست برای اضافه کردن بنر است * برای حذف کردن بنر مورد نظر بر رویه کلید #لیست_بنرها کلیک کنید 🚫\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$Tttt43,$messageid,$k_baner_ab_panel);
										
										
						break;
		case 'reser':
											sendAction($chatid, "typing");
											$Tttttt445="🛑🛑🛑 آیا مطمعن هستید ؟\n\n⚠️ با این کار تمام فورچی (بنر ها و تنظیمات و ادمین ها)\n\nریست میشوند ❗️❗️❗️";
											Editk($chatid,$Tttttt445,$messageid,$k_reset_1);
										
										
						break;
		case 'start':
											sendAction($chatid, "typing");
											$t_t_start="🌺 سلام <a href='tg://user?id=$fromid'>$re_user</a>\nبه پنل مدیریت فورچی خوش آمدید 🌺\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$t_t_start,$messageid,$k_start);
										
										
						break;
		case 'setting_admins':
											sendAction($chatid, "typing");
											$ttdtgdtg="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$ttdtgdtg,$messageid,$k_admin_setting);
										
										
						break;
		case 'setting_baners':
											sendAction($chatid, "typing");
											$Ycufyfycy="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$Ycufyfycy,$messageid,$k_setting_baners);
										
										
						break;
		case 'state':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($state==="خاموش ❌"){
												$dataa['data']['state']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['state']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ربات = $state\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
						break;
		case 'send_bs':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_bs==="خاموش ❌"){
												$dataa['data']['send_bs']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_bs']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال بنرهای شیشه ای = $send_bs\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_ba':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_ba==="خاموش ❌"){
												$dataa['data']['send_ba']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_ba']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال بنرهای عادی = $send_ba\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_repit':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_repit==="خاموش ❌"){
												$dataa['data']['send_repit']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_repit']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال رگباری = $send_repit\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_gp':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_gp==="خاموش ❌"){
												$dataa['data']['send_gp']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_gp']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال گروه = $send_gp\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_pv':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_pv==="خاموش ❌"){
												$dataa['data']['send_pv']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_pv']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال پیوی = $send_pv\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
						
						//////////===========(  Admin Settings  ) ==========////////
						//////////===========(  Admin Settings  ) ==========////////
						
		case 'admin_lock_set_admin':
											
											sendAction($chatid, "typing");
											if($admin_lock_set_admin==="خیر ❌"){
												$dataa['data']['admin_lock_set_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_set_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ افزودن ادمین = $admin_lock_set_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
												
										
										
						break;
		case 'admin_lock_del_admin':
											sendAction($chatid, "typing");
											if($admin_lock_del_admin==="خیر ❌"){
												$dataa['data']['admin_lock_del_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_del_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ حذف ادمین = $admin_lock_del_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_see_admin':
											sendAction($chatid, "typing");
											if($admin_lock_see_admin==="خیر ❌"){
												$dataa['data']['admin_lock_see_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_see_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ دیدن لیست ادمین = $admin_lock_see_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_stin_admin':
											sendAction($chatid, "typing");
											if($admin_lock_stin_admin==="خیر ❌"){
												$dataa['data']['admin_lock_stin_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_stin_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ تنظیم دسترسی ادمین = $admin_lock_stin_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_add_baner':
											sendAction($chatid, "typing");
											if($admin_lock_add_baner==="خیر ❌"){
												$dataa['data']['admin_lock_add_baner']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_add_baner']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ افزودن بنر = $admin_lock_add_baner\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_del_baner':
											sendAction($chatid, "typing");
											if($admin_lock_del_baner==="خیر ❌"){
												$dataa['data']['admin_lock_del_baner']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_del_baner']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ حذف ادمین = $admin_lock_del_baner\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_see_baner':
											sendAction($chatid, "typing");
											if($admin_lock_see_baner==="خیر ❌"){
												$dataa['data']['admin_lock_see_baner']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_see_baner']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ دیدن لیست بنر = $admin_lock_see_baner\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_reset_bot':
											sendAction($chatid, "typing");
											if($admin_lock_reset_bot==="خیر ❌"){
												$dataa['data']['admin_lock_reset_bot']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_reset_bot']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ ریست کردن ربات = $admin_lock_reset_bot\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_setting_panel':
											sendAction($chatid, "typing");
											if($admin_lock_setting_panel==="خیر ❌"){
												$dataa['data']['admin_lock_setting_panel']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_setting_panel']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ تنظیم پنل = $admin_lock_setting_panel\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_see_panel':
											sendAction($chatid, "typing");
											if($admin_lock_see_panel==="خیر ❌"){
												$dataa['data']['admin_lock_see_panel']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_see_panel']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ دیدن آمار = $admin_lock_see_panel\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_tab_panel':
											sendAction($chatid, "typing");
											if($admin_lock_tab_panel==="خیر ❌"){
												$dataa['data']['admin_lock_tab_panel']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_tab_panel']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ تبلیغ همگانی = $admin_lock_tab_panel\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
						
						//////////===========(  baners Settings  ) ==========////////
						//////////===========(  baners Settings  ) ==========////////
						
		case 'banerm_a1_lock':
		
											if($banerm_a1_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a1_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 1 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a1_lock);
													}
										
										
						break;
		case 'banerm_a2_lock':
		
											if($banerm_a2_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a2_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 2 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a2_lock);
													}
										
										
										
						break;
		case 'banerm_a3_lock':
		
											if($banerm_a3_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a3_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 3 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a3_lock);
													}
										
										
										
						break;
		case 'banerm_a4_lock':
		
											if($banerm_a4_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a4_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 4 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a4_lock);
													}
										
										
										
						break;
		case 'banerm_a5_lock':
		
											if($banerm_a5_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a5_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 5 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a5_lock);
													}
										
										
										
						break;
		case 'banerm_s1_lock':
		
											if($banerm_s1_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s1_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 1 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s1_lock);
													}
										
										
										
						break;
		case 'banerm_s2_lock':
		
											if($banerm_s2_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s2_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 2 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s2_lock);
													}
										
										
										
						break;
		case 'banerm_s3_lock':
		
											if($banerm_s3_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s3_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 3 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s3_lock);
													}
										
										
										
						break;
		case 'banerm_s4_lock':
		
											if($banerm_s4_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s4_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 4 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s4_lock);
													}
										
										
										
						break;
		case 'banerm_s5_lock':
		
											if($banerm_s5_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s5_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 5 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s5_lock);
													}
										
										
										
						break;
						
						//////////===========(  Sending Settings  ) ==========////////
						//////////===========(  Sending Settings  ) ==========////////
						
		case 'baners_a1_lock':
											sendAction($chatid, "typing");
											if($baners_a1_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a1_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a1_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 1 == $baners_a1_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
						break;
		case 'baners_a2_lock':
											sendAction($chatid, "typing");
											if($baners_a1_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a2_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a2_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 2 == $baners_a2_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_a3_lock':
											sendAction($chatid, "typing");
											if($baners_a3_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a3_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a3_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 3 == $baners_a3_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_a4_lock':
											sendAction($chatid, "typing");
											if($baners_a4_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a4_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a4_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 4 == $baners_a4_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_a5_lock':
											sendAction($chatid, "typing");
											if($baners_a5_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a5_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a5_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 5 == $baners_a5_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s1_lock':
											sendAction($chatid, "typing");
											if($baners_s1_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s1_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s1_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای1 == $baners_s1_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s2_lock':
											sendAction($chatid, "typing");
											if($baners_s2_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s2_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s2_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای2 == $baners_s2_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s3_lock':
											sendAction($chatid, "typing");
											if($baners_s3_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s3_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s3_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای3 == $baners_s3_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s4_lock':
											sendAction($chatid, "typing");
											if($baners_s4_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s4_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s4_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای4 == $baners_s4_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s5_lock':
											sendAction($chatid, "typing");
											if($baners_s5_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s5_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s5_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای5 == $baners_s5_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
						
						//////////===========(  Other Settings  ) ==========////////
						//////////===========(  Other Settings  ) ==========////////
						
		case 'add_admin':
											sendAction($chatid, "typing");
											file_put_contents("com.txt","add_admin");
											$ttttt="⁉️ لطفا آیدی عددی ادمین جدید را وارد نمیاید ⁉️\n\nمثال  : 397536024\n\n➖➖➖➖➖➖➖👇";
											Editk($chatid,$ttttt,$messageid,$k_c_admin);
										
										
						break;
		case 'del_admin':
											sendAction($chatid, "typing");
											file_put_contents("com.txt","del_admin");
											$ttttt="⁉️ لطفا آیدی عددی ادمین را برای #حذف کردن وارد نمیاید ⁉️\n\nمثال  : 397536024\n\n➖➖➖➖➖➖➖👇";
											Editk($chatid,$ttttt,$messageid,$k_c_admin);
										
										
						break;
		case 'list_admins':
											sendAction($chatid, "typing");
											
											$t_ttt_1="👇 لیست ادمین های فورچی 👇 \n\n";
											$cccca=1;
											foreach($dataa['data']['admin'] as $k => $ans){
											$t_ttt_1.= "👤 Admin $cccca ➣ <a href='tg://user?id=$k'>$ans</a> \n\n";
											$cccca++;
											}
											$t_ttt_1.= "\n\n ➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$t_ttt_1,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏪ بازگشت",'callback_data'=>'admins_panel']],]]));
		
		
										
										
						break;
						//////////===========(  Other Settings  ) ==========////////
		case 'reset_bs_panel':
											sendAction($chatid, "typing");
											$ttttt="⚠️ شما در حال ریست کردن تمام بنر های #شیشه_ای هستید ( با این کار تمام بنر های شیشه ای #حذف خواهند شد ⚠️\n\n➖ آیا مطمعن هستبد ؟؟؟ 👇🏻👇🏻";
											Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بله ریست کن",'callback_data'=>'reset_bs_true'],['text'=>"نه نمیخوام",'callback_data'=>'baners_panel']],]]));
		
										
										
						break;
		case 'reset_ab_panel':
											sendAction($chatid, "typing");
											$ttttt="⚠️ شما در حال ریست کردن تمام بنر های #عادی هستید ( با این کار تمام بنر های عادی #حذف خواهند شد ⚠️\n\n➖ آیا مطمعن هستبد ؟؟؟ 👇🏻👇🏻";
											Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بله ریست کن",'callback_data'=>'reset_ab_true'],['text'=>"نه نمیخوام",'callback_data'=>'banera_panel']],]]));
		
										
										
						break;
		case 'reset_bs_true':
											
										sendAction($chatid, "typing");
		                                      unset($dataa['data']['baners_sh'][0]);
		                                      unset($dataa['data']['baners_sh'][1]);
		                                      unset($dataa['data']['baners_sh'][2]);
		                                      unset($dataa['data']['baners_sh'][3]);
		                                      unset($dataa['data']['baners_sh'][4]);
		                                      $dataa['data']['banerm_s1_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s2_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s3_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s4_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s5_lock']="افزودن ➕";
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      $ttttt="✅ با موفقیت انجام شد 👌🏼\n\n❗️بنر 1 = حذف شد !\n❗️بنر 2 = حذف شد !\n❗️بنر 3 = حذف شد !\n❗️بنر 4 = حذف شد !\n❗️بنر 5 = حذف شد !\n\n➖➖➖➖➖➖➖➖";
		                                      Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏪ بازگشت",'callback_data'=>'baners_panel']],]]));
		
										
						break;                   
		case 'reset_ab_true':
											
								        sendAction($chatid, "typing");
		                                      unset($dataa['data']['baners_ab'][0]);
		                                      unset($dataa['data']['baners_ab'][1]);
		                                      unset($dataa['data']['baners_ab'][2]);
		                                      unset($dataa['data']['baners_ab'][3]);
		                                      unset($dataa['data']['baners_ab'][4]);
		                                      $dataa['data']['banerm_a1_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a2_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a3_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a4_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a5_lock']="افزودن ➕";
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      $ttttt="✅ با موفقیت انجام شد 👌🏼\n\n❗️بنر 1 = حذف شد !\n❗️بنر 2 = حذف شد !\n❗️بنر 3 = حذف شد !\n❗️بنر 4 = حذف شد !\n❗️بنر 5 = حذف شد !\n\n➖➖➖➖➖➖➖➖";
		                                      Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏪ بازگشت",'callback_data'=>'banera_panel']],]]));
		
										
						break;
		case 'get_blist':
		
											if(isset($dataa['data']['baners_ab'][0])){
			$CCC =$dataa['data']['baners_ab'][0][0];
			$MMM=$dataa['data']['baners_ab'][0][1];
			$DDD=$dataa['data']['baners_ab'][0][2];
			$TTT=$dataa['data']['baners_ab'][0][3];
			$SSS=$dataa['data']['baners_ab'][0][4];
			if(!isset($dataa['data']['baners_ab'][0][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 1
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab1_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][1])){
			
			$CCC =$dataa['data']['baners_ab'][1][0];
			$MMM=$dataa['data']['baners_ab'][1][1];
			$DDD=$dataa['data']['baners_ab'][1][2];
			$TTT=$dataa['data']['baners_ab'][1][3];
			$SSS=$dataa['data']['baners_ab'][1][4];
			if(!isset($dataa['data']['baners_ab'][1][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 2
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab2_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][2])){
			
			$CCC =$dataa['data']['baners_ab'][2][0];
			$MMM=$dataa['data']['baners_ab'][2][1];
			$DDD=$dataa['data']['baners_ab'][2][2];
			$TTT=$dataa['data']['baners_ab'][2][3];
			$SSS=$dataa['data']['baners_ab'][2][4];
			if(!isset($dataa['data']['baners_ab'][2][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 3
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab3_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][3])){
			
			$CCC =$dataa['data']['baners_ab'][3][0];
			$MMM=$dataa['data']['baners_ab'][3][1];
			$DDD=$dataa['data']['baners_ab'][3][2];
			$TTT=$dataa['data']['baners_ab'][3][3];
			$SSS=$dataa['data']['baners_ab'][3][4];
			if(!isset($dataa['data']['baners_ab'][3][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 4
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,$json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab4_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][4])){
			
			$CCC =$dataa['data']['baners_ab'][4][0];
			$MMM=$dataa['data']['baners_ab'][4][1];
			$DDD=$dataa['data']['baners_ab'][4][2];
			$TTT=$dataa['data']['baners_ab'][4][3];
			$SSS=$dataa['data']['baners_ab'][4][4];
			if(!isset($dataa['data']['baners_ab'][4][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 5
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab5_del']],]])  );
			
			
			
			
			} if(isset($dataa['data']['baners_sh'][0])){
			$TTTT =$dataa['data']['baners_sh'][0][0];
			$BNN =$dataa['data']['baners_sh'][0][1];
			$BLL =$dataa['data']['baners_sh'][0][2];
			$DDD=$dataa['data']['baners_sh'][0][3];
			$TTT=$dataa['data']['baners_sh'][0][4];
			$SSS=$dataa['data']['baners_sh'][0][5];
			$CCC =$dataa['data']['baners_sh'][0][6];
			if(!isset($dataa['data']['baners_sh'][0][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 1
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh1_del']],]])  );
				
			} if(isset($dataa['data']['baners_sh'][1])){
			
			$TTTT =$dataa['data']['baners_sh'][1][0];
			$BNN =$dataa['data']['baners_sh'][1][1];
			$BLL =$dataa['data']['baners_sh'][1][2];
			$DDD=$dataa['data']['baners_sh'][1][3];
			$TTT=$dataa['data']['baners_sh'][1][4];
			$SSS=$dataa['data']['baners_sh'][1][5];
			$CCC =$dataa['data']['baners_sh'][1][6];
			if(!isset($dataa['data']['baners_sh'][1][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 2
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh2_del']],]]));
			
			} if(isset($dataa['data']['baners_sh'][2])){
			
			$TTTT =$dataa['data']['baners_sh'][2][0];
			$BNN =$dataa['data']['baners_sh'][2][1];
			$BLL =$dataa['data']['baners_sh'][2][2];
			$DDD=$dataa['data']['baners_sh'][2][3];
			$TTT=$dataa['data']['baners_sh'][2][4];
			$SSS=$dataa['data']['baners_sh'][2][5];
			$CCC =$dataa['data']['baners_sh'][2][6];
			if(!isset($dataa['data']['baners_sh'][2][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 3
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh3_del']],]])  );
			
			} if(isset($dataa['data']['baners_sh'][3])){
			
			$TTTT =$dataa['data']['baners_sh'][3][0];
			$BNN =$dataa['data']['baners_sh'][3][1];
			$BLL =$dataa['data']['baners_sh'][3][2];
			$DDD=$dataa['data']['baners_sh'][3][3];
			$TTT=$dataa['data']['baners_sh'][3][4];
			$SSS=$dataa['data']['baners_sh'][3][5];
			$CCC =$dataa['data']['baners_sh'][3][6];
			if(!isset($dataa['data']['baners_sh'][3][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 4
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh4_del']],]])  );
			
			} if(isset($dataa['data']['baners_sh'][4])){
			
			$TTTT =$dataa['data']['baners_sh'][4][0];
			$BNN =$dataa['data']['baners_sh'][4][1];
			$BLL =$dataa['data']['baners_sh'][4][2];
			$DDD=$dataa['data']['baners_sh'][4][3];
			$TTT=$dataa['data']['baners_sh'][4][4];
			$SSS=$dataa['data']['baners_sh'][4][5];
			$CCC =$dataa['data']['baners_sh'][4][6];
			if(!isset($dataa['data']['baners_sh'][4][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 5
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh5_del']],]])  );
			
			
		
		                                          sleep(0.7);
		                                          $t3t4="☝️☝️☝️☝️☝️☝️☝️☝️\n\n لیست بنر های ربات ";
		                                          sm1k($chatid, $t3t4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏩ بازگشت ",'callback_data'=>'start']],]]) );
		
										
										}
										
						break;
		case 'baners_ab1_del':
		                                      $dataa['data']['banerm_a1_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][0]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 1 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_ab2_del':
		                                 $dataa['data']['banerm_a2_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][1]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 2 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
		 		                                 	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
				                                          
		
										
										
						break;
		case 'baners_ab3_del':
		                                 $dataa['data']['banerm_a3_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][2]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 3 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_ab4_del':
		                                 $dataa['data']['banerm_a4_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][3]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 4 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_ab5_del':
		                                 $dataa['data']['banerm_a5_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][4]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 5 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_sh1_del':
		                                 $dataa['data']['banerm_s1_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][0]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 1 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_sh2_del':
		                                 $dataa['data']['banerm_s2_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][1]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 2 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_sh3_del':
		                                 $dataa['data']['banerm_s3_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][2]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 3 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;
		case 'baners_sh4_del':
		                                 $dataa['data']['banerm_s4_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][3]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 4 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										
										
						break;              
		case 'baners_sh5_del':
		                                 $dataa['data']['banerm_s5_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][4]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 5 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
		
		
										
										
						break;
		case 'reset_yes_1':
											sendAction($chatid, "typing");
		                                          $tt4="⚠️ آیا مطمعن هستید ؟ \n\n ➖➖➖➖➖➖➖";
				                                          Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بله",'callback_data'=>'reset_yes_2'],['text'=>"نه ریست نکن",'callback_data'=>'start']],]]));
		
										
										
						break;
		case 'reset_yes_2':
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][0]);
		                                          unset($dataa['data']['baners_sh'][1]);
		                                          unset($dataa['data']['baners_sh'][2]);
		                                          unset($dataa['data']['baners_sh'][3]);
		                                          unset($dataa['data']['baners_sh'][4]);
		                                          unset($dataa['data']['baners_ab'][0]);
		                                          unset($dataa['data']['baners_ab'][1]);
		                                          unset($dataa['data']['baners_ab'][2]);
		                                          unset($dataa['data']['baners_ab'][3]);
		                                          unset($dataa['data']['baners_ab'][4]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          $dataa['data']['banerm_a1_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a2_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a3_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a4_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a5_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s1_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s2_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s3_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s4_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s5_lock']="افزودن ➕";
                                                  $dataa['data']['baners_a1_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a2_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a3_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a4_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a5_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s1_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s2_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s3_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s4_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s5_lock']="ارسال نشود ❌";
                                                  $dataa['data']['admin_lock_set_admin']="خیر ❌";
                                                  $dataa['data']['admin_lock_del_admin']="خیر ❌";
                                                  $dataa['data']['admin_lock_see_admin']="خیر ❌";
                                                  $dataa['data']['admin_lock_stin_admin']="بله ✅";
                                                  $dataa['data']['admin_lock_add_baner']="بله ✅";
                                                  $dataa['data']['admin_lock_del_baner']="خیر ❌";
                                                  $dataa['data']['admin_lock_see_baner']="بله ✅";
                                                  $dataa['data']['admin_lock_reset_bot']="خیر ❌";
                                                  $dataa['data']['admin_lock_setting_panel']="خیر ❌";
                                                  $dataa['data']['admin_lock_see_panel']="بله ✅";
                                                  $dataa['data']['admin_lock_tab_panel']="خیر ❌";
                                                  $dataa['data']['send_repit']="خاموش ❌";
                                                  $dataa['data']['send_pv']="خاموش ❌";
                                                  $dataa['data']['send_gp']="خاموش ❌";
                                                  $dataa['data']['send_bs']="خاموش ❌";
                                                  $dataa['data']['send_ba']="خاموش ❌";
                                                  $dataa['data']['state']="روشن ✅";
                                                  file_put_contents("data.json",json_encode($dataa));
                                                  file_put_contents("com.txt","");
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="🛑 ربات باموفقیت ریست شد !\n\n♦️ تمامی بنر ها\n♦️تنظیمات\n\n🛑 ریست شدند 👇";
		                                          Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]));
		
		
										
										
						break;
		case 'amaar':
											sendAction($chatid, "typing");
		                                          if(!isset($dataa['data']['userz'])){
			                                          $userz_c=0;
			                                          }else{
				                                          $userz_c=count($userz);
				                                          }
		                                          if(!isset($dataa['data']['gapz'])){
			                                          $gapz_c=0;
			                                          }else{
				                                          $gapz_c=count($gapz);
				                                          }
		                                          if(!isset($dataa['data']['admin'])){
			                                          $admin_c=0;
			                                          }else{
				                                          $admin_c=count($admins);
				                                          }
		                                          if(!isset($dataa['data']['baners_sh'])){
			                                          $baners_sh_c=0;
			                                          }else{
				                                          $baners_sh_c=count($baners_sh);
				                                          }
		                                          if(!isset($dataa['data']['baners_ab'])){
			                                          $baners_ab_c=0;
			                                          }else{
				                                          $baners_ab_c=count($baners_ab);
				                                          }
		                                          $texxxt="🔰 آمار ربات فورچی 🔰\n\n🔹 تعداد ادمین ها : $admin_c\n🔹 تعداد گپ ها : $gapz_c\n🔹 تعداد کاربران : $userz_c\n🔹 تعداد بنرشیشه ای : $baners_sh_c\n🔹 تعداد بنرعادی : $baners_ab_c\n\n➖➖➖➖➖➖➖➖➖➖";
		                                          Editk($chatid,$texxxt,$messageid,$k_amar);
		
										
										
						break;
		case 'list_userz':
											sendAction($chatid, "typing");
			                                          $Tttth="👇🏻 لیست کاربران ربات 👇🏻\n\n";
			                                          $Cah=0;
		                                          foreach($dataa['data']['userz'] as $k => $u){
			                                          $Tttth.="👤U $Cah ➣ <a href='tg://user?id=$k'>$u</a> \n";
			                                          $Cah++;
			                                          }
										           $Tttth.="\n\n ➖➖➖➖➖➖➖➖";
		                                          Editk($chatid,$Tttth,$messageid,$k_amar);
										
						break;
		case 'list_gapz':
											sendAction($chatid, "typing");
			                                          $Tttth="👇🏻 لیست گروه های ربات 👇🏻\n\n";
			                                          $Cah=0;
		                                          foreach($dataa['data']['gapz'] as $k => $u){
			                                          $Tttth.="👥G $Cah ➣ <a href='tg://user?id=$k'>$u</a> \n";
			                                          $Cah++;
			                                          }
		                                          $Tttth.="\n\n ➖➖➖➖➖➖➖➖";
		                                          Editk($chatid,$Tttth,$messageid,$k_amar);
		
										
										
						break;
		case 'f_userz':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","f_userz");
		                                          $Ttttttt6="🏷 لطفا پیام را برای فوروارد ارسال یا فوروارد کنید \n\n➖➖➖➖➖➖";
		                                          Editk($chatid,$Ttttttt6,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بازگشت 🔙",'callback_data'=>'c_tab']],]]));
		
										
										
						break;
		case 'f_gapz':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","f_gapz");
		                                          $Ttttttt6="🏷 لطفا پیام را برای فوروارد ارسال یا فوروارد کنید \n\n➖➖➖➖➖➖";
		                                          Editk($chatid,$Ttttttt6,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بازگشت 🔙",'callback_data'=>'c_tab']],]]));
		
										
										
						break;
		case 'f_all':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","f_all");
		                                          $Ttttttt6="🏷 لطفا پیام را برای فوروارد ارسال یا فوروارد کنید \n\n➖➖➖➖➖➖";
		                                          Editk($chatid,$Ttttttt6,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بازگشت 🔙",'callback_data'=>'c_tab']],]]));
		
										
										
						break;
		case 'c_tab':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","");
		                                          $Ttttttt6="♦️ پنل آمار ♦️ لطفا یک گذینه را انتخاب نمایید 👇👇👇👇";
		                                          Editk($chatid,$Ttttttt6,$messageid,$k_amar);
										
										
						break;
		case 'c_admin':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","");
		                                          $Ttttttt6="♦️ پنل ادمین ها ♦️ لطفا یک گذینه را انتخاب نمایید 👇👇👇👇";
		                                          Editk($chatid,$Ttttttt6,$messageid,$k_admins_panel);
										
										
						break;
		case 'c_baner':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","");
		                                          $Tttt43 = "🇩🇪 لیست بنر های عادی 🇩🇪\n\n\n🚫 این لیست برای اضافه کردن بنر است * برای حذف کردن بنر مورد نظر بر رویه کلید #لیست_بنرها کلیک کنید 🚫\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
		                                          Editk($chatid,$Tttt43,$messageid,$k_start);
										
										
						break;
		case 'data':
											
										
										
						break;
		case 'data':
											
										
										
						break;
		
		}
	}else if($tcc== 'private' and isset($dataa['data']['admin'][$fromid])){
		
		switch ($data) {
		case 'admins_panel':
											$t_ttt_1="🔰 بخش مدیریت ادمین ها 🔰\n\n";
											$cccca=1;
											foreach($dataa['data']['admin']as $k => $ans){
												$t_ttt_1.= "👤 Admin $cccca ➣ <a href='tg://user?id=$k'>$k</a> \n";
												$cccca++;
												}
												$t_ttt_1.= "\n\n ➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
												sendAction($chatid, "typing");
												Editk($chatid,$t_ttt_1,$messageid,$k_admins_panel);
										
						break;
		case 'settings':
		if($admin_lock_setting_panel!=="خیر ❌"){
											sendAction($chatid, "typing");
											$Ttt344="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$Ttt344,$messageid,$k_setting_panel);
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_panel':
											sendAction($chatid, "typing");
											$ttt12="🇩🇪 لیست بنر های شیشه ای 🇩🇪\n\n\n🚫 این لیست برای اضافه کردن بنر است * برای حذف کردن بنر مورد نظر بر رویه کلید #لیست_بنرها کلیک کنید 🚫\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$ttt12,$messageid,$k_baner_sh_panel);
										
										
						break;
		case 'banera_panel':
											sendAction($chatid, "typing");
											$Tttt43 = "🇩🇪 لیست بنر های عادی 🇩🇪\n\n\n🚫 این لیست برای اضافه کردن بنر است * برای حذف کردن بنر مورد نظر بر رویه کلید #لیست_بنرها کلیک کنید 🚫\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$Tttt43,$messageid,$k_baner_ab_panel);
										
										
						break;
		case 'reser':
		if($admin_lock_reset_bot!=="خیر ❌"){
											sendAction($chatid, "typing");
											$Tttttt445="🛑🛑🛑 آیا مطمعن هستید ؟\n\n⚠️ با این کار تمام فورچی (بنر ها و تنظیمات و ادمین ها)\n\nریست میشوند ❗️❗️❗️";
											Editk($chatid,$Tttttt445,$messageid,$k_reset_1);
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'start':
											sendAction($chatid, "typing");
											$t_t_start="🌺 سلام <a href='tg://user?id=$fromid'>$re_user</a>\nبه پنل مدیریت فورچی خوش آمدید 🌺\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$t_t_start,$messageid,$k_start);
										
										
						break;
		case 'setting_admins':
		if($admin_lock_stin_admin!=="خیر ❌"){
											sendAction($chatid, "typing");
											$ttdtgdtg="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$ttdtgdtg,$messageid,$k_admin_setting);
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'setting_baners':
											sendAction($chatid, "typing");
											$Ycufyfycy="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$Ycufyfycy,$messageid,$k_setting_baners);
										
										
						break;
		case 'state':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($state==="خاموش ❌"){
												$dataa['data']['state']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['state']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ربات = $state\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
						break;
		case 'send_bs':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_bs==="خاموش ❌"){
												$dataa['data']['send_bs']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_bs']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال بنرهای شیشه ای = $send_bs\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_ba':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_ba==="خاموش ❌"){
												$dataa['data']['send_ba']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_ba']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال بنرهای عادی = $send_ba\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_repit':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_repit==="خاموش ❌"){
												$dataa['data']['send_repit']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_repit']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال رگباری = $send_repit\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_gp':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_gp==="خاموش ❌"){
												$dataa['data']['send_gp']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_gp']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال گروه = $send_gp\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
		case 'send_pv':
											sendAction($chatid, "typing");
											sleep(0.3);
											if($send_pv==="خاموش ❌"){
												$dataa['data']['send_pv']="روشن ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['send_pv']="خاموش ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="⚙ بخش تنظیمات پنل فورچی 🔩\n\n🔆 برای (روشن|خاموش) کردن گزینه برای کلید های روبرویه آن ها کلیک کنید 🔆\n\n❗️ ارسال پیوی = $send_pv\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_panel);
										
										
										
						break;
						
						//////////===========(  Admin Settings  ) ==========////////
						//////////===========(  Admin Settings  ) ==========////////
						
		case 'admin_lock_set_admin':
											
											sendAction($chatid, "typing");
											if($admin_lock_set_admin==="خیر ❌"){
												$dataa['data']['admin_lock_set_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_set_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ افزودن ادمین = $admin_lock_set_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
												
										
										
						break;
		case 'admin_lock_del_admin':
											sendAction($chatid, "typing");
											if($admin_lock_del_admin==="خیر ❌"){
												$dataa['data']['admin_lock_del_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_del_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ حذف ادمین = $admin_lock_del_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_see_admin':
											sendAction($chatid, "typing");
											if($admin_lock_see_admin==="خیر ❌"){
												$dataa['data']['admin_lock_see_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_see_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ دیدن لیست ادمین = $admin_lock_see_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_stin_admin':
											sendAction($chatid, "typing");
											if($admin_lock_stin_admin==="خیر ❌"){
												$dataa['data']['admin_lock_stin_admin']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_stin_admin']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ تنظیم دسترسی ادمین = $admin_lock_stin_admin\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_add_baner':
											sendAction($chatid, "typing");
											if($admin_lock_add_baner==="خیر ❌"){
												$dataa['data']['admin_lock_add_baner']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_add_baner']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ افزودن بنر = $admin_lock_add_baner\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_del_baner':
											sendAction($chatid, "typing");
											if($admin_lock_del_baner==="خیر ❌"){
												$dataa['data']['admin_lock_del_baner']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_del_baner']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ حذف ادمین = $admin_lock_del_baner\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_see_baner':
											sendAction($chatid, "typing");
											if($admin_lock_see_baner==="خیر ❌"){
												$dataa['data']['admin_lock_see_baner']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_see_baner']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ دیدن لیست بنر = $admin_lock_see_baner\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_reset_bot':
											sendAction($chatid, "typing");
											if($admin_lock_reset_bot==="خیر ❌"){
												$dataa['data']['admin_lock_reset_bot']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_reset_bot']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ ریست کردن ربات = $admin_lock_reset_bot\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_setting_panel':
											sendAction($chatid, "typing");
											if($admin_lock_setting_panel==="خیر ❌"){
												$dataa['data']['admin_lock_setting_panel']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_setting_panel']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ تنظیم پنل = $admin_lock_setting_panel\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_see_panel':
											sendAction($chatid, "typing");
											if($admin_lock_see_panel==="خیر ❌"){
												$dataa['data']['admin_lock_see_panel']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_see_panel']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🔰 به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ دیدن آمار = $admin_lock_see_panel\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
		case 'admin_lock_tab_panel':
											sendAction($chatid, "typing");
											if($admin_lock_tab_panel==="خیر ❌"){
												$dataa['data']['admin_lock_tab_panel']="بله ✅";
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['admin_lock_tab_panel']="خیر ❌";
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="?? به پنل تنظیم دسترسی ادمین ها خوش آمدید 🔰\n\n⚜ برای (دسترسی|عدم دسترسی)  بر روی کلید های #بله یا #خیر کلیک کنید ⚜\n\n❗️ تبلیغ همگانی = $admin_lock_tab_panel\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_admin_setting);
												
										
										
						break;
						
						//////////===========(  baners Settings  ) ==========////////
						//////////===========(  baners Settings  ) ==========////////
						
		case 'banerm_a1_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_a1_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a1_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 1 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a1_lock);
													}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'banerm_a2_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_a2_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a2_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 2 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a2_lock);
													}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'banerm_a3_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_a3_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a3_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 3 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a3_lock);
													}
										
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'banerm_a4_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_a4_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a4_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 4 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a4_lock);
													}
										
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'banerm_a5_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_a5_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_a5_lock");
												$ttttt="➖ شما در حال ثبت بنر عادی 5 میباشید❗️\n\n➖ لطفا بنر را ارسال یا فوروارد کنید 👇🏻👇🏻👇🏻";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_a5_lock);
													}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'banerm_s1_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_s1_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s1_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 1 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s1_lock);
													}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'banerm_s2_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_s2_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s2_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 2 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s2_lock);
													}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'banerm_s3_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_s3_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s3_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 3 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s3_lock);
													}
										
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'banerm_s4_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_s4_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s4_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 4 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s4_lock);
													}
										
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'banerm_s5_lock':
		if($admin_lock_add_baner!=="خیر ❌"){
											if($banerm_s5_lock == "افزودن ➕"){
												sendAction($chatid, "typing");
												file_put_contents("com.txt","banerm_s5_lock");
												$ttttt="❗️شما در حال ثبت کردن بنر شیشه ای 5 میباشید ❗️\n\n🛑 لطفا متن بنر را ارسال کنید \n🛑 دقت کنید کنید که فقط ((متن )) باشد و -عکس-ویدیو-... نباشد \n\n➖➖➖➖➖➖➖➖➖➖";
												Editk($chatid,$ttttt,$messageid,$k_c_baner);
												}else{
													answerQ($membercall , $banerm_s5_lock);
													}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
						
						//////////===========(  Sending Settings  ) ==========////////
						//////////===========(  Sending Settings  ) ==========////////
						
		case 'baners_a1_lock':
											sendAction($chatid, "typing");
											if($baners_a1_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a1_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a1_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 1 == $baners_a1_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
						break;
		case 'baners_a2_lock':
											sendAction($chatid, "typing");
											if($baners_a2_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a2_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a2_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 2 == $baners_a2_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_a3_lock':
											sendAction($chatid, "typing");
											if($baners_a3_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a3_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a3_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 3 == $baners_a3_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_a4_lock':
											sendAction($chatid, "typing");
											if($baners_a4_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a4_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a4_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 4 == $baners_a4_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_a5_lock':
											sendAction($chatid, "typing");
											if($baners_a5_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_a5_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_a5_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنر عادی 5 == $baners_a5_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s1_lock':
											sendAction($chatid, "typing");
											if($baners_s1_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s1_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s1_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای1 == $baners_s1_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s2_lock':
											sendAction($chatid, "typing");
											if($baners_s2_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s2_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s2_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای2 == $baners_s2_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s3_lock':
											sendAction($chatid, "typing");
											if($baners_s3_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s3_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s3_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای3 == $baners_s3_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s4_lock':
											sendAction($chatid, "typing");
											if($baners_s4_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s4_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s4_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای4 == $baners_s4_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
		case 'baners_s5_lock':
											sendAction($chatid, "typing");
											if($baners_s5_lock==="ارسال نشود ❌"){
												$dataa['data']['baners_s5_lock']="ارسال شود ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("data.json",json_encode($dataa));
												}else{
													$dataa['data']['baners_s5_lock']="ارسال نشود ❌";
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("data.json",json_encode($dataa));
													}
													$ttttt="🇩🇪 بخش تنظیم بنر های ارسالی 🇩🇪\n\n⚠️ برای (فعال|غیرفعال) کردن ارسال بنر مورد نظر بر رویه دکمه های #ارسال_شود یا #ارسال_نشود کلیک کنید ⚠️\n\n❕ بنرشیشه ای5 == $baners_s5_lock\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
													Editk($chatid,$ttttt,$messageid,$k_setting_baners);
										
										
										
						break;
						
						//////////===========(  Other Settings  ) ==========////////
						//////////===========(  Other Settings  ) ==========////////
						
		case 'add_admin':
		if($admin_lock_set_admin!=="خیر ❌"){
											sendAction($chatid, "typing");
											file_put_contents("com.txt","add_admin");
											$ttttt="⁉️ لطفا آیدی عددی ادمین جدید را وارد نمیاید ⁉️\n\nمثال  : 397536024\n\n➖➖➖➖➖➖➖👇";
											Editk($chatid,$ttttt,$messageid,$k_c_admin);
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'del_admin':
		if($admin_lock_del_admin!="خیر ❌"){
											sendAction($chatid, "typing");
											file_put_contents("com.txt","del_admin");
											$ttttt="⁉️ لطفا آیدی عددی ادمین را برای #حذف کردن وارد نمیاید ⁉️\n\nمثال  : 397536024\n\n➖➖➖➖➖➖➖👇";
											Editk($chatid,$ttttt,$messageid,$k_c_admin);
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'list_admins':
		if($admin_lock_see_admin!=="خیر ❌"){
											sendAction($chatid, "typing");
											
											$t_ttt_1="👇 لیست ادمین های فورچی 👇 \n\n";
											$cccca=1;
											foreach($dataa['data']['admin'] as $k => $ans){
											$t_ttt_1.= "👤 Admin $cccca ➣ <a href='tg://user?id=$k'>$ans</a> \n\n";
											$cccca++;
											}
											$t_ttt_1.= "\n\n ➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
											Editk($chatid,$t_ttt_1,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏪ بازگشت",'callback_data'=>'admins_panel']],]]));
		
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
						//////////===========(  Other Settings  ) ==========////////
		case 'reset_bs_panel':
		if($admin_lock_del_baner!=="خیر ❌"){
											sendAction($chatid, "typing");
											$ttttt="⚠️ شما در حال ریست کردن تمام بنر های #شیشه_ای هستید ( با این کار تمام بنر های شیشه ای #حذف خواهند شد ⚠️\n\n➖ آیا مطمعن هستبد ؟؟؟ 👇🏻👇🏻";
											Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بله ریست کن",'callback_data'=>'reset_bs_true'],['text'=>"نه نمیخوام",'callback_data'=>'baners_panel']],]]));
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'reset_ab_panel':
		if($admin_lock_del_baner!=="خیر ❌"){
											sendAction($chatid, "typing");
											$ttttt="⚠️ شما در حال ریست کردن تمام بنر های #عادی هستید ( با این کار تمام بنر های عادی #حذف خواهند شد ⚠️\n\n➖ آیا مطمعن هستبد ؟؟؟ 👇🏻👇🏻";
											Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بله ریست کن",'callback_data'=>'reset_ab_true'],['text'=>"نه نمیخوام",'callback_data'=>'banera_panel']],]]));
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'reset_bs_true':
											
										sendAction($chatid, "typing");
		                                      unset($dataa['data']['baners_sh'][0]);
		                                      unset($dataa['data']['baners_sh'][1]);
		                                      unset($dataa['data']['baners_sh'][2]);
		                                      unset($dataa['data']['baners_sh'][3]);
		                                      unset($dataa['data']['baners_sh'][4]);
		                                      $dataa['data']['banerm_s1_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s2_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s3_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s4_lock']="افزودن ➕";
                                              $dataa['data']['banerm_s5_lock']="افزودن ➕";
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      $ttttt="✅ با موفقیت انجام شد 👌🏼\n\n❗️بنر 1 = حذف شد !\n❗️بنر 2 = حذف شد !\n❗️بنر 3 = حذف شد !\n❗️بنر 4 = حذف شد !\n❗️بنر 5 = حذف شد !\n\n➖➖➖➖➖➖➖➖";
		                                      Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏪ بازگشت",'callback_data'=>'baners_panel']],]]));
		
										
						break;                   
		case 'reset_ab_true':
											
								        sendAction($chatid, "typing");
		                                      unset($dataa['data']['baners_ab'][0]);
		                                      unset($dataa['data']['baners_ab'][1]);
		                                      unset($dataa['data']['baners_ab'][2]);
		                                      unset($dataa['data']['baners_ab'][3]);
		                                      unset($dataa['data']['baners_ab'][4]);
		                                      $dataa['data']['banerm_a1_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a2_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a3_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a4_lock']="افزودن ➕";
                                              $dataa['data']['banerm_a5_lock']="افزودن ➕";
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      file_put_contents("data.json",json_encode($dataa));
		                                      $ttttt="✅ با موفقیت انجام شد 👌🏼\n\n❗️بنر 1 = حذف شد !\n❗️بنر 2 = حذف شد !\n❗️بنر 3 = حذف شد !\n❗️بنر 4 = حذف شد !\n❗️بنر 5 = حذف شد !\n\n➖➖➖➖➖➖➖➖";
		                                      Editk($chatid,$ttttt,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏪ بازگشت",'callback_data'=>'banera_panel']],]]));
		
										
						break;
		case 'get_blist':
		if($admin_lock_see_baner!=="خیر ❌"){
											if(isset($dataa['data']['baners_ab'][0])){
			$CCC =$dataa['data']['baners_ab'][0][0];
			$MMM=$dataa['data']['baners_ab'][0][1];
			$DDD=$dataa['data']['baners_ab'][0][2];
			$TTT=$dataa['data']['baners_ab'][0][3];
			$SSS=$dataa['data']['baners_ab'][0][4];
			if(!isset($dataa['data']['baners_ab'][0][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 1
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab1_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][1])){
			
			$CCC =$dataa['data']['baners_ab'][1][0];
			$MMM=$dataa['data']['baners_ab'][1][1];
			$DDD=$dataa['data']['baners_ab'][1][2];
			$TTT=$dataa['data']['baners_ab'][1][3];
			$SSS=$dataa['data']['baners_ab'][1][4];
			if(!isset($dataa['data']['baners_ab'][1][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 2
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab2_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][2])){
			
			$CCC =$dataa['data']['baners_ab'][2][0];
			$MMM=$dataa['data']['baners_ab'][2][1];
			$DDD=$dataa['data']['baners_ab'][2][2];
			$TTT=$dataa['data']['baners_ab'][2][3];
			$SSS=$dataa['data']['baners_ab'][2][4];
			if(!isset($dataa['data']['baners_ab'][2][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 3
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab3_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][3])){
			
			$CCC =$dataa['data']['baners_ab'][3][0];
			$MMM=$dataa['data']['baners_ab'][3][1];
			$DDD=$dataa['data']['baners_ab'][3][2];
			$TTT=$dataa['data']['baners_ab'][3][3];
			$SSS=$dataa['data']['baners_ab'][3][4];
			if(!isset($dataa['data']['baners_ab'][3][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 4
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,$json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab4_del']],]])  );
			
			} if(isset($dataa['data']['baners_ab'][4])){
			
			$CCC =$dataa['data']['baners_ab'][4][0];
			$MMM=$dataa['data']['baners_ab'][4][1];
			$DDD=$dataa['data']['baners_ab'][4][2];
			$TTT=$dataa['data']['baners_ab'][4][3];
			$SSS=$dataa['data']['baners_ab'][4][4];
			if(!isset($dataa['data']['baners_ab'][4][4])){
				$SSS=0;
				}
			ForwardMessage($chatid,$CCC,$MMM);
			sleep(0.1);
			$tt4="💠 نوع  : عادی 
💠 توسط : $CCC
💠 شماره : 5
💠 تاریخ ثبت : $DDD
💠 زمان ثبت : $TTT
💠 تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖➖";
			sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_ab5_del']],]])  );
			
			
			
			
			} if(isset($dataa['data']['baners_sh'][0])){
			$TTTT =$dataa['data']['baners_sh'][0][0];
			$BNN =$dataa['data']['baners_sh'][0][1];
			$BLL =$dataa['data']['baners_sh'][0][2];
			$DDD=$dataa['data']['baners_sh'][0][3];
			$TTT=$dataa['data']['baners_sh'][0][4];
			$SSS=$dataa['data']['baners_sh'][0][5];
			$CCC =$dataa['data']['baners_sh'][0][6];
			if(!isset($dataa['data']['baners_sh'][0][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 1
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh1_del']],]])  );
				
			} if(isset($dataa['data']['baners_sh'][1])){
			
			$TTTT =$dataa['data']['baners_sh'][1][0];
			$BNN =$dataa['data']['baners_sh'][1][1];
			$BLL =$dataa['data']['baners_sh'][1][2];
			$DDD=$dataa['data']['baners_sh'][1][3];
			$TTT=$dataa['data']['baners_sh'][1][4];
			$SSS=$dataa['data']['baners_sh'][1][5];
			$CCC =$dataa['data']['baners_sh'][1][6];
			if(!isset($dataa['data']['baners_sh'][1][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 2
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh2_del']],]]));
			
			} if(isset($dataa['data']['baners_sh'][2])){
			
			$TTTT =$dataa['data']['baners_sh'][2][0];
			$BNN =$dataa['data']['baners_sh'][2][1];
			$BLL =$dataa['data']['baners_sh'][2][2];
			$DDD=$dataa['data']['baners_sh'][2][3];
			$TTT=$dataa['data']['baners_sh'][2][4];
			$SSS=$dataa['data']['baners_sh'][2][5];
			$CCC =$dataa['data']['baners_sh'][2][6];
			if(!isset($dataa['data']['baners_sh'][2][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 3
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh3_del']],]])  );
			
			} if(isset($dataa['data']['baners_sh'][3])){
			
			$TTTT =$dataa['data']['baners_sh'][3][0];
			$BNN =$dataa['data']['baners_sh'][3][1];
			$BLL =$dataa['data']['baners_sh'][3][2];
			$DDD=$dataa['data']['baners_sh'][3][3];
			$TTT=$dataa['data']['baners_sh'][3][4];
			$SSS=$dataa['data']['baners_sh'][3][5];
			$CCC =$dataa['data']['baners_sh'][3][6];
			if(!isset($dataa['data']['baners_sh'][3][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 4
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh4_del']],]])  );
			
			} if(isset($dataa['data']['baners_sh'][4])){
			
			$TTTT =$dataa['data']['baners_sh'][4][0];
			$BNN =$dataa['data']['baners_sh'][4][1];
			$BLL =$dataa['data']['baners_sh'][4][2];
			$DDD=$dataa['data']['baners_sh'][4][3];
			$TTT=$dataa['data']['baners_sh'][4][4];
			$SSS=$dataa['data']['baners_sh'][4][5];
			$CCC =$dataa['data']['baners_sh'][4][6];
			if(!isset($dataa['data']['baners_sh'][4][4])){
				$SSS=0;
				}
				bot('sendMessage',[       'chat_id'=>$chatid,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				sleep(0.1);
				$tt4="♦️ نوع : شیشه ای
♦️ شماره : 5
♦️ توسط : $CCC
♦️ تاریخ ثبت : $DDD
♦️ زمان ثبت : $TTT
♦️ تعداد ارسال : $SSS

➖➖➖➖➖➖➖➖➖";
				sm1k($chatid, $tt4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"حذف❌❌",'callback_data'=>'baners_sh5_del']],]])  );
			
			
		
		                                          sleep(1.4);
		                                          $t3t4="☝️☝️☝️☝️☝️☝️☝️☝️\n\n لیست بنر های ربات ";
		                                          sm1k($chatid, $t3t4 ,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"⏩ بازگشت ",'callback_data'=>'start']],]]) );
		
										}
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
						break;
		case 'baners_ab1_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_a1_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][0]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 1 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'baners_ab2_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_a2_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][1]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 2 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_ab3_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_a3_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][2]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 3 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_ab4_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_a4_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][3]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 4 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_ab5_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_a5_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_ab'][4]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنر عادی 5 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_sh1_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_s1_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][0]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 1 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_sh2_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_s2_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][1]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 2 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_sh3_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_s3_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][2]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 3 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;
		case 'baners_sh4_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_s4_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][3]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 4 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                              	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
										}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
						break;              
		case 'baners_sh5_del':
		if($admin_lock_del_baner!=="خیر ❌"){
			                                      $dataa['data']['banerm_s5_lock']="افزودن ➕";
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][4]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="✅🛑 بنرشیشه ای 5 با موفقیت حذف شد ❕\n\n➖➖➖➖➖➖➖➖➖";
				                                                	 		                        Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]) );
		
		
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'reset_yes_1':
											sendAction($chatid, "typing");
		                                          $tt4="⚠️ آیا مطمعن هستید ؟ \n\n ➖➖➖➖➖➖➖";
				                                          Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بله",'callback_data'=>'reset_yes_2'],['text'=>"نه ریست نکن",'callback_data'=>'start']],]]));
		
										
										
						break;
		case 'reset_yes_2':
											sendAction($chatid, "typing");
		                                          unset($dataa['data']['baners_sh'][0]);
		                                          unset($dataa['data']['baners_sh'][1]);
		                                          unset($dataa['data']['baners_sh'][2]);
		                                          unset($dataa['data']['baners_sh'][3]);
		                                          unset($dataa['data']['baners_sh'][4]);
		                                          unset($dataa['data']['baners_ab'][0]);
		                                          unset($dataa['data']['baners_ab'][1]);
		                                          unset($dataa['data']['baners_ab'][2]);
		                                          unset($dataa['data']['baners_ab'][3]);
		                                          unset($dataa['data']['baners_ab'][4]);
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          $dataa['data']['banerm_a1_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a2_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a3_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a4_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_a5_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s1_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s2_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s3_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s4_lock']="افزودن ➕";
                                                  $dataa['data']['banerm_s5_lock']="افزودن ➕";
                                                  $dataa['data']['baners_a1_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a2_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a3_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a4_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_a5_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s1_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s2_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s3_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s4_lock']="ارسال نشود ❌";
                                                  $dataa['data']['baners_s5_lock']="ارسال نشود ❌";
                                                  $dataa['data']['admin_lock_set_admin']="خیر ❌";
                                                  $dataa['data']['admin_lock_del_admin']="خیر ❌";
                                                  $dataa['data']['admin_lock_see_admin']="خیر ❌";
                                                  $dataa['data']['admin_lock_stin_admin']="بله ✅";
                                                  $dataa['data']['admin_lock_add_baner']="بله ✅";
                                                  $dataa['data']['admin_lock_del_baner']="خیر ❌";
                                                  $dataa['data']['admin_lock_see_baner']="بله ✅";
                                                  $dataa['data']['admin_lock_reset_bot']="خیر ❌";
                                                  $dataa['data']['admin_lock_setting_panel']="خیر ❌";
                                                  $dataa['data']['admin_lock_see_panel']="بله ✅";
                                                  $dataa['data']['admin_lock_tab_panel']="خیر ❌";
                                                  $dataa['data']['send_repit']="خاموش ❌";
                                                  $dataa['data']['send_pv']="خاموش ❌";
                                                  $dataa['data']['send_gp']="خاموش ❌";
                                                  $dataa['data']['send_bs']="خاموش ❌";
                                                  $dataa['data']['send_ba']="خاموش ❌";
                                                  $dataa['data']['state']="روشن ✅";
                                                  file_put_contents("data.json",json_encode($dataa));
                                                  file_put_contents("com.txt","");
		                                          file_put_contents("data.json",json_encode($dataa));
		                                          file_put_contents("com.txt","");
		                                          $tt4="🛑 ربات باموفقیت ریست شد !\n\n♦️ تمامی بنر ها\n♦️تنظیمات\n\n🛑 ریست شدند 👇";
		                                          Editk($chatid,$tt4,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"برگشت به پنل 🔙",'callback_data'=>'start']],]]));
		
		
										
										
						break;
		case 'amaar':
		if($admin_lock_see_panel!=="خیر ❌"){
											sendAction($chatid, "typing");
		                                          if(!isset($dataa['data']['userz'])){
			                                          $userz_c=0;
			                                          }else{
				                                          $userz_c=count($userz);
				                                          }
		                                          if(!isset($dataa['data']['gapz'])){
			                                          $gapz_c=0;
			                                          }else{
				                                          $gapz_c=count($gapz);
				                                          }
		                                          if(!isset($dataa['data']['admin'])){
			                                          $admin_c=0;
			                                          }else{
				                                          $admin_c=count($admins);
				                                          }
		                                          if(!isset($dataa['data']['baners_sh'])){
			                                          $baners_sh_c=0;
			                                          }else{
				                                          $baners_sh_c=count($baners_sh);
				                                          }
		                                          if(!isset($dataa['data']['baners_ab'])){
			                                          $baners_ab_c=0;
			                                          }else{
				                                          $baners_ab_c=count($baners_ab);
				                                          }
		                                          $texxxt="🔰 آمار ربات فورچی 🔰\n\n🔹 تعداد ادمین ها : $admin_c\n🔹 تعداد گپ ها : $gapz_c\n🔹 تعداد کاربران : $userz_c\n🔹 تعداد بنرشیشه ای : $baners_sh_c\n🔹 تعداد بنرعادی : $baners_ab_c\n\n➖➖➖➖➖➖➖➖➖➖";
		                                          Editk($chatid,$texxxt,$messageid,$k_amar);
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'list_userz':
											sendAction($chatid, "typing");
			                                          $Tttth="👇🏻 لیست کاربران ربات 👇🏻\n\n";
			                                          $Cah=0;
		                                          foreach($dataa['data']['userz'] as $k => $u){
			                                          $Tttth.="👤U $Cah ➣ <a href='tg://user?id=$k'>$u</a> \n";
			                                          $Cah++;
			                                          }
										    $Tttth.="\n\n ➖➖➖➖➖➖➖➖";
		                                          Editk($chatid,$Tttth,$messageid,$k_amar);
										
						break;
		case 'list_gapz':
											sendAction($chatid, "typing");
			                                          $Tttth="👇🏻 لیست گروه های ربات 👇🏻\n\n";
			                                          $Cah=0;
		                                          foreach($dataa['data']['gapz'] as $k => $u){
			                                          $Tttth.="👥G $Cah ➣ <a href='tg://user?id=$k'>$u</a> \n";
			                                          $Cah++;
			                                          }
		                                          $Tttth.="\n\n ➖➖➖➖➖➖➖➖";
		                                          Editk($chatid,$Tttth,$messageid,$k_amar);
		
										
										
						break;
		case 'f_userz':
		if($admin_lock_tab_panel!=="خیر ❌"){
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","f_userz");
		                                          $Ttttttt6="🏷 لطفا پیام را برای فوروارد ارسال یا فوروارد کنید \n\n➖➖➖➖➖➖";
		                                          Editk($chatid,$Ttttttt6,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بازگشت 🔙",'callback_data'=>'c_tab']],]]));
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'f_gapz':
		if($admin_lock_tab_panel!=="خیر ❌"){
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","f_gapz");
		                                          $Ttttttt6="🏷 لطفا پیام را برای فوروارد ارسال یا فوروارد کنید \n\n➖➖➖➖➖➖";
		                                          Editk($chatid,$Ttttttt6,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بازگشت 🔙",'callback_data'=>'c_tab']],]]));
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'f_all':
		if($admin_lock_tab_panel!=="خیر ❌"){
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","f_all");
		                                          $Ttttttt6="🏷 لطفا پیام را برای فوروارد ارسال یا فوروارد کنید \n\n➖➖➖➖➖➖";
		                                          Editk($chatid,$Ttttttt6,$messageid,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"بازگشت 🔙",'callback_data'=>'c_tab']],]]));
		}else{
			answerQ($membercall , "⚠️مدیر این دسترسی را به شما نداده است ⚠️");
			}
										
										
						break;
		case 'c_tab':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","");
		                                          $Ttttttt6="♦️ پنل آمار ♦️ لطفا یک گذینه را انتخاب نمایید 👇👇👇👇";
		                                          Editk($chatid,$Ttttttt6,$messageid,$k_amar);
										
										
						break;
		case 'c_admin':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","");
		                                          $Ttttttt6="♦️ پنل ادمین ها ♦️ لطفا یک گذینه را انتخاب نمایید 👇👇👇👇";
		                                          Editk($chatid,$Ttttttt6,$messageid,$k_admins_panel);
										
										
						break;
		case 'c_baner':
											sendAction($chatid, "typing");
		                                          file_put_contents("com.txt","");
		                                          $Tttt43 = "🇩🇪 لیست بنر های عادی 🇩🇪\n\n\n🚫 این لیست برای اضافه کردن بنر است * برای حذف کردن بنر مورد نظر بر رویه کلید #لیست_بنرها کلیک کنید 🚫\n\n➖👇🏻➖👇🏻➖👇🏻➖👇🏻➖";
		                                          Editk($chatid,$Tttt43,$messageid,$k_start);
										
										
						break;
		case 'data':
											
										
										
						break;
		case 'data':
											
										
										
						break;
		
		}
		}



if($tc== 'private' and $from_id ===$sudo or isset($dataa['data']['admin'][$from_id])){
	switch ($com) {
		
		case 'add_admin':
		sendAction($chatid, "typing");
											if(!isset($dataa['data']['admin'][$textmassage])and isset($dataa['data']['userz'][$textmassage])){
												file_put_contents("com.txt","");
												$dataa['data']['admin'][$textmassage]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													$t_t_t ="✅ کاربر <a href='tg://user?id=$textmassage'>$textmassage</a>با موفقیت توسط شما ادمین شد\n\n➖ در تاریخ : $Fdate\n\n➖ در زمان   : $Ftime\n\n➖➖➖➖➖➖➖➖";
													smk($chat_id, $t_t_t , $message_id,$k_c_admin );
													
												
												}else{
													file_put_contents("com.txt","");
													$t_t_t ="⚠️ کاربر <a href='tg://user?id=$textmassage'>$textmassage</a>در لیست کاربران وجود ندارد تا آن را ادمین کنید یا از قبل ادمین شده است ⚠️\n\n➖➖➖➖➖➖➖➖";
													smk($chat_id, $t_t_t , $message_id,$k_c_admin );
													}
										
										
						break;
		case 'del_admin':
		sendAction($chatid, "typing");
											if(isset($dataa['data']['admin'][$textmassage])and isset($dataa['data']['userz'][$textmassage])){
												file_put_contents("com.txt","");
												unset($dataa['data']['admin'][$textmassage]);
												file_put_contents("data.json",json_encode($dataa));
													$t_t_t ="✅ کاربر <a href='tg://user?id=$textmassage'>$textmassage</a>از ادمینی عـــــزل شد ✅\n\n➖➖➖➖➖➖➖➖";
													smk($chat_id, $t_t_t , $message_id,$k_c_admin );
													
												
												}else{
													file_put_contents("com.txt","");
													$t_t_t ="⚠️ کاربر <a href='tg://user?id=$textmassage'>$textmassage</a>در لیست ادمین ها وجود ندارد تا ان را عـــــزل کنید ⚠️\n\n➖➖➖➖➖➖➖➖➖";
													smk($chat_id, $t_t_t , $message_id,$k_c_admin );
													
													}
										
										
						break;
		case 'f_userz':
		  		                                 sendAction($chatid, "typing");
		 		                                 file_put_contents("com.txt","");
											    $all_memberr = fopen( "user.txt", 'r');
	                                            while( !feof( $all_memberr)) {
 		                                 	$userr = fgets( $all_memberr);
       		                                   ForwardMessage($userr,$chat_id,$message_id);
		 		                                 }
										smk($chat_id, "با موفقیت فوروارد شد" , $messageid,$k_start );
										
						break;
		case 'f_gapz':
											  		                  sendAction($chatid, "typing");               
		 		                                 file_put_contents("com.txt","");
											    $all_memberr = fopen( "gap.txt", 'r');
	                                            while( !feof( $all_memberr)) {
 		                                 	$userr = fgets( $all_memberr);
       		                                   ForwardMessage($userr,$chat_id,$message_id);
		 		                                 }
										smk($chat_id, "با موفقیت فوروارد شد" , $messageid,$k_start );
										
						break;
		case 'f_all':
											sendAction($chatid, "typing");
		 		                                 file_put_contents("com.txt","");
											    $all_memberr = fopen( "user.txt", 'r');
	                                            while( !feof( $all_memberr)) {
 		                                 	$userr = fgets( $all_memberr);
       		                                   ForwardMessage($userr,$chat_id,$message_id);
		 		                                 }
										$Adddddd = fopen( "gap.txt", 'r');
	                                            while( !feof( $Adddddd)) {
 		                                 	$usssss = fgets( $Adddddd);
       		                                   ForwardMessage($usssss,$chat_id,$message_id);
		 		                                 }
										smk($chat_id, "با موفقیت فوروارد شد" , $messageid,$k_start );
						break;
						
						/////////=========================/////////=========================/////////=========================
						/////////=========================/////////=========================/////////=========================
						
		case 'banerm_a1_lock':
		 		                                 	sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_ab'][0])){
												          $dataa['data']['baners_ab'][0][0]=$chat_id;
			 		                                 	$dataa['data']['baners_ab'][0][1]=$message_id;
			 		                                 	$dataa['data']['baners_ab'][0][2]=$Fdate;
			 		                                 	$dataa['data']['baners_ab'][0][3]=$Ftime;
			 		                                 	$dataa['data']['baners_ab'][0][4]=0;
												          $dataa['data']['banerm_a1_lock']="ثبت شده ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("com.txt","");
											smk($chat_id, "✅ بنر عادی 1 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $messageid,$k_c_baner );
												
												
												
												}else{
													file_put_contents("com.txt","");
											smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
						break;
		case 'banerm_a2_lock':
												sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_ab'][1])){
												          $dataa['data']['baners_ab'][1][0]=$chat_id;
			 		                                 	$dataa['data']['baners_ab'][1][1]=$message_id;
			 		                                 	$dataa['data']['baners_ab'][1][2]=$Fdate;
			 		                                 	$dataa['data']['baners_ab'][1][3]=$Ftime;
			 		                                 	$dataa['data']['baners_ab'][1][4]=0;
												          $dataa['data']['banerm_a2_lock']="ثبت شده ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("com.txt","");
											smk($chat_id, "✅ بنر عادی 2 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $messageid,$k_c_baner );
												
												
												
												}else{
													file_put_contents("com.txt","");
											smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
										
										
						break;
		case 'banerm_a3_lock':
												sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_ab'][2])){
												          $dataa['data']['baners_ab'][2][0]=$chat_id;
			 		                                 	$dataa['data']['baners_ab'][2][1]=$message_id;
			 		                                 	$dataa['data']['baners_ab'][2][2]=$Fdate;
			 		                                 	$dataa['data']['baners_ab'][2][3]=$Ftime;
			 		                                 	$dataa['data']['baners_ab'][2][4]=0;
												          $dataa['data']['banerm_a3_lock']="ثبت شده ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("com.txt","");
											smk($chat_id, "✅ بنر عادی 3 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $messageid,$k_c_baner );
												
												
												
												}else{
													file_put_contents("com.txt","");
											smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
										
										
						break;
		case 'banerm_a4_lock':
												sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_ab'][3])){
												          $dataa['data']['baners_ab'][3][0]=$chat_id;
			 		                                 	$dataa['data']['baners_ab'][3][1]=$message_id;
			 		                                 	$dataa['data']['baners_ab'][3][2]=$Fdate;
			 		                                 	$dataa['data']['baners_ab'][3][3]=$Ftime;
			 		                                 	$dataa['data']['baners_ab'][3][4]=0;
												          $dataa['data']['banerm_a4_lock']="ثبت شده ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("com.txt","");
											smk($chat_id, "✅ بنر عادی 4 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $messageid,$k_c_baner );
												
												
												
												}else{
													file_put_contents("com.txt","");
											smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
										
										
						break;
		case 'banerm_a5_lock':
											
											sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_ab'][4])){
												          $dataa['data']['baners_ab'][4][0]=$chat_id;
			 		                                 	$dataa['data']['baners_ab'][4][1]=$message_id;
			 		                                 	$dataa['data']['baners_ab'][4][2]=$Fdate;
			 		                                 	$dataa['data']['baners_ab'][4][3]=$Ftime;
			 		                                 	$dataa['data']['baners_ab'][4][4]=0;
												          $dataa['data']['banerm_a5_lock']="ثبت شده ✅";
												file_put_contents("data.json",json_encode($dataa));
												file_put_contents("com.txt","");
											smk($chat_id, "✅ بنر عادی 5 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $messageid,$k_c_baner );
												
												
												
												}else{
													file_put_contents("com.txt","");
											smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
										
										
						break;
		case 'banerm_s1_lock':
											sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_sh'][0])){
												if($update->message->text){
													$dataa['data']['baners_sh'][0][0]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s1_lock_BN");
													smk($chat_id, "♻️ حال + نام دکمه + بنر شیشه ای 1 را ارسال نمایید ♻️\n\n🌀 این متن بر رویه دکمه شیشه ای بنر قرار میگیرد 🌀\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh1_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #متن بنر شیشه ای 1 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh1_del']],]])  );
														}
												
												}else{
													file_put_contents("com.txt","");
											        smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
											
											
										
										
						break;
		case 'banerm_s2_lock':
											sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_sh'][1])){
												if($update->message->text){
													$dataa['data']['baners_sh'][1][0]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s2_lock_BN");
													smk($chat_id, "♻️ حال + نام دکمه + بنر شیشه ای 2 را ارسال نمایید ♻️\n\n🌀 این متن بر رویه دکمه شیشه ای بنر قرار میگیرد 🌀\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh2_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #متن بنر شیشه ای 2 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh2_del']],]])  );
														}
												
												}else{
													file_put_contents("com.txt","");
											        smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
						break;
		case 'banerm_s3_lock':
											sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_sh'][2])){
												if($update->message->text){
													$dataa['data']['baners_sh'][2][0]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s4_lock_BN");
													smk($chat_id, "♻️ حال + نام دکمه + بنر شیشه ای 3 را ارسال نمایید ♻️\n\n🌀 این متن بر رویه دکمه شیشه ای بنر قرار میگیرد 🌀\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #متن بنر شیشه ای 3 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
														}
												
												}else{
													file_put_contents("com.txt","");
											        smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
						break;
		case 'banerm_s4_lock':
											sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_sh'][3])){
												if($update->message->text){
													$dataa['data']['baners_sh'][3][0]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s4_lock_BN");
													smk($chat_id, "♻️ حال + نام دکمه + بنر شیشه ای 4 را ارسال نمایید ♻️\n\n🌀 این متن بر رویه دکمه شیشه ای بنر قرار میگیرد 🌀\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #متن بنر شیشه ای 4 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
														}
												
												}else{
													file_put_contents("com.txt","");
											        smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
						break;
		case 'banerm_s5_lock':
											sendAction($chatid, "typing");
											if(!isset($dataa['data']['baners_sh'][4])){
												if($update->message->text){
													$dataa['data']['baners_sh'][4][0]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s5_lock_BN");
													smk($chat_id, "♻️ حال + نام دکمه + بنر شیشه ای 5 را ارسال نمایید ♻️\n\n🌀 این متن بر رویه دکمه شیشه ای بنر قرار میگیرد 🌀\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh5_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #متن بنر شیشه ای 5 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh5_del']],]])  );
														}
												
												}else{
													file_put_contents("com.txt","");
											        smk($chat_id, "🛑 این بنر از قبل ست شده است 🛑" , $messageid,$k_c_baner );
													}
										
										
						break;
						
						
						
		case 'banerm_s1_lock_BN':
											if($update->message->text){
													$dataa['data']['baners_sh'][0][1]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s1_lock_BL");
													smk($chat_id, "🔰Ⓜ️ حالا + لینک دکمه + بنر شیشه ای 1 را ارسال نمایید Ⓜ️🔰\n\n\n⁉️ این لینک میتواند (لینک گروه /کانال/سایت/...) باشد تا وقتی کاربر برو رویه دکمه بنر کلیک میکنید وارد ان شود ⁉️\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh1_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #نام_دکمه بنر شیشه ای 1 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh1_del']],]])  );
														}
										
										
						break;
		case 'banerm_s2_lock_BN':
											if($update->message->text){
													$dataa['data']['baners_sh'][1][1]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s2_lock_BL");
													smk($chat_id, "🔰Ⓜ️ حالا + لینک دکمه + بنر شیشه ای 2 را ارسال نمایید Ⓜ️🔰\n\n\n⁉️ این لینک میتواند (لینک گروه /کانال/سایت/...) باشد تا وقتی کاربر برو رویه دکمه بنر کلیک میکنید وارد ان شود ⁉️\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh2_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #نام_دکمه بنر شیشه ای 2 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh2_del']],]])  );
														}
										
										
						break;
		case 'banerm_s3_lock_BN':
											if($update->message->text){
													$dataa['data']['baners_sh'][2][1]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s3_lock_BL");
													smk($chat_id, "🔰Ⓜ️ حالا + لینک دکمه + بنر شیشه ای 4 را ارسال نمایید Ⓜ️🔰\n\n\n⁉️ این لینک میتواند (لینک گروه /کانال/سایت/...) باشد تا وقتی کاربر برو رویه دکمه بنر کلیک میکنید وارد ان شود ⁉️\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh3_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #نام_دکمه بنر شیشه ای 3 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh3_del']],]])  );
														}
										
										
						break;
		case 'banerm_s4_lock_BN':
											if($update->message->text){
													$dataa['data']['baners_sh'][3][1]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s4_lock_BL");
													smk($chat_id, "⚠️خطا : لطفا #نام_دکمه بنر شیشه ای 4 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
													}else{
														smk($chat_id, "te2222xt" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
														}
										
										
						break;
		case 'banerm_s5_lock_BN':
											if($update->message->text){
													$dataa['data']['baners_sh'][4][1]=$textmassage;
													file_put_contents("data.json",json_encode($dataa));
													file_put_contents("com.txt","banerm_s5_lock_BL");
													smk($chat_id, "🔰Ⓜ️ حالا + لینک دکمه + بنر شیشه ای 5 را ارسال نمایید Ⓜ️🔰\n\n\n⁉️ این لینک میتواند (لینک گروه /کانال/سایت/...) باشد تا وقتی کاربر برو رویه دکمه بنر کلیک میکنید وارد ان شود ⁉️\n\n➖➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh5_del']],]])  );
													}else{
														smk($chat_id, "⚠️خطا : لطفا #نام_دکمه بنر شیشه ای 5 را بصورت #متن وارد نمایید ⚠️\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh5_del']],]])  );
														}
										
										
						break;
						
						
						
						
						
						
						
		case 'banerm_s1_lock_BL':
											if($update->message->entities[0]->type=='url'){
												
												$dataa['data']['baners_sh'][0][2]=$textmassage;
												$dataa['data']['baners_sh'][0][3]=$Fdate;
												$dataa['data']['baners_sh'][0][4]=$Ftime;
												$dataa['data']['baners_sh'][0][5]=0;
												$dataa['data']['baners_sh'][0][6]=$chat_id;
												          $dataa['data']['banerm_s1_lock']="ثبت شده ✅";
												file_put_contents("com.txt","");
												file_put_contents("data.json",json_encode($dataa));
												smk($chat_id, "✅ بنر شیشه ای 1 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $message_id,$k_c_baner );
												}else{
													smk($chat_id, "⚠️خطا لطفا #لینک بنر شیشه ای 1 را بصورت ( url ) یا ( #لینک ) وارد نمایید\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh1_del']],]])  );
													}
										
										
						break;
		case 'banerm_s2_lock_BL':
											
										if($update->message->entities[0]->type=='url'){
												
												$dataa['data']['baners_sh'][1][2]=$textmassage;
												$dataa['data']['baners_sh'][1][3]=$Fdate;
												$dataa['data']['baners_sh'][1][4]=$Ftime;
												$dataa['data']['baners_sh'][1][5]=0;
												$dataa['data']['baners_sh'][1][6]=$chat_id;
												          $dataa['data']['banerm_s2_lock']="ثبت شده ✅";
												file_put_contents("com.txt","");
												file_put_contents("data.json",json_encode($dataa));
												smk($chat_id, "✅ بنر شیشه ای 2 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $message_id,$k_c_baner );
												}else{
													smk($chat_id, "⚠️خطا لطفا #لینک بنر شیشه ای 2 را بصورت ( url ) یا ( #لینک ) وارد نمایید\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh2_del']],]])  );
													}
										
										
										
						break;
		case 'banerm_s3_lock_BL':
											
										if($update->message->entities[0]->type=='url'){
												
												$dataa['data']['baners_sh'][2][2]=$textmassage;
												$dataa['data']['baners_sh'][2][3]=$Fdate;
												$dataa['data']['baners_sh'][2][4]=$Ftime;
												$dataa['data']['baners_sh'][2][5]=0;
												$dataa['data']['baners_sh'][2][6]=$chat_id;
												          $dataa['data']['banerm_s3_lock']="ثبت شده ✅";
												file_put_contents("com.txt","");
												file_put_contents("data.json",json_encode($dataa));
												smk($chat_id, "✅ بنر شیشه ای 3 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $message_id,$k_c_baner );
												}else{
													smk($chat_id, "⚠️خطا لطفا #لینک بنر شیشه ای 3 را بصورت ( url ) یا ( #لینک ) وارد نمایید\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh3_del']],]])  );
													}
										
										
										
						break;
		case 'banerm_s4_lock_BL':
											
										if($update->message->entities[0]->type=='url'){
												
												$dataa['data']['baners_sh'][3][2]=$textmassage;
												$dataa['data']['baners_sh'][3][3]=$Fdate;
												$dataa['data']['baners_sh'][3][4]=$Ftime;
												$dataa['data']['baners_sh'][3][5]=0;
												$dataa['data']['baners_sh'][3][6]=$chat_id;
												          $dataa['data']['banerm_s4_lock']="ثبت شده ✅";
												file_put_contents("com.txt","");
												file_put_contents("data.json",json_encode($dataa));
												smk($chat_id, "✅ بنر شیشه ای 4 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $message_id,$k_c_baner );
												}else{
													smk($chat_id, "⚠️خطا لطفا #لینک بنر شیشه ای 4 را بصورت ( url ) یا ( #لینک ) وارد نمایید\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh4_del']],]])  );
													}
										
										
										
						break;
		case 'banerm_s5_lock_BL':
											
										if($update->message->entities[0]->type=='url'){
												
												$dataa['data']['baners_sh'][4][2]=$textmassage;
												$dataa['data']['baners_sh'][4][3]=$Fdate;
												$dataa['data']['baners_sh'][4][4]=$Ftime;
												$dataa['data']['baners_sh'][4][5]=0;
												$dataa['data']['baners_sh'][4][6]=$chat_id;
												          $dataa['data']['banerm_s5_lock']="ثبت شده ✅";
												file_put_contents("com.txt","");
												file_put_contents("data.json",json_encode($dataa));
												smk($chat_id, "✅ بنر شیشه ای 5 با موفقیت ثبت شد ✅\n\n❗️تاریخ و زمان ثبت❗️\n\n❗️ $Fdate ❕ $Ftime ❗️\n\n➖➖➖➖➖➖➖➖👇" , $message_id,$k_c_baner );
												}else{
													smk($chat_id, "⚠️خطا لطفا #لینک بنر شیشه ای 5 را بصورت ( url ) یا ( #لینک ) وارد نمایید\n\n➖➖➖➖➖➖➖➖➖" , $message_id,json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"منصرف میشم 😕",'callback_data'=>'baners_sh5_del']],]])  );
													}
										
										
										
						break;
		case 'data':
											
										
										
						break;
		case 'data':
											
										
										
						break;
		
		
		}
	
	}






               




if($chat_id!==$sudo and !isset($dataa['data']['admin'][$chat_id])){
	if($state=="روشن ✅" ){
		if($send_gp=="روشن ✅" ){
			if($tc =='supergroup' or $tc =='group' and !isset($dataa['data']['gapz'][$chat_id])){
				if($send_ba=="روشن ✅"){
					if($baners_a1_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][0])){
			               $CCC =$dataa['data']['baners_ab'][0][0];
			               $MMM=$dataa['data']['baners_ab'][0][1];
			               $DDD=$dataa['data']['baners_ab'][0][2];
			               $TTT=$dataa['data']['baners_ab'][0][3];
			               $SSS=$dataa['data']['baners_ab'][0][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][0][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a2_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][1])){
			               $CCC =$dataa['data']['baners_ab'][1][0];
			               $MMM=$dataa['data']['baners_ab'][1][1];
			               $DDD=$dataa['data']['baners_ab'][1][2];
			               $TTT=$dataa['data']['baners_ab'][1][3];
			               $SSS=$dataa['data']['baners_ab'][1][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][1][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a3_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][2])){
			               $CCC =$dataa['data']['baners_ab'][2][0];
			               $MMM=$dataa['data']['baners_ab'][2][1];
			               $DDD=$dataa['data']['baners_ab'][2][2];
			               $TTT=$dataa['data']['baners_ab'][2][3];
			               $SSS=$dataa['data']['baners_ab'][2][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][2][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a4_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][3])){
			               $CCC =$dataa['data']['baners_ab'][3][0];
			               $MMM=$dataa['data']['baners_ab'][3][1];
			               $DDD=$dataa['data']['baners_ab'][3][2];
			               $TTT=$dataa['data']['baners_ab'][3][3];
			               $SSS=$dataa['data']['baners_ab'][3][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][3][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a5_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][4])){
			               $CCC =$dataa['data']['baners_ab'][4][0];
			               $MMM=$dataa['data']['baners_ab'][4][1];
			               $DDD=$dataa['data']['baners_ab'][4][2];
			               $TTT=$dataa['data']['baners_ab'][4][3];
			               $SSS=$dataa['data']['baners_ab'][4][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][4][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}
					}if($send_bs=="روشن ✅"){
						if($baners_s1_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][0])){
			               $TTTT =$dataa['data']['baners_sh'][0][0];
			               $BNN =$dataa['data']['baners_sh'][0][1];
			               $BLL =$dataa['data']['baners_sh'][0][2];
			               $DDD=$dataa['data']['baners_sh'][0][3];
			               $TTT=$dataa['data']['baners_sh'][0][4];
			               $SSS=$dataa['data']['baners_sh'][0][5];
			               $CCC =$dataa['data']['baners_sh'][0][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][0][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s2_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][1])){
			               $TTTT =$dataa['data']['baners_sh'][1][0];
			               $BNN =$dataa['data']['baners_sh'][1][1];
			               $BLL =$dataa['data']['baners_sh'][1][2];
			               $DDD=$dataa['data']['baners_sh'][1][3];
			               $TTT=$dataa['data']['baners_sh'][1][4];
			               $SSS=$dataa['data']['baners_sh'][1][5];
			               $CCC =$dataa['data']['baners_sh'][1][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][1][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s3_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][2])){
			               $TTTT =$dataa['data']['baners_sh'][2][0];
			               $BNN =$dataa['data']['baners_sh'][2][1];
			               $BLL =$dataa['data']['baners_sh'][2][2];
			               $DDD=$dataa['data']['baners_sh'][2][3];
			               $TTT=$dataa['data']['baners_sh'][2][4];
			               $SSS=$dataa['data']['baners_sh'][2][5];
			               $CCC =$dataa['data']['baners_sh'][2][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][2][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s4_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][3])){
			               $TTTT =$dataa['data']['baners_sh'][3][0];
			               $BNN =$dataa['data']['baners_sh'][3][1];
			               $BLL =$dataa['data']['baners_sh'][3][2];
			               $DDD=$dataa['data']['baners_sh'][3][3];
			               $TTT=$dataa['data']['baners_sh'][3][4];
			               $SSS=$dataa['data']['baners_sh'][3][5];
			               $CCC =$dataa['data']['baners_sh'][3][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][3][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s5_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][4])){
			               $TTTT =$dataa['data']['baners_sh'][4][0];
			               $BNN =$dataa['data']['baners_sh'][4][1];
			               $BLL =$dataa['data']['baners_sh'][4][2];
			               $DDD=$dataa['data']['baners_sh'][4][3];
			               $TTT=$dataa['data']['baners_sh'][4][4];
			               $SSS=$dataa['data']['baners_sh'][4][5];
			               $CCC =$dataa['data']['baners_sh'][4][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][4][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}
					}
				}
			}
		}
	}
if($chat_id!==$sudo and !isset($dataa['data']['admin'][$chat_id])){
	if($state=="روشن ✅" ){
		if($send_pv=="روشن ✅"){
			if($tc== 'private' and !isset($dataa['data']['userz'][$chat_id])){
				if($send_ba=="روشن ✅"){
					if($baners_a1_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][0])){
			               $CCC =$dataa['data']['baners_ab'][0][0];
			               $MMM=$dataa['data']['baners_ab'][0][1];
			               $DDD=$dataa['data']['baners_ab'][0][2];
			               $TTT=$dataa['data']['baners_ab'][0][3];
			               $SSS=$dataa['data']['baners_ab'][0][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][0][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a2_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][1])){
			               $CCC =$dataa['data']['baners_ab'][1][0];
			               $MMM=$dataa['data']['baners_ab'][1][1];
			               $DDD=$dataa['data']['baners_ab'][1][2];
			               $TTT=$dataa['data']['baners_ab'][1][3];
			               $SSS=$dataa['data']['baners_ab'][1][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][1][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a3_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][2])){
			               $CCC =$dataa['data']['baners_ab'][2][0];
			               $MMM=$dataa['data']['baners_ab'][2][1];
			               $DDD=$dataa['data']['baners_ab'][2][2];
			               $TTT=$dataa['data']['baners_ab'][2][3];
			               $SSS=$dataa['data']['baners_ab'][2][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][2][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a4_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][3])){
			               $CCC =$dataa['data']['baners_ab'][3][0];
			               $MMM=$dataa['data']['baners_ab'][3][1];
			               $DDD=$dataa['data']['baners_ab'][3][2];
			               $TTT=$dataa['data']['baners_ab'][3][3];
			               $SSS=$dataa['data']['baners_ab'][3][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][3][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a5_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][4])){
			               $CCC =$dataa['data']['baners_ab'][4][0];
			               $MMM=$dataa['data']['baners_ab'][4][1];
			               $DDD=$dataa['data']['baners_ab'][4][2];
			               $TTT=$dataa['data']['baners_ab'][4][3];
			               $SSS=$dataa['data']['baners_ab'][4][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][4][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}
					}if($send_bs=="روشن ✅"){
						if($baners_s1_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][0])){
			               $TTTT =$dataa['data']['baners_sh'][0][0];
			               $BNN =$dataa['data']['baners_sh'][0][1];
			               $BLL =$dataa['data']['baners_sh'][0][2];
			               $DDD=$dataa['data']['baners_sh'][0][3];
			               $TTT=$dataa['data']['baners_sh'][0][4];
			               $SSS=$dataa['data']['baners_sh'][0][5];
			               $CCC =$dataa['data']['baners_sh'][0][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][0][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s2_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][1])){
			               $TTTT =$dataa['data']['baners_sh'][1][0];
			               $BNN =$dataa['data']['baners_sh'][1][1];
			               $BLL =$dataa['data']['baners_sh'][1][2];
			               $DDD=$dataa['data']['baners_sh'][1][3];
			               $TTT=$dataa['data']['baners_sh'][1][4];
			               $SSS=$dataa['data']['baners_sh'][1][5];
			               $CCC =$dataa['data']['baners_sh'][1][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][1][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s3_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][2])){
			               $TTTT =$dataa['data']['baners_sh'][2][0];
			               $BNN =$dataa['data']['baners_sh'][2][1];
			               $BLL =$dataa['data']['baners_sh'][2][2];
			               $DDD=$dataa['data']['baners_sh'][2][3];
			               $TTT=$dataa['data']['baners_sh'][2][4];
			               $SSS=$dataa['data']['baners_sh'][2][5];
			               $CCC =$dataa['data']['baners_sh'][2][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][2][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s4_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][3])){
			               $TTTT =$dataa['data']['baners_sh'][3][0];
			               $BNN =$dataa['data']['baners_sh'][3][1];
			               $BLL =$dataa['data']['baners_sh'][3][2];
			               $DDD=$dataa['data']['baners_sh'][3][3];
			               $TTT=$dataa['data']['baners_sh'][3][4];
			               $SSS=$dataa['data']['baners_sh'][3][5];
			               $CCC =$dataa['data']['baners_sh'][3][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][3][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s5_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][4])){
			               $TTTT =$dataa['data']['baners_sh'][4][0];
			               $BNN =$dataa['data']['baners_sh'][4][1];
			               $BLL =$dataa['data']['baners_sh'][4][2];
			               $DDD=$dataa['data']['baners_sh'][4][3];
			               $TTT=$dataa['data']['baners_sh'][4][4];
			               $SSS=$dataa['data']['baners_sh'][4][5];
			               $CCC =$dataa['data']['baners_sh'][4][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][4][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}
					}
				}
			}
		}
	}
	if($update->message){
if($chat_id!==$sudo and !isset($dataa['data']['admin'][$chat_id])){
	if($state=="روشن ✅" ){
		if($send_repit=="روشن ✅" ){
			
				if($send_ba=="روشن ✅"){
					if($baners_a1_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][0])){
			               $CCC =$dataa['data']['baners_ab'][0][0];
			               $MMM=$dataa['data']['baners_ab'][0][1];
			               $DDD=$dataa['data']['baners_ab'][0][2];
			               $TTT=$dataa['data']['baners_ab'][0][3];
			               $SSS=$dataa['data']['baners_ab'][0][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][0][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a2_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][1])){
			               $CCC =$dataa['data']['baners_ab'][1][0];
			               $MMM=$dataa['data']['baners_ab'][1][1];
			               $DDD=$dataa['data']['baners_ab'][1][2];
			               $TTT=$dataa['data']['baners_ab'][1][3];
			               $SSS=$dataa['data']['baners_ab'][1][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][1][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a3_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][2])){
			               $CCC =$dataa['data']['baners_ab'][2][0];
			               $MMM=$dataa['data']['baners_ab'][2][1];
			               $DDD=$dataa['data']['baners_ab'][2][2];
			               $TTT=$dataa['data']['baners_ab'][2][3];
			               $SSS=$dataa['data']['baners_ab'][2][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][2][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a4_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][3])){
			               $CCC =$dataa['data']['baners_ab'][3][0];
			               $MMM=$dataa['data']['baners_ab'][3][1];
			               $DDD=$dataa['data']['baners_ab'][3][2];
			               $TTT=$dataa['data']['baners_ab'][3][3];
			               $SSS=$dataa['data']['baners_ab'][3][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][3][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}if($baners_a5_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_ab'][4])){
			               $CCC =$dataa['data']['baners_ab'][4][0];
			               $MMM=$dataa['data']['baners_ab'][4][1];
			               $DDD=$dataa['data']['baners_ab'][4][2];
			               $TTT=$dataa['data']['baners_ab'][4][3];
			               $SSS=$dataa['data']['baners_ab'][4][4];
			               
			               ForwardMessage($chat_id,$CCC,$MMM);
			                              $dataa['data']['baners_ab'][4][4]++;
				               file_put_contents("data.json",json_encode($dataa));
			               }
						}
					}if($send_bs=="روشن ✅"){
						if($baners_s1_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][0])){
			               $TTTT =$dataa['data']['baners_sh'][0][0];
			               $BNN =$dataa['data']['baners_sh'][0][1];
			               $BLL =$dataa['data']['baners_sh'][0][2];
			               $DDD=$dataa['data']['baners_sh'][0][3];
			               $TTT=$dataa['data']['baners_sh'][0][4];
			               $SSS=$dataa['data']['baners_sh'][0][5];
			               $CCC =$dataa['data']['baners_sh'][0][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][0][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s2_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][1])){
			               $TTTT =$dataa['data']['baners_sh'][1][0];
			               $BNN =$dataa['data']['baners_sh'][1][1];
			               $BLL =$dataa['data']['baners_sh'][1][2];
			               $DDD=$dataa['data']['baners_sh'][1][3];
			               $TTT=$dataa['data']['baners_sh'][1][4];
			               $SSS=$dataa['data']['baners_sh'][1][5];
			               $CCC =$dataa['data']['baners_sh'][1][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][1][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s3_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][2])){
			               $TTTT =$dataa['data']['baners_sh'][2][0];
			               $BNN =$dataa['data']['baners_sh'][2][1];
			               $BLL =$dataa['data']['baners_sh'][2][2];
			               $DDD=$dataa['data']['baners_sh'][2][3];
			               $TTT=$dataa['data']['baners_sh'][2][4];
			               $SSS=$dataa['data']['baners_sh'][2][5];
			               $CCC =$dataa['data']['baners_sh'][2][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][2][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s4_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][3])){
			               $TTTT =$dataa['data']['baners_sh'][3][0];
			               $BNN =$dataa['data']['baners_sh'][3][1];
			               $BLL =$dataa['data']['baners_sh'][3][2];
			               $DDD=$dataa['data']['baners_sh'][3][3];
			               $TTT=$dataa['data']['baners_sh'][3][4];
			               $SSS=$dataa['data']['baners_sh'][3][5];
			               $CCC =$dataa['data']['baners_sh'][3][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][3][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}if($baners_s5_lock=="ارسال شود ✅"){
						if(isset($dataa['data']['baners_sh'][4])){
			               $TTTT =$dataa['data']['baners_sh'][4][0];
			               $BNN =$dataa['data']['baners_sh'][4][1];
			               $BLL =$dataa['data']['baners_sh'][4][2];
			               $DDD=$dataa['data']['baners_sh'][4][3];
			               $TTT=$dataa['data']['baners_sh'][4][4];
			               $SSS=$dataa['data']['baners_sh'][4][5];
			               $CCC =$dataa['data']['baners_sh'][4][6];
			               
				               bot('sendMessage',[       'chat_id'=>$chat_id,   'text'=>$TTTT,  'reply_markup'=> json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[[['text'=>"$BNN",'url'=>"$BLL"]],]]),       'parse_mode'=>"html"  ]);
				               $dataa['data']['baners_sh'][4][5]++;
				               file_put_contents("data.json",json_encode($dataa));
			               } 
						}
					}
				}
			}
		}
	}

?>
