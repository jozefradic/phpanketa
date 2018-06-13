<?php
$game = $_POST['radio'];
if($_POST['terms'] == 'accept'&& isset($_POST['radio'])) 
{
$vklad="UPDATE voting SET vote = vote + 1 WHERE name = '$game'";
$conn = mysqli_connect("localhost:3306","root","","voting");
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
    }
    echo "Vote successfully accepted! Thank you.";
    if ($conn->query($vklad) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    echo("Please accept terms before vote");
}
?>