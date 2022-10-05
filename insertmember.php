<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?,?,?)");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["address"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["email"]);
$stmt->execute(); 
$username = $pdo->lastInsertId();
?>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    เพิ่มข้อมูลสำเร็จแล้ว คือ ข้อมูลของ : <?=$_POST["username"]?><br><br>
    ซึ่งมีข้อมูลดังนี้<br>
    username : <?=$_POST["username"]?><br>
    password : <?=$_POST["password"]?><br>
    name : <?=$_POST["name"]?><br>
    address : <?=$_POST["address"]?><br>
    mobile : <?=$_POST["mobile"]?><br>
    email : <?=$_POST["email"]?><br>
</body>

</html>