<!-- head less page -->
<?php

    // header file
    require('./views/config.php');

    // prevent direct page response
    if (empty($_POST))
    {
        header("location: 404.php");
    }

    if($_POST['type'] == 'analytics'){

        
        $id = uniqid();
        $ua = $_POST['ua'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $country = $_POST['country'];
        
        // CREATE TABLE analytics(id varchar(255), ua varchar(255), city varchar(255), region varchar(255), country varchar(255), loggedAt timestamp DEFAULT CURRENT_TIMESTAMP);
        
        $sql = "INSERT INTO analytics(id, ua, city, region, country) VALUES('$id', '$ua', '$city', '$region', '$country')";
        
        mysqli_query($con, $sql);
        
    }
    else if($_POST['type'] == 'contact'){
        $id = uniqid();
        $email = mysqli_escape_string($con, $_POST['email']);
        $message = mysqli_escape_string($con, $_POST['message']);
        $sql = "INSERT INTO messages(id, email, message) VALUES('$id', '$email', '$message')";
        mysqli_query($con, $sql);
    }
    else if($_POST['type'] == 'markMessageRead'){
        $messageId = $_POST['id'];
        $sql = "UPDATE messages SET message_read = 1 WHERE id = '$messageId'";
        mysqli_query($con, $sql);
    }
?>