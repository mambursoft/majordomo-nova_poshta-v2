<?php
$dictionary=array(
'NOVA_POSHTA_ENDPOINT'=>'Адреса API',
'NOVA_POSHTA_METHOD'=>'HTTP-метод',
'NOVA_POSHTA_TOKEN'=>'Токен доступу',
'NOVA_POSHTA_REGION'=>'Регіон / маршрут',
'NOVA_POSHTA_TRACKING'=>'Номер відправлення',
'NOVA_POSHTA_PAYLOAD'=>'Шаблон POST-запиту',
'NOVA_POSHTA_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'NOVA_POSHTA_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}