<?
define ("HOST","127.0.0.1");
define ("USER","host2776");
define ("PASSWORD","VFU5sARA");
define ("DB","itelit_host2776");

$db=mysql_connect(HOST,USER,PASSWORD);
if(!$db){
	exit("Не має доступу до БД, помилка-".mysql_error());
}
if(!mysql_select_db(DB,$db)){
	exit("Не можливо вибрати базу даних".mysql_error());
}
mysql_query("SET NAMES 'utf8'");
?>