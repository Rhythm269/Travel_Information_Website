<?php
$insert = false;
$not_insert= false;
if (isset($_POST['name'])){ // this line means if anyone enters the name and submit only then the entire query will get executed
   
   // connection variables
   $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    $con = mysqli_connect($server, $username, $password,$database); //connection to database (returns true/false)

    if(!$con){//if connection failed
       die("connection to this database failed due to " . mysqli_connect_error()); //reason for faliure
    }
   //  else{
   //     echo 'success';
   //  }
   
   // post variables
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];

   $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
   ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

   //echo $sql;


   // query execution
   if(mysqli_query($con, $sql)){ 
      // echo "Successfully inserted";

      // flag for successful execution
      $insert=TRUE; 
   }
   else{
      //$con -> error means accessing the error key of $con
      // echo "Error: $sql <br> $con -> error"; //->object operator
      echo "Error: $sql <br>" . mysqli_error($con);
      $not_insert=true;
   }

   // $con->close();
   mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Belanosima:wght@700&family=Roboto:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg.jpg" class="bg" alt="The SCINDIA SCHOOL">
    <div class="container">
        <h2> The Scindia School Australia Travel Form</h2><br>
        <p>Please enter your details and submit the form to confirm your participation in the trip.</p>
         <?php
            if($insert == true)
            echo "<p class='success'>Thank You. Your form has been submitted.</p>";

            if ($not_insert == true)
            echo "Error Submitting Form.";
         ?>
        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter your name.">
            <input type="text" name="age" id="age" placeholder="Enter your age.">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender.">
            <input type="email" name="email" id="email" placeholder="Enter your email.">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number.">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here."></textarea>

            <button class="btn" type="submit">Submit</button>

        </form>
        
    </div>
    <script src="index.js"></script>
    
</body>
</html>
