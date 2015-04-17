<?php

require_once 'DataManager.php';
require_once 'WebHookManager.php';

$webHook = new WebHookManager();

if ($webHook->getResponse()) 
{
	$dataObj = new DataManager($webHook->getResponse());
    $dataObj->save();
    $dataObj->debugData();
} else {
	echo "Request without bodyData";
}
