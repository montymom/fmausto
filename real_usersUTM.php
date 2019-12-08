<?php
// плагин для проброса параметров запроса включая UTM метки
// пропишите в строке ниже ссылку на оффер (TDS)
$link='https://comweb.club/click.php?key=hll7jjbvassxzzqtmpov&pid={pid}'; // ссылка на оффер, кейтаро или другую TDS.

// основная логика плагина
if(!empty($_GET)) {
   if(strstr($link,'?')) $link.= '&'.http_build_query($_GET);
   else $link.= '?'.http_build_query($_GET);
}
// перенаправляем пользователя
header("Location: ".$link);
?>
