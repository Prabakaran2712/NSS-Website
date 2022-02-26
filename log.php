<!-- head less page for analytics -->
<?php

    // header file
    require('./views/config.php');

    // prevent direct page response
    if (empty($_POST))
    {
        header("location: 404.php");
    }

    $id = uniqid();
    $ua = $_POST['ua'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $country = $_POST['country'];

    // CREATE TABLE analytics(id varchar(255), ua varchar(255), city varchar(255), region varchar(255), country varchar(255), loggedAt timestamp DEFAULT CURRENT_TIMESTAMP);

    $sql = "INSERT INTO analytics(id, ua, city, region, country) VALUES('$id', '$ua', '$city', '$region', '$country')";

    mysqli_query($con, $sql);

?>