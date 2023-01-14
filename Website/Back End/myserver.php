<?php
$manufacturer = $_POST["manufacturer"];
$model = $_POST["model"];
$address = $_POST["address"];    
$email = $_POST["email"];    
$number = $_POST["number"];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "buy";

$connection = new mysqli($server_name, $user_name, $password, $database_name);
$query1 = "insert into purchase (manufacturer, model, address, email, number) values('$manufacturer', '$model', '$address', '$email', '$number')";
mysqli_query($connection, $query1);

$query2 = "select * from purchase";
$list = mysqli_query($connection, $query2);

echo "<table border = '1'>";
echo "<tr><td>Manufacturer</td><td>Model</td><td>Address</td><td>Email</td><td>Number</td></tr>";

while ($row = mysqli_fetch_array($list)){
    echo "<tr><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['address']."</td><td>".$row['email']."</td><td>".$row['number']."</td></tr>";
}

$connection -> close();
echo "Sucessfuly added";
?>