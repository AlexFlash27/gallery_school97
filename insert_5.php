<?php

include ('getdircontent.php');

$scanned_directory = scandir('img/5/'); //ПОЛУЧАЕМ МАССИВ ПОДПАПОК В КОРНЕВОЙ ПАПКЕ

if (date('W')%2==1) { //ЕСЛИ НЕЧЕТНАЯ НЕДЕЛЯ - ВИДЫ

    $key = array_search('types', $scanned_directory);

} else { //ЕСЛИ ЧЕТНАЯ НЕДЕЛЯ - ЖАНРЫ

    $key = array_search('genres', $scanned_directory);
}

echo json_encode(getDirContents('img/5/' . $scanned_directory[$key] . '/'), JSON_UNESCAPED_UNICODE);

