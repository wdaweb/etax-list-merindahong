<?php
include "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
while (empty($_POST['year'])) {
?>
<h1>『年份』輸入錯誤，請重新輸入，謝謝！</h1>
<a href='index.php'>回上一頁</a>
<?php
exit(); 
}

while (empty($_POST['term'])) {
    ?>
    <h1>『期數』輸入錯誤，請重新輸入，謝謝！</h1>
    <a href='index.php'>回上一頁</a>
    <?php
    exit(); 
}

 while (empty($_POST['track'])) {
        ?>
        <h1>『字軌』輸入錯誤，請重新輸入，謝謝！</h1>
        <a href='index.php'>回上一頁</a>
        <?php
        exit(); 
}
while (empty($_POST['number'])) {
            ?>
            <h1>『號碼』輸入錯誤，請重新輸入，謝謝！</h1>
            <a href='index.php'>回上一頁</a>
            <?php
            exit(); 
}  
 while (empty($_POST['amount'])) {
                ?>
                <h1>『金額』輸入錯誤，請重新輸入，謝謝！</h1>
                <a href='index.php'>回上一頁</a>
                <?php
                exit(); 
}  
 

$iyear=$_POST['year'];
$iterm=$_POST['term'];
$itrack=$_POST['track'];
$inumber=$_POST['number'];
$iamount=$_POST['amount'];

$sql="INSERT INTO invtb (`year`, `term`, `track`, `number`, `amount`)
VALUES('$iyear', '$iterm', '$itrack', '$inumber', '$iamount')";
$data= $pdo->exec($sql);
print_r($data);

if(!empty($data)){
    echo "輸入成功";
    header("location:success.html");   
    }else{
        echo "上傳有誤"; 
        header("location:add.php");  
}

?>   




</body>
</html>




