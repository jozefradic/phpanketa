<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['terms']) && $_POST['terms'] == 'on' && isset($_POST['radio'])) 
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

$con = mysqli_connect("localhost:3306","root","","voting");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    $result = mysqli_query($con, "SELECT * FROM voting");
    
    while($row = mysqli_fetch_array($result))
    {        
        $point = array("label" => $row['name'] , "y" => $row['vote']);
        // echo ($row['name']);
        echo "<div><span>".($row['name'])."</span><div class='jazyk' style='width:".($row['vote'])."%;height:10px;background:black; display:inline-block; border-radius:5px'></div> ".($row['vote'])."
         </div></div>";
    
    }
    }

?>
        </body>
</html>