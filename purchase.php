<?php
session_start();
$conn = mysqli_connect("localhost","root","","collectorders");

//check connection of $conn
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
else
{
    //echo "Connection successful to database";
    //echo "<br>";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    if(isset($_POST['purchase']))
    {
        
        $sql = "INSERT INTO orders (`name`, `surname`, `email`) VALUES ('$_POST[name]','$_POST[surname]','$_POST[email]')";
        
        if(mysqli_query($conn,$sql))
         {
            echo "Order placed successfully";
         }
        else
        {
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
        
     }
        
}

?>