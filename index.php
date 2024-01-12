<?php
ini_set("log_errors" , "on");
ob_start();
define('API_KEY','');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$username = $update->message->from->username;
$text = $message->text
$message_id = $message->message_id;
$reply = $update->message->reply_to_message;
@mkdir("data");
@mkdir("data/$chat_id");
$admin = "430489190";
@$list = file_get_contents("Member.txt");
$off_on = file_get_contents("bot.txt");
@$homaion = file_get_contents("data/$chat_id/homaion.txt");
@$zir = file_get_contents("data/zir.txt");
@$coin = file_get_contents("data/$chat_id/coin.txt");
@$phone = file_get_contents("data/$chat_id/phone.txt");
$fruits = ["apple", "banana", "cherry"];
$token = file_get_contents("dta/$chat_id/token.txt");
@$teapi = file_get_contents("data/$chat_id/teapi.txt");
$folder = "";//ادرس پوشه سورس
$amapi = ;
$amcli = ;
<?php
// Create an empty array
$fruits = array();

$fruits[] = "Banana";

// Alternatively, you can create an array with elements directly

echo "Fruits:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo "Colors:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>
<?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$message = 'Choose an option:';

$keyboard = [
    'keyboard' => [['Option 1', 'Option 2']],
    'resize_keyboard' => true,
    'one_time_keyboard' => true
];

?>

<?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$message = 'Choose an option:';

$keyboard = [
    'inline_keyboard' => [
        [['text' => 'Option 1', 'callback_data' => 'option1'],
         ['text' => 'Option 2', 'callback_data' => 'option2']]
    ]


file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message&reply_markup=" . json_encode($keyboard));
?>

$botidd = "";
$token = API_KEY;
$tch = $forchannel->result->status;
$forchannel2 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel2&user_id=".$chat_id));
$tch2 = $forchannel2->result->status;
$user = file_get_contents('Member.txt');
        $Member = explode("\n", $user);
        if (!in_array($chat_id, $Member)) 
            $add_user = file_get_contents('Member.txt');
            $add_user .= $chat_id . "\n";
            file_put_contents("data/$chat_id/Member.txt", "0");
            file_put_contents('Member.txt', $add_user);
        }
function sendmessage($chat_id, $text)
{
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => "HTML"
    ]);
}
function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
 function sendAction($chat_id, $action){
    bot('sendChataction', [
        'chat_id' => $chat_id,
        'action' => $action
        ]);
}
function deletefolder($path){
    if (is_dir($path) === true) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
            deletefolder(realpath($path) . '/' . $file);
            
        return rmdir($path);
    } else if (is_file($path) === true)
        return unlink($path);
 
    return false;
}
function objectToArrays($object)
{
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}
if(strpos($off_on,"false") !== false && $from_id != $admin){
 return false;
}
if(in_array($chat_id, $list['ban'])){
SendMessage($chat_id,"شما از این ربات مسدود شده اید
️", null, $message_id, $remove);
exit();
}else{
function Spam($chat_id){
@mkdir("spam");
$spam_status = json_decode(file_get_contents("spam/$chat_id.json"),true);
if($spam_status != null){
if(mb_strpos($spam_status[0],"time") !== false){
if(str_replace("time ",null,$spam_status[0]) >= time())
exit(false);
else
$spam_status = [1,time()+2];
}
if($spam_status[0]+1 > 3){
$time = time() + 500
$spam_status = ["time $time"];
file_put_contents("spam/$chat_id.json",json_encode($spam_status,true));
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"به دلیل اسپم به مدت 500 ثانیه از ربات بلاک شده اید❌"
]);
exit(false);
}else{
$spam_status = [$spam_status[0]+1,$spam_status[1]];
}}else{
$spam_status = [1,time()+2];
}}else{
$spam_status = [1,time()+2];
}
file_put_contents("spam/$chat_id.json",json_encode($spam_status,true));
}}
Spam($chat_id);
if(!file_exists("data/$chat_id")){file_put_contents("data/$chat_id/Member.txt","0");}
elseif ($text =="/start") {
        $user = file_get_contents('Member.txt');
        $Member = explode("\n", $user);
        if (!in_array($chat_id, $Member)) {
            $add_user = file_get_contents('Member.txt');
            $add_user .= $chat_id . "\n";
            file_put_contents("data/$chat_id/Member.txt", "0");
            file_put_contents("data/$chat_id/coin.txt", "0");
            file_put_contents("data/$chat_id/teapi.txt", "0");
            file_put_contents("data/$chat_id/tecli.txt", "0");
            file_put_contents('Member.txt', $add_user);	
        }
        file_put_contents("data/$chat_id/homaion.txt", "none");
        sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "سلام $firstname به ربات تبچی ساز خوش اومدی😍",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"ساخت تبچی🤖"]],
[['text'=>"حذف تبچی🗑"],['text'=>"امتیاز رایگان⚜"]],
[['text'=>"حساب کاربری💠"],['text'=>"پشتیبانی🌐"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif (strpos($text, '/start') !== false && $forward_chat_username == null) {
        $newid = str_replace("/start ", "", $text);
        if ($chat_id == $newid) {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "❌نمیتونید با لینک خودتون عضو ربات بشید و امتیاز بگیرید",
                'reply_to_message_id'=>$message_id,
            ]);
        } elseif (strpos($list, "$chat_id") !== false) {
            SendMessage($chat_id, "❌شما نمیتونید دو بار با لینک مخصوص عضو ربات بشید💯");
        } else {
            sendAction($chat_id, 'typing');
		    @$sho = file_get_contents("data/$newid/coin.txt");
            $getsho = $sho + $zir;
            file_put_contents("data/$newid/coin.txt", $getsho);
            $user = file_get_contents('Member.txt');
            $Member = explode("\n", $user);
            if (!in_array($chat_id, $Member)) {
                $add_user = file_get_contents('Member.txt');
                $add_user .= $chat_id . "\n";
                file_put_contents("data/$chat_id/Member.txt", "0");
                file_put_contents("data/$chat_id/coin.txt", "0");
                file_put_contents("data/$chat_id/teapi.txt","0");
                file_put_contents("data/$chat_id/tecli.txt","0");
                file_put_contents('Member.txt', $add_user);
            }
            file_put_contents("data/$chat_id/homaion.txt", "none");
            sendmessage($chat_id, "🌟عضویت شما رو در تبچی ساز تبریک میگم🌟");
            bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "سلام $firstname به ربات تبچی ساز خوش اومدی😍",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"ساخت تبچی🤖"]],
[['text'=>"حذف تبچی🗑"],['text'=>"امتیاز رایگان⚜"]],
[['text'=>"حساب کاربری💠"],['text'=>"پشتیبانی🌐"]],
],
'resize_keyboard'=>true,
])
]);
        SendMessage($newid, "🎊یک نفر با لینک زیرمجموعه گیری شما وارد ربات شد🎊
        امتیازی که دریافت کردین👇👇
        💰 $zir 💰");
        }
    }
elseif ($tch != "creator" and $tch != "administrator" and $tch != "member"){
  bot('sendmessage', [
        'chat_id' => $chat_id,
    'text'=>"دوست عزیز  بدلیل رایگان بودن ربات 
و همچنین حمایت شما از ما ابتدا در کانال ما


🆔 $channel
🆔 $channel2

عضو شده و سپس دوباره ربات را /start کنید ✅ ",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    } 
elseif ($tch2 != "creator" and $tch2 != "administrator" and $tch2 != "member"){
  bot('sendmessage', [
        'chat_id' => $chat_id,
    'text'=>"دوست عزیز  بدلیل رایگان بودن ربات 
و همچنین حمایت شما از ما ابتدا در کانال ما


🆔 $channel
🆔 $channel2

عضو شده و سپس دوباره ربات را /start کنید ✅ ",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }         
elseif($text == "ساخت تبچی🤖"){
file_put_contents("data/$chat_id/dafeh.txt", "1");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا نوع تبچی خود را انتخاب کنید🔖",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تبچی API🤖"],['text'=>"تبچی CLI🤖"]],
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($text == "تبچی CLI🤖"){
if($coin >= $amcli){
file_put_contents("data/$chat_id/homaion.txt","createcli");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا شماره تبچی خود را بفرستید💢",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}else{
sendmessage($chat_id,"امتیاز شما کافی نیست💢❌\nامتیاز مورد نیاز💢:$amcli");
}}
elseif($homaion == "createcli" && $text != "بازگشت🔙"){
$in = file_get_contents("source/CLI/plugin.php");
$in = str_replace("[ADMIN]", $chat_id, $in);
$aa = "AaBbywpSqQCcD0123456789";
$ss = substr(str_shuffle($aa), 0); 
mkdir("cli/$ss");
copy("source/CLI/index.php","cli/$ss/index.php");
copy("source/CLI/plugin.php","cli/$ss/plugin.php");
mkdir("cli/$ss/plugins");
copy("source/CLI/plugins/autofwd.php","cli/$ss/plugins/autofwd.php");
copy("source/CLI/plugins/join.php","cli/$ss/plugins/join.php");
copy("source/CLI/plugins/savelink.php","cli/$ss/plugins/savelink.php");
copy("source/CLI/plugins/send.php","cli/$ss/plugins/send.php");
copy("source/CLI/plugins/tabchi.php","cli/$ss/plugins/tabchi.php");
file_put_contents("cli/$ss/plugin.php",$in);
file_put_contents("data/$chat_id/homaion.txt","none");
$um = $coin - $amcli;
file_put_contents("data/$chat_id/coin.txt",$um);
$ee = $tecli + 1;
file_put_contents("data/$chat_id/tecli.txt",$ee);
file_put_contents("cli/$ss/folder.txt",$ss);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات شما با موفقیت ساخته شد🔖
با استفاده از لینک زیر تبچی خود را به اکانت وصل کنید✅
نام پوشه تبچی خود✅ : $ss
جهت اف نشدن تبچی خود کرون جاب 1 دقیقه ای ست کنید روی لینک لاگین💢",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"لینک لاگین✅",'url'=>"/cli/$ss/index.php"]
]
]
])
]);
bot('sendmessage',[
 'chat_id'=>$channel2,
 'message_id'=>$message_id + 1,
 'text'=>"
یک تبچی CLI ساخته شد🤖
شماره اکانت📱:$text
ایدی عددی ادمین🌐:$chat_id",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
	[
	['text'=>"ورود به ربات🤖",'url'=>"https://t.me/$botidd"]
	]
    ]
    ])
  ]);
}
elseif($text == "تبچی API🤖"){
if($coin >= $amapi){
file_put_contents("data/$chat_id/homaion.txt","createapi");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا توکن ربات تبچی خود را بفرستید💢",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}else{
sendmessage($chat_id,"امتیاز شما کافی نیست💢❌\nامتیاز مورد نیاز💢:$amapi");
}}
elseif($homaion == "createapi" && $text !="بازگشت🔙"){
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
	$resultb = objectToArrays($userbot);
	$idbot = $resultb["result"]["username"];
	$ok = $resultb["ok"];
		if($ok != 1) {
sendmessage($chat_id,"توکن ارسال شده جهت ایجاد ربات اشتباه میباشد‼️
لطفا یک توکن صحیح جهت ساخت ربات ارسال نمایید💯");
}else{
mkdir("api/$text");
file_put_contents("api/$text/idadmin.txt","$chat_id");
file_put_contents("data/$chat_id/homaion.txt","none");
$source = file_get_contents("source/API/index.php");
$source = str_replace("[ADMIN]",$chat_id,$source);
$source = str_replace("[TOKEN]",$text,$source);
file_put_contents("api/$text/index.php",$source);
copy("source/API/jdf.php","api/$text/jdf.php");
//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/api/".$text."/index.php");
file_put_contents("data/$chat_id/token.txt",$text);
$cc = $coin - $amapi;
file_put_contents("data/$chat_id/coin.txt",$cc);
$qq = $teapi + 1;
file_put_contents("data/$chat_id/teapi.txt",$qq);	
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($idbot,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $idbot."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$chat_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($idbot,$member_b)){
$add_bot = file_get_contents("data/$chat_id/bots.txt");
$add_bot .= $idbot."\n";
file_put_contents("data/$chat_id/bots.txt",$add_bot);
}
  sleep(1);
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"ربات شما با موفقیت ساخته شد جهت ورود بر روی دکمه زیر کلیک کنید😍❄",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
	[
	['text'=>"ورود به ربات✅",'url'=>"https://t.me/$idbot"]
	]
    ]
    ])
  ]);
}
}
elseif($text == "حساب کاربری💠"){
sendmessage($chat_id,"
💰امتیاز شما : $coin\n🤖تبچی انلاین(CLI) : $tecli\n🤖تبچی افلاین(API) : $teapi");
}
elseif($text == "حذف تبچی🗑"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "لطفا نوع ربات خود را برای حذف انتخاب کنید💢",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"حذف تبچی API🤖"],['text'=>"حذف تبچی CLI🤖"]],
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($text == "حذف تبچی CLI🤖"){
file_put_contents("data/$chat_id/homaion.txt","delcli");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا نام پوشه تبچی خود را بفرستید💢",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($homaion == "delcli" && $text != "بازگشت🔙"){
if($fol == $text){
$we = $tecli - 1;
file_put_contents("data/$chat_id/tecli.txt",$we);
deletefolder("cli/$text");
sendmessage($chat_id,"تبچی CLI شما با موفقیت حذف شد💢✋");
}else{
sendmessage($chat_id,"این ربات مال شما نیست💢❌");
}
}
elseif($text == "حذف تبچی API🤖"){
file_put_contents("data/$chat_id/homaion.txt","delapi");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا توکن ربات تبچی خود را بفرستید💢",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($homaion == "delapi" && $text != "بازگشت🔙"){
if($text == $token){
$ew = $teapi - 1;
file_put_contents("data/$chat_id/teapi.txt",$ew);
deletefolder("api/$text");
sendmessage($chat_id,"تبچی API شما با موفقیت حذف شد💢✋");
}else{
sendmessage($chat_id,"این ربات مال شما نیست💢❌");
}
}
elseif($text == "امتیاز رایگان⚜"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "به بخش امتیاز رایگان خوش اومدید💢✋",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"زیرمجموعه گیری🌐"],['text'=>"خرید امتیاز💰"]],
[['text'=>"بازگشت🔙"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($text == "خرید امتیاز💰"){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"برای خرید امتیاز روی دکمه زیر بزنید❄",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
	[
	['text'=>"خرید امتیاز💰",'url'=>"https://t.me/"]
	]
    ]
    ])
  ]);
}
elseif($text == "پشتیبانی🌐"){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"برای پشتیبانی بر روی دکمه زیر بزنید❄",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
	[
	['text'=>"پشتیبانی🌐",'url'=>"https://t.me/"]
	]
    ]
    ])
  ]);
}
elseif($text == "زیرمجموعه گیری🌐"){
sendmessage($chat_id,"جهت دریافت زیرمجموعه با لینک زیر زیرمجموعه گیری کنید💢👇\nhttps://t.me/$botidd?start=$chat_id\nامتیاز هر زیرمجموعه👇👇\n$zir");
}
elseif($text == "بازگشت🔙"){
file_put_contents("data/$chat_id/homaion.txt","none");
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "سلام $firstname به ربات تبچی ساز خوش اومدی😍",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"ساخت تبچی🤖"]],
[['text'=>"حذف تبچی🗑"],['text'=>"امتیاز رایگان⚜"]],
[['text'=>"حساب کاربری💠"],['text'=>"پشتیبانی🌐"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($text == "/panel" && $chat_id == $admin){
file_put_contents("data/$chat_id/homaion.txt","none");
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"ادمین عزیز به پنل مدیریتی ربات خوش آمدید😊",
               'parse_mode'=>'HTML',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"📊آمار"],['text'=>"😎پیام همگانی"]],
	[['text'=>"➕افزایش امتیاز کاربر"],['text'=>"➖کسر امتیاز کاربر"]],
	[['text'=>"🎗تنظیم امتیاز زیرمجموعه گیری"]],
	[['text'=>"💤خاموش کردن"],['text'=>"❇️روشن کردن"]],
	[['text'=>"📈وضعیت سرور"],['text'=>"🎉هدیه همگانی"]],
	[['text'=>"بازگشت🔙"]],
	]
	])
	]);
	}
elseif($text == "📊آمار" && $chat_id == $admin){
    $total_items  = count(glob("data/*"));
    $total_files  = count(glob("data/*.*"));
    $folder_count = $total_items - $total_files;
    $total_items2  = count(glob("api/*"));
    $total_files2  = count(glob("api/*.*"));
    $folder_count2 = $total_items2 - $total_files2;
    $total_items3  = count(glob("cli/*"));
    $total_files3  = count(glob("cli/*.*"));
    $folder_count3 = $total_items3 - $total_files3;
	sendmessage($chat_id , " آمار کاربران📊 : $folder_count\nآمار ربات های انلاین(CLI)🤖:$folder_count2\nآمار ربات های افلاین(API):🤖$folder_count3", "html");
}
elseif ($text == "🎗تنظیم امتیاز زیرمجموعه گیری" && $chat_id == $admin) {       
        file_put_contents("data/$chat_id/homaion.txt", "setzir");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "تعداد امتیاز زیرمجموعه گیری را بفرستید",
            'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}elseif ($homaion == "setzir" && $text != "بازگشت به پنل مدیریت🔙") {
        file_put_contents("data/zir.txt", $text);
        file_put_contents("data/$chat_id/homaion.txt", "No");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "تنظیم شد",
 'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}
    elseif($text == "🎉هدیه همگانی" && $chat_id == $admin){
    file_put_contents("data/$chat_id/homaion.txt", "hadi");
       sendAction($chat_id, 'typing');
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "💰 مقدار امتیاز مورد نظر رو وارد کنید:",
            'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	} elseif ($homaion == 'hadi') {
    if(preg_match('/^([0-9])/',$text)){
    file_put_contents("data/$chat_id/homaion.txt","none");
    SendMessage($chat_id,"💰 مقدار امتیاز به زودی به همه اضافه میشود.");
    $all_member = fopen("Member.txt", 'r');
        while (!feof($all_member)) {
             $user = fgets( $all_member);
            $user = str_replace(" ",'',$user);
            $user = str_replace("\n",'',$user);
            $ss = file_get_contents("data/$user/coin.txt");
            file_put_contents("data/$user/coin.txt",($ss+$text) );
        }
        SendMessage($chat_id,"💰 تعداد $text امتیاز به همه اعضا اضافه شد.");
}else{
    SendMessage($chat_id,"💰 لطفا فقد عدد ارسال کنید");
    }
    }
    elseif ($text == "➕افزایش امتیاز کاربر" && $chat_id == $admin) {
        file_put_contents("data/$chat_id/homaion.txt", "MM");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ایدی عددی کاربر را بفرستید",
            'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}elseif ($homaion == 'MM' && $text != "بازگشت به پنل مدیریت🔙") {
        file_put_contents("data/MM.txt", $text);
        file_put_contents("data/$chat_id/homaion.txt", "MM2");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "تعداد امتیاز ها را بفرستید",
            'reply_to_message_id'=>$message_id,
            'parse_mode' => "MarkDown",
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}elseif ($homaion == 'MM2' && $text != "بازگشت به پنل مدیریت🔙") {
    $MM = file_get_contents("data/MM.txt");
          $fle = file_get_contents("data/$MM/coin.txt");
               $getshe = $fle + $text;
                file_put_contents("data/$MM/coin.txt", $getshe);
        file_put_contents("data/$chat_id/homaion.txt", "");
        bot('sendMessage', [
            'chat_id' => $MM,
            'text' => "دوست عزیز از طرف مدیریت تعداد $text سکه به شما اضافه شد😍♻️",
        ]);
        bot('sendMessage', [
                    'chat_id' => $chat_id,
            'text' => "با موفقیت فرستاده شد",
            'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}
	    elseif ($text == "➖کسر امتیاز کاربر" && $chat_id == $admin) {
        file_put_contents("data/$chat_id/homaion.txt", "ksr");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ایدی عددی کاربر را ارسال کنید",
            'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}elseif ($homaion == 'ksr' && $text != "بازگشت به پنل مدیریت🔙") {
        file_put_contents("data/ksr.txt", $text);
        file_put_contents("data/$chat_id/homaion.txt", "ksr2");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "تعداد امتیاز هایی که کسر شود را بفرستید",
            'reply_to_message_id'=>$message_id,
            'parse_mode' => "MarkDown",
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}elseif ($homaion == 'ksr2' && $text != "بازگشت به پنل مدیریت🔙") {
    $ksr = file_get_contents("data/ksr.txt");
          $flle = file_get_contents("data/$ksr/coin.txt");
               $ksrshe = $flle - $text;
                file_put_contents("data/$ksr/coin.txt", $ksrshe);
        file_put_contents("data/$chat_id/homaion.txt", "");
        bot('sendMessage', [
            'chat_id' => $ksr,
            'text' => "دوست عزیز از طرف مدیریت تعداد $text سکه از شما کسر شد😔💢",
        ]);
        bot('sendMessage', [
                    'chat_id' => $chat_id,
            'text' => "با موفقیت $text امتیاز از کاربر کسر شد",
            'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
        [['text'=>"بازگشت به پنل مدیریت🔙"]],
	]
	])
	]);
	}
elseif ($text == "💤خاموش کردن" && $chat_id == $admin) {
file_put_contents("bot.txt","false");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات خاموش شد ...❌",
]);
}
elseif ($text == "❇️روشن کردن" && $chat_id == $admin) {
file_put_contents("bot.txt","true");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ربات روشن شد✅",
]);
}
elseif($text == "😎پیام همگانی" && $chat_id == $admin){
    file_put_contents("data/$chat_id/homaion.txt","send");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید:",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>"بازگشت به پنل مدیریت🔙"]],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($homaion == "send" && $chat_id == $admin){
    file_put_contents("data/$chat_id/homaion.txt","none");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" باموفقیت فرستاده شد.",
  ]);
	$all_Member = fopen( "Member.txt", "r");
		while( !feof( $all_Member)) {
 			$user = fgets( $all_Member);
			SendMessage($user,$text,"html");
		}
}
elseif($text == "📈وضعیت سرور" && $chat_id == $admin){
$load = sys_getloadavg();
SendMessage($chat_id,"💡Server Ping : $load[0]");
}
elseif($text == "بازگشت به پنل مدیریت🔙"){
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"با موفقیت به پنل مدیریت بازگشتید⚡",
'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"📊آمار"],['text'=>"😎پیام همگانی"]],
	[['text'=>"➕افزایش امتیاز کاربر"],['text'=>"➖کسر امتیاز کاربر"]],
	[['text'=>"🎗تنظیم امتیاز زیرمجموعه گیری"]],
	[['text'=>"💤خاموش کردن"],['text'=>"❇️روشن کردن"]],
	[['text'=>"📈وضعیت سرور"],['text'=>"🎉هدیه همگانی"]],
	[['text'=>"بازگشت🔙"]],
	]
	])
	]);
	}
unlink("error_log");

?>
