<?php

$pass = '123456';
$hash = '$2y$10$K5o6xcCsxuJB1Fs8CwdiIOjc5eVa885g7u5.JUIGRRp1uJ/Hl4YIi';

var_dump(password_verify($pass, $hash));
//->bool(true)



//-> bool(false)
// $pass = '123456'; 
// $hash = '$2y$10$K5o6xcCsxuJB1Fs8CwdiIOjc5eVa885g7u5.JUIGRRp1uJ/Hl4YIi';
// var_dump(password_verify($pass, $hash));




//$2y$10$K5o6xcCsxuJB1Fs8CwdiIOjc5eVa885g7u5.JUIGRRp1uJ/Hl4YIi
//$2y$10$Rw0kXBEhWOxtxS58fBuIL.D68NCAaNlnsUIUWRoHmW5S9OP90vo5u   //長度固定，但會因不同時間點產生不同密碼