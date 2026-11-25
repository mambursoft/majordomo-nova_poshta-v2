<?php
$dictionary=array(
'NOVA_POSHTA_ENDPOINT'=>'Адрес API',
'NOVA_POSHTA_METHOD'=>'HTTP-метод',
'NOVA_POSHTA_TOKEN'=>'Токен доступа',
'NOVA_POSHTA_REGION'=>'Регион / маршрут',
'NOVA_POSHTA_TRACKING'=>'Номер отправления',
'NOVA_POSHTA_PAYLOAD'=>'Шаблон POST-запроса',
'NOVA_POSHTA_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'NOVA_POSHTA_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}