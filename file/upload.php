<?php
/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

    </style>
</head>
<body>
 <h1 class="header">檔案上傳練習</h1>
 <!----建立你的表單及設定編碼----->
<form action="manage.php" method="post" enctype="multipart/form-data">

<input type="file" name="filename" id="file">
<input type="text" name="desc" id="name">
<input type="submit" name="" id="上傳">
</form>




<!----建立一個連結來查看上傳後的圖檔---->  


</body>
</html>