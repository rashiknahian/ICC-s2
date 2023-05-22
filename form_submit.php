<?php
    include("dbconnect.php");
    if(isset($_POST['submit'])){
        $name = $DBConnect->real_escape_string($_POST['name']);
        $email = $DBConnect->real_escape_string($_POST['email']);
        $message = $DBConnect->real_escape_string($_POST['message']);
        
    $query = "INSERT INTO contact_form (name,email,messages) VALUES ('$name','$email','$message')";
    $result = $DBConnect->query($query);
        if($result == 1){
            echo "Message Added";
        }
        else{
            echo $DBConnect->error;
        }
    }

   
?>
