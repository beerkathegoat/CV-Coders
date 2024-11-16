<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hotelnirvana";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //gets data from the payments pop-up in index.html and inserts it into variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $room_class = $_POST['room_class'];   
    $card_number = $_POST['card_number'];
    $expiry_month = $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];
    $cvv = $_POST['cvv'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    //transfers the data of the variables(payments data from index.html) into database
    $sql = "INSERT INTO payments (name, phone, address, room_class, card_number, expiry_month, expiry_year, cvv, check_in_date, check_out_date)
    VALUES ('$name', '$phone', '$address', '$room_class', '$card_number', '$expiry_month', '$expiry_year', '$cvv', '$check_in_date', '$check_out_date')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>alert('Booking complete');</script>";
        //if the querry is run succesfull then, the success message is shown

        echo "<script>window.setTimeout(function(){ window.location.href = 'index.html'; }, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //if the querry didn't run succesfull then, the error message is shown
    }
?>