<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$disease = $_POST['disease'];
$dateadd = $_POST['dateadd'];
$daterelease = $_POST['daterelease'];
$assdoctor = $_POST['assdoctor'];


$conn = new mysqli('localhost','root','','patient');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into listpatient (name, mobile, gender, age, disease, dateadd, daterelease, assdoctor) values(?,?,?,?,?,?,?,?);");

    $stmt->bind_param("sisissss",$name, $mobile, $gender, $age, $disease, $dateadd, $daterelease, $assdoctor);
    $execval = $stmt->execute();
    echo "Successfully Registered...";
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
    <title>Patient Form</title> 
    <link rel="stylesheet" href="../CssFile/patientform.css"> 
</head> 
<body> 
    <div > 
    <a href="index.php" style="text-decoration: none;">
    <h1 style="text-align: center;color: rgb(17, 1, 233); text-decoration: underline; padding:5px"> WELCOME TO BSMARTS MEDICAL HOSPITAL </h1></a> 
        <fieldset id="mid"> 
            <legend>Patient Information</legend> 
            <form action="" method="post"> 
               <p>Name:<input type="text" name="name" id="name" placeholder=" Enter Patient's Name" required></p>   
            <p>Mobile Number: <input type="mobile" name="mobile" id="mobile" placeholder="Enter Mobile Number" required></p>  
               
                <p>Sex:&nbsp;Male<input type="radio" name="gender" id="gender"> 
                    Female<input type="radio" name="gender" id="gender"> 
                    Others<input type="radio" name="gender" id="gender"></p> 
                    <p>Age: <input type="number" name="age" id="Age" placeholder="Enter Patient's Age"></p> 
                   <p>   Disease:<input type="text" name="disease" id="disease" placeholder="Name of Disease" required></p> 
                   <p>Date of Admission: <input type="date" name="dateadd" id="DOA" placeholder="" required></p> 
                   <p>Date of Release: <input type="date" name="daterelease" id="DOR" placeholder="" required></p> 
                   <p>Assigned Doctor: <input type="text" name="assdoctor" id="doctor" placeholder="Enter of Doctor's Name" required></p> 
                   <div id="butt"> 
         
         <input type="submit" id="submit" />
         <button id="reset">Reset</button> 
     </div> 
                </form> 
          
 
        </fieldset> 
    </div> 
   
</body> 
</html>