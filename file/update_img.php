<?php

include_once "function.php";
$id=$_POST['id'];

$row=find('imgs',$id);
// dd($_POST);
// dd($row);

$row['desc']=$_POST['desc'];

if(isset($_FILES['filename'])){
    if($_FILES['filename']['error']==0){
        unlink("./files/".$row['filename']);
        $row['filename']=time() . $_FILES['filename']['name'];
        move_uploaded_file($_FILES['filename']['tmp_name'],"./files/".$row['filename']);
        update('imgs',$row);

    }else{
        echo "上傳失敗，請檢察檔案格式或大小是否符合規定";
    }
}

header("location:manage.php")
?>