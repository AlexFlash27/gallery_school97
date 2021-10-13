<?php

$scanned_directory = scandir('img/info/'); //ПОЛУЧАЕМ МАССИВ ФАЙЛОВ В КОРНЕВОЙ ПАПКЕ

if (date('W')%2==1) { //ЕСЛИ НЕЧЕТНАЯ НЕДЕЛЯ - ВИДЫ

    $content_l = file('img/info/types_l.txt', FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);
    $content_r = file('img/info/types_r.txt', FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);

} else { //ЕСЛИ ЧЕТНАЯ НЕДЕЛЯ - ЖАНРЫ

    $content_l = file('img/info/genres_l.txt', FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);
    $content_r = file('img/info/genres_r.txt', FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);
}

echo json_encode(array('content_l'=>$content_l,'content_r'=>$content_r), JSON_UNESCAPED_UNICODE);

