<?php
 
    $to = "wowthemesnet@gmail.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "Message via RunCharity"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"phone"} = "phone"; 
    $fields{"message"} = "message";
 
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>
<style>
.resultokno {position: static; z-index: 99999; background-color: rgb(247, 247, 247); width: 394px; padding: 10px 15px; border: 1px solid #ececec; border-radius: 0px; z-index: 99999;}
.zagtext {color: #000;font-size: 20px;padding: 9px 0px 14px;font-family: Arial!important;}
.elema, .elemb, .elemc, .eleme, .elemf {margin-bottom: 8px;margin-top: 5px;}
.elemg {margin-bottom: 10px;}
.elemf select {width: 100%!important;}
.resultokno div div {color: #000;font-family: Arial!important;font-size: 14px!important;}
.dr { height: 28px; padding: 0px 1%;border-radius: 0px; border: 1px solid #bfbfbf; width: 98%;}
.drt {height: 70px;padding: 1%;border-radius: 0px;border: 1px solid #bfbfbf;width: 98%;}
.drr {padding: 10px 0px!important;margin-top: 14px;border: 0px solid #bfbfbf;cursor: pointer;background-color: #0095e5;font-size: 16px;color: #fff;width: 100%;}
.drr:hover{ opacity: 0.8; filter: alpha(opacity=80); -moz-opacity: 0.8;}
.avtorc { text-align: right; margin-top: 10px;}.avtorc a{ color: #000!important; font-size: 7px!important; text-decoration: none; font-family: Arial;}#openokno {cursor: pointer;position: fixed;left: 84%;padding: 7px 17px;background-color: rgb(247, 247, 164);z-index: 9999;border-radius: 11px 11px 0px 0px;top: inherit;bottom: 0px;width: auto;margin-left: -51px;border: 1px solid #ACA4A4;font-size: 14px;font-weight: bold;color: #000;}
.blockall {width: 100%;height: 100%;position: fixed;top: 0px;left: 0px;opacity: 0.8;filter: alpha(opacity=80);-moz-opacity: 0.8;background: #000;cursor: pointer;z-index: 9999;}
</style>

<label id="openokno" class="zagtext" style="color: rgb(128, 128, 0); border-radius: 11px 11px 0px 0px; top: inherit; bottom: 0px; left: 61%;">������ ������</label>
<div class="tytoknoall"></div>

<script type="text/javascript">
document.querySelector("#openokno").onclick = function() {
document.querySelector(".resultokno").setAttribute("style", "display: block;");
if (document.querySelector(".blockall") != null) {
document.querySelector(".blockall").remove(); }
else {
var newdivall = document.createElement("div"); newdivall.className = "blockall";
document.querySelector(".tytoknoall").insertBefore(newdivall, document.querySelector(".tytoknoall").firstChild);}
}
document.querySelector(".tytoknoall").onclick = function() {
document.querySelector(".resultokno").setAttribute("style", "display: none;");
document.querySelector(".blockall").remove();
}
</script>

<style>
.resultokno {left: 50%;margin-left: -147px;top: 48px; display:none; position: fixed;}
</style>

<div class="resultokno"> <form action="" method="post" enctype="multipart/form-data" class="ui-sortable"> <span style=""><div class="zagtext" style="color: rgb(128, 128, 0);">������ ������</div>
</span> <div class="elema konst" id="idelema0"> <div class="elemtext"><span style="color: #bd3500;font-size: 16px;font-weight: bold;">*</span>����� �������� ��� �������� �����</div>
<input type="text" name="elemnamea0" class="dr" best="true"></div>
<div class="elemb konst" id="idelemb0"> <div class="elemtext">��� ��� ��������������?</div>
<textarea name="elemnameb0" class="drt" style="margin: 0px; height: 26px; width: 340px;"></textarea></div>
<input class="drr" type="submit" name="dfotpr" value="��������� ������" style="background-color: rgb(0, 255, 0);"><div class="avtorc" style=""><a href="https://blogjquery.ru/" target="_blank" title="���������������� �� jQuery, PHP, Joomla � WordPress">blogjquery.ru</a></div>
</form> </div>

<script type='text/javascript' src='https://blogjquery.ru/wp-content/files/services/bestkonst/obrab.js'></script>

<?php if (isset($_POST["dfotpr"]) && isset($_POST["antirobotpro"]) && $_POST["antirobotpro"] == "gdfg56FG423er") {
$to = "podosinnikov.stv@mail.ru";
$subject = "������";
$charset = "utf-8";
$un = strtoupper(uniqid(time()));
$head = "Mime-Version: 1.0\r\n";
$head .= "Content-Type:multipart/mixed;";
$head .= "boundary=\"----------".$un."\"\n\n";

$body = "------------".$un."\nContent-Type:text/html; charset=$charset\r\n";

$msg =
"*����� �������� ��� �������� �����: ".$_POST["elemnamea0"]."\n<br />".
"��� ��� ��������������?: ".$_POST["elemnameb0"]."\n<br />".
"";

$body .= "Content-Transfer-Encoding: 8bit\n\n".$msg."\n\n";

mail($to, $subject, $body, $head);
print "<script>alert('��������� ������� ����������!'); window.location='".$_SERVER['REQUEST_URI']."';</script>";
}
?>