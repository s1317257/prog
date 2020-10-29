<?php
//ディレクトリ一覧を取得（２）
$directory = './upload';
$files = array_diff(scandir($directory), array('..', '.'));//array(取り除く値)
//var_dump($files);

////画像を繰返し取得表示
foreach($files as $files){
    echo $files."<br>";
}

