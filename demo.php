<?php
require "CharsetConv.class.php";

$str = file_get_contents('source/unicodebe.txt');

$obj = new CharsetConv('unicodebe', 'utf-8bom');
$response = $obj->convert($str);

file_put_contents('response/utf-8bom.txt', $response, true);
?>