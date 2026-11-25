<?php
$dictionary=array(
'NOVA_POSHTA_ENDPOINT'=>'API endpoint',
'NOVA_POSHTA_METHOD'=>'HTTP method',
'NOVA_POSHTA_TOKEN'=>'Access token',
'NOVA_POSHTA_REGION'=>'Region / route',
'NOVA_POSHTA_TRACKING'=>'Tracking number',
'NOVA_POSHTA_PAYLOAD'=>'POST payload template',
'NOVA_POSHTA_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'NOVA_POSHTA_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}