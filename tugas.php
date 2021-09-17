<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL</title>
</head>

<body>
    <?php echo "<link rel='stylesheet' type='text/css' href='./assets/css/index.css'/>";
    $nim = ' ' . 192520039;
    $imgTitle = '<img src="./assets/img/profil.jpg" alt="image profil"/>';
    $imgAddr = '<img src="./assets/img/gl.png" alt="gmail"/>';
    // $imgLoc = '<img src="./assets/img/loc.png" alt="gmail"/>';
    $imgGit = '<img src="./assets/img/git.png" alt="gmail"/>'
    ?>
    <div class="box">
        <div class="innerbox">
            <!-- image profil -->
            <div class="header"><?= $imgTitle; ?>
                <!--  -->

                <!-- Title  -->
                <div class="title">
                    <br>
                    <?= 'NIM |' . $nim ?>
                    <?= '<h1>FAHRUL FAJAR SAPUTRO</h1>' ?>
                    <div class="subtitle">
                        <?= '<p class="sub-title">Font-End Developer | <strong>.Kebumen , Jawa Tengah , Indonesia<strong></p>'; ?>
                        <!--  -->

                        <hr>

                        <!-- Main -->
                        <div class="main">
                            <?= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla incidunt possimus soluta alias facere dolorem perferendis, voluptates quam neque eum quasi, deleniti quas et ad rem iusto cumque ut veniam.</p>' ?>
                        </div>
                        <!--  -->

                        <!-- footer -->
                        <div class="footer">
                            <p><?= $imgAddr; ?></p>
                            <p>fahrulfajarsaputro@gmail.com</p>
                            <p><?= $imgGit; ?></p>
                            <p>fahrulfs</p>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>