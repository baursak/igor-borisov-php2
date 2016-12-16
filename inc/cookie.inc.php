<?
// разбираемся с количеством предыдущих посещений нашего сайта пользователем
$visitCounter = 0;
if (isset($_COOKIE['visitCounter'])) {
	$visitCounter = $_COOKIE['visitCounter'];
}
$visitCounter ++;

// разбираемся с датой последнего посещения нашего сайта пользователем
$lastVisit = "";
if (isset($_COOKIE['lastVisit'])) {
	$lastVisit = date('Y-m-d H:i:s', $_COOKIE['lastVisit']);
}

setcookie('visitCounter', $visitCounter);
setcookie('lastVisit', time());