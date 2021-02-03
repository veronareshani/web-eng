<?php include('server.php'); 
//nese perdoruesi nuk eshte logged, nuk mund te ket akses ne faqe
if(empty($_SESSION['username'])) {
    header('location: login.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Test</title>
</head>
<body>
    <div class="header">
        <h2>Faqja kryesore</h2>
    </div>
    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="success">
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                
                ?>
            </h3>
            </div>
        <?php endif ?>
        <?php if(isset($_SESSION["username"])): ?>
        <p>Welcome <stong> <?php echo $_SESSION['username']?> </stong> </p>
        <p><a href="home.php?logout='1'" style="color: red;"> Dilni </a></p>
            
        <?php endif ?>
    </div>

</body>
</html>