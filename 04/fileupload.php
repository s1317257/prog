<?php
//"upfile"を受け取る
if( isset($_FILES["upfile"]) && $_FILES["upfile"]["error"]==0){
    //echo アップロードしてきている
    $file_name = $_FILES["upfile"]["name"];
    $tmp_path  = $_FILES["upfile"]["tmp_name"];
    $file_dir_path = "upload/";
    $upname = date(Ymd-His);
    for($i = 0; $i < count($_FILES["upfile"]["name"]); $i++){
        if(is_uploaded_file($tmp_path)){
            if(move_uploaded_file($tmp_path,$file_dir_path.$upname)){
                chmod($file_dir_path.$upname, 0644);
                $img = '<img src="'.$file_dir_path.$upname.'">';
            }
        }
    }
}else{

}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<?php    

echo $img;

?>
</body>
</html>