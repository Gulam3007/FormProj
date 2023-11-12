
<?php include("connection.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="./form.js" type="text/javascript"></script>

   
</head>
<body class="container-fluid">
    <div class="main-container">
        <form action="#" method="POST">
            <h2 id="heading" class="text-center">Register Form</h2>
            <div class="name mt-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="lblText">
            </div>
            <div class="email mt-3">
                <label class="form-label">Email</label>
                <input onkeyup="validateEmail()" type="text" name="emailId" class="form-control" id="lblEmail">
                <p id="msgEmail"></p>
            </div>
            <div class="age mt-3">
                <label class="form-label">Age</label>
                <input onkeyup="ageInsert()" type="number" name="age" class="form-control" id="lblAge">
                <p id="msgAge"></p>
            </div>
            <div class="dob mt-3">
                <label class="form-label">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" id="lblDob">
            </div>
            <div class="submit mt-3">
                <input onclick="submitClick()" type="submit" value="Register" name="register"  id="btnSubmit" class="btn btn-success w-100 mt-4">
            </div>
            <div>
                <a href="display.php">Show Table
            </div>
        </form>
    </div>
</body>
</html>


<?php 
     if($_POST['register']){
        $name      = $_POST['name'];
        $emailId   = $_POST['emailId'];
        $age       = $_POST['age'];
        $dob       = $_POST['dob'];

        $query = "INSERT INTO form (name, email, age, dob) VALUES('$name', '$emailId','$age','$dob')";
        $data = mysqli_query($conn, $query);

        if($data){
            echo "Data Inserted into DataBase";
        } 
        else{
            echo "Failed";
        }
     }
?>