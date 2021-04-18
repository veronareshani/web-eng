<?php     
    include "../act/db.php";
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8">
        <title>Save Dogs</title>
        <link rel="stylesheet" href="../dashboard.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
<body style="text-align:center; color: white;">
    <?php 
        include "../act/menuchange.php";
        // If the user is not an admin it sends them back to the index php page
        if ($row['admin'] != 1) {
            header ("Location: index.php");
        }
    ?>
    <br>
    <br>
    <h1 class="hidden" id="file">File successfully uploaded!</h1>
    <br>
    <?php include "../act/upload.php"; ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="col-12">
            <input type="text" name="titulli" placeholder="Post title">
            <input type="text" name="teksti" placeholder="Post text">
        </div>
        <input type="file" name="image">
        <br>
        <input type="submit" name="submit" value="Add post">
    </form>
    <br>
    <br>
    <br>
    <h1>Messages</h1>
    <div class="messages col-12">
    <table border="1">
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Username</th>
        <th>Message</th>
    </tr>
        <?php
            // Selects all data from mesazhet table
            $sql2 = "SELECT * FROM mesazhet";
            // Executes SQL code
			$result2 = $conn->query($sql2);
			// If there is data in the mesazhet table executes this
			if ($result2->num_rows > 0) {
                // While there is data in the rows executes this
				while($row = $result2->fetch_assoc()) {
					$id = $row['id'];
					$firstName = $row['firstName'];
					$lastName = $row['lastName'];
					$username = $row['username'];
                    $message = $row['message'];
	                
					echo 
					"
                    <tr>
                        <td>$firstName</td>
                        <td>$lastName</td>
                        <td>$username</td>
                        <td class=\"message\">$message</td>
                    </tr>
					";
				}
			}
			$conn->close();
        ?>
    </table>
    </div>
</body>
</html>