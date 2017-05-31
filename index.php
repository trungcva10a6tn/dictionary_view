<?php
$customerlist = array(
    "1" => array("ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "images/img1.jpg"),
    "2" => array("ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "images/img2.jpg"),
    "3" => array("ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Định",
        "anh" => "images/img3.jpg"),
    "4" => array("ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Hà Tây",
        "anh" => "images/img4.jpg"),
    "5" => array("ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "images/img5.jpg")
);
$dictionary = array(
    "hello"=>"xin chào",
    "how"=>"thế nào",
    "book"=>"quyển vở",
    "computer"=>"máy tính");
$flag = "";
$searchword = $_POST["search"];
if (strlen($_POST["search"]) > 0) {
    foreach($dictionary as $word => $description) {
        if($word == $searchword){
            $flag = $description;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="search">
    <button type="submit"> Kiểm Tra</button>
</form>
<?php
if (strlen($flag) > 0){
    if (strlen($flag) > 0){
        ?>
        <h1><?= $searchword?>: <?= $flag?></h1>
        <?php
    }else{
        ?>
        <h1><?= $searchword?>: từ không có trong thư viện</h1>
        <?php
    }
}
?>
<h1>bài hiện thị danh sách</h1>
<table>
    <tr>
        <th>STT</th>
        <th>Họ và Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    foreach($customerlist as $key => $values){
        ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $values["ten"] ?></td>
            <td><?= $values["ngaysinh"] ?></td>
            <td><?= $values["diachi"] ?></td>
            <td><image src ='/<?= $values["anh"]?>' width = '60px' height ='60px'/></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
