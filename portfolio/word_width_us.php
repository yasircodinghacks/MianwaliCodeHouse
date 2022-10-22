<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work width us</title>
    <link rel="stylesheet" href="css/work_width_us.css">
</head>
<body>
    <div class="container">
    <?php include "header.php"?>
    <div class="con">
    <main>
        <div class="message">
                <h1>&#128578; We are hiring!</h1>
                <p>We are looking for freelance Subtitle writers, Content writers and Video editors. If you think you are fit for the role. Submit the form. Make sure you have a valid email so we can contact you back in case your application gets selected. Cheers!  &#128579;</p>
        </div>
        <div class="form">
            <span>Pakistan Only</span>
            <p>Apply Now!</p>
            <form action="word_width_us.php" method="post">
                <label for="name">Full Name</label>
                <input type="text" name="" id="" class="this">
                
                <label for="name">Email</label>
                <input type="email" name="" id="" class="this">
                
                <label for="name">Phone number</label>
                <input type="number" name="" id="" class="this">
                
                <label for="name">link of Resume</label>
                <input type="url" name="" id="" class="this">
                
                <label for="name" class="ss">Skills</label>
                <div class="s">
                <input type="radio" name="skill" id="">
                <label for="name">Subtitle Writer</label>
                </div>
                <div class="s">
                <input type="radio" name="skill" id="">
                <label for="name">Content Writer</label>
                </div>
                <input type="radio" name="skill" id="">
                <label for="name">Video Editor</label>
                
                <input type="submit" value="Submit" id="submit">
                <span>We will be in touch Soon!</span>
            </form>

        </div>
    </main>
    </div>

    <?php include "footer.php"?>
    </div>
</body>
</html>