<?php

header('Content-Type: application/json');
echo json_encode($_FILES);

//選擇一個檔案
/*  
{
    "avatar": {
        "name": "Shinnosuke1.jpg",
        "full_path": "Shinnosuke1.jpg",
        "type": "image/jpeg",
        "tmp_name": "C:\\xampp\\tmp\\php814B.tmp",   
        "error": 0,
        "size": 7339
    }
}
*/

//多個檔案 -> key欄位加中括號(ex: photos[])
/*
{
    "photos": {
        "name": [
            "Shinnosuke4.png",
            "Shinnosuke8.png"
        ],
        "full_path": [
            "Shinnosuke4.png",
            "Shinnosuke8.png"
        ],
        "type": [
            "image/png",
            "image/png"
        ],
        "tmp_name": [
            "C:\\xampp\\tmp\\php5E0E.tmp",
            "C:\\xampp\\tmp\\php5E0F.tmp"
        ],
        "error": [
            0,
            0
        ],
        "size": [
            23943,
            22696
        ]
    }
}

*/