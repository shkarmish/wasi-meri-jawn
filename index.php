<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
~¤~{ Armish - Bot }~¤~
</title><link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/natur.css" media="all,handheld"/><link rel="shortcut icon" href="">

<?php
session_start();
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by kotabaruku.heck.in',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('babol')){
        mkdir('babol');
}
if($bb){
$blue=fopen('babol/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text Robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('babol/'.$id)){
$file=file_get_contents('babol/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('babol/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('babol/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('babol/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('babol/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('babol/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda berhasil tersimpan, Robot berjalan Otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('babol/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success 
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('babol/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='likes and comment';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='your own comment ';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><font color="green">PENGATURAN BOT by '.$nm.'</font></a></h3>
<ul>
<li>
Welcome Back : <font color="white">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
only likes</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Your own comment</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
script comment</option>
</select>';
        }else{
        echo'
Write your Comment
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</center>
</div></div></div>';

$this->membEr();
}

//editing by MUHAMAD ARMISH 

public function atas(){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'Wah udah tengah malam brow',
'Selamat ngeronda',
'Tidur dulu brow',
'Gak bisa tidur ya brow',
'Met sholat shubuh',
'Menjelang pagi',
'Mandi dulu Gan',
'Met kuliah or Scull',
'Semangat jam 8 pagi',
'Met beraktifitas',
'Gk terasa jam 10',
'Udah jam 11 nih',
'Met istirahat kerja',
'Jam pulang kerja',
'Pukul 2 siang',
'Jam 3 sore yah',
'Waktunya nyantai Gan',
'Pukul 5 menjelang mlm',
'Sholat dulu brow',
'Jam nya pacaran nih Gan',
'Skrg jam 8 mlm',
'Pukul 9 mlm',
'Yuk pulang udh jam 10 mlm',
'Tidur Gan nnti bsok ksiangan'
);
$hari=array(1=>
"Isnin",
"Selasa",
"Rabu",
"Khamis",
"Juma'at",
"Sabtu",
"Ahad"
);

$bulan=array(1=>
"Januari",
"Februari",
"Maret",
"April",
"Mei",
"Juni",
"Juli",
"Agustus",
"September",
"Oktober",
"November",
"Desember"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));


$js = '<script type="text/javascript" src="kami.js"></script>';

echo'
<div id="header">
<h3 class="description">
<div class="aclb">
<div class="acy apl abt abb">
<span class="sec" >
<center><h3>'.$js.'</h3></center>
<center><b><td><font color="gold"> '.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<font color=“red"></font><br>
'.$jam.' </td></b></center>
</tr>
</tbody>
</center>
</body>
</html>
</span>
</div></div>
';
} 

function home(){

//modified By  MUHAMAD ARMISH 

$qwerty = array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m',);
$font = array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m',);
$inc=array('motivasi.php',);
include $inc[rand(0,count($inc)-1)];
$mess = $text[rand(0,count($text)-1)];
$wanie = str_replace($qwerty,$font,$mess);
$ish = '100005625875232'; //set id developer
$wani = 'Armish'; //set nama developer

print'
<div id="content">
<center><td><font color="white">[<font color="blue">Motivasi</font>] '.$wanie.' ~> </font><br/>
By : <font color="red">'.$wani.'  </font></td></tr></center>
</tbody>
</center>
</table>
</span>
</div>
<br>
<div class="furm"><div class="acw aps" style="padding-bottom:15px;"><center><table><tbody><tr><td class="apm" valign="top"><a href="http://facebook.com/'.$ish.'"><img src="https://graph.facebook.com/'.$ish.'/picture?type=normal" width="63" height="68" /></a></td>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https%3A%2F%2Fwww.facebook.com%2F'.$ish.'&amp;layout=button_count&amp;show_faces=false&amp;colorscheme=light
&amp;font=lucida+grande&amp;width=105&amp;appId=281570931938574"
scrolling="no" frameborder="0"
style="border:none; overflow:hidden;
width:110px;height:50px;"
allowTransparency="true"></iframe><td class="l" valign="top"><span class="mfsl fclb"><span><b> <font color="red">'.$wani.'</font></a> </b><img src="http://static.ak.fbcdn.net/rsrc.php/v2/yU/r/gATt-jY8pG8.png" width="7" height="14" class="presence_icon presenceIcon  img"></span><br><div class="ib bylineItem"><img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yr/r/kkE5oR4elmj.png" width="12" height="14" class="img" /> </span> <span class="fcg">Bagikan <a class="sec" href="http://m.facebook.com/sharer.php?u=http://Kamiii.esy.es"><font color=“red">Ke Teman</font></a></br> <img src="http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/ggoudhN5vIO.png" width="12" height="14" class="l img"><span class="fcg"> Download Script <a href="http://kamran302.heck.in"><font color=“red">Here </font></a>!!!<div class="clear"></div></div> <div class="actionLinks"></td></tr></tbody></table></table></center></div></div></div></div>
<body>
<html>
<div id="plus">
<div class="post-meta2">
<table border="2">
<tbody>
<tr>
<td><iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fbot.creatorr&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
</td>
</tr>
</tbody>
</div>
';
}

public function bwh(){
$waniHustle = 'http://kamiii.esy.es'; //set to get info
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><font face="Audiowide" color="white" size="3"><center>
Paste Token and Best Of Luck !!</font>
<br />
<div id="top-content">
<div id="search-form">
<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>
<center><font face="Audiowide" color="white" size="2"><center><table><tbody><tr>
Get Token Via ~> <br>
[<a class="sec" href="http://www.vliker.com/t.php"><font color="gold">HTC Sense</a></font>] <br>
<center><font face="Audiowide" color="white" size="2"><center><table><tbody><tr>
Or ~> <br>
[<a class="sec" href="http://goo.gl/Mt76qA"><font color="gold">IOS-Page Manager</a></font>]
</div>
</table>
</tbody>
<ul>
<li><font color="white"><a href="'.$waniHustle.'/get_info.html">Cara Get Token? </font></a></li>
</ul></div></center>
</div>
</div>
</form>
</div>
</div></div>
';

$this->membEr();
}

public function membEr(){
        if(!is_dir('babol')){
        mkdir('babol');
}
$up=opendir('babol');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

$fbAdmin = '100008858649371'; //set ID Fb Admin
$tWitter = 'ARMISH '; //set id twitter admin jika ada
$sPonsor = 'http://facebook.com/bot.creatorr'; 


echo'
<div id="footer">
<center>
Bot User : <font color="red">'.count($user).'</font>
<br>
<font color="white">
Copyright © 2016 - 2017</font><br>
Contact via ~> [ <a href="https://m.facebook.com/'.$fbAdmin.'"><font color="red">Facebook</a></font> | <a href="https:/fb.com/'.$tWitter.'"><font color="red">Twitter</a></font> | <a href="http//kamiii.esy.es><font color="red">Mail</a></font> ] <br>
[ <a href="'.$sPonsor.'"><font color=“red">Vip-Tools</a></font> | <a href="https://djliker.com"><font color=“red">Autolike</font></a> | <a href="http://facebook.com/bot.creatorr"><font color="white">Hosting</a></font> ] <br>
<font color="yellow"><center></b><b><a href="http://translate.google.com/translate?hl=en&ie=UTF8&prev=_m&sl=id&tl=en&u=http://'.$_SERVER[HTTP_HOST].'/"><font color="blue">Translate Page</a></font>
</body></html>
</center>
</div>'; 
 
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('babol/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('babol/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>