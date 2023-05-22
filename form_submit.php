<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
    $query = "INSERT INTO contactform (name.email,message) VALUES ($name,$email,$message)";
    $result = $DBConnect->query($query);
        if($result == 1){
            echo "Comment Added";
        }
    }

   
?>
