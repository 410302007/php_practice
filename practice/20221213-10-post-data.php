<?php

//伺服器回應給用戶端的擋頭
header('Content-Type: application/json');  //json mime type = application/json 



echo json_encode($_POST, JSON_UNESCAPED_UNICODE); //編碼成json字串
