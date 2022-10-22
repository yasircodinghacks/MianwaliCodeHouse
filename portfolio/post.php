<?php
include "db.php";
$postId=$_GET['id'];
$postquery="Select * from posts Where id=$postId";
$runpq=mysqli_query($db,$postquery);
$post=mysqli_fetch_assoc($runpq);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$post['title']?></title>
    <link rel="stylesheet" href="css/post.css">
</head>
<body>
    <div class="container">
        <?php include "header.php"?>
        <main>
            <div class="con">
                <h1><?=$post['title']?></h1>
                <div class="image">
                <img src="<?=$post['image']?>" alt="">
                </div>
                <div class="content">
                <?=$post['content']?>
                </div>
            </div>
        </main>
        <?php include "footer.php"?>
    </div>
    
</body>
</html>