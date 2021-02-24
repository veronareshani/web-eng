
<?php

include "../act/db.php";
if(isset($_POST['submit'])){
    $heading= $_POST['heading'];
    $description = $_POST['description'];

    $errors = 0;
    $filename = $_FILES['img']['name'];
    $filesize = $_FILES['img']['size'];
    $filetmp = $_FILES['img']['tmp_name'];
    $filetype = $_FILES['img']['type'];
    $tmp = explode('.',$filename);
    $fileexi = strtolower(end($tmp));

    $extentions= array("png","jpg","jpeg");

    if(in_array($fileexi,$extentions)=== false){
        $message = "Qita file nuk bojn provo tjera <3.";
        echo "<script type='text/javascript'>alert($message);</script>";
        $errors ++;
    }

    if($file_size > 300000){
        $message = "File is too large!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $errors ++;
    }


    if($errors == 0){
        if(move_uploaded_file($filetmp,"../images/".$filename)){
            $sql = "INSERT INTO 'dogs'('tittuli','text','foto') 
            VALUES ('$titulli','$teksti','$filename')";
            
            if (!$conn->query($sql)) {
                echo $conn->error;
            }
            else{
                "
                    <script>
                        windows.onload=funciton{
                            const h1= document.querySelector(\"#file\");
                            h1.classList.toggle(\"hidden\");}
                    </script>
                ";
            }
        }
    }
}

?>