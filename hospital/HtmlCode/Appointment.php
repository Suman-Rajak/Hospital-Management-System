<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$doa = $_POST['doa'];
$assdoc = $_POST['assdoc'];


$conn = new mysqli('localhost','root','','patient');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into appointment (name, mobile, gender, age, doa, assdoc) values(?,?,?,?,?,?);");

    $stmt->bind_param("sisiss",$name, $mobile, $gender, $age, $doa, $assdoc);
    $execval = $stmt->execute();
    echo "Appointment Booking Successfull...";
    $stmt->close();
    $conn->close();
}
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Appointment Page</title> 
    <link rel="stylesheet" href="../CssFile/appoinment.css"> 
 
</head> 
<body> 
   <div> <h1 style="text-align: center; color: blueviolet;"><a href="index.php" style="text-decoration: none;">BSMARTS MEDICAL HOSPITAL</a></h1></div> 
     <fieldset id="mid"> 
            <legend style="text-align: center; border-radius: 10px;">Appointment From</legend> 
            <form action="" method="post"> 
                <h1 style="text-align: center;">Book An Appointment</h1> 
                <h3 style="text-align: center;">Please Fill Out The From Below To Make Appointment</h3> 
               <p><input type="text" name="name" id="name" placeholder="Enter Your Name" required></p>   
            <p><input type="mobile" name="mobile" id="mobile" placeholder="Enter Mobile Number" style="width: 98%;" required></p>  
               
                <p>Sex:&nbsp;Male<input type="radio" name="gender" id="gender" value="male"> 
                    Female<input type="radio" name="gender" id="gender" value="female"> 
                    Others<input type="radio" name="gender" id="gender" value="others"></p> 
                    <p><input type="number" name="age" id="Age" placeholder="Enter Patient's Age"></p> 
                   <p>Date of Admission: <input type="date" name="doa" id="doa" placeholder="" required></p> 
                   <p><input type="text" name="assdoc" id="assdoc" placeholder="Enter of Doctor's Name" style="width: 98%;" required></p> 
                   <div id="butt"> 
         
                    <input type="submit" name="submit" id="submit"> 
                    <button id="reset">Reset</button> 
                </div> 
                </form> 
</body> 
</html>