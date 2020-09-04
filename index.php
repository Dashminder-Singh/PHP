<?php
$insert=false;
if(isset($_POST['name'])){
    //Set connection variable
    $server="localhost";
    $username="root";
    $password="";

    // Create database connection
    $con=mysqli_connect($server,$username,$password);

    // Check for cconnection success
    if(!$con){
        die("Connection to this db failed due to ".mysqli_connect_error());
    }
    //echo "Success connecting to the database";

    // Collect post variables
    $name  = $_POST['name'];
    $gender= $_POST['gender'];
    $age   = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    // Query insert into the trip table from trip db
    $sql=" INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // Check sql query is working or not ->  //echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        //echo "Successfully inserted";

        // Flag used for successful insertion
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the db connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="college">
    <div class="container">
        <h1>Welcome to GNDU(R.C), Jalandhar US Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        
        <?php
        if($insert==true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip </p>";
        }
        ?>


        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone No.">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
</body>

</html>