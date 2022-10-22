<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCH | Blog</title>
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>
    <div class="container">
        <?php include "db.php" ?>
        <?php include "header.php" ?>
        <?php
            $postquery="SELECT * FROM `posts`";
            $runpq=mysqli_query($db,$postquery);
            $runpq1=mysqli_query($db,$postquery);
            $count=0;
            while($post1=mysqli_fetch_assoc($runpq1)){
                $count=$count+1;
            }
        ?>
        <main>
            <h1 class="mainheading">MianwaliCodeHouse posts(<?=$count?>)</h1>
            <div class="con">
                <?php
                    
                    while($post=mysqli_fetch_assoc($runpq)){
                        ?>
                        <div class="posts">
                    <div class="date">
                        <p><?=date('F jS, Y',strtotime($post["date"]))?></p>
                    </div>
                    <div class="title">
                        <h1><?=$post["title"]?></h1>
                    </div>
                    <div class="dec">
                        <p><?=$post["shortdes"]?></p>
                    </div>
                    <div>
                        <a href="post.php?id=<?=$post['id']?>">Read more</a>
                    </div>
                </div>
                <?php
                    }
                ?>
                
            </div>
        </main>
        <?php include "footer.php" ?>
    </div>
</body>
</html>